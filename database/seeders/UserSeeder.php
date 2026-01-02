<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name'     => 'Admin lpk lkp prisma one',
            'email'    => 'lpkprismaone@gmail.com',
            'password' => bcrypt('kademangan123'),
        ];

        User::create($user); // ✅ Gunakan create() agar hashed password disimpan dengan benar
    }
}
