<!-- MAIN CONTENT oculto-->

            
            <div class="drawer drawer--modal js-drawer js-drawer--modal" id="drawer3">
                <div class="drawer__content" role="alertdialog"  aria-labelledby="drawerTitle3">
                  <div class="drawer__body padding-x-md padding-y-sm js-drawer__body">
                    <div class="text-component">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">

                          

                            <div class="col-lg-12 w-100 p-3">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>Grupos Virtuales</h3>
                                        <button class="au-btn-plus" data-toggle="modal" data-target="#modal-GVirtual">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Grupos Virtuales Existentes</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                            <a href="EspañolI-3.php">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        Fray Pedro de Gante
                                                    </h5>
                                                    <span class="time">Español I</span>
                                                </div>
</a>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">UVM</a>
                                                    </h5>
                                                    <span class="time">Matemáticas II</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">UVM</a>
                                                    </h5>
                                                    <span class="time">Fisica II</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Fray Servando</a>
                                                    </h5>
                                                    <span class="time">Español I</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">UVM</a>
                                                    </h5>
                                                    <span class="time">Literatura</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">UVM</a>
                                                    </h5>
                                                    <span class="time">Computación</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>




                         
                        </div>
                    </div>
                </div>
            </div>

            </div>
            </div>  
            </div>  
            </div>


        <!--Fin contenido oculto-->



         <!-- modal large -->
			<div class="modal fade" id="modal-GVirtual" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel">Agregar Grupo Virtual</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
                        <div class="card">
                            <div class="card-header">
                                <strong>Ingrese informacion del curso</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" class="" id="formulario">
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Instituto</label>
                                        <input type="email" id="nf-email" name="nf-email" placeholder="Ingrese nombre del instituto" class="form-control">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Nombre del grupo</label>
                                        <input type="password" id="nf-password" name="nf-password" placeholder="Ingrese nombre del grupo" class="form-control">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Fin del curso</label>
                                        <input type="date" id="nf-password" name="nf-password" placeholder="Ingrese nombre del grupo" class="form-control">
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


