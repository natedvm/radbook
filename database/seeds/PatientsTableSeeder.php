<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = new \App\Patient([
            'dvmax_id' => '3456',
            'patient_name' => 'Joe',
            'last_name' => 'Blow',
            'date_of_birth' => '2000-1-1'
        ]);
        $patient->save();

        $patient = new \App\Patient([
            'dvmax_id' => '4567',
            'patient_name' => 'Peter',
            'last_name' => 'Rabbit',
            'date_of_birth' => '2005-4-2'
        ]);
        $patient->save();
    }
}
