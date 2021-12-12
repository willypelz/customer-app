<?php

namespace App\Console\Commands;

use App\Models\Customer;
use Illuminate\Console\Command;

class ImportCustomers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:import:customers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'import customers from csv files';

    protected $cmd;

    /**
     * Create a new command instance.
     *
     * @param ParentCommand $parentCommand
     */
    public function __construct(ParentCommand $parentCommand)
    {
        parent::__construct();
        $this->cmd = $parentCommand;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $file = base_path("resources/assets/csv/customers.csv");
        $this->cmd->outputStyle->info("loading customers data for import...");

        $data = array_map('str_getcsv', file($file));
        $csv_data = array_slice($data, 1, count($data));
        $this->cmd->outputStyle->progressStart(count($csv_data));

        $locations = [
            [
                "location" => [
                    "lat" => 37.421875199999995,
                    "lng" => -122.0851173
                ],
                "accuracy" => 120
            ]
        ];
        foreach ($csv_data as $row) {
            $locationIndex = 0;
            Customer::updateOrCreate([
                'id' => $row[0],
                'first_name' => $row[1],
                'last_name' => $row[2],
                'email' => $row[3],
                'gender' => $row[4],
                'company' => $row[5],
                'city' => $row[6],
                'title' => $row[7],
                'longitude' => $locations[$locationIndex]['location']['lng'],
                'latitude' => $locations[$locationIndex]['location']['lat']
            ]);
            $this->cmd->outputStyle->progressAdvance();
        }
        $this->cmd->outputStyle->progressFinish();
        $this->cmd->outputStyle->success("Hurray!! customers data imported successfully");
        return Command::SUCCESS;
    }
}
