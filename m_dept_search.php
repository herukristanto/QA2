
<link rel="stylesheet" href="assets/datatables/dataTables.bootstrap.css"/>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:auto">
      <!-- 800px -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Lookup Mahasiswa</h4>
            </div>
            <div class="modal-body">
                <table id="lookup" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Data mentah yang ditampilkan ke tabel
                          include ("koneksi.php");

                        $sql = "SELECT Kode, Deskripsi, Status FROM M_Departemen";
                        $query = sqlsrv_query($conn, $sql);

                        while ($data1 = sqlsrv_fetch_array($query)) {
                            ?>
                            <tr class="pilih" data-kode="<?php echo $data['Kode']; ?>">
                                <td><?php echo $data1['Kode']; ?></td>
                                <td><?php echo $data1['Deskripsi']; ?></td>
                                <td><?php echo $data1['Status']; ?></td>

                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- <script src="js/jquery-1.11.2.min.js"></script> -->
<script src="assets/bootstrap/js/bootstrap.js"></script>
<script src="assets/datatables/jquery.dataTables.js"></script>
<script src="assets/datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript">

//            jika dipilih, nim akan masuk ke input dan modal di tutup
    $(document).on('click', '.pilih', function (e) {
        document.getElementById("Kode").value = $(this).attr('data-kode');
        // document.getElementById("nim").value = $(this).attr('data-nim');
        $('#myModal').modal('hide');
    });


//            tabel lookup mahasiswa
    $(function () {
        $("#lookup").dataTable();
    });

    function dummy() {
        var  = document.getElementById("Kode").value;
        alert('Nomor Induk Mahasiswa ' + Kode + ' berhasil tersimpan');

var ket = document.getElementById("ket").value;
        alert('Keterangan ' + ket + ' berhasil tersimpan');
    }
</script>
