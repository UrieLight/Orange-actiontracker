<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Basic Tables - Vali Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- TABLE-DEV FILES INCLUDING -->
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="js/require.min.js"></script>

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>


  <script>
    require(['c3', 'jquery'], function(c3, $) {
      $(document).ready(function(){
        var chart = c3.generate({
          bindto: '#chart-development-activity', // id of chart wrapper
          data: {
            columns: [
                // each columns data
              ['data1', 0, 5, 1, 2, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 2, 2, 6, 30, 10, 10, 15, 14, 47, 65, 55]
            ],
            type: 'area', // default type of chart
            groups: [
              [ 'data1', 'data2', 'data3']
            ],
            colors: {
              'data1': tabler.colors["blue"]
            },
            names: {
                // name of each serie
              'data1': 'Purchases'
            }
          },
          axis: {
            y: {
              padding: {
                bottom: 0,
              },
              show: false,
                tick: {
                outer: false
              }
            },
            x: {
              padding: {
                left: 0,
                right: 0
              },
              show: false
            }
          },
          legend: {
            position: 'inset',
            padding: 0,
            inset: {
                        anchor: 'top-left',
              x: 20,
              y: 8,
              step: 10
            }
          },
          tooltip: {
            format: {
              title: function (x) {
                return '';
              }
            }
          },
          padding: {
            bottom: 0,
            left: -1,
            right: -1
          },
          point: {
            show: false
          }
        });
      });
    });
  </script>

  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="index.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Forms</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i> Form Components</a></li>
            <li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i> Custom Components</a></li>
            <li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>
            <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>
          </ul>
        </li>
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item active" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>
            <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a></li>
            <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>
            <li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a></li>
            <li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>
            <li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>
            <li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>
            <li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Basic Tables</h1>
          <p>Basic bootstrap tables</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Simple Tables</a></li>
        </ul>
      </div>

      <!-- Test table du template "table-dev" -->
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
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>