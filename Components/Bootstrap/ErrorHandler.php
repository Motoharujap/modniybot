<?php
namespace Components\Bootstrap;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class ErrorHandler
{
    /**
     * @var Logger
     */
    private static $logger;

    /**
     * @var bool
     */
    private static $bootstrapped = false;

    public static function bootstrap()
    {
        if(!self::$bootstrapped) {
            self::$logger = new Logger('error_log');
            self::$logger->pushHandler(new StreamHandler(STORAGE_PATH . '/log/exception.log', Logger::WARNING));
            self::$logger->pushHandler(new StreamHandler(STORAGE_PATH . '/log/error.log', Logger::ERROR));
            self::$logger->pushHandler(new StreamHandler(STORAGE_PATH . '/log/shutdown.log', Logger::CRITICAL));

            error_reporting(-1);

            set_error_handler([self::class, 'handleError']);

            set_exception_handler([self::class, 'handleException']);

            register_shutdown_function([self::class, 'handleShutdown']);

            self::$bootstrapped = true;
        }
    }

    public static function handleError($level, $message, $file = '', $line = 0, $context = [])
    {
        self::$logger->addError($message, $context);
    }

    public static function handleException($e)
    {
        self::$logger->addWarning($e->getMessage());
    }

    public static function handleShutdown()
    {
        if (! is_null($error = error_get_last()) && self::isFatal($error['type'])) {
            self::$logger->addCritical($error['message']);
        }
    }

    protected static function isFatal($type)
    {
        return in_array($type, [E_ERROR, E_CORE_ERROR, E_COMPILE_ERROR, E_PARSE]);
    }
}