<?php
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {
    public function run(){
		User::create(array(
            'usuario'  => 'mocj',
            'contrasena'     => Hash::make('123456'),
            
    ));

    
 }
 }   
