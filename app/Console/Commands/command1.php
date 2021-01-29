<?php

namespace App\Console\Commands;

use App\File;
use App\Movie;
use Illuminate\Console\Command;
use nSolutions\Filmweb;

class command1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gox';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        foreach (File::all() as $file)
        {
            $filmweb = Filmweb::instance();
            $filmweb_movie = $filmweb->getFilmInfoFull($file->fb_id)->execute();
          Movie::create(['title'=>$filmweb_movie->title,'poster'=>$filmweb_movie->imagePath,'original_title'=>$filmweb_movie->originalTitle,'year'=>$filmweb_movie->year,'fb_id'=>$file->fb_id]);
        }
    }
}
