<?php

namespace Database\Seeders;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class AdminiiiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'adminiii',
            'email' => 'adminiii@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('passworddd'),
            
        ])->assignRole('writer', 'adminiii');
    }
}
