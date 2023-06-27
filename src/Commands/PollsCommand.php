<?php

namespace AdminKit\Polls\Commands;

use Illuminate\Console\Command;

class PollsCommand extends Command
{
    public $signature = 'admin-kit-polls';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
