<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Member;
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
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Member::create([
            'photo' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
            'name' => 'Freya Jayawardana',
            'nickname' => 'Freya',
            'jikoshoukai' => 'Gadis koleris yang suka berimajinasi, terangi harimu dengan senyum karamelku. Halo, aku Freya!',
            'generation' => 7,
            'status' => 'Member',
            'date_of_birth' => '2006-02-13',
            'zodiac' => 'Aquarius',
            'blood_type' => 'B',
            'height' => 154,
        ]);

        Member::create([
            'photo' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
            'name' => 'Gita Sekar Andarini',
            'nickname' => 'Gita',
            'jikoshoukai' => 'Diam bukan berarti tidak memperhatikanmu, aku Gita!',
            'generation' => 6,
            'status' => 'Member',
            'date_of_birth' => '2001-06-30',
            'zodiac' => 'Cancer',
            'blood_type' => 'O',
            'height' => 165,
        ]);

        Member::create([
            'photo' => 'https://jkt48.com/profile/michelle_alexandra.jpg?v=20231212',
            'name' => 'Michelle Alexandra',
            'nickname' => 'Michie',
            'jikoshoukai' => 'Always your number one till the infinity and beyond, hello everyone it\'s Michie!',
            'generation' => 11,
            'status' => 'Trainee',
            'date_of_birth' => '2009-04-22',
            'zodiac' => 'Taurus',
            'blood_type' => 'O',
            'height' => 160,
        ]);

        Member::create([
            'photo' => 'https://jkt48.com/profile/alexandra_michelle.jpg?v=20231212',
            'name' => 'Gabriela Abigail',
            'nickname' => 'Ella',
            'jikoshoukai' => 'Ohayo! Konnichiwa! Oyasumi! Aku ingin ada di setiap harimu. Hai, Aku Ella!',
            'generation' => 10,
            'status' => 'Member',
            'date_of_birth' => '2006-08-07',
            'zodiac' => 'Leo',
            'blood_type' => 'B',
            'height' => 160,
        ]);
    }
}
