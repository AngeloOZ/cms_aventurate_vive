<!DOCTYPE html>
<html lang="es">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <!-- Meta, title, CSS, favicons, etc. -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php require_once INCLUDES . 'header_enlaces_admin.php'; ?>

   <title>CMS - Galeria</title>
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
               <!-- Galeria -->
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="x_panel">
                        <div class="x_title">
                           <h2>Galeria</h2>
                           <button class="btn btn-primary col-md-2 alignright" data-toggle="modal" data-target=".bs-example-modal-lg">Añadir foto</button>
                           <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                           <div class="row">
                           </div>
                           <div class="row" id="contenedor_galeria">
                              <!-- images -->
                              <?php foreach ($params as $key => $photo) : ?>
                              <div class="col-md-55">
                                 <div class="thumbnail">
                                    <div class="image view view-first" data-id-photo="<?php echo $photo["id_photo"]; ?>">
                                       <img loading="lazy" style="width: 100%; display: block;" src="<?php echo $photo["url_photo"] ?>" alt="<?php echo $photo["caption_photo"]; ?>" />
                                       <div class="mask">
                                          <p><?php echo $photo["caption_photo"]; ?></p>
                                          <div class="tools tools-bottom">
                                             <a class="btn_edit_photos" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-pencil"></i></a>
                                             <a class="btn_delete_photos" href="#"><i class="fa fa-times"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="caption">
                                       <p><?php echo $photo["caption_photo"]; ?></p>
                                    </div>
                                 </div>
                              </div>
                              <?php endforeach; ?>
                              <!-- images />-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- galeria /> -->
            </div>
         </div>
         <!-- /page content -->

         <!-- Large modal -->
         <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                     </button>
                     <h4 class="modal-title" id="myModalLabel">Gestor de galeria</h4>
                  </div>
                  <div class="modal-body">
                     <form id="form-file-photos" data-action-url="<?php echo URL; ?>" data-parsley-validate="" class="form-horizontal form-label-left" _lpchecked="1" enctype="multipart/form-data">
                        <div class="item form-group">
                           <p>Forma de subir imagén</p>
                           <div class="col-md-6 col-sm-6 ">
                              <label for="upfile">Subir archivo</label>
                              <input type="radio" name="typeUpload" id="upfile" checked class="type-up-file">
                              <span style="margin: 0 10px;"></span>
                              <label for="url">URL</label>
                              <input type="radio" name="typeUpload" id="url" class="type-up-file">
                           </div>
                        </div>
                        <div class="item form-group">
                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="input-desc-photo">Descripción<span class="required">*</span>
                           </label>
                           <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="input_desc_photo" name="input_desc_photo" required="required" class="form-control" placeholder="Descripción de foto">
                           </div>
                        </div>
                        <div class="item form-group">
                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="input_file_photo">Archivo <span class="required">*</span>
                           </label>
                           <div class="col-md-6 col-sm-6 ">
                              <input type="file" id="input_file_photo" name="input_file_photo" required="required" class="form-control" accept="image/*">
                           </div>
                        </div>
                        <input type="hidden" name="input_id_photo" id="input_id_photo">
                        <div class="ln_solid"></div>
                        <div class="item form-group ">
                           <div class="col-md-6 col-sm-6 offset-md-3 alignright">
                              <button class="btn btn-primary" type="reset">Limpiar</button>
                              <button type="submit" class="btn btn-success">Guardar</button>
                           </div>
                        </div>
                     </form>  
                     <div class="ln_solid"></div>
                     <div id="preview_photo" class="preview_photo">
                        <img id="preview_photo_img" src="" alt="">
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default close_modal" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- footer content -->
         <?php require_once MODULOS_ADMIN.'footer_section.php'; ?>
      </div>
   </div>
   <?php
   include INCLUDES . 'footer_enlaces_admin.php';
   ?>
</body>

</html>