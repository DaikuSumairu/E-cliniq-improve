<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2023-203814',
                'grade' => 'Grade 12',
                'course' => 'STEM - IT',
                'section' => 'STEM231',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2024-038163',
                'grade' => 'Grade 11',
                'course' => 'STEM - Multi Media',
                'section' => 'STEM244',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2023-203170',
                'year' => '1st Year',
                'course' => 'STEM - SS',
                'section' => 'SS231',
            ],
            [
                'name' => 'Masha Scovgachn',
                'email' => 'mscovgachn@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2024-019274',
                'grade' => 'Grade 12',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' =>0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
