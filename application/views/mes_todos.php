    
    <link rel="stylesheet" type="text/css" href="<?= $root_path; ?>/assets/css/dashboard.css">

    <script src="<= $root_path; ?>/assets/js/require.min.js"></script>

    <?php include('include/tables_js_require.php'); ?>
  </head>

  <body class="app sidebar-mini rtl">

    <style>
      #logo_titre {
        width: 1em; 
        height: 1em; 
        vertical-align: text-top; 
        margin-right: .1em;
      }

      .user_avatar{
        width: 3em; 
        height: 3em; 
      }

      .fa-hourglass-3:before, .fa-hourglass-end:before, .fa-hourglass-start:before, 
      .fa-hourglass-half:before, .fa-ban:before{
        color: white;
      }
    </style>
    
    <?php 
      include('templates/nav_bar.php'); 
      include('include/create_action_modal.php');  
      include('templates/side_bar.php');     
    ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard - To do</h1>
          <p>Suivi temps réel de l'évolution de mes actions</p>
        </div>

        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>

      <!-- Statistics cards -->
      <div class="row">
        <div class="col-md-6 col-lg-3 stat_card">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-hourglass-end fa-3x white_icon"></i>
            <div class="info">
              <h4>Terminé</h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 stat_card">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-hourglass-half fa-3x white_icon"></i>
            <div class="info">
              <h4>En cours</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 stat_card">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-hourglass-start fa-3x white_icon"></i>
            <div class="info">
              <h4>En attente</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 stat_card">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-ban fa-3x white_icon"></i>
            <div class="info">
              <h4>Suspendu</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Tableaux des actions -->
      <div class="row row-cards row-deck">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Actions</h3>
            </div>
            <div class="table-responsive">
              <table class="table card-table table-vcenter text-nowrap">
                <thead>
                  <tr>
                    <th class="w-1">No.</th>
                    <th>Invoice Subject</th>
                    <th>Client</th>
                    <th>VAT No.</th>
                    <th>Created</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="text-muted">001401</span></td>
                    <td><a href="invoice.html" class="text-inherit">Design Works</a></td>
                    <td>
                      Carlson Limited
                    </td>
                    <td>
                      87956621
                    </td>
                    <td>
                      15 Dec 2017
                    </td>

                    <td>
                      <div class="clearfix">
                        <div class="float-left">
                          <strong>42%</strong>
                        </div>
                        <div class="float-right">
                          <small class="text-muted">Jun 11, 2015 - Jul 10, 2018</small>
                        </div>
                      </div>
                      <div class="progress progress-xs">
                        <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>

                    <td>$887</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                      <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                      </div>
                    </td>
                    <td>
                      <a class="icon" href="javascript:void(0)">
                        <i class="fe fe-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td><span class="text-muted">001402</span></td>
                    <td><a href="invoice.html" class="text-inherit">UX Wireframes</a></td>
                    <td>
                      Adobe
                    </td>
                    <td>
                      87956421
                    </td>
                    <td>
                      12 Apr 2017
                    </td>
                    
                    <td>
                      <div class="clearfix">
                        <div class="float-left">
                          <strong>87%</strong>
                        </div>
                        <div class="float-right">
                          <small class="text-muted">Jun 11, 2015 - Jul 10, 2018</small>
                        </div>
                      </div>
                      <div class="progress progress-xs">
                        <div class="progress-bar bg-green" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>

                    <td>$1200</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                      <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                      </div>
                    </td>
                    <td>
                      <a class="icon" href="javascript:void(0)">
                        <i class="fe fe-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td><span class="text-muted">001403</span></td>
                    <td><a href="invoice.html" class="text-inherit">New Dashboard</a></td>
                    <td>
                      Bluewolf
                    </td>
                    <td>
                      87952621
                    </td>
                    <td>
                      23 Oct 2017
                    </td>
                    <td>
                      <span class="status-icon bg-warning"></span> Pending
                    </td>
                    <td>$534</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                      <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                      </div>
                    </td>
                    <td>
                      <a class="icon" href="javascript:void(0)">
                        <i class="fe fe-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td><span class="text-muted">001404</span></td>
                    <td><a href="invoice.html" class="text-inherit">Landing Page</a></td>
                    <td>
                      Salesforce
                    </td>
                    <td>
                      87953421
                    </td>
                    <td>
                      2 Sep 2017
                    </td>
                    <td>
                      <span class="status-icon bg-secondary"></span> Due in 2 Weeks
                    </td>
                    <td>$1500</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                      <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                      </div>
                    </td>
                    <td>
                      <a class="icon" href="javascript:void(0)">
                        <i class="fe fe-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td><span class="text-muted">001405</span></td>
                    <td><a href="invoice.html" class="text-inherit">Marketing Templates</a></td>
                    <td>
                      Printic
                    </td>
                    <td>
                      87956621
                    </td>
                    <td>
                      29 Jan 2018
                    </td>
                    <td>
                      <span class="status-icon bg-danger"></span> Paid Today
                    </td>
                    <td>$648</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                      <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                      </div>
                    </td>
                    <td>
                      <a class="icon" href="javascript:void(0)">
                        <i class="fe fe-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td><span class="text-muted">001406</span></td>
                    <td><a href="invoice.html" class="text-inherit">Sales Presentation</a></td>
                    <td>
                      Tabdaq
                    </td>
                    <td>
                      87956621
                    </td>
                    <td>
                      4 Feb 2018
                    </td>
                    <td>
                      <span class="status-icon bg-secondary"></span> Due in 3 Weeks
                    </td>
                    <td>$300</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                      <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                      </div>
                    </td>
                    <td>
                      <a class="icon" href="javascript:void(0)">
                        <i class="fe fe-edit"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      
    </main>

    <?php include('include/common_js_src.php');  ?>

    <script type="text/Javascript">
        $('#id_mes_trackings_title').removeClass('active');
        $('#id_mes_todo_title').addClass('active');

        var site_url = $('#id_site_url').html();
        console.log(site_url);

        $('#id_mes_todo_title').on('click', function() {
           window.location.assign(site_url+'/Welcome/home');	                     
        });

        $('#id_mes_trackings_title').on('click', function() {
           window.location.assign(site_url+'/Mes_trackings/show');	                     
        })
    </script>

    <?php include('templates/file_foot.php'); ?>
  