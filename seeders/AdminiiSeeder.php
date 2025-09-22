<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminiiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'adminii',
            'email' => 'adminii@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('passwordd'),
            
        ])->assignRole('writer', 'adminii');
    }
}
