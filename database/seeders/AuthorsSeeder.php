<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = Author::all()->count();

        if ($count == 0) {
            echo 'create Author';
            
            $user = Author::create([
                'name' => 'Renato',
                'dob' => '2021-03-24 17:05:58'
            ]);
        } else {
            echo "Qtde: " . $count . " Records Inside Database!";
        }

        
    }

}
