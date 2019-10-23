<?php
  include ("session.php");
?>

<?php
  include ("atas.php");
?>

<?php
  include ("menu.php");
?>

<div class="page-content">


      <!-- content -->
      <div class="row-fluid">
				<div class="table-header">
          <i class=" icon-desktop"></i>
					Display Departement
				</div>
				<div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
          <div class="row-fluid">
            <div class="span6">
              <div id="sample-table-2_length" class="dataTables_length">
                <label>Display
                  <select size="1" name="sample-table-2_length" aria-controls="sample-table-2">
                    <option value="10" selected="selected">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select> records
                </label>
              </div>
            </div>
            <div class="span6">
              <div class="dataTables_filter" id="sample-table-2_filter">
                <label>Search:
                  <input type="text" aria-controls="sample-table-2">
                </label>
              </div>
            </div>
          </div>
          <table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
						<thead>
							<tr role="row">

                <th role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 117px;">
                  Kode Departement
                </th>
                <th role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 126px;">
                  Departement
                </th>
                <th role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 190px;">
									Mark
								</th>
                <th class="center" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 59px;">
                  <button class="btn btn-primary">
										<i class="icon-pencil bigger-125"></i>
										Create
									</button>
                </th>
              </tr>
						</thead>

              <tbody role="alert" aria-live="polite" aria-relevant="all">
                <tr class="odd">
  								<td class="">KEI</td>
  								<td class="hidden-480 ">Teknologi Informasi</td>
  								<td class="hidden-phone ">X</td>
  								<td class="td-actions ">
  									<div class="center">
  										<a class="green" href="#">
  											<i class="icon-pencil bigger-130"></i>
  										</a>
  									</div>
                  </td>
								</tr>

                <tr class="odd">
  								<td class=" ">KEI</td>
  								<td class="hidden-480 ">Teknologi Informasi</td>
  								<td class="hidden-phone ">X</td>
  								<td class="td-actions ">
  									<div class="center">
  										<a class="green" href="#">
  											<i class="icon-pencil bigger-130"></i>
  										</a>
  									</div>
                  </td>
								</tr>

                <tr class="odd">
  								<td class=" ">KEI</td>
  								<td class="hidden-480 ">Teknologi Informasi</td>
  								<td class="hidden-phone ">X</td>
  								<td class="td-actions ">
  									<div class="center">
  										<a class="green" href="#">
  											<i class="icon-pencil bigger-130"></i>
  										</a>
  									</div>
                  </td>
								</tr>

              </tbody>
            </table>
          <div class="row-fluid">
            <div class="span6"><div class="dataTables_info" id="sample-table-2_info">
              Showing 1 to 10 of 23 entries
            </div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination">
              <ul>
                <li class="prev disabled">
                  <a href="#"><i class="icon-double-angle-left"></i></a>
                </li>
                <li class="active">
                  <a href="#">1</a>
                </li>
                <li>
                  <a href="#">2</a>
                </li>
                <li><a href="#">3</a></li>
                <li class="next"><a href="#"><i class="icon-double-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
		</div>
      <!-- content -->


<?php
  include ("footer.php");
?>
