<?php
  include ("session.php");
?>

<?php
  include ("_atas.php");
?>

<?php
  include ("navbar.php");
?>

<?php
  include ("main_menu.php");
?>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">

<!-- Content -->

<div class="page-content"><!--/.page-content-->
      <!-- content -->
      <div class="">

      </div>
      <div class="">
        <h3>Create Departement</h3>
      </div>
      <div class="">
        <br>
      </div>
    <!-- <form class="form-horizontal" action="proses_dept.php" method="post"> -->
    <div class="form-horizontal">
      <div class="control-group">
        <label class="control-label" for="kode_dept">Kode Departement</label>
        <div class="controls">
          <input type="text" name="kode_dept" id="kode_dept">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="desk_dept">Deskripsi</label>
        <div class="controls">
          <input type="text" name="desk_dept" id="desk_dept">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">Status</label>

        <div class="controls">
          <label>
            <input name="status_dept" id="aktif" type="radio">
            <span class="lbl"> Aktif</span>
          </label>

          <label>
            <input name="status_dept" id="nonaktif" type="radio">
            <span class="lbl"> Non-Aktif</span>
          </label>

        </div>
      </div>

      <div class="form-actions">
        <button class="btn btn-success" onclick="proses_dept()" type="button">
          <i class="icon-save bigger-110"></i>
          Save
        </button>

        &nbsp; &nbsp; &nbsp;
        <button class="btn" type="reset">
          <i class="icon-undo bigger-110"></i>
          Reset
        </button>
      </div>
    </div>

      <!-- content -->
</div><!--/.page-content-->

<!-- Content -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /main-inner -->
</div>
<!-- /main -->

<?php
  include ("footer.php");
?>

<!-- script -->
<script>
  function proses_dept(){
    var kode_dept;
    var desk_dept;
    kode_dept = document.getElementById('kode_dept').value;
    desk_dept = document.getElementById('desk_dept').value;

    var cekradiobutton = document.getElementById('aktif');
    if (cekradiobutton.checked){
      status_dept = "X";
    }else{
      status_dept = " ";
    }

    var simpan;
    simpan = "baru";

    if (desk_dept) {
      window.location.href='proses_dept.php?kode_dept=' + kode_dept + '&desk_dept=' + desk_dept + '&status_dept=' + status_dept + '&simpan=' + simpan;
    } else {
      alert("Kolom 'deskripsi' harus diisi..");
    }
  }
</script>
<!-- script -->

<?php
  include ("_bawah.php");
?>
