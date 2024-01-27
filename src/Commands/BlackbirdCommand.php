<?php

namespace Building13\Blackbird\Commands;

use Illuminate\Console\Command;

class BlackbirdCommand extends Command
{
    public $signature = 'laravel-blackbird-ui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
