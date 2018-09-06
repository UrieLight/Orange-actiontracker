    
    <link rel="stylesheet" type="text/css" href="<?= $root_path; ?>/assets/css/dashboard.css">

  </head>

  <body class="app sidebar-mini rtl">
    <span id="id_site_url"><?= $site_url; ?></span>

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

      .stat_card:hover{
        cursor: pointer;
        background-color: #eee;
      }

      .stat_card:active{
        background-color: #ccc;
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
          <h1><i class="fa fa-dashboard"></i> Dashboard - Trackings</h1>
          <p>Suivi temps réel de l'évolution des actions</p>
        </div>

        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>

      <!-- Statistics cards -->
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <span class="stat_card">
              <div class="widget-small primary coloured-icon"><i class="icon fa fa-hourglass-end fa-3x white_icon"></i>
                <div class="info">
                  <h4>Terminé</h4>
                  <p><b>5</b></p>
                </div>
              </div>
          </span>
        </div>

        <div class="col-md-6 col-lg-3">
          <span class="stat_card">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-hourglass-half fa-3x white_icon"></i>
              <div class="info">
                <h4>En cours</h4>
                <p><b>25</b></p>
              </div>
            </div>
          </span>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-hourglass-start fa-3x white_icon"></i>
            <div class="info stat_card">
              <h4>En attente</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-ban fa-3x white_icon"></i>
            <div class="info stat_card">
              <h4>Suspendu</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
      
      <style>
        td.text-right{
          float:left;
        }
        td>a{
          margin-top: 1em;
        }
      </style>

      <!-- Tableaux des actions -->
      <div class="row row-cards row-deck">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Actions</h3>
              
              <p id="search_box">
                {{ searched_item }}
              </p>

              <script>
                const search_box = new Vue({
                  el: '#search_box',
                  data:{
                    searched_item: ''
                  }
                })
              </script>
              
              <!-- <ul style="app-nav float:right; margin-right:2em;">
                <li class="app-search">
                  <input class="app-search__input" type="search" placeholder="Search">
                  <button class="app-search__button"><i class="fa fa-search"></i></button>
                </li>
              </ul> -->
            </div>

            <div class="bs-component" style="margin-bottom: 15px;">
              <div class="btn-group btn-group-toggle" data-toggle="buttons" style="float:right; margin-right:2em;">
                <label class="btn btn-primary active">
                  <input type="checkbox" checked="" autocomplete="off"> Standards
                </label>
                <label class="btn btn-primary">
                  <input type="checkbox" autocomplete="off"> Problèmes
                </label>
                <label class="btn btn-primary">
                  <input type="checkbox" autocomplete="off"> Projets
                </label>
              </div>
            </div>

            <div class="table-responsive">
              <table class="table card-table table-vcenter text-nowrap">
                <thead>
                  <tr>
                    <th class="w-1">Référence</th>
                    <th>Catégorie</th>
                    <th>Description</th>
                    <th>Porteur</th>
                    <th>Statut</th>
                    <th>Echanges</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <!-- Référence -->
                    <td><span class="text-muted">001401</span></td>

                    <!-- Catégorie -->
                    <td><a href="invoice.html" class="text-inherit">Projet</a></td>

                    <!-- Description -->
                    <td>
                      Intégrations tests robots Kapptivate dans E2E Cockpit
                    </td>

                    <!-- Porteur -->
                    <td>
                      Steeve Tindjou
                    </td>

                    <!-- Statut -->
                    <td>
                      <div class="clearfix">
                        <div class="float-left">
                          <strong>42% </strong>
                        </div>
                      </div>

                      <div class="progress progress-xs">
                        <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                        <div class="float-left">
                          <small class="text-muted"> Jun 11, 2015 - Jul 10, 2018</small>
                        </div>

                    </td>

                    <!-- Echanges -->
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                      <!--div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                      </div-->
                    </td>

                    <!-- Editer l'action -->
                    <td>
                      <a class="icon" href="javascript:void(0)">
                        <i class="fe fe-edit"></i>
                      </a>
                    </td>
                  </tr>
                  
                  <tr>
                    <!-- Référence -->
                    <td><span class="text-muted">001401</span></td>

                    <!-- Catégorie -->
                    <td><a href="invoice.html" class="text-inherit">Projet</a></td>

                    <!-- Description -->
                    <td>
                      Intégrations tests robots Kapptivate dans E2E Cockpit
                    </td>

                    <!-- Porteur -->
                    <td>
                      Steeve Tindjou
                    </td>

                    <!-- Statut -->
                    <td>
                      <div class="clearfix">
                        <div class="float-left">
                          <strong>42% </strong>
                        </div>
                      </div>

                      <div class="progress progress-xs">
                        <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                        <div class="float-left">
                          <small class="text-muted"> Jun 11, 2015 - Jul 10, 2018</small>
                        </div>

                    </td>

                    <!-- Echanges -->
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                      <!--div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                      </div-->
                    </td>

                    <!-- Editer l'action -->
                    <td>
                      <a class="icon" href="javascript:void(0)">
                        <i class="fe fe-edit"></i>
                      </a>
                    </td>
                  </tr>

                  
                  <tr>
                    <!-- Référence -->
                    <td><span class="text-muted">001401</span></td>

                    <!-- Catégorie -->
                    <td><a href="invoice.html" class="text-inherit">Projet</a></td>

                    <!-- Description -->
                    <td>
                      Intégrations tests robots Kapptivate dans E2E Cockpit
                    </td>

                    <!-- Porteur -->
                    <td>
                      Steeve Tindjou
                    </td>

                    <!-- Statut -->
                    <td>
                      <div class="clearfix">
                        <div class="float-left">
                          <strong>42% </strong>
                        </div>
                      </div>

                      <div class="progress progress-xs">
                        <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                        <div class="float-left">
                          <small class="text-muted"> Jun 11, 2015 - Jul 10, 2018</small>
                        </div>

                    </td>

                    <!-- Echanges -->
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                      <!--div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                      </div-->
                    </td>

                    <!-- Editer l'action -->
                    <td>
                      <a class="icon" href="javascript:void(0)">
                        <i class="fe fe-edit"></i>
                      </a>
                    </td>
                  </tr>

                  
                  <tr>
                    <!-- Référence -->
                    <td><span class="text-muted">001401</span></td>

                    <!-- Catégorie -->
                    <td><a href="invoice.html" class="text-inherit">Projet</a></td>

                    <!-- Description -->
                    <td>
                      Intégrations tests robots Kapptivate dans E2E Cockpit
                    </td>

                    <!-- Porteur -->
                    <td>
                      Steeve Tindjou
                    </td>

                    <!-- Statut -->
                    <td>
                      <div class="clearfix">
                        <div class="float-left">
                          <strong>42% </strong>
                        </div>
                      </div>

                      <div class="progress progress-xs">
                        <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                        <div class="float-left">
                          <small class="text-muted"> Jun 11, 2015 - Jul 10, 2018</small>
                        </div>

                    </td>

                    <!-- Echanges -->
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                      <!--div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                      </div-->
                    </td>

                    <!-- Editer l'action -->
                    <td>
                      <a class="icon" href="javascript:void(0)">
                        <i class="fe fe-edit"></i>
                      </a>
                    </td>
                  </tr>

                  
                  <tr>
                    <!-- Référence -->
                    <td><span class="text-muted">001401</span></td>

                    <!-- Catégorie -->
                    <td><a href="invoice.html" class="text-inherit">Projet</a></td>

                    <!-- Description -->
                    <td>
                      Intégrations tests robots Kapptivate dans E2E Cockpit
                    </td>

                    <!-- Porteur -->
                    <td>
                      Steeve Tindjou
                    </td>

                    <!-- Statut -->
                    <td>
                      <div class="clearfix">
                        <div class="float-left">
                          <strong>42% </strong>
                        </div>
                      </div>

                      <div class="progress progress-xs">
                        <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                        <div class="float-left">
                          <small class="text-muted"> Jun 11, 2015 - Jul 10, 2018</small>
                        </div>

                    </td>

                    <!-- Echanges -->
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                      <!--div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                      </div-->
                    </td>

                    <!-- Editer l'action -->
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
        $('#id_mes_todo_title').removeClass('active');
        $('#id_mes_trackings_title').addClass('active');

        var site_url = $('#id_site_url').html();

        //test boite modale
        $('#id_modal_new_act').on('click', function() {
          //console.log('modal');
        });


        $('#id_mes_trackings_title').on('click', function() {
           window.location.assign(site_url+'/Mes_trackings/show');
        });

        
        $('#id_mes_todo_title').on('click', function() {
           window.location.assign(site_url+'/Welcome/home');	                     
        });
    </script>

    <?php include('templates/file_foot.php'); ?>
   
    

    