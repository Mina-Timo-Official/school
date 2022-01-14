<?php

namespace App\Console\Commands;

use App\Events\orderNumberEvent;
use Illuminate\Console\Command;
use App\Events\oredrNumber;

class assignOrderNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assign:order {orderNumber}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $orderNumber = $this->argument('orderNumber');

        event(new orderNumberEvent($orderNumber));

        echo "mina".$orderNumber;
        return $orderNumber;
    }
}
