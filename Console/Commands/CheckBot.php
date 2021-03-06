<?php

namespace Artisan\Console\Commands;

use Illuminate\Console\Command;
use Telegram\Bot\Api;

class CheckBot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bot:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check bot her webhook status @todo';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $token = getenv('BOT_TOKEN');

        $telegram = new Api($token);
        $bot = $telegram->getMe();

        $this->info('All right');
    }
}
