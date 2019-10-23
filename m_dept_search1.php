<link href="assets/css/modal.css" rel="stylesheet">

<div id="myModal" class="modala">

  <div class="modala-content">
    <div class="modala-header">
      <span class="close">&times;</span>
      <h3>Filter Data Departemen</h3>
  </div>
  <div class="modala-body">
      <p>Pilih data Departemen yang dimaksud</p>

				<label class="control-label " for="search">Masukan Kode atau Deskripsi Departemen</label>

          <input type="text" name="katakunci" id="katakunci">

          <button id="saringtabel" class="btn btn-success btn-small">Saring</button>



      <div id="tampiltabel">
        <!-- div untuk menampilkan tabel -->
      </div>
      <br>

      <br><br>
  </div>
</div>
</div>
<script>

// Get the modal
$(document).ready(function(){
    $("#saringtabel").click(function()
    {
        $("#tampiltabel").load('m_dept_tabel.php?katakunci='+$("#katakunci").val());
    });
});

function cekKataKunci(){
    var katakunci;
    katakunci = document.getElementById('katakunci').value;
    window.location.href='m_dept_search.php?katakunci=' + katakunci;
}

var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
