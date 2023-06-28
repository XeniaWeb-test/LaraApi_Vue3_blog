<?php

declare(strict_types=1);

namespace App\Console\Command;

use Illuminate\Console\Command;

class ClearAll extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'clearall';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Очищает все кеши';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $commands = [
            'clear-compiled',
            'cache:clear',
            'config:clear',
            'event:clear',
            'optimize:clear',
            'route:clear',
            'view:clear',
            'package:discover',
        ];
        foreach ($commands as $command) {
            $this->call($command);
        }
        $this->info('Files cached successfully!');
    }
}
