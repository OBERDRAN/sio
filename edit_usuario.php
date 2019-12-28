<?php
session_start();

include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM semus1 WHERE id = '$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$dado = mysqli_fetch_assoc($resultado_usuario);
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Atualização do Cadastro de Ocorrência</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

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


                    <h3 class="menu-title">Geolocalização</h3><!-- /.menu-title -->

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

                    <!--    <div class="user-menu dropdown-menu">-->
                    <!--        <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>-->

                    <!--        <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>-->

                    <!--        <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>-->

                    <!--        <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>-->
                    <!--    </div>-->
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
            
          
         
			<!-- <a href="logout.php" class="btn btn-info btn-lg">
			<span class="glyphicon glyphicon-log-out"></span> Log out
			</a> -->
			<!-- <p class="text-right"><a href="logout.php">Sair</a></p> -->
        </header><!-- /header -->
        <!-- Header-->

        <!-- <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> -->

  

        <form action="atualizaform.php" method="POST">
            
            
                  <?php
        
        	if (isset($_SESSION['msg'])) {

            		echo "<div class='alert alert-success'>" . $_SESSION['msg'] . "</div>";
            
            		unset($_SESSION["msg"]);
            	}
        
        ?>
            
			<div class="content mt-3">
				<div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Dados da Vítima</strong>
                                </div>
                                <div class="card-body">
                                    <!-- Credit Card -->
                                    <div id="pay-invoice">
                                        <div class="card-body">
											<div class="form-group">
                                                
 
 
 <label for="BoSim" class="control-label mb-1">BOSIM</label>
 <input id="BoSim" name="BoSim" required placeholder = "Somente Números" type="number_format" class="form-control"
 aria-required="true" aria-invalid="false" onBlur="checkNumber(this.value);" 
 
 value="<?php echo $dado['BoSim']; ?>">
 </div>

 
 <div class="form-group">
 <label for="Envolvido" class="control-label mb-1">Nome do envolvido</label>
 <input id="Envolvido" name="Envolvido" type="text" class="form-control" aria-required="false" aria-invalid="false" placeholder = "Nome do Envolvido" 
 
 value="<?php echo $dado['Envolvido']; ?>">
 </div>
                                            
                                            


<div class="form-group">
<label for="Mae" class="control-label mb-1">Mãe do envolvido</label>
<input id="Mae" name="Mae" type="text" class="form-control"
aria-required="false" aria-invalid="false" placeholder = "Nome da Mãe do Envolvido" 

value="<?php echo $dado['Mae']; ?>">
</div>
     
<div class="row form-group">
<label for="TipoVitima" class="control-label mb-1">Tipo da Vítima</label>
<div class="col-12 col-md-12"> <select name="TipoVitima" id="TipoVitima" class="form-control"
 value="<?php echo $dado['TipoVitima']; ?>">

                                                        <option value="Motociclista">Motociclista</option>
                                                        <option value="Ciclista">Ciclista</option>
                                                        <option value="Condutor de Veículo">Condutor do Veículo</option>
                                                        <option value="Garupa de Moto">Garupa de Moto</option>
                                                        <option value="Pedestre">Pedestre</option>

                                                    </select>
                                                </div>
                                            </div>
         
         
 <div class="form-group has-success">
 <label for="Idade" class="control-label mb-1">Idade</label> <input id="Idade" name="Idade" type="text" 
 class="form-control cc-name valid" data-val="true"
 data-val-required="" required autocomplete="cc-name" aria-required="false"
 aria-invalid="false" aria-describedby="cc-name-error" placeholder = "Coloque a Idade do Envolvido"
 
 value="<?php echo $dado['Idade']; ?>">
 
 
<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>


