<?php
session_start();

 $usuario1 = $_SESSION['user'];


include_once("conexao.php");
    
$quest1 = array();
$indic1 = array();
$quest2 = array();
$indic2 = array();
$quest3 = array();
$indic3 = array();
$quest4 = array();
$indic4 = array();
$quest5 = array();
$indic5 = array();
$quest6 = array();
$indic6 = array();
$quest7 = array();
$indic7 = array();
$quest9 = array();
$indic9 = array();
$quest11 = array();
$indic11 = array();
$quest12 = array();
$indic12 = array();
$quest13 = array();
$indic13 = array();
$quest14 = array();
$indic14 = array();
$quest15 = array();
$indic15 = array();

$i1 = 0;
$i2 = 0;
$i3 = 0;
$i4 = 0;
$i5 = 0;
$i6 = 0;
$i7 = 0;
$i9 = 0;
$i11 = 0;
$i12 = 0;
$i13 = 0;
$i14 = 0;
$i15 = 0;


$sql1 = "SELECT count(id) AS BoPrf FROM semus1 where BoPrf <>'' and BoPrf is not null";
/* @var $qsl type */
$resultado1  = mysqli_query($conexao, $sql1);

while($linha1 = mysqli_fetch_assoc($resultado1)){
    $BoPrf = $linha1['BoPrf'];
    $valor1 = $linha1['BoPrf'];
    $quest1[$i1] = $BoPrf;
    $indic1[$i1] = $valor1;
    $i1 = $i1 + 1;
}
$sql2 = "SELECT count(id) AS BoUeca FROM semus1 where BoUeca <>'' and BoUeca is not null";
/* @var $qsl type */
$resultado2  = mysqli_query($conexao, $sql2);

while($linha2 = mysqli_fetch_assoc($resultado2)){
    $BoUeca = $linha2['BoUeca'];
    $valor2 = $linha2['BoUeca'];
    $quest2[$i2] = $BoUeca;
    $indic2[$i2] = $valor2;
    $i2 = $i2 + 1;
}

$sql3 = "SELECT count(id) AS BoHmcm FROM semus1 where BoHmcm <>'' and BoHmcm is not null ";
/* @var $qsl type */
$resultado3  = mysqli_query($conexao, $sql3);

while($linha3 = mysqli_fetch_assoc($resultado3)){
    $BoHmcm = $linha3['BoHmcm'];
    $valor3 = $linha3['BoHmcm'];
    $quest3[$i3] = $BoHmcm;
    $indic3[$i3] = $valor3;
    $i3 = $i3 + 1;
}

$sql4 = "SELECT count(id) AS BoHmd FROM semus1 where BoHmd <>'' and BoHmd is not null";
/* @var $qsl type */
$resultado4  = mysqli_query($conexao, $sql4);

while($linha4 = mysqli_fetch_assoc($resultado4)){
    $BoHmd = $linha4['BoHmd'];
    $valor4 = $linha4['BoHmd'];
    $quest4[$i4] = $BoHmd;
    $indic4[$i4] = $valor4;
    $i4 = $i4 + 1;
}


$sql5 = "SELECT count(Sexo) AS Sexo FROM semus1 where Sexo = 'Masculino' ";
/* @var $qsl type */
$resultado5  = mysqli_query($conexao, $sql5);

while($linha5 = mysqli_fetch_assoc($resultado5)){
    $Sexo5 = $linha5['Sexo'];
    $valor5 = $linha5['Sexo'];
    $quest5[$i5] = $Sexo5;
    $indic5[$i5] = $valor5;
    $i5 = $i5 + 1;
}

$sql6 = "SELECT count(Sexo) AS Sexo FROM semus1 where Sexo = 'Feminino'";
/* @var $qsl type */
$resultado6  = mysqli_query($conexao, $sql6);

while($linha6 = mysqli_fetch_assoc($resultado6)){
    $Sexo6 = $linha6['Sexo'];
    $valor6 = $linha6['Sexo'];
    $quest6[$i6] = $Sexo6;
    $indic6[$i6] = $valor6;
    $i6 = $i6 + 1;
}

