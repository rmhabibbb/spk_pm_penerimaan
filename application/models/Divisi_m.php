<?php 
class Divisi_m extends MY_Model
{

  function __construct()
  {
    parent::__construct();
    $this->data['primary_key'] = 'id_divisi';
    $this->data['table_name'] = 'divisi';
  }

}

 ?>
