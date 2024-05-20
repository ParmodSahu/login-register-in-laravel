<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\RandomPersonData;

class GenerateData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:person {count=1 : The number of persons to generate}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a specified number of random person';

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
     * @return int
     */
    public function handle()
    {
        $count = $this->argument('count');
        RandomPersonData::factory($count)->create();

        $this->info("Successfully generated {$count} posts.");
        
    }
}
