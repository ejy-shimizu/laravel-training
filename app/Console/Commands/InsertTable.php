<?php

namespace App\Console\Commands;

use App\Models\Test;
use Illuminate\Console\Command;

class InsertTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $test = Test::create(['name' => $this->argument('name')]);
        $this->line('saved! name:'.$test->name);
    }
}
