<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // oggetto che rappresenta istanza di travel
        // nuova istanza
        $travel = new Travel();

            // inserisco dati compilati richiesti
            // popolo dati del mio db da compilare
            $travel->city = 'Parigi';
            $travel->address = '2 bis Cité Bergère';
            $travel->description = 'Lorem Ipsum';
            $travel->type = 'Hotel B&B';
            $travel->departure = 'Mercoledì 20 giugno';
            $travel->arrivals = 'Giovedì 21 giugno';
            $travel->price = 123456.78;
            $travel->departure_time = 0;
            $travel->arrivals_time = 0;

            //salvo dentro il db i dati aggiunti
            $travel->save();

    }
}
