<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['name' => 'baba', 'gender' => 'L', 'nis' => '0101001', 'class_id' => 1],
        //     ['name' => 'rara', 'gender' => 'P', 'nis' => '0101002', 'class_id' => 2],
        //     ['name' => 'jaja', 'gender' => 'L', 'nis' => '0101003', 'class_id' => 3],
        //     ['name' => 'lala', 'gender' => 'P', 'nis' => '0101004', 'class_id' => 4],
        // ];

        // foreach ($data as $value) {
        //     Student::insert([
        //         'name' => $value['name'],
        //         'gender' => $value['gender'],
        //         'nis' => $value['nis'],
        //         'class_id' => $value['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // }

        // Student::factory()->count(100)->create();
    }
}
