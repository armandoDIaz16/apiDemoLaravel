<?php

use Illuminate\Database\Seeder;

class poblandopruebasql extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <40; $i++) { 
            DB::table('pruebasql')->insert(array(
                'description'=> 'esta es la description'.$i
            ));
        }
        $this->command->info('Se ejecuto correctamente');
    }
}
