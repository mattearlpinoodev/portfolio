<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert ([
            [ 
      
        'name' => 'Matt Earl Pino',
        'email' => 'mattearlpino@gmail.com',
        'password' => Hash::make('12345678'),
        'role' => 'admin',
        
            ],
            [ 
      
                'name' => 'James Alingasa',
                'email' => 'jamesalingasa@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'spectator',
                
                    ]
            ]);
            
            DB::table('abouts')->insert ([
                [ 
          
            'birthday' => 'January 20, 2002',
            'religion' => 'Roman Catholic',
            'degree' => 'Bachelor of Science Information Technogloy',
            'city' => 'Hilongos City',
            'age' => '17',
            'phone_number' => '0912345678',
            'email' => 'mattearlpino@gmail.com',
            'gender' => 'male',
            
                ]
                ]);
    }
    
}