<div class="row">
<div class="col-6">
<div class="form-group">
<label for="DtNascimento" class="control-label mb-1">Data de nascimento</label><input id="DtNascimento" name="DtNascimento" type="date"
 class="form-control cc-exp" required data-val="true" data-val-required="Please enter the card expiration"
 data-val-cc-exp="Please enter a valid month and year"
  placeholder="Ano/Mês/Dias" autocomplete="cc-exp" 
  
  value="<?php echo $dado['DtNascimento']; ?>">
 
 <span class="help-block" data-valmsg-for="cc-exp"
 data-valmsg-replace="true"></span>
 </div>
 </div>

 <div class="form-group">
 <div align= "right" style="margin-right: 85px">
 <label for="Sexo" class="control-label mb-1">Gênero</label> </div><div class="col-12 ">
  <select name="Sexo" id="Sexo" class="form-control" value="<?php echo $dado['Sexo']; ?>">
                                                           
   <option value="Masculino">Masculino</option>
   <option value="Feminino">Feminino</option>
   </select>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div> <!-- .card -->

                        </div>
                        <!--/.col-->
						
						<div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Parceiros</strong>
                                </div>
                                <div class="card-body">
                                    <!-- Credit Card -->
                                    <div id="pay-invoice">
                                        <div class="card-body">
											<div class="form-group">
                                            
                                                
<label for="BoSamu" class="control-label mb-1">BOSAMU</label>
<input id="BoSamu" name="BoSamu" placeholder = "Número BoSamu" type="text" class="form-control"
aria-required="false" aria-invalid="false"  value="<?php echo $dado['BoSamu']; ?>">
</div>

<div class="form-group">
<label for="BoPrf" class="control-label mb-1">BOPRF</label>
<input id="BoPrf" name="BoPrf" placeholder = "Número BoPrf" type="text" class="form-control" aria-required="false" aria-invalid="false" 

value="<?php echo $dado['BoPrf']; ?>" >
</div>
											
<div class="form-group">
<label for="BoSmtt" class="control-label mb-1">BOSMTT</label>
<input id="BoSmtt" name="BoSmtt" placeholder = "Número BoSmtt" type="text" class="form-control"
aria-required="false" aria-invalid="false" 


value="<?php echo $dado['BoSmtt']; ?>" >
</div>
												
                                                
                                                
<div class="form-group">
<label for="BoHmcm" class="control-label mb-1">BOHMCM</label>
<input id="BoHmcm" name="BoHmcm" placeholder = "Número BoHmCM" type="text" class="form-control"
aria-required="false" aria-invalid="false"
                                                    
value="<?php echo $dado['BoHmcm']; ?>" >
</div>


<div class="form-group">
<label for="BoHmd" class="control-label mb-1">BOHMD</label>
<input id="BoHmd" name="BoHmd" placeholder = "Número BoHmD" type="text" class="form-control"
aria-required="false" aria-invalid="false"

value="<?php echo $dado['BoHmd']; ?>"  >
</div>
											
<div class="form-group">
<label for="BoUeca" class="control-label mb-1">BOUECA</label>
 <input id="BoUeca" name="BoUeca" placeholder = "Número BoUeCa" type="text" class="form-control"
aria-required="false" aria-invalid="false"

 value="<?php echo $dado['BoUeca']; ?>" >
                                            </div>
											
										</div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .card -->
						<div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"><strong>Dados do Acidente</strong><small></div>
<div class="card-body ">
<div class="form-group">
<label for="LocalAcid" class="control-label mb-1">Local do Acidente</label>
<input id="LocalAcid" name="LocalAcid" type="text"
class="form-control cc-name valid" data-val="true" data-val-required=""
autocomplete="cc-name" aria-required="true" aria-invalid="false"
aria-describedby="cc-name-error" placeholder = "Local do Acidente"

value="<?php echo $dado['LocalAcid']; ?>">

                                        
                                    </div>
<div class="form-group"><label for="PonRefLocAcid" class=" form-control-label">Ponto de Referência</label><input type="text" id="PonRefLocAcid" name="PonRefLocAcid" placeholder="Ponto de Referência do Acidente" class="form-control"