$sql7 = "SELECT count(TipoVitima) AS TipoVitima FROM semus1 where TipoVitima = 'Motociclista' ";
/* @var $qsl type */
$resultado7  = mysqli_query($conexao, $sql7);

while($linha7 = mysqli_fetch_assoc($resultado7)){
    $TipoVitima7 = $linha7['TipoVitima'];
    $valor7 = $linha7['TipoVitima'];
    $quest7[$i7] = $TipoVitima7;
    $indic7[$i7] = $valor7;
    $i7 = $i7 + 1;
}

$sql9 = "SELECT count(TipoVitima) AS TipoVitima FROM semus1 where TipoVitima = 'Ciclista'";
/* @var $qsl type */
$resultado9  = mysqli_query($conexao, $sql9);

while($linha9 = mysqli_fetch_assoc($resultado9)){
    $TipoVitima9 = $linha9['TipoVitima'];
    $valor9 = $linha9['TipoVitima'];
    $quest9[$i9] = $TipoVitima9;
    $indic9[$i9] = $valor9;
    $i9 = $i9 + 1;
}
$sql11 = "SELECT count(TipoVitima) AS TipoVitima FROM semus1 where TipoVitima = 'Contudor de Veículo' ";
/* @var $qsl type */
$resultado11  = mysqli_query($conexao, $sql11);

while($linha11 = mysqli_fetch_assoc($resultado11)){
    $TipoVitima11 = $linha11['TipoVitima'];
    $valor11 = $linha11['TipoVitima'];
    $quest11[$i11] = $TipoVitima11;
    $indic11[$i11] = $valor11;
    $i11 = $i11 + 1;
}

$sql12 = "SELECT count(TipoVitima) AS TipoVitima FROM semus1 where TipoVitima = 'Garupa de Moto'";
/* @var $qsl type */
$resultado12  = mysqli_query($conexao, $sql12);

while($linha12 = mysqli_fetch_assoc($resultado12)){
    $TipoVitima12 = $linha12['TipoVitima'];
    $valor12 = $linha12['TipoVitima'];
    $quest12[$i12] = $TipoVitima12;
    $indic12[$i12] = $valor12;
    $i12 = $i12 + 1;
}
$sql13 = "SELECT count(TipoVitima) AS TipoVitima FROM semus1 where TipoVitima = 'Pedestre' ";
/* @var $qsl type */
$resultado13  = mysqli_query($conexao, $sql13);

while($linha13 = mysqli_fetch_assoc($resultado13)){
    $TipoVitima13 = $linha13['TipoVitima'];
    $valor13 = $linha13['TipoVitima'];
    $quest13[$i13] = $TipoVitima13;
    $indic13[$i13] = $valor13;
    $i13 = $i13 + 1;
}

$sql14 = "SELECT count(id) AS BoSmtt FROM semus1 where BoSmtt <>'' and BoSmtt is not null";
/* @var $qsl type */
$resultado14  = mysqli_query($conexao, $sql14);

while($linha14 = mysqli_fetch_assoc($resultado14)){
    $BoSmtt = $linha14['BoSmtt'];
    $valor14 = $linha14['BoSmtt'];
    $quest14[$i14] = $BoSmtt;
    $indic14[$i14] = $valor14;
    $i14 = $i14 + 1;
}
$sql15 = "SELECT count(id) AS BoSamu FROM semus1 where BoSamu <>'' and BoSamu is not null";
/* @var $qsl type */
$resultado15  = mysqli_query($conexao, $sql15);

while($linha15 = mysqli_fetch_assoc($resultado15)){
    $BoSamu = $linha15['BoSamu'];
    $valor15 = $linha15['BoSamu'];
    $quest15[$i15] = $BoSamu;
    $indic15[$i15] = $valor15;
    $i15 = $i15 + 1;
}


