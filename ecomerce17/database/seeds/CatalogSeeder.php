<?php
/**
 * Created by PhpStorm.
 * User: Juanca
 * Date: 15/4/2017
 * Time: 4:35 PM
 */


use App\Catalog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CatalogSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('catalogs')->delete();
        Catalog::create([
            'name' => "Desde el seeder",
            'description' => "DESC Desde el seeder"
        ]);
    }
}