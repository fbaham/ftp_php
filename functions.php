<?php
  // $local_file = "hip80.lis";
  // $server_file = "DKA0:[ACTIVO.LIS]hip80.lis";

//funcion para descargar un archivo usando protocolo FTP desde un servidor remoto
function descarga_ftp($local_file, $server_file, $ftp_config){
  //abre conexion
  $ftp_conn = ftp_connect($ftp_config['ftp_server']) or die("No ha sido posible conectar con {$ftp_config['ftp_server']}");
  $login = ftp_login($ftp_conn, $ftp_config['ftp_user'], $ftp_config['ftp_pass']);
  //descarga archivo
  if (ftp_get($ftp_conn, $local_file, $server_file, FTP_ASCII))
    {
    return true;
    }
  else
    {
    return false;
    }
  //cierra conexion
  ftp_close($ftp_conn);
}
?>
