<?php namespace App\Database\Migrations;

class BarangAlter extends \CodeIgniter\Database\Migration {

	public function up()
	{
		$fields = [
			'size'=>[
				'type'=>'TEXT'
			],
		];

		$this->forge->addColumn('barang', $fields);
		
	}
	public function down()
	{
		$this->forge->dropColumn('barang', ['size']);
	}
}