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
        <h3>Create Departement</h3>
      </div>
      <div class="">
        <br>
      </div>

    <div class="form-horizontal">
      <div class="control-group">
        <label class="control-label" for="kode_dept">Kode Departement</label>
        <div class="controls">
          <input type="text" name="kode_dept" id="kode_dept">
          <!-- <button class="btn btn-success" onclick="search_dept()" type="button">
            Search
            <i class="icon-search"></i>
          </button> -->
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

        <button class="btn btn-info" data-toggle="modal" data-target="#myModal">
          <i class="icon-search"></i>
          Search
        </button>
        &nbsp; &nbsp; &nbsp;
        <a href="index.php">
        <button class="btn btn-success" type="button">
          Exit
          <i class="icon-arrow-right"></i>
        </button></a>

    </div>
  </div>
</div>

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

<?php
  include ("m_dept_search.php");
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
