<?php
use Illuminate\Support\Facades\Hash;

class BrandTableSeeder extends Seeder {
    public function run(){
		Brand::create(array(
            'descripcion'  => 'Toshiba',
          
    ));

 

    
 }
 }   


