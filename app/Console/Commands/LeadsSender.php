<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Modules\Category\Constants\CategoryStatus;
use Modules\Category\Models\Category;
use Symfony\Component\Console\Output\ConsoleOutput;

class CategoriesSender extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'categories:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send all Pending categories then mark them as sent.';

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
     */
    public function handle()
    {
        $out = new ConsoleOutput();

        $categories = Category::query()->where('sent', CategoryStatus::DISABLED)->limit(10)->get();
        if (!$categories->count()) {
            $out->writeln("All pending categories are sent.");
        }

        /** @var Category $lead */
        foreach ($categories as $lead){
            $out->writeln('Found a Pending Category #'.$lead->id);


            try {
                $lead->send();
                $lead->sent = CategoryStatus::ACTIVE;
                $out->writeln('Sent Category #'.$lead->id);


            } catch (Exception $exception) {
                $lead->sent = CategoryStatus::ERROR;
                $out->writeln('Error while Sending Category #'.$lead->id);
            }

            $lead->save();

        }
    }
}
