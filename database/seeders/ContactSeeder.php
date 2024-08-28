<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'phone_number' => 'Ahmad Jeaenal',
            'email' => 'admin@gmail.com',
            'location' => 'Bandung',
            'created_at' => Now(),
            'updated_at' => Now(),
        ]);
    }
}
