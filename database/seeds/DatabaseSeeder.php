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
        $m->code = "black_rose";
        // $m->video = "https://www.youtube.com/watch?v=TW-7qHhuroM";
        $m->save();

        $m = new Modelo;
        $m->personaje = "Goku Black";
        $m->variacion = "Base";
        $m->code = "black_base";
        $m->save();

        $m = new Modelo;
        $m->personaje = "Vegeta";

        $m->variacion = "Saiyan Armor";
        $m->code = "vegeta_android";
        $m->save();

        $m = new Modelo;
        $m->personaje = "Gohan";
        $m->variacion = "Super Saiyan 2";
        $m->code = "gohan_2";
        $m->save();

        $m = new Modelo;
        $m->personaje = "Trunks";
        $m->variacion = "Saiyan Armor";
        $m->code = "trunks_saiyan";
        $m->status = 'soon';
        $m->save();


        $m = new Modelo;
        $m->personaje = "Goku";
        $m->variacion = "Ultra Instinct";
        $m->code = "goku_ultra";
        $m->save();

          $m = new Modelo;
        $m->personaje = "Broly";
        $m->variacion = "Legendary Super Saiyan";
        $m->code = "broly_legend";
        $m->status = 'soon';
        $m->save();

          $m = new Modelo;
        $m->personaje = "Cooler";
        $m->variacion = "Base";
        $m->code = "cooler_base";
        $m->status = 'soon';
        $m->save();
          $m = new Modelo;
        $m->personaje = "Cooler";
        $m->variacion = "Final Form";
        $m->code = "cooler_final";
        $m->status = 'soon';
        $m->save();
          $m = new Modelo;
        $m->personaje = "Goku";
        $m->variacion = "Saiyan Saga";
        $m->code = "goku_saiyan";
        $m->status = 'soon';
        $m->save();
          $m = new Modelo;
        $m->personaje = "Hit";
        $m->variacion = "_";
        $m->code = "hit";
        $m->status = 'soon';
        $m->save();
    }
}
