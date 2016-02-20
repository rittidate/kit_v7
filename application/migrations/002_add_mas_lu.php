<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_mas_lu extends CI_Migration {
	public function up()
	{
		$this->dbforge->drop_table('mas_lu', TRUE);

		// Table structure for table 'login_attempts'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'ParentId' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'null' => TRUE
			),
			'LUType' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'null' => FALSE
			),
			'RowNo' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'null' => TRUE
			),
			'LUCode' => array(
				'type' => 'VARCHAR',
				'constraint' => '10',
				'null' => TRUE
			),
			'TLUName' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => TRUE
			),
			'TFullName' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE
			),
			'ELUName' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => TRUE
			),
			'EFullName' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE
			),
			'SystemId' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'null' => TRUE
			),
			'SubType' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'null' => TRUE
			),
			'ADecimal1' => array(
				'type' => 'DECIMAL',
				'constraint' => '15,4',
				'null' => TRUE
			),
			'ADecimal2' => array(
				'type' => 'DECIMAL',
				'constraint' => '15,4',
				'null' => TRUE
			),
			'AVarchar1' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE
			),
			'AVarchar2' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE
			),
			'CreateDt' => array(
				'type' => 'DATETIME',
				'null' => FALSE
			),
			'UpdateDt' => array(
				'type' => 'DATETIME',
				'null' => FALSE
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('mas_lu');
	}
	
	public function down()
	{
		$this->dbforge->drop_table('mas_lu');
	}
}