<!DOCTYPE html>

<html lang="en">
  <head>
    <!--meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    
    <!- Twitter meta->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">

    <!- Open Graph Meta->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular."-->
    
    <title>Action Tracker</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link id="id_favicon" rel="shortcut icon" type="image/x-ico" href="<?= $root_path; ?>/assets/img/icon.png" />

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="<?= $root_path; ?>/assets/css/bootstrap.min.css" />

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= $root_path; ?>/assets/css/main.css" />

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?= $root_path; ?>/assets/fonts/font-awesome.min.css" />

    <!-- Vuejs -->
    <script src="<?= $root_path; ?>/assets/js/vue.js"></script>

    <style>
      .app-header, .app-header__logo{
        background-color: #ff6501;
      }
      .app-sidebar__toggle:hover, .app-sidebar__toggle:focus {
        background-color: #000;
      }
          
      .stat_card{
        cursor: pointer;
      }
      
      .stat_card:hover{
        background-color: #eee;
      }
      
      .stat_card:active{
        background-color: #ccc;
      }

    </style>