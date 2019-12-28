

<link rel="stylesheet" type="text/css" href="estilo.css">



<?php
include("conexao.php"); 


$consulta = "SELECT * FROM semus2";



$result_consulta  = mysqli_query($conexao, $consulta)
?>

<!doctype html>

<html class="no-js" lang="pt-br">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIO-Informações Gerais</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

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
                                <input class="form-control mr-sm-2" type="text" placeholder="Pesquise aqui..." aria-label="Search">
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

                <!-- <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/semus_admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div> -->

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
            
          
         
         <!-- <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a> -->
         <!-- <p class="text-right"><a href="logout.php">Sair</a></p> -->
        </header><!-- /header -->
        <!-- Header-->

        <!-- <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title"> -->
                        <!-- <h1>Dashboard</h1> -->
                    <!-- </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right"> -->
                            <!-- <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li> -->
                        <!-- </ol>
                    </div>
                </div>
            </div>
        </div> -->
        
        
        
        
        
         <?php
        
        	if (isset($_SESSION['msg'])) {

            		echo "<div class='alert alert-success'>" . $_SESSION['msg'] . "</div>";
            
            		unset($_SESSION["msg"]);
            	}
        
        ?>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tabela de Dados</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        
                                        	<th class="th-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Editar&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th class="th-sm">BoSim</th>
                                            <th class="th-sm">Nome</th>
                                            <th class="th-sm">Idade</th>
                                            <th class="th-sm">Data de nascimento</th>
                                            <th class="th-sm">Sexo</th>
                                            <th class="th-sm">Nome da Mãe</th>
                                            <th class="th-sm">Tipo da vítima</th>
                                            <th class="th-sm">Data do acidente</th>
                                            <th class="th-sm">Bairro</th>
                                            <th class="th-sm">Local</th>
                                            <th class="th-sm">Ponto de referencia</th>
                                            <th class="th-sm">Tipo do veículo</th>
                                            <th class="th-sm">Data do óbito</th>
                                            <th class="th-sm">BoPRF</th>
                                            <th class="th-sm">BoUECA</th>
                                            <th class="th-sm">BoHMCM</th>
                                            <th class="th-sm">BoHMD</th>
                                            <th class="th-sm">BoSmtt</th>
                                            <th class="th-sm">BoSAMU</th>
                                            
                                        </tr>
                                        <tbody>
                                            <?php while($dado = $result_consulta->fetch_array()) { ?>
                                                <tr>
                                                <td   ><div id="editdel"><?php echo "<a href='edit_usuario.php?id=" . $dado['id'] . "'>Editar&ensp;&nbsp;&nbsp;</a>    ";?></div>  
												
												
												
												<div id="editdel2"><?php echo "<a href='proc_apagar_usuario.php?id=" . $dado['id'] . "' data-confirm='Tem certeza que deseja excluir o item seleciona?'>Apagar</a>"; ?></div></td>
                                                
                                                <td><?php echo $dado['BoSim']; ?></td>
                                                <td><?php echo $dado['Envolvido']; ?></td>
                                                <td><?php echo $dado['Idade']; ?></td>
                                                <td><?php echo $dado['DtNascimento']; ?></td>
                                                <td><?php echo $dado['Sexo']; ?></td>
                                                <td><?php echo $dado['Mae']; ?></td>
                                                <td><?php echo $dado['TipoVitima']; ?></td>
                                                <td><?php echo $dado['DtAcidente']; ?></td>
                                                <td><?php echo $dado['BairroAcid']; ?></td>
                                                <td><?php echo $dado['LocalAcid']; ?></td>
                                                <td><?php echo $dado['PonRefLocAcid']; ?></td>
                                                <td><?php echo $dado['TipoDeVeicAcid']; ?></td>
                                                <td><?php echo $dado['DtObito']; ?></td>
                                                <td><?php echo $dado['BoPrf']; ?></td>
                                                <td><?php echo $dado['BoUeca']; ?></td>
                                                <td><?php echo $dado['BoHmcm']; ?></td>
                                                <td><?php echo $dado['BoHmd']; ?></td>
                                                <td><?php echo $dado['BoSmtt']; ?></td>
                                                <td><?php echo $dado['BoSamu']; ?></td>
                    
                                             </td>
                                              </tr>
                                           <?php } ?>
                                       </tbody>
                                        </thead>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/listarItensTabela.js"></script>
   <script src="vendors/jquery/dist/jquery.min.js"></script>
   <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<!--<script src="js/personalizado.js" ></script>-->

</body>

</html>