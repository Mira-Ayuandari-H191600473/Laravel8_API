<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create('id_ID');
        for($i=0;$i<=5;$i++) {
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>bcrypt('secret'),
            ]);
        }
    }
}