?> 



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Semus-Sistema de Informações de Óbito</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- <a class="navbar-brand" href="./"><img src="images/logoprefeitura.jpg" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logoprefeitura.jpg" alt="Logo"></a> -->
            </div><BR>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                    <!-- <li>
                        <a href="page-inicial.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li> -->
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <!--<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a>
                            </li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>-->
                    <li>
                            <a href="page-inicial.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        </li>
                        
                        <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Cadastro</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.php">Ocorrências</a></li>
                                    <!--<li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>-->
                                </ul>
                            </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Mostrar Dados</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!--<li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>-->
                            <li><i class="fa fa-table"></i><a href="tables-data.php">Dados no Sistema</a></li>
                        </ul>
                    </li>


                    <!--<h3 class="menu-title">Geolocalização</h3><!-- /.menu-title -->

                    <!--<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font
                                    Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a>
                            </li>
                        </ul>
                    </li>-->
					<!--
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets - Dashboard</a>
                    </li>
					-->
                    <!--<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a>
                            </li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a>
                            </li>
                        </ul>
                    </li>-->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-map"></i>Mapa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.php">Local de Acidentes</a></li>
                            <!-- <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a> -->
                            </li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Finalizar Sessão</h3><!-- /.menu-title -->
                    <li>
                            <a href="logout.php"> <i class="menu-icon fa fa-sign-out"></i>Logout </a>
                        </li>
                    <!-- <li class="menu-item-has-children ">
                        <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-sign-out"></i>Logout</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a>
                            </li>
                        </ul>
                       
                    </li>
                    
                </ul> -->
               
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                            <!-- <a href="page-inicial.php"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout </a> -->
                        </div>
             

                        <!-- <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div> -->

                 <!--<div class="col-sm-5">-->
                    <!--<div class="user-area dropdown float-right">-->
                    <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                    <!--        <img class="user-avatar rounded-circle" src="images/semus_admin.jpg" alt="User Avatar">-->
                    <!--    </a>-->
                        
                        <!--<div class="user-menu dropdown-menu">-->
                        <!--    <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>-->

                        <!--    <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>-->

                        <!--    <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>-->

                        <!--    <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>-->
                        <!--</div>-->
                    <!--</div> -->

                    <!-- <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-br"></i>
                        </a> -->
                        <!--<div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>-->

                    </div>

                </div>
            </div>
            
            <div class="col-sm-5">
               <p class="text-right">Usuário logado: <?php echo $_SESSION['login']; ?></p>
                <!-- <div class="alert  alert-success alert-dismissible fade show" role="alert"> -->
                <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="none">&times;</span>
                    </button> -->
                   
         <!-- </div> -->
        
         </div>
          
         <!-- <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a> -->
         <!-- <p class="text-right"><a href="logout.php">Sair</a></p> -->
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
      
          
            
            
        <div class="content mt-3">

            <!-- <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div> -->


            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </div>
                            </div>
                        </div>
                      
                       <strong>  <h4 class="mb-0">
                        <?php 
                        $k = $i1;
                        for ($i1 = 0; $i1 < $k; $i1++){
                        ?>
                        <?php echo $indic1[$i1]?>
                       <?php }?> 
                            
                        <p class="text-light">BoPRF</p>
                       

                        </h4></strong> 
                    
                        

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                        <?php 
                        $k = $i2;
                        for ($i2 = 0; $i2 < $k; $i2++){
                        ?>
                        <?php echo $indic2[$i2] ?>
                       <?php }?> 
                       <p class="text-light">BoUECA</p>
                        </h4>

                      

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                        <?php 
                        $k = $i3;
                        for ($i3 = 0; $i3 < $k; $i3++){
                        ?>
                        <?php echo $indic3[$i3] ?>
                       <?php }?> 
                       <p class="text-light">BoHMCM</p>
                        </h4>
                       

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                        <?php 
                        $k = $i4;
                        for ($i4 = 0; $i4 < $k; $i4++){
                        ?>
                        <?php echo $indic4[$i4] ?>
                       <?php }?> 
                       <p class="text-light">BoHMD</p>
                        </h4>
                        

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                        <?php 
                        $k = $i14;
                        for ($i14 = 0; $i14 < $k; $i14++){
                        ?>
                        <?php echo $indic14[$i14] ?>
                       <?php }?> 
                       <p class="text-light">BoSMTT</p>
                        </h4>
                       

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart5"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                        <?php 
                        $k = $i15;
                        for ($i15 = 0; $i15 < $k; $i15++){
                        ?>
                        <?php echo $indic15[$i15] ?>
                       <?php }?> 
                       <p class="text-light">BoSAMU</p>
                        </h4>
                        

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart6"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->
 
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                        <?php 
                        $k = $i5;
                        for ($i5 = 0; $i5 < $k; $i5++){
                        ?>
                        <?php echo $indic5[$i5] ?>
                       <?php }?> 
                       <p class="text-light">Masculino</p>
                        </h4>

                      

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart7"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->
    <!--/.col-->
 
    <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton8">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                        <?php 
                        $k = $i6;
                        for ($i6 = 0; $i6 < $k; $i6++){
                        ?>
                        <?php echo $indic6[$i6]?>
                       <?php }?> 
                       <p class="text-light">Feminino</p>
                        </h4>

                      

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart8"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->
          
            <!--/.col-->


            <!-- <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    <i class="fa fa-linkedin"></i>
                    <ul>
                        <li>
                            <span class="count">40</span> +
                            <span>contacts</span>
                        </li>
                        <li>
                            <span class="count">250</span>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div> -->
                <!--/social-box-->
            <!-- </div> -->
            <!--/.col-->


            <!-- <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-google-plus"></i>
                    <ul>
                        <li>
                            <span class="count">94</span> k
                            <span>followers</span>
                        </li>
                        <li>
                            <span class="count">92</span>
                            <span>circles</span>
                        </li>
                    </ul>
                </div> -->
                <!--/social-box-->
            <!-- </div> -->
            <!--/.col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="card-title mb-0"></h4>
                                <div class="small text-muted"></div>
                            </div>
                            <!--/.col-->
                            <div class="col-sm-8 hidden-sm-down">
                               
                                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                                        <label class="btn btn-outline-secondary">
                                            <input type="radio" name="options" id="option1"> Dia
                                        </label>
                                        <label class="btn btn-outline-secondary active">
                                            <input type="radio" name="options" id="option2" checked=""> Mês
                                        </label>
                                        <label class="btn btn-outline-secondary">
                                            <input type="radio" name="options" id="option3"> Ano
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->


                        </div>
                        <!--/.row-->
                        <div class="chart-wrapper mt-4">
                            <canvas id="trafficChart" style="height:200px;" height="200"></canvas>
                        </div>

                    </div>
                    <div class="card-footer">
                        <ul>
                            <li>
                                <div class="text-muted">Motociclista</div>
                                <!-- <strong>29.703 Users (40%)</strong> -->
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">Ciclista</div>
                                <!-- <strong>24.093 Users (20%)</strong> -->
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="text-muted">Cond. do Veículo</div>
                                <!-- <strong>78.706 Views (60%)</strong> -->
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">Garupa de Moto</div>
                                <!-- <strong>22.123 Users (80%)</strong> -->
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">Pedestre</div>
                                <!-- <strong>40.15%</strong> -->
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Motociclista</div>
                                <div class="stat-digit"><?php 
                        $k = $i7;
                        for ($i7 = 0; $i7 < $k; $i7++){
                        ?>
                        <?php echo $indic7[$i7] ?>
                       <?php }?> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Ciclista</div>
                                <div class="stat-digit"><?php 
                        $k = $i9;
                        for ($i9 = 0; $i9 < $k; $i9++){
                        ?>
                        <?php echo $indic9[$i9] ?>
                       <?php }?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-car text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Cond. do Veículo</div>
                                <div class="stat-digit"><?php 
                        $k = $i11;
                        for ($i11 = 0; $i11 < $k; $i11++){
                        ?>
                        <?php echo $indic11[$i11] ?>
                       <?php }?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Garupa de Moto</div>
                                <div class="stat-digit"><?php 
                        $k = $i12;
                        for ($i12 = 0; $i12 < $k; $i12++){
                        ?>
                        <?php echo $indic12[$i12] ?>
                       <?php }?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Pedestre</div>
                                <div class="stat-digit"><?php 
                        $k = $i13;
                        for ($i13 = 0; $i13 < $k; $i13++){
                        ?>
                        <?php echo $indic13[$i13] ?>
                       <?php }?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Active Projects</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Mapa</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap" style="height: 265px;"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>
<script>


</script>
</html>