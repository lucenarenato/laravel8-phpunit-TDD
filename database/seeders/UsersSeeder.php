<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = User::all()->count();

        if ($count == 0) {
            echo 'create user';
            
            $user = User::create([
                'name' => 'Renato',
                'email' => 'cpdrenato@gmail.com',
                'password' => bcrypt('teste123'), //'password' => bcrypt(Str::random(15)),
            ]);
        } else {
            echo "Qtde: " . $count . " Records Inside Database!";
        }

        
    }

}
// php artisan db:seed --class=UsersSeeder