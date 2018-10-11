<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use App\Modelo;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::createModels();
    }

    private function createModels(){
        DB::table('modelos')->delete();
    	
        $m = new Modelo;
        $m->personaje = "Goku Black";
        $m->variacion = "Super Saiyan Rose";
        $m->code = "GB_ROSE";
        // $m->video = "https://www.youtube.com/watch?v=TW-7qHhuroM";
        $m->save();

        $m = new Modelo;
        $m->personaje = "Goku Black";
        $m->variacion = "Base";
        $m->code = "GB_BASE";
        $m->save();

        $m = new Modelo;
        $m->personaje = "Vegeta";
        $m->variacion = "Android Saga";
        $m->code = "VGT_Android";
        $m->save();

        $m = new Modelo;
        $m->personaje = "Gohan";
        $m->variacion = "Super Saiyan 2";
        $m->code = "GHN_SSJ2";
        $m->save();

        $m = new Modelo;
        $m->personaje = "Trunks";
        $m->variacion = "Saiyan Armor";
        $m->code = "TKS_Saiyan";
        $m->save();

        
        $m = new Modelo;
        $m->personaje = "Goku";
        $m->variacion = "Ultra Instinct";
        $m->code = "goku_ultra";
        $m->save();
    }
}
