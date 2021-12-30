<?php

namespace Anam\Adminlte\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CopyAssets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminlte:assets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Copy assets from almasaeed2010/adminlte';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $vendorAssetPaths = [
            "vendor/almasaeed2010/adminlte/dist" => "public/admin-assets",
            "vendor/almasaeed2010/adminlte/plugins" => "public/admin-assets/plugins",
        ];

        foreach ($vendorAssetPaths as $source => $destination) {
            if (File::exists($source)) {
                File::copyDirectory($source, $destination);
                $this->info("$destination file copied successfully");
            } else {
                $this->error("Whoops! Something wen wrong with adminlte package");
            }
        }

        return 0;
    }
}
