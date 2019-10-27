<?php

use Illuminate\Database\Seeder;

class LyricsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	//Insert 500 rows to database.lyrics for data testing
        factory(App\Lyric::class, 500)->create();
    }
}
