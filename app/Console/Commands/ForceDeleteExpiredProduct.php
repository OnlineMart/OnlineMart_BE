<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Console\Command;

class ForceDeleteExpiredProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'records:force-delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Force delete records older than 30 days.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $thresholdDate = Carbon::now()->subDays(30);

        Product::where('deleted_at', '<=', $thresholdDate)->forceDelete();

        $this->info('Expired records have been force deleted.');
    }
}
