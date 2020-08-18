<?php

use Illuminate\Database\Seeder;

class MusicGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\MusicGroup::truncate();
        for($i=1;$i<7;$i++)
        {
            factory(\App\MusicGroup::class)->create();
        }

       $mg= \App\MusicGroup::pluck('id');
        $titl=['ir','tork','khareji'];
        $nu=random_int(0,3);
        foreach ($mg as $item)
        {
            \Illuminate\Support\Facades\DB::table('MusicGroup')
                ->insert(['ParentId'=>$item,'MusicGroupTitle'=>$titl[$nu]]);
        }
    }
}
