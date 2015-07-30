<?php
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {
    public function run(){
		User::create(array(
            'usuario'  => 'mocj',
            'password'     => Hash::make('123456'),
            
    ));

    
 }
 }   
