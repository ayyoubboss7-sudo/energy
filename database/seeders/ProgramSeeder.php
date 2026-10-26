<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        $programs = [
            [
                'name' => 'Programme de rénovation énergétique',
                'slug' => 'programme-renovation-energetique',
                'description' => 'Programme de démonstration pour présenter les aides liées à la rénovation énergétique.',
                'province' => 'Québec',
                'renovation_type' => 'renovation_energetique',
                'amount_info' => 'Montant à vérifier auprès de la source officielle.',
                'eligibility' => 'Conditions à vérifier auprès de la source officielle.',
                'official_url' => 'https://www.quebec.ca/',
                'status' => 'to_verify',
                'last_verified_at' => null,
            ],
            [
                'name' => 'Aide à l’isolation résidentielle',
                'slug' => 'aide-isolation-residentielle',
                'description' => 'Programme de démonstration concernant l’amélioration de l’isolation des logements.',
                'province' => 'Québec',
                'renovation_type' => 'isolation',
                'amount_info' => 'Montant à vérifier auprès de la source officielle.',
                'eligibility' => 'Conditions à vérifier auprès de la source officielle.',
                'official_url' => 'https://www.quebec.ca/',
                'status' => 'to_verify',
                'last_verified_at' => null,
            ],
            [
                'name' => 'Aide pour thermopompe',
                'slug' => 'aide-thermopompe',
                'description' => 'Programme de démonstration concernant les systèmes de chauffage et les thermopompes.',
                'province' => 'Québec',
                'renovation_type' => 'thermopompe',
                'amount_info' => 'Montant à vérifier auprès de la source officielle.',
                'eligibility' => 'Conditions à vérifier auprès de la source officielle.',
                'official_url' => 'https://www.quebec.ca/',
                'status' => 'to_verify',
                'last_verified_at' => null,
            ],
        ];

        foreach ($programs as $program) {
            Program::updateOrCreate(
                ['slug' => $program['slug']],
                $program
            );
        }
    }
}