value="<?php echo $dado['PonRefLocAcid']; ?>">
									</div>
                                    

 <div class="form-group"><label for="BairroAcid" class=" form-control-label">Bairro do Acidente</label><input type="text" id="BairroAcid" name="BairroAcid" placeholder="Bairro do Acidente"
                                            class="form-control"
                                           
                                            
value="<?php echo $dado['BairroAcid']; ?>">
</div>
									
                                    
                                   
<div class="row"><div class="col-6"><div class="form-group">
<label for="DtAcidente" class="control-label mb-1">Data do Acidente</label>
<input id="DtAcidente" name="DtAcidente" type="date"class="form-control cc-exp" required  data-val="true"data-val-required="Please enter the card expiration"
 data-val-cc-exp="Please enter a valid month and year"placeholder="Ano/Mês/Dias" autocomplete="cc-exp"
                                                            
 value="<?php echo $dado['DtAcidente']; ?>">
                                                        
                                                        
 <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
             </div>
 </div>
											
                                            
 <div class = "col-6">
<div class="form-group">
<label for="DtObito" class="control-label mb-1">Data do Obito</label>
<input id="DtObito" name="DtObito" type="date" class="form-control cc-exp" required data-val="true"data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year"placeholder="Ano/Mês/Dias" autocomplete="cc-exp"

value="<?php echo $dado['DtObito']; ?>">
>
															<span class="help-block" data-valmsg-for="cc-exp"data-valmsg-replace="true"></span>
													</div>
												</div>
												
												<div class = "col-6">
													<div class="form-group">
<label for="HoraAcid" class="control-label">Hora do Acidente</label>
<input id="HoraAcid" name="HoraAcid" type="time" class="form-control cc-exp" required
data-val="true"data-val-required="Please enter the card expiration"
data-val-cc-exp="Please enter a valid month and year"placeholder="" autocomplete="cc-exp"

value="<?php echo $dado['HoraAcid']; ?>">
															<span class="help-block" data-valmsg-for="cc-exp" ata-valmsg-replace="true"></span>
													</div>
												</div>
                                            </div>
										
										<div class="form-group">
  <label for="TipoDeVeicAcid" class="control-label mb-1">Tipo de Veículo</label>
 <input id="TipoDeVeicAcid" name="TipoDeVeicAcid" type="text" class="form-control cc-exp" data-val="true"data-val-required="Please enter the card expiration"
data-val-cc-exp="Please enter a valid month and year"
placeholder="Tipo de Veículo" autocomplete="cc-exp"


value="<?php echo $dado['TipoDeVeicAcid']; ?>">
<span class="help-block" data-valmsg-for="cc-exp"
data-valmsg-replace="true"></span>
                                        </div>
                                        
                                        
										<div class="form-group">
                                          
 <label for="NaturezaAcid" class="control-label mb-1">Natureza do Acidente</label>
 <input id="NaturezaAcid" name="NaturezaAcid" type="text" class="form-control cc-exp"
 data-val="true"
 data-val-cc-exp="Please enter a valid month and year"
 placeholder="Coloque a causa do acidente" autocomplete="cc-exp"
 
 
 value="<?php echo $dado['NaturezaAcid']; ?>">
                                            <span class="help-block" data-valmsg-for="cc-exp"
                                                data-valmsg-replace="true"></span>
                                        </div>
										
                                        
 <div class="form-group">
 <label for="ObservAcidente" class="control-label mb-1">Observação</label>
 <textarea id="ObservAcidente" name="ObservAcidente" class = "form-control"
 size = "300" >
                                                
 <?php echo $dado['ObservAcidente']; ?></textarea>
                                        </div>
                                    
                                </div>
							</div>
						</div>
                    </div>
						
				</div>
							
				<div class = "col-lg-6">
					<button type="submit" class="btn btn-primary btn-lg">Atualizar</button>
				</div>

                               
            </div>
		</form>
	</div>

    <!--<script src="assets/js/verificarcampos.js"></script>-->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

    <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>