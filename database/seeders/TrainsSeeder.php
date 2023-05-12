<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // eseguire il codice per riempire la tabella

        // da qualche parte mi memorizzo i dati che voglio salvare
        $newTrains = [
            [
                'company' => 'gabrieltek',
                'departure_station' => 'usini',
                'arrival_station' => 'roma',
                'is_on_time' => true,
                'is_cancelled' => true,
            ],
            [
                'company' => 'grimaldiLines',
                'departure_station' => 'napoli',
                'arrival_station' => 'catania',
                'is_cancelled' => false,
                'is_on_time' => false,
            ],
        ];

        // effettuo la creazione di una nuova "riga"
        // creo un modello, un'istanza del Model Train
        
        
        foreach($newTrains as $newTrain) {
            // inserisco dentro tutti i valori per le colonne che voglio compilare
            $train = new Train();

            $train->company = $newTrain['company'];
            $train->departure_station = $newTrain['departure_station'];
            $train->arrival_station = $newTrain['arrival_station'];
            $train->is_on_time = $newTrain['is_on_time'];
            $train->is_cancelled = $newTrain['is_cancelled'];
            
            // salvo la riga, è qui che la riga viene effettivamente creata
            $train->save();
        }


         
    }
}
