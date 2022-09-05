<?php

namespace helpModule\HelpModule\Commands;

use Illuminate\Console\Command;

class HelpModuleCommand extends Command
{
    public $signature = 'help-module';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
