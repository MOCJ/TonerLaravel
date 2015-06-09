<?php
class EmployeesTableSeeder extends Seeder {
    public function run(){
		Employees::create(array(
            'nombres'  => 'Milagros',
            'apellidos'     => 'Mamani',
            'dni'     => '',
            'cargo'     => '1',
            'telefono'     => '1',
        ));

        Employees::create(array(
            'PK_Curso'  => 'OF-02-WOR',
            'CurNombre'     => 'Word',
            'CurDuracion'     => '1',
            't_modulo_id'     => '1',
            'CurOrden'     => '2',            
        ));


?>