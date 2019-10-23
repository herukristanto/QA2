<?php
  include ("session.php");
?>

<?php
  include ("_atas.php");
?>

<?php
  include ("navbar.php");
?>

<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>

        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-file"></i><span>Kejadian</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="m_dept_create.php">Create</a></li>
            <li><a href="m_dept_display.php">Display</a></li>
            <li><a href="m_dept_change.php">Change</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-file"></i><span>Invest</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="icons.html">Create</a></li>
            <li><a href="faq.html">Display</a></li>
            <li><a href="pricing.html">Change</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-file"></i><span>RCA</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="icons.html">Create</a></li>
            <li><a href="faq.html">Display</a></li>
            <li><a href="pricing.html">Change</a></li>
          </ul>
        </li>

      </ul>
    </div>
    <!-- /container -->
  </div>
  <!-- /subnavbar-inner -->
</div>

      <!-- content -->

      <div class="main">
        <div class="main-inner">
          <div class="container">
            <div class="row">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header"> <i class="icon-bookmark"></i>
                    <h3>Important Shortcuts</h3>
                  </div>
                  <!-- /widget-header -->
                  <div class="widget-content">
                    <div class="shortcuts"> <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-list-alt"></i><span
                                              class="shortcut-label">Apps</span> </a><a href="javascript:;" class="shortcut"><i
                                                  class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Bookmarks</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-signal"></i> <span class="shortcut-label">Reports</span> </a><a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-comment"></i><span class="shortcut-label">Comments</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-user"></i><span
                                                      class="shortcut-label">Users</span> </a><a href="javascript:;" class="shortcut"><i
                                                          class="shortcut-icon icon-file"></i><span class="shortcut-label">Notes</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-picture"></i> <span class="shortcut-label">Photos</span> </a><a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-tag"></i><span class="shortcut-label">Tags</span> </a> </div>
                    <!-- /shortcuts -->
                  </div>
                  <!-- /widget-content -->
                </div>
              </div>

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
  include ("_bawah.php");
?>
