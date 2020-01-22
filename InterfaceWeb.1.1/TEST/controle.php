<!DOCTYPE html>
<!-- saved from url=(0059)https://blackrockdigital.github.io/startbootstrap-sb-admin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="./SB Admin - Dashboard_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="./SB Admin - Dashboard_files/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="./SB Admin - Dashboard_files/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./SB Admin - Dashboard_files/sb-admin.css" rel="stylesheet">

  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/index.html">Start Bootstrap</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#">Action</a>
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#">Action</a>
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#">Settings</a>
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/login.html">Login</a>
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/register.html">Register</a>
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/404.html">404 Page</a>
            <a class="dropdown-item" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">26 New Messages!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">11 New Tasks!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">123 New Orders!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">13 New Tickets!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Area Chart Example</div>
            <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
              <canvas id="myAreaChart" width="1061" height="318" class="chartjs-render-monitor" style="display: block; width: 1061px; height: 318px;"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 162px;">Name</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 266px;">Position</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 121px;">Office</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 52px;">Age</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 107px;">Start date</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 94px;">Salary</th></tr>
                  </thead>
                  <tfoot>
                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                  </tfoot>
                  <tbody>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                  <tr role="row" class="odd">
                      <td class="sorting_1">Airi Satou</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>33</td>
                      <td>2008/11/28</td>
                      <td>$162,700</td>
                    </tr><tr role="row" class="even">
                      <td class="sorting_1">Angelica Ramos</td>
                      <td>Chief Executive Officer (CEO)</td>
                      <td>London</td>
                      <td>47</td>
                      <td>2009/10/09</td>
                      <td>$1,200,000</td>
                    </tr><tr role="row" class="odd">
                      <td class="sorting_1">Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      <td>2009/01/12</td>
                      <td>$86,000</td>
                    </tr><tr role="row" class="even">
                      <td class="sorting_1">Bradley Greer</td>
                      <td>Software Engineer</td>
                      <td>London</td>
                      <td>41</td>
                      <td>2012/10/13</td>
                      <td>$132,000</td>
                    </tr><tr role="row" class="odd">
                      <td class="sorting_1">Brenden Wagner</td>
                      <td>Software Engineer</td>
                      <td>San Francisco</td>
                      <td>28</td>
                      <td>2011/06/07</td>
                      <td>$206,850</td>
                    </tr><tr role="row" class="even">
                      <td class="sorting_1">Brielle Williamson</td>
                      <td>Integration Specialist</td>
                      <td>New York</td>
                      <td>61</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                    </tr><tr role="row" class="odd">
                      <td class="sorting_1">Bruno Nash</td>
                      <td>Software Engineer</td>
                      <td>London</td>
                      <td>38</td>
                      <td>2011/05/03</td>
                      <td>$163,500</td>
                    </tr><tr role="row" class="even">
                      <td class="sorting_1">Caesar Vance</td>
                      <td>Pre-Sales Support</td>
                      <td>New York</td>
                      <td>21</td>
                      <td>2011/12/12</td>
                      <td>$106,450</td>
                    </tr><tr role="row" class="odd">
                      <td class="sorting_1">Cara Stevens</td>
                      <td>Sales Assistant</td>
                      <td>New York</td>
                      <td>46</td>
                      <td>2011/12/06</td>
                      <td>$145,600</td>
                    </tr><tr role="row" class="even">
                      <td class="sorting_1">Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2012/03/29</td>
                      <td>$433,060</td>
                    </tr></tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/#page-top" style="display: none;">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./SB Admin - Dashboard_files/jquery.min.js"></script>
    <script src="./SB Admin - Dashboard_files/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./SB Admin - Dashboard_files/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="./SB Admin - Dashboard_files/Chart.min.js"></script>
    <script src="./SB Admin - Dashboard_files/jquery.dataTables.js"></script>
    <script src="./SB Admin - Dashboard_files/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./SB Admin - Dashboard_files/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="./SB Admin - Dashboard_files/datatables-demo.js"></script>
    <script src="./SB Admin - Dashboard_files/chart-area-demo.js"></script>

  


</body></html>