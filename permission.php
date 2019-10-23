<?php
  include "koneksi.php";

  //Cek variabel user dan pass
  if (empty($_SESSION["username"])){
    echo "
    <script>
      alert('Silahkan Login Terlebih Dahulu');
      window.location.href = 'login.php';
    </script>
    ";
  }else{
    $page = basename($_SERVER['PHP_SELF']);
    $quer = "select count(*) as hasil from tb_permission where username = '".$_SESSION["username"]."' and pagename = '".$page."'";
    $sql_execute = sqlsrv_query($conn,$quer);
    $rs = sqlsrv_fetch_array($sql_execute, SQLSRV_FETCH_ASSOC);
    if($rs["hasil"] == 0)
    {
      echo '<script>
      alert("Anda tidak berhak membuka halaman ini");
      window.location="index.php";
      </script>';
    }
  }

  $username = $_SESSION["username"];

?>
