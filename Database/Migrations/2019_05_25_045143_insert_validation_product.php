<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Portal\Entities\Validation;

class InsertValidationProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Validation::create([
            'alias' => 'produtos',
            'module_name' => 'ValidationProduct',
            'module_alias' => 'validationproduct',
            'video' => 'https://www.youtube.com/embed/zpOULjyy-n8?rel=0',
            'file' => 'produtos.xlsx',
            'validation' => 'products', 
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Validation::where('module_name', 'ValidationProduct')->first()->delete();
    }
}
