<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::table('admin_menu')->insert([
            'parent_id' => 0,
            'order' => 8,
            'title' => 'CSS y JS Personalizado',
            'icon' => 'fa-code',
            'uri' => 'custom-code',
            'permission' => '*',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        DB::table('admin_menu')->where('uri', 'custom-code')->delete();
    }
}; 