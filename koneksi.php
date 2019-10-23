
<?php

    $servername     = "localhost"; //nama server\nama_ip
    $conninfo = array( "Database"=>"QA", "UID"=>"sa", "PWD"=>"w@tch9u@rd");
    $conn     = sqlsrv_connect( $servername, $conninfo);

    // if( $conn ) {
    //    echo "Koneksi berhasil.<br />";
    // }else{
    //    echo "Koneksi Gagal";
    //    die( print_r( sqlsrv_errors(), true));
    // }
?>
