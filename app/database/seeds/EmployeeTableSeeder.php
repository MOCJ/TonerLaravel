<?php
class EmployeeTableSeeder extends Seeder {
    public function run(){
		Employee::create(array(
            'nombres'  => 'Milagros',
            'apellidos'     => 'Mamani',
            'dni'     => '00457661',
            'cargo'     => '1',
            'telefono'     => '952636301',
            'office_id'     => '1',

            

        ));


 }
}

       
