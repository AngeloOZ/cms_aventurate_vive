<?php
$add = (isset($params["action"]) && $params["action"] == "registrar") ? true : false;
$text = ($add) ? "Registrar" : "Editar";
$places = $params["num_places"];
$num_places = count($places);
?>
<!DOCTYPE html>
<html lang="es">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <!-- Meta, title, CSS, favicons, etc. -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php require_once INCLUDES . 'header_enlaces_admin.php'; ?>
   <title>CMS -Registrar paquetes</title>
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
               <div class="page-title">
                  <div class="title_left">
                     <h3><?php echo $text; ?> tour</h3>
                     <br>
                  </div>
               </div>
               <div class="clearfix"></div>
               <div class="container">
                  <form action="<?php echo URL . 'admin-paquetes/registarpaquete'; ?>" method="POST" enctype="multipart/form-data">
                     <!-- titulo del tour -->
                     <div class="form-group">
                        <h4><label for="">Titulo</label></h4>
                        <input type="text" name="tour_title" class="form-control" placeholder="Un tour bonito" value="Trip Imbabura" required>
                     </div>
                     <!-- descripcion del tour -->
                     <div class="form-group">
                        <h4><label for="">Descripción corta</label></h4>
                        <textarea name="tour_short_caption" class="form-control" rows="2" placeholder="Un tour bonito y divertido">Es un lugar muy bonito</textarea>
                     </div>
                     <!-- foto del tour -->
                     <div class="row">
                        <div class="col-xs-6 col-md-6 form-group">
                           <h4><label for="">Descripción de la foto principal</label></h4>
                           <input type="text" name="tour_caption_main_photo" class="form-control" placeholder="Lindo sol" value="sol bonito" required>
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                           <h4><label for="">Url de la foto</label></h4>
                           <input type="url" name="tour_main_photo" class="form-control" placeholder="https://www.dominio.com/sol-bonito.webp" value="https://ik.imagekit.io/cb8xtf7zmv/tours/basilica_91IUdcTMEf.jpg" required>
                        </div>
                     </div>
                     <br>
                     <!-- lugares e atractivos -->
                     <div class="" id="contenedor-lugares">
                        <?php for ($i = 1; $i <= $num_places; $i++) : ?>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                 <div class="x_title">
                                    <h2 style="color: royalblue; font-weight: bold;">Lugar <?php echo $i; ?></h2>
                                    <?php include MODULOS_ADMIN . 'setting_section.php'; ?>
                                    <div class="clearfix"></div>
                                 </div>
                                 <div class="x_content">
                                    <div class="form-group">
                                       <label for="">Titulo del lugar</label>
                                       <input type="text" name="<?php echo "places[{$i}][title]"; ?>" class="form-control" placeholder="Un lugar bonito" value="Un lugar bonito <?php echo $i; ?>" required>
                                    </div>
                                    <div class="form-group">
                                       <label for="">Descripcion del lugar</label>
                                       <textarea name="<?php echo "places[{$i}][caption]"; ?>" class="form-control summernote" rows="2">Es un lugar chiquito pero bonito <?php echo $i; ?></textarea>
                                    </div>
                                    <!-- atractivos -->
                                    <?php for ($j = 1; $j <= $places["place_{$i}"]; $j++) : ?>
                                       <div class="container">
                                          <h3 style="color: royalblue;">Atratactivo <?php echo $j; ?></h3>
                                          <div class="form-group">
                                             <label for="">Titulo del atractivo</label>
                                             <input type="text" name="<?php echo "places[{$i}][attractive][{$j}][title]"; ?>" class="form-control" placeholder="Un atractivo bonito" value="<?php echo "Lugar {$i} atractivo {$j}"; ?>" required>
                                          </div>
                                          <div class="form-group">
                                             <label for="">Descripcion del atrctivo</label>
                                             <textarea name="<?php echo "places[{$i}][attractive][{$j}][caption]"; ?>" class="form-control summernote" rows="2"><?php echo "descripcion del lugar bonito {$i} atractivo {$j}"; ?>
                                          </textarea>
                                          </div>
                                          <div class="row">
                                             <div class="col-xs-6 col-md-6 form-group">
                                                <label for="">Descripción de la foto</label>
                                                <input type="text" name="<?php echo "places[{$i}][attractive][{$j}][caption_photo]"; ?>" class="form-control" placeholder="Lindo sol" required value="<?php echo "linda luna L:{$i} - Atr:{$j}"; ?>">
                                             </div>
                                             <div class="col-xs-6 col-md-6 form-group">
                                                <label for="">Url de la foto</label>
                                                <input type="url" name="<?php echo "places[{$i}][attractive][{$j}][url_photo]"; ?>" class="form-control" placeholder="https://www.dominio.com/sol-bonito.webp" value="https://ik.imagekit.io/cb8xtf7zmv/tours/basilica_91IUdcTMEf.jpg" required>
                                             </div>
                                          </div>
                                       </div>
                                    <?php endfor; ?>
                                    <!-- atractivos /> -->
                                 </div>
                              </div>
                           </div>
                        <?php endfor; ?>
                     </div>
                     <div class="clearfix"></div>
                     <!-- mapa -->
                     <div class="form-group">
                        <h4><label for="ruta-mapa">Mapa del ruta</label></h4>
                        <textarea id="ruta-mapa" name="tour_maps" class="form-control" rows="4" placeholder="<iframe src='https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15959.09272581305!2d-79.18463389229736!3d-0' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe>" required>un lindo iframe de google</textarea>
                     </div>
                     <div class="clearfix"></div>
                     <!-- itinerario -->
                     <div class="container">
                        <div class="row">
                           <h3 class="col-sm-2"><label for="ruta-mapa">Itinerario</label></h3>
                           <div class="col-sm-5"></div>
                           <a class="col-sm-2 btn btn-primary" id="btn_add_day_tour" style="margin-top: 5px;">Añadir día</a>
                           <a class="col-sm-2 btn btn-danger" id="btn_days_clear" style="margin-top: 5px;">Limpiar itinerario</a>
                           <br>
                        </div>
                        <div id="contenedor_days_tour">
                        </div>
                     </div>
                     <!-- que incluye -->
                     <div class="form-group">
                        <h4><label for="">¿Qué incluye?</label></h4>
                        <textarea name="tour_what_include" class="form-control summernote" rows="2">incluye todo</textarea>
                     </div>
                     <div class="clearfix"></div>
                     <!-- que no incluye -->
                     <div class="form-group">
                        <h4><label for="">¿Qué no incluye?</label></h4>
                        <textarea name="tour_what_not_include" class="form-control summernote" rows="2">no incluye nada</textarea>
                     </div>
                     <div class="clearfix"></div>
                     <!-- condiciones del tour -->
                     <div class="form-group">
                        <h4><label for="">Condiciones del tour</label></h4>
                        <textarea name="tour_terms_and_conditions" class="form-control summernote" rows="2">llevar plata</textarea>
                     </div>
                     <!-- button submit -->
                     <div class="row text-center">
                        <input type="reset" class="btn btn-danger" value="limpiar campos">
                        <input type="submit" class="btn btn-primary" value="Guardar tour">
                     </div>
                  </form>

               </div>
            </div>
         </div>
         <!-- /page content -->
         <!-- footer content -->
         <?php require_once MODULOS_ADMIN . 'footer_section.php'; ?>
      </div>
   </div>
   <?php include INCLUDES . 'footer_enlaces_admin.php'; ?>
   <script type="text/javascript">
      $(document).ready(function() {
         $('.summernote').summernote({
            height: 100,
            codeviewFilter: true,
            toolbar: [
               ['style', ['bold', 'italic', 'underline', 'clear']],
               ['fontname', ['fontname', '']],
               ['fontsize', ['fontsize']],
               ['height', ['height']],
               ['color', ['color']],
               ['para', ['ul', 'ol', 'paragraph']],
               ['view', ['codeview']],
            ]
         });
      });
   </script>

</body>

</html>