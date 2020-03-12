<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function get_menu()
{
  $CI->load->model('menu/M_menu');
  $listmenu = $this->M_menu->menu();

  foreach($listmenu as $item){
    $menus[] = array(
      'id_menu'     => $id_menu,
      'menu'        => $menu,
      'kode_menu'   => $kode_menu,
      'status'      => $status_menu
    );
  }
  return $menus;
}
