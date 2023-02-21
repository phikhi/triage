<?php

namespace Phikhi\Triage\Commands;

use Illuminate\Console\Command;

class TriageCommand extends Command
{
    public $signature = 'triage';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
