<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->truncate();
        $admins = [];
        $faker  = Faker::create();
        foreach(range(1, 5) as $index)
        {
            $admins[] = [
                'name' => $faker->name,
                'phone' =>$faker->unique->phoneNumber,
                'email' => $faker->unique->safeEmail,
                'email_verified_at' => now(),
                'password'=>Hash::make('sa243FA243%&@'),
                'remember_token'=>Str::random(10),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ];
        }

        \DB::table('admins')->insert($admins);
    }
}
