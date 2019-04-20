<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Personal;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User with rol
        $admin = User::create([
            'name' => 'adm',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $admin->assignRole('admin');

        $admin = Personal::create([
            'name' => 'adm',
            'surname' => 'adm',
            'ci' => '123',
            'age' => '123',
            'address' => 'adm',
            'number' => '123',
            'ocupation' => 'admin',
            'user_id' => '1',
        ]);
        
        $student = User::create([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $student->assignRole('student');

        $student = Personal::create([
            'name' => 'student',
            'surname' => 'student',
            'ci' => '1234',
            'age' => '123',
            'address' => 'student',
            'number' => '123',
            'ocupation' => 'student',
            'user_id' => '2',
        ]);
        
        $teacher = User::create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $teacher->assignRole('teacher');

        $teacher = Personal::create([
            'name' => 'teacher',
            'surname' => 'teacher',
            'ci' => '1235',
            'age' => '123',
            'address' => 'teacher',
            'number' => '123',
            'ocupation' => 'teacher',
            'user_id' => '3',
        ]);

        $valeria = User::create([
            'name' => 'valeria',
            'email' => 'valeria@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        $valeria->assignRole('student');

        $valeria = Personal::create([
            'name' => 'valeria',
            'surname' => 'valeria',
            'ci' => '1236',
            'age' => '123',
            'address' => 'valeria',
            'number' => '123',
            'ocupation' => 'student',
            'user_id' => '4',
        ]);

        $lun = User::create([
            'name' => 'lun',
            'email' => 'lun@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        $lun->assignRole('student');

        $lun = Personal::create([
            'name' => 'lun',
            'surname' => 'lun',
            'ci' => '1237',
            'age' => '123',
            'address' => 'lun',
            'number' => '123',
            'ocupation' => 'student',
            'user_id' => '5',
        ]);
    }
}
