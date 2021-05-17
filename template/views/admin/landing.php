<!DOCTYPE html>
<html lang="es">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <!-- Meta, title, CSS, favicons, etc. -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php require_once INCLUDES . 'header_enlaces_admin.php'; ?>

   <title>CMS - Landing Page</title>
</head>

<body class="nav-md">
   <div class="container body">
      <div class="main_container">
         <!-- <div class="col-md-3 left_col menu_fixed"> -->
         <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
               <?php include_once MODULOS_ADMIN . 'nav_logo_cms.php'; ?>
               <!-- menu profile quick info -->
               <?php include_once MODULOS_ADMIN . 'nav_profile_cms.php'; ?>
               <!-- sidebar menu -->
               <?php include_once MODULOS_ADMIN . 'sidebar_menu_cms.php'; ?>
               <!-- menu footer buttons -->
               <?php include_once MODULOS_ADMIN . 'footer_menu_cms.php'; ?>
            </div>
         </div>

         <!-- top navigation -->
         <?php include_once MODULOS_ADMIN . 'navigation_top_cms.php'; ?>
         <!-- /top navigation -->

         <!-- page content -->
         <div class="right_col" role="main">
            <div class="">
               <div class="clearfix"></div>
               <!-- Contenedor 1 -->
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="x_panel">
                        <div class="x_title">
                           <h2>Sección Video</h2>
                           <?php require MODULOS_ADMIN . 'setting_section.php' ?>
                           <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                           <form>
                              <div class="form-group">
                                 <label for="">Titulo</label>
                                 <input type="text" class="form-control" name="" id="">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputPassword1">Descripción</label>
                                 <textarea class="form-control" name="" id="" rows="2"></textarea>
                              </div>
                              <div class="form-group">
                                 <label for="">Archivo de video de fondo</label>
                                 <br />
                                 <input type="file" class="form-control-file" id="" accept="video/*">
                                 <small id="" class="form-text text-muted">Si no desea actualizar el video dejelo vacío</small>
                              </div>
                              <br />
                              <div class="row">
                                 <div class="col-xs-6 col-md-3 form-group">
                                    <label for="">Tours</label>
                                    <input type="text" class="form-control" placeholder="8" id="">
                                 </div>
                                 <div class="col-xs-6 col-md-3 form-group">
                                    <label for="">Lugares</label>
                                    <input type="text" class="form-control" placeholder="8" id="">
                                 </div>
                                 <div class="col-xs-6 col-md-3 form-group">
                                    <label for="">Viajes</label>
                                    <input type="text" class="form-control" placeholder="8" id="">
                                 </div>
                                 <div class="col-xs-6 col-md-3 form-group">
                                    <label for="">Opiniones</label>
                                    <input type="text" class="form-control" placeholder="8" id="">
                                 </div>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="form-group alignright">
                                 <button type="reset" class="btn btn-danger">Cancelar</button>
                                 <button type="submit" class="btn btn-primary">Guardar cambios</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Contenedor 1 />-->
               <!-- Contenedor 2 -->
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="x_panel">
                        <div class="x_title">
                           <h2>Sección Quienes somos</h2>
                           <?php require MODULOS_ADMIN . 'setting_section.php' ?>
                           <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                           <form>
                              <div class="form-group">
                                 <label for="summernote">Texto de Quienes somos</label>
                                 <br />
                                 <textarea class="form-control" name="" id="summernote" cols="30" rows="10">
                                 </textarea>
                                 <div class="row">
                                    <div class="col-xs-6 col-md-6 form-group">
                                       <label for="">Descripción de la foto</label>
                                       <input type="text" class="form-control" placeholder="Detalle foto" id="" required>
                                    </div>
                                    <div class="col-xs-6 col-md-6 form-group">
                                       <br />
                                       <input type="file" class="form-control-file" id="" accept="image/png, .jpeg, .jpg, .webp, .svg">
                                       <small id="" class="form-text text-muted">Si no desea actualizar la foto deje vacío</small>
                                    </div>
                                 </div>
                                 <br />
                                 <div class="ln_solid"></div>
                                 <div class="form-group alignright">
                                    <button type="reset" class="btn btn-danger">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                 </div>
                           </form>

                        </div>
                     </div>
                  </div>
               </div>
               <!-- Contenedor 2 />-->
               <!-- Contenedor 3 -->
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="x_panel">
                        <div class="x_title">
                           <h2>Sección Tipos de turismo</h2>
                           <?php require MODULOS_ADMIN . 'setting_section.php' ?>
                           <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                           <form>
                              <div class="ln_solid"></div>
                              <h3>Primero</h3>
                              <div class="form-group">
                                 <label for="">Icono</label>
                                 <input type="text" class="form-control" name="" id="" placeholder="bike">
                              </div>
                              <div class="form-group">
                                 <label for="">Texto</label>
                                 <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Los mejores sitios">
                              </div>
                              <div class="ln_solid"></div>
                              <h3>Segundo</h3>
                              <div class="form-group">
                                 <label for="">Icono</label>
                                 <input type="text" class="form-control" name="" id="" placeholder="bike">
                              </div>
                              <div class="form-group">
                                 <label for="">Texto</label>
                                 <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Los mejores sitios">
                              </div>
                              <div class="ln_solid"></div>
                              <h3>Tercero</h3>
                              <div class="form-group">
                                 <label for="">Icono</label>
                                 <input type="text" class="form-control" name="" id="" placeholder="bike">
                              </div>
                              <div class="form-group">
                                 <label for="">Texto</label>
                                 <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Los mejores sitios">
                              </div>
                              <div class="row" style="padding: 10px;">
                                 <a href="https://fonts.google.com/icons" target="_blank" rel="noopener noreferrer" class="btn btn-dark">Fuente de iconos</a>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="form-group alignright">
                                 <button type="reset" class="btn btn-danger">Cancelar</button>
                                 <button type="submit" class="btn btn-primary">Guardar cambios</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Contenedor 3 />-->
               <!-- Contenedor 4 -->
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="x_panel">
                        <div class="x_title">
                           <h2>Sección Galeria</h2>
                           <?php require MODULOS_ADMIN . 'setting_section.php' ?>
                           <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                           <form>
                              <div class="form-group">
                                 <label for="">Texto de sección galeria</label>
                                 <textarea name="" id="" style="resize: none;" class="form-control" cols="30" rows="2" required></textarea>
                              </div>
                              <div class="clearfix"></div>
                              <h4>Primera foto</h4>
                              <div class="row">
                                 <div class="col-xs-6 col-md-6 form-group">
                                    <label for="">Descripción</label>
                                    <input type="text" class="form-control" placeholder="Detalle foto" id="" required>
                                 </div>
                                 <div class="col-xs-6 col-md-6 form-group">
                                    <br />
                                    <input type="file" class="form-control-file" id="" accept="image/png, .jpeg, .jpg, .webp, .svg">
                                    <small id="" class="form-text text-muted">Si no desea actualizar la foto deje vacío</small>
                                 </div>
                              </div>
                              <h4>Segunda foto</h4>
                              <div class="row">
                                 <div class="col-xs-6 col-md-6 form-group">
                                    <label for="">Descripción</label>
                                    <input type="text" class="form-control" placeholder="Detalle foto" id="" required>
                                 </div>
                                 <div class="col-xs-6 col-md-6 form-group">
                                    <br />
                                    <input type="file" class="form-control-file" id="" accept="image/png, .jpeg, .jpg, .webp, .svg">
                                    <small id="" class="form-text text-muted">Si no desea actualizar la foto deje vacío</small>
                                 </div>
                              </div>
                              <h4>Tercera foto</h4>
                              <div class="row">
                                 <div class="col-xs-6 col-md-6 form-group">
                                    <label for="">Descripción</label>
                                    <input type="text" class="form-control" placeholder="Detalle foto" id="" required>
                                 </div>
                                 <div class="col-xs-6 col-md-6 form-group">
                                    <br />
                                    <input type="file" class="form-control-file" id="" accept="image/png, .jpeg, .jpg, .webp, .svg">
                                    <small id="" class="form-text text-muted">Si no desea actualizar la foto deje vacío</small>
                                 </div>
                              </div>
                              <h4>Cuarta foto</h4>
                              <div class="row">
                                 <div class="col-xs-6 col-md-6 form-group">
                                    <label for="">Descripción</label>
                                    <input type="text" class="form-control" placeholder="Detalle foto" id="" required>
                                 </div>
                                 <div class="col-xs-6 col-md-6 form-group">
                                    <br />
                                    <input type="file" class="form-control-file" id="" accept="image/png, .jpeg, .jpg, .webp, .svg">
                                    <small id="" class="form-text text-muted">Si no desea actualizar la foto deje vacío</small>
                                 </div>
                              </div>
                              <h4>Quinta foto</h4>
                              <div class="row">
                                 <div class="col-xs-6 col-md-6 form-group">
                                    <label for="">Descripción</label>
                                    <input type="text" class="form-control" placeholder="Detalle foto" id="" required>
                                 </div>
                                 <div class="col-xs-6 col-md-6 form-group">
                                    <br />
                                    <input type="file" class="form-control-file" id="" accept="image/png, .jpeg, .jpg, .webp, .svg">
                                    <small id="" class="form-text text-muted">Si no desea actualizar la foto deje vacío</small>
                                 </div>
                              </div>
                              <h4>Sexta foto</h4>
                              <div class="row">
                                 <div class="col-xs-6 col-md-6 form-group">
                                    <label for="">Descripción</label>
                                    <input type="text" class="form-control" placeholder="Detalle foto" id="" required>
                                 </div>
                                 <div class="col-xs-6 col-md-6 form-group">
                                    <br />
                                    <input type="file" class="form-control-file" id="" accept="image/png, .jpeg, .jpg, .webp, .svg">
                                    <small id="" class="form-text text-muted">Si no desea actualizar la foto deje vacío</small>
                                 </div>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="form-group alignright">
                                 <button type="reset" class="btn btn-danger">Cancelar</button>
                                 <button type="submit" class="btn btn-primary">Guardar cambios</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Contenedor 4 />-->
            </div>
         </div>
         <!-- /page content -->
         <!-- footer content -->
         <?php require_once MODULOS_ADMIN.'footer_section.php'; ?>
      </div>
   </div>
   <?php
   include INCLUDES . 'footer_enlaces_admin.php';
   ?>
   <script>
      $('#summernote').summernote({
         height: 150,
         codeviewFilter: true,
         toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['fontsize', ['fontsize']],
            ['height', ['height']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['view', ['codeview']],
         ]
      });
   </script>
</body>

</html>