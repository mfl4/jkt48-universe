<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'password',
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@example.com',
            'password' => 'password',
        ]);

        Member::create([
            'name' => 'Freya Jayawardana',
            'nickname' => 'Freya',
            'jikoshoukai' => 'Gadis koleris yang suka berimajinasi, terangi harimu dengan senyum karamelku. Halo, aku Freya!',
            'generation' => 7,
            'status' => 'Member',
            'birthday' => '2006-02-13',
        ]);

        Member::create([
            'name' => 'Gita Sekar Andarini',
            'nickname' => 'Gita',
            'jikoshoukai' => 'Diam bukan berarti tidak memperhatikanmu, aku Gita!',
            'generation' => 6,
            'status' => 'Member',
            'birthday' => '2001-06-30',
        ]);

        Member::create([
            'name' => 'Michelle Alexandra',
            'nickname' => 'Michie',
            'jikoshoukai' => 'Always your number one till the infinity and beyond, hello everyone it\'s Michie!',
            'generation' => 11,
            'status' => 'Trainee',
            'birthday' => '2009-04-22',
        ]);

        Member::create([
            'name' => 'Gabriela Abigail',
            'nickname' => 'Ella',
            'jikoshoukai' => 'Ohayo! Konnichiwa! Oyasumi! Aku ingin ada di setiap harimu. Hai, Aku Ella!',
            'generation' => 10,
            'status' => 'Member',
            'birthday' => '2006-08-07',
        ]);
    }
}
