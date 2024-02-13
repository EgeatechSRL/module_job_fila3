<?php
/**
 * @see https://github.com/husam-tariq/filament-database-schedule/blob/v2.0.0/src/Console/Commands/TestJobCommand.php
 */

declare(strict_types=1);

namespace Modules\Job\Console\Commands;

use Illuminate\Console\Command;

class TestJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected string $signature = 'schedule:test-job';

    /**
     * The console command description.
     */
    protected string $description = 'Command that display a friendly message that is intented to test a job.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Hello the test worked.');
        \Log::info('Hello the test worked.');

        return 0;
    }
}
