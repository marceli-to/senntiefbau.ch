<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class Deploy extends Command
{
    protected $signature = 'deploy';

    protected $description = 'Export static site and replace local URLs with production URLs';

    public function handle()
    {
        $this->info('Running export...');
        $this->call('export');

        $this->info('Replacing URLs in dist folder...');

        $files = File::allFiles(base_path('dist'));
        $count = 0;

        foreach ($files as $file) {
            $content = $file->getContents();

            if (str_contains($content, 'https://senntiefbau.ch.test')) {
                File::put(
                    $file->getPathname(),
                    str_replace('https://senntiefbau.ch.test', 'https://senntiefbau.ch', $content)
                );
                $count++;
            }
        }

        $this->info("Replaced URLs in {$count} file(s).");
    }
}
