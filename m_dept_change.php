<!-- Content -->
<div class="page-content">
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

      <button class="btn btn-success" onclick="search_dept()" type="button">
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
