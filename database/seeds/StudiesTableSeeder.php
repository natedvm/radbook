<?php

use Illuminate\Database\Seeder;

class StudiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $study = new \App\Study([
            'patient_id' => 1,
            'doctor_assigned' => 'Miller',
            'notes' =>'some notes',
            'interpretation' => 'an interpretation',
            'conclusion' => 'my conclusion'
        ]);
        $study->save();
        $study = new \App\Study([
            'patient_id' => 1,
            'notes' =>'some notes',
            'interpretation' => 'an interpretation',
            'conclusion' => 'my conclusion'
        ]);
        $study->save();
        $study = new \App\Study([
            'patient_id' => 2,
            'notes' =>'some notes for another patient',
            'interpretation' => 'an interpretation',
            'conclusion' => 'my conclusion'
        ]);
        $study->save();
    }
}
