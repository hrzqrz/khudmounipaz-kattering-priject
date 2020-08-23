<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();
        $users = [];
        $faker = Faker::create();
        foreach(range(1, 100) as $index)
        {
            $users[] = [
                'name' => $faker->name,
                'phone' => $faker->unique->phoneNumber,
                'email' => $faker->unique->safeEmail,
                'email_verified_at' => now(),
                'password' => Hash::make('sa243Fa243%&@'),
                'remember_token' => Str::random(10),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ];
        }

        \DB::table('users')->insert($users);
    }
}
