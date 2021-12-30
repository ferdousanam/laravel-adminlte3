<?php

namespace Anam\Adminlte\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CopyLayouts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminlte:layouts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Copy layouts from ferdousanam/adminlte3 to resources/views/admin';

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
        $source = "vendor/ferdousanam/adminlte3/src/views/layouts";
        $destination = "resources/views/admin/layouts";

        if (!File::exists($destination)) {
            File::copyDirectory($source, $destination);
            $this->info("$destination file copied successfully");
        } else {
            $this->error("Whoops! $destination file or directory already exists");
        }

        return 0;
    }
}
