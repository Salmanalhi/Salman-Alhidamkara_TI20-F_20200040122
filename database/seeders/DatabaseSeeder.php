<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
       User :: create([
        'name'=> 'bioskop',
        'email'=> 'bioskop@gmail.com',
        'password'=> Hash::make('12345')
       ]);
    }
    

}
