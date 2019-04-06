<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GameScan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scan:games';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scan all the game in one dir and add them to database';

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
        //
    }
}
