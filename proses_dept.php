<?php
$kode_dept = $_GET['kode_dept'];
$desk_dept = $_GET['desk_dept'];
$status_dept = $_GET['status_dept'];
$simpan = $_GET['simpan'];

include "koneksi.php";
date_default_timezone_set("Asia/Bangkok");

if ($simpan == "ubah"){
	$sql = "update M_Departemen set Deskripsi = '".$desk_dept."' , Status = '".$status_dept."' where Kode = '".$kode_dept."'";
	$sql_execute = sqlsrv_query($conn,$sql);

	$sql = "select * from M_Departemen where Kode = '".$kode_dept."'";
	$sql_execute = sqlsrv_query($conn,$sql);
	$hasil = sqlsrv_fetch_array($sql_execute, SQLSRV_FETCH_ASSOC);

	echo
	"<script>
	alert('Departemen ".$hasil['Kode']." - ".$hasil['Deskripsi']." Berhasil Diubah');
	window.location.href='change_m_dept.php.php';
	</script>";

} elseif ($simpan == "baru") {
	$sql = "select * from M_Departemen where Kode = '".$kode_dept."'";
	$sql_execute = sqlsrv_query($conn, $sql, array(), array( "Scrollable" => 'static' ));
	$hitungbaris = sqlsrv_num_rows($sql_execute);

	if ($hitungbaris == 0) {
		$sql = "insert into M_Departemen values('".$kode_dept."','".$desk_dept."','".$status_dept."')";
		$sql_execute = sqlsrv_query($conn,$sql);

		$sql = "select * from M_Departemen where Kode = '".$kode_dept."'";
		$sql_execute = sqlsrv_query($conn,$sql);
		$hasil = sqlsrv_fetch_array($sql_execute, SQLSRV_FETCH_ASSOC);

		echo
		"<script>
		alert('Departemen ".$hasil['Kode']." - ".$hasil['Deskripsi']." Berhasil Ditambah');
		window.location.href='create_m_dept.php';
		</script>";
	} else {
		echo
		"<script>
		alert('Data sudah tercatat pada sistem sebelumnya.');
		window.location.href='create_m_dept.php';
		</script>";

	}
}
?>
