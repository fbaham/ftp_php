<?php
require 'admin/config.php';
require 'functions.php';

$descargado = '';

if(isset($_POST['submit'])){
  //$local_file = 'archivos/' . $_POST['file_host'];
  $server_file = $_POST['año'] . $_POST['reunion'];
  $carpeta = 'archivos/PPF' . $server_file;
  try {
    if(!file_exists($carpeta)){
      mkdir($carpeta, 0777, true);
    }
    descarga_ftp($carpeta . '/datos-carreras.csv', 'DKA0:[ACTIVO.LIS]PPFC' . $server_file . '.CSV', $ftp_config)?$descargado .= "datos-carreras.csv descargado correctamente <br />":'';
    descarga_ftp($carpeta . '/datos-jinetes.csv', 'DKA0:[ACTIVO.LIS]PPFE' . $server_file . '.CSV', $ftp_config)?$descargado .= "datos-jinetes.csv descargado correctamente <br />":'';
    descarga_ftp($carpeta . '/datos-maestro.csv', 'DKA0:[ACTIVO.LIS]PPFM' . $server_file . '.CSV', $ftp_config)?$descargado .= "datos-maestro.csv descargado correctamente <br />":'';
  } catch (\Exception $e) {
    echo "$e";
  }
}

require 'views/television.view.php';
?>
