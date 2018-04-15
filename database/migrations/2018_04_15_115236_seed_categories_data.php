<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $categories =[
        [
            'name' => 'Sharing',
            'description' => 'Share creation, Share finding',
        ],
        [
            'name' => 'Tutorials',
            'description' => 'Development Skils and recommendations',
        ],
        [
            'name' => 'Tutorials',
            'description' => 'Development Skils and recommendations',
        ],
        [
            'name' => 'Questions',
            'description' => 'Ask what you need',
        ],

        [
            'name' => 'Notes',
            'description' => 'Website Notes',
        ],
      ];
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      DB::table('categories')->truncate();
    }
}
