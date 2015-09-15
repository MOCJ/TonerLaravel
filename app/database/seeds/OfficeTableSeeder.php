<?php
use Illuminate\Support\Facades\Hash;

class OfficeTableSeeder extends Seeder {
    public function run(){
		Office::create(array(
            'nombre'  => 'Unidad de Tecnologias',
            'ubicacion'=> 'Palacio',
            'anexo'  => '2205',
            
    ));

 

    
 }
 }   



