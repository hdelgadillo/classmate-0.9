<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="css/modal.css">

    
<script>

    $(document).on('click', '#boton-enviar', function(e) {
        e.preventDefault();
        swal({
      title: "Actividad Creada Con exito",
      text: "Actividad finaliza 26 ago 2020",
      icon: "success",
    
     
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.replace("EspañolI.php");
      } else {
        swal("Your imaginary file is safe!");
      }
    });
    
    });









    $(document).on('click', '#boton-zoom', function(e) {
        e.preventDefault();
        swal({
      title: "Actividad Creada Con exito",
      text: "Reunion de Zoom creada con exito",
      icon: "success",
    
     
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.replace("EspañolI.php");
      } else {
        swal("Your imaginary file is safe!");
      }
    });
    
    });
</script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/myclassmate.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <?php 
		   include 'menu_sidebar.html';
	  ?>
    <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
				<?php 
					include 'header_desk.html';
				?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h2 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>Fray servando<br> </h2>  
                                        <a href="">
                                        <div class="title-3 m-b-20">
                                            Español I </div>

                                            <div class="float-right">

                                                <a href="#"  data-toggle="modal" data-target="#modalZoom">
                                                <button type="button"class="btn btn-primary " >
                                                <i class="fas fa-video-camera"></i> Iniciar Conferencia de Zoom
                                                  </button>
                                                </a>

                                                <a href="#">
                                                <button type="button" class="btn btn-primary">
                                                 < 
                                                  </button>
                                                </a>

                                                  <a href="EspañolI-2.php"> 
                                            <button type="button" class="btn btn-primary">
                                                 >
                                              </button>
                                            </a> 


                                            </div>
                                          
                                            
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Products</option>
                                                <option value="">Services</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">All Time</option>
                                                <option value="">By Month</option>
                                                <option value="">By Day</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>1ER Bimestre</td>
                                                    <td>Alumno</td>
                                                   
                                                    <td>Actividad</td>
                                                    <td>Tarea</td>
                                                    <td>Proyecto</td>
                                                    <td>Equipo</td>
                                                    <td>Timeline</td>
													<td>Calif</td>
													<td>Calif</td>
													<td>Calif</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Clase 1</h6>  <span class=" "><a href="#"><i class="fa fa-comment"  aria-controls="drawer2" aria-hidden="true"></i></a></span>
                                                            <span>
                                                                <a href="#">Linguistica</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role user justify-content-center"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    </td>
                                                  
                                                    <td>
                                                        <button type="button" class="btn btn-success m-l-10 m-b-10">Listo
                                                          </button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning m-l-10 m-b-10">En proceso</button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning m-l-10 m-b-10">En proceso
                                                          </button>
                                                    </td>                                                  
                                                    <td>
                                                        <span class="role user justify-content-center"><i class="fa fa-users" aria-hidden="true"></i></span>
                                                    </td>
                                                    <td>
                                                     <div class="progress mb-3">
                                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="25"
                                                             aria-valuemin="0" aria-valuemax="100">24 Ago</div>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="table-data__info">
                                                            <h4>9</h4>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="table-data__info">
                                                            <h4>9</h4>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="table-data__info">
                                                            <h4>9</h4>
                                                        </div>
                                                    </td>
													<td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Clase 2</h6> <span class=" "><a href="#"><i class="fa fa-comment" aria-controls="drawer2" aria-hidden="true"></i></a></span>
                                                            <span>
                                                                <a href="#">Linguistica</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role user justify-content-center"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    </td>
                                                  
                                                    <td>
                                                        <button type="button" class="btn btn-success m-l-10 m-b-10">Listo   
                                                        </button>
                                                    </td>
                                                    
                                                    <td>
                                                        <button type="button" class="btn btn-success m-l-10 m-b-10">Listo
                                                           
                                                          </button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning m-l-10 m-b-10">En proceso
                                                           
                                                          </button>
                                                    </td>
                                                    <td>
                                                        <span class="role user justify-content-center"><i class="fa fa-users" aria-hidden="true"></i></span>
                                                    </td>
                                                    <td>

                                                        <div class="progress mb-3">
                                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="25"
                                                             aria-valuemin="0" aria-valuemax="100">26 Jul</div>
                                                        </div>

                                                    </td>
													<td>
                                                        <div class="table-data__info">
                                                            <h4>9</h4>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="table-data__info">
                                                            <h4>9</h4>
                                                         
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="table-data__info">
                                                            <h4>9</h4>
                                                         
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Clase 3</h6>  <span class=" "><a href="#"><i class="fa fa-comment" aria-controls="drawer2" aria-hidden="true"></i></a></span>
                                                            <span>
                                                                <a href="#">Proyecto</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role user justify-content-center"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    </td>
                                                   
                                                    <td>
                                                        <button type="button" class="btn btn-success m-l-10 m-b-10">Listo
                                                           
                                                          </button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger m-l-10 m-b-10">Estancado
                                                           
                                                          </button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning m-l-10 m-b-10">En proceso
                                                           
                                                          </button>
                                                    </td>
                                                    <td>
                                                        <span class="role user justify-content-center"><i class="fa fa-users" aria-hidden="true"></i></span>
                                                    </td>
                                                    <td>

                                                    <div class="progress mb-3">
                                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="25"
                                                         aria-valuemin="0" aria-valuemax="100">26 Jul</div>
                                                    </div>

                                                </td>
												<td>
                                                        <div class="table-data__info">
                                                            <h4>8</h4>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="table-data__info">
                                                            <h4>9</h4>
                                                         
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="table-data__info">
                                                            <h4>7</h4>
                                                         
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Examen</h6>  <span class=" "><a href="#"><i class="fa fa-comment" aria-controls="drawer2" aria-hidden="true"></i></a></span>
                                                            <span>
                                                                <a href="#"></a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role user justify-content-center"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    </td>
                                                   
                                                    <td>
                                                        <button type="button" class="btn btn-secondary m-l-10 m-b-10">Listo
                                                           
                                                          </button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary m-l-10 m-b-10">Listo
                                                           
                                                          </button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary m-l-10 m-b-10"> Listo
                                                           
                                                          </button>
                                                    </td>
                                                    <td>
                                                        <span class="role user justify-content-center"><i class="fa fa-users" aria-hidden="true"></i></span>
                                                    </td>

                                                    <td>

                                                        <div class="progress mb-3">
                                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="25"
                                                             aria-valuemin="0" aria-valuemax="100">17 Sept</div>
                                                        </div>

                                                    </td>
													<td>
                                                        <div class="table-data__info">
                                                            <h4>7</h4>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="table-data__info">
                                                            <h4></h4>
                                                         
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="table-data__info">
                                                            <h4></h4>
                                                         
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="user-data__footer">
                                        <button class="au-btn au-btn-load  "  data-toggle="modal" data-target="#largeModal">Agregar</button>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                            </div>
                            <div class="col-lg-6">
                             
                        </div>





                        
    
            



                      
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    
            <?php
           include 'oculto.php';
           include 'oculto2.php';
           ?>



        </div>

    </div>
    <!-- modal large -->
			<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel">Agregar Clase</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
                        <div class="card">
                            <div class="card-header">
                                <strong>Ingrese informacion de lña clase</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" class="" id="formulario">
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Clase</label>
                                        <input type="email" id="nf-email" name="nf-email" placeholder="Ingrese nombre de la clase" class="form-control">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Nombre del grupo</label>
                                        <input type="password" id="nf-password" name="nf-password" placeholder="Ingrese nombre del grupo" class="form-control">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Adjuntar achivo</label>
                                        <input type="file" id="nf-password" name="nf-password" placeholder="Ingrese nombre del grupo" class="form-control">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Fecha de finalizacion</label>
                                        <input type="date" id="nf-password" name="nf-password" placeholder="Ingrese nombre del curso" class="form-control">
                                        <span class="help-block"></span>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" id="boton-enviar" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Enviar
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							
						</div>
					</div>
				</div>
			</div>
            <!-- end modal large -->






            <!--Modal Zoom-->


            <div class="modal fade" id="modalZoom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Crear sala</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate" placeholder="Id de reunion">
          
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate" placeholder="Contraseña">
         
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button  id="boton-zoom" class="btn btn-default">Crear</button>
      </div>
    </div>
  </div>
</div>






            <!--fin modal Zoom-->
    <script src="js/main.min.js"></script>
    <script src="js/menu.js"></script>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
