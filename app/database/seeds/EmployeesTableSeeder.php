<?php
class EmployeesTableSeeder extends Seeder {
    public function run(){
		Employees::create(array(
            'nombres'  => 'Milagros',
            'apellidos'     => 'Mamani',
            'dni'     => '00457661',
            'cargo'     => '1',
            'telefono'     => '952636301',
        ));

       
?>