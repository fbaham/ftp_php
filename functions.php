<?php
//establece conexion con servidor ftp

  $local_file = "hip80.lis";
  $server_file = "DKA0:[ACTIVO.LIS]hip80.lis";

function descarga_ftp($archivo_local, $archivo_server){
  $ftp_conn = ftp_connect($ftp_config['ftp_server']) or die("Could not connect to $ftp_config['ftp_server']");
  $login = ftp_login($ftp_conn, $ftp_config['ftp_user'], $ftp_config['ftp_pass']);

  if (ftp_get($ftp_conn, $local_file, $server_file, FTP_ASCII))
    {
    echo "Successfully written to $local_file.";
    }
  else
    {
    echo "Error downloading $server_file.";
    }
  // close connection
  ftp_close($ftp_conn);
}
  // download server file

?>
