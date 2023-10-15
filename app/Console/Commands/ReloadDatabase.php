<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ReloadDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reload-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reload database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('migrate:fresh');
    }
}
