<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Biodata::create([
            'nim' => 'E41221993',
            'fullname' => 'Ahmad Irsyadul Ibad',
            'study_program' => 'Teknik Informatika',
            'address' => 'Tembokrejo - Gumukmas - Jember',
            'phone' => '6288217261702',
            'birthdate' => '2002-12-02',
        ]);

        Biodata::factory(10)->create();
    }
}
