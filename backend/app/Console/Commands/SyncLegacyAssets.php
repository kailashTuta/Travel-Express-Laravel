<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class SyncLegacyAssets extends Command
{
    protected $signature = 'travel:sync-legacy-assets';
    protected $description = 'Copy the legacy public images and uploads into the backend public directory';

    public function handle(): int
    {
        $legacyRoot = base_path('../public');
        $targetRoot = public_path();

        $paths = [
            'images' => $targetRoot . '/images',
            'uploads' => $targetRoot . '/uploads',
        ];

        foreach ($paths as $sourceFolder => $targetFolder) {
            $sourcePath = $legacyRoot . '/' . $sourceFolder;
            if (!is_dir($sourcePath)) {
                $this->warn("Legacy path not found: {$sourcePath}");
                continue;
            }

            if (is_dir($targetFolder)) {
                File::deleteDirectory($targetFolder);
            }

            File::copyDirectory($sourcePath, $targetFolder);
            $this->info("Synced {$sourceFolder} -> {$targetFolder}");
        }

        return self::SUCCESS;
    }
}
