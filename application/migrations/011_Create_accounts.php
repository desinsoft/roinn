
<?php
class Migration_Create_accounts extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'idBank' => array(
        'type' => 'INT',
        'constraint' => 11
      ),
      'name' => array(
        'type' => 'VARCHAR',
        'constraint' => '150',
      ),
      'type' => array(
        'type' => 'VARCHAR',
        'constraint' => '110',
      ),
      'numberAccount' => array(
        'type' => 'INT',
        'constraint' => 30,
      ),
    ));
    $this->dbforge->add_key('id');
    $this->dbforge->create_table('accounts');
  }

  public function down()
  {
    $this->dbforge->drop_table('accounts');
  }
}
/**
select nb.url, nb.nombreNavBar, nb.idMenuSubMenu, nb.iconClass, nb.status from navbars nb
INNER join navbars_profiles nbp on nb.id = nbp.idMenu
INNER join profiles p on p.idProfile = nbp.idProfile
where p.idProfile = 1 and nb.status = 1
/