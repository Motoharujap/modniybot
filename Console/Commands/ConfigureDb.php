<?php

namespace Artisan\Console\Commands;

use Components\Helpers\DbHelper;
use Illuminate\Console\Command;

class ConfigureDb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'initDb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create base tables in sqlite base';

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
        $helper = DbHelper::getInstance();
        foreach ($this->getQueries() as $query){
            $helper->execSql($query);
        }
    }

    private function getQueries()
    {
        return [
            'CREATE TABLE IF NOT EXISTS users (
                        id   INTEGER PRIMARY KEY,
                        first_name TEXT NOT NULL,
                        last_name TEXT DEFAULT NULL,
                        username TEXT DEFAULT NULL,                     
                      )',
            'CREATE TABLE IF NOT EXISTS chats (
                        id   INTEGER PRIMARY KEY,
                        `type` VARCHAR (255) NOT NULL,
                        title TEXT DEFAULT NULL,
                        username TEXT DEFAULT NULL,
                        first_name TEXT DEFAULT NULL,
                        last_name TEXT DEFAULT NULL,          
                      )',
            'CREATE TABLE IF NOT EXISTS messages (
                        id   INTEGER PRIMARY KEY AUTO_INCREMENT,
                        message_id 
                        `type` VARCHAR (255) NOT NULL,
                        title TEXT DEFAULT NULL,
                        username TEXT DEFAULT NULL,
                        first_name TEXT DEFAULT NULL,
                        last_name TEXT DEFAULT NULL,          
                      )',
            '',
        ]; # todo
    }
}
