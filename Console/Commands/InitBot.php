<?php

namespace Artisan\Console\Commands;

use Illuminate\Console\Command;

class InitBot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bot:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bot initialisation';

    /**
     * Create a new command instance.
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
        $foo = 'bar';
    }
}
