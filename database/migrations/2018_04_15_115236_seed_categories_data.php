<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    public function up()
    {
        $categories = [
            [
                'name'        => 'Sharing',
                'description' => 'share what you found',
            ],
            [
                'name'        => 'Tutorials',
                'description' => 'Develop techniques',
            ],
            [
                'name'        => 'Q&A',
                'description' => 'Please post friendly',
            ],
            [
                'name'        => 'Announcements',
                'description' => 'Website Announcements',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    public function down()
    {
        DB::table('categories')->truncate();
    }
}