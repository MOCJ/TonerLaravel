<?php
use Illuminate\Support\Facades\Hash;

class ModelTableSeeder extends Seeder {
    public function run(){
		Model::create(array(
            'descripcion'  => 'toshi123',
            'brand_id'=>'1',
   
    ));

	
		Model::create(array(
            'descripcion'  => 'toshi456',
            'brand_id'=>'1',
   
    ));

	
		Model::create(array(
            'descripcion'  => 'bro123',
            'brand_id'=>'4',

   
    ));


	
		Model::create(array(
            'descripcion'  => 'hp123',
            'brand_id'=>'2',
   
    ));




 

    
 }
 }   



