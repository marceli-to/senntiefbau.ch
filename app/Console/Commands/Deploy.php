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
                // Keep absolute production URLs for og: meta tags
                $content = preg_replace(
                    '/(property="og:[^"]*"\s+content=")https:\/\/senntiefbau\.ch\.test/',
                    '$1https://senntiefbau.ch',
                    $content
                );

                // Make all remaining URLs relative
                $content = str_replace('https://senntiefbau.ch.test/', '/', $content);
                $content = str_replace('https://senntiefbau.ch.test', '/', $content);

                File::put($file->getPathname(), $content);
                $count++;
            }
        }

        $this->info("Replaced URLs in {$count} file(s).");
    }
}
