<!-- Navbar-->
<header class="app-header">
    <a class="app-header__logo" href="index.html">
    <img id="logo_titre" src="<?= $root_path; ?>/assets/img/icon2.png" alt="icone" />Action Tracker</a>

    <!-- Sidebar toggle button-->
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

    <!-- Btn Nouvelle action -->
    <!-- <div style="padding-top:0.75em;"> <i class="fa fa-plus-square"></i> <span style="font-weight:bold;font-size:19px;"> Nouvelle action </span></div> -->
    
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        
        <!-- <div style="padding-top:0.75em; margin-right:1em;"> <i class="fa fa-plus-square"></i> <span style="font-weight:bold;font-size:19px;"> </span></div> -->
        
        <!-- Input pour la recherche -->
        <li class="app-search">
            <input class="app-search__input" type="search" placeholder="Search">
            <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>

        <!-- Btn Nouvelle action -->
        <li class="" style="cursor:pointer;" id="id_modal_new_act" title="Nouvelle action" data-toggle="modal" data-target="#id_modal_new_action"> 
            <i class="app-nav__item fa fa-plus-square" style="font-size:22px; color:white;"></i>
            <!-- <span style="font-weight:bold;font-size:19px;"> Nouvelle action </span>  -->
        </li>
       

        <!-- Notification Menu -->
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
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                    <p class="app-notification__message">Transaction f</p>
                    <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
                </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
            </ul>
        </li>

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="" aria-label="Open Profile Menu"><i class="fa fa-sign-out fa-lg"></i></a>
                <!-- <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-plus-square fa-lg"></i> Action</a></li> -->
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
</header>