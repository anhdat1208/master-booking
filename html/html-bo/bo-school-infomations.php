<!doctype html>
<html lang="en">
   <?php require_once('head.php'); ?>
   <body>
      <div class="wrapper_page">
         <?php $t = 2; require_once('bo-header.php'); ?>
         <?php require_once('bo-nav.php'); ?>

         <div class="content-dboard content-md">
            <?php require_once('bo-block-informations.php'); ?>
            
            <div class="bo-main-content">
                 
                <nav aria-label="breadcrumb" class="nav-breadcrumb">
                 <ol class="breadcrumb mb-0">
                   <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Informations</li>
                 </ol>
               </nav>

               <div class="bo-heading mt-0">
                  <div class="line-2style">
                     <span class="line-pri"></span><span class="line-sec"></span>
                  </div>
                  <div class="row">
                     <div class="col-auto"> 
                        <h2 class="card-title mb-0">Établissement</h2> 
                     </div> 
                     <div class="col-auto"><a href="#" class="btn btn-default btn-default-bo btn-view"><i class="bo_sprites bg-ibo-eye"></i> Prévisualiser ma fiche</a></div>
                  </div>
               </div>
               <!-- /bo-heading -->
               <!-- <div class="alert alert-danger" role="alert">Pour modifier des informations de la fiche établissement, contactez l’administraeur escole, Mr Jean Du Jardin</div> -->

               <?php require_once('bo-block-uploadfiles-school.php'); ?> 

               <div class="bo-card">
                     <div class="form-row">
                        <div class="col-sm-4">
                           <div class="form-group has-tt">
                              <label for="">Nom de l’établissement</label>
                              <input type="text" class="form-control" id="" value="IAE NICE">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="">Sous titre</label>
                              <input type="text" class="form-control" id="" value="Institut d’administration des entreprises de Nice">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="">Type d’établissement</label>
                              <span class="ml-1 icon-info" data-toggle="tooltip" data-placement="top" title="Lorem ipsum dolor sit amet, ei dolore veritus pro, has no esse apeirian reprimique."><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                              <select class="form-control custom-select">
                                <option selected="">ES</option>
                                <option>#option#</option>
                                <option>#option#</option>
                              </select> 
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="">Pays</label> <!-- <a href="#" title="" class="bt-icon-add"><span class="ic-add"></span></a>  -->
                              <select class="form-control select2" multiple="multiple" data-placeholder="Pays">
                                 <option selected="">France</option>
                                 <option selected="">Espagne</option>
                                 <option>option 1</option>
                                 <option>option 2</option>
                                 <option>option 3</option>
                               </select> 
                           </div>  
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="">Ville</label><!-- <a href="#" title="" class="bt-icon-add"><span class="ic-add"></span></a>  -->
                              <select class="form-control select2" multiple="multiple" data-placeholder="Nice, Paris, Toulouse, Barcelone" >
                                 <option selected>Nice</option>
                                 <option selected>Paris</option>
                                 <option>Tennessee</option>                                 
                                 <option selected>Toulouse</option>
                                 <option>Barcelone</option>
                                 <option>option 1</option>
                                 <option>option 2</option>
                                 <option>option 3</option>
                               </select>
                               <span class="help-block">La sélection multiple est possible</span>
                           </div>                           
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="">Site web</label>
                              <input type="url" class="form-control" id="" value="http://iae.univ-lyon3.fr/"> 
                           </div>
                        </div>
                     </div>   

                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="">URL Facebook</label>
                              <input type="url" class="form-control" id="" value="https://www.facebook.com/Officiel.IAELyon"> 
                           </div>
                        </div> 
                         <div class="col-md-6">
                           <div class="form-group">
                              <label for="">URL Twitter</label>
                              <input type="url" class="form-control" id="" value="https://twitter.com/IAE_Lyon"> 
                           </div> 
                        </div> 
                     </div>  
                    <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="">URL Linkedin</label>
                              <input type="url" class="form-control" id="" value="https://www.linkedin.com/edu/school?id=43416"> 
                           </div>
                        </div>
                        <div class="col-md-6">              
                           <div class="form-group">
                              <label for="">URL Instagram</label>
                              <input type="url" class="form-control" id="" value="https://www.instagram.com"> 
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="">URL Youtube</label>
                              <input type="url" class="form-control" id="" value="https://www.youtube.com/channel/UCrrdnp2zTnMjZvJHPjLD3_g?feature=em-first_upload"> 
                           </div> 
                        </div>
                        <div class="col-md-6 md-pdl-0">
                            
                        </div> 
                     </div>

                     <div class="form-group">
                        <label for="">Résumé <span class="ml-1 icon-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lorem ipsum dolor sit amet, ei dolore veritus pro, has no esse apeirian reprimique."><i class="fa fa-info-circle" aria-hidden="true"></i> </span></label>
                        <textarea class="form-control" rows="3"> Lorem ipsum dolor sit amet, posuere curabitur id, enim aliquam qui, proin sed diam et eu mauris cum, in conubia velit tortor, suspendisse nascetur euismod integer id ac justo. Id suspendisse quis magnis lectus per integer.
                        </textarea> 
                     </div>
                     
                     <div class="form-group">
                        <label for="">Description</label> 
                        <div class="jstxt-editor">
                           IAE Lyon School of Management - Université Jean Moulin, créé en 1956, est l'un des tout premiers pôles universitaires français de formation et de recherche gestion et management. 
                           <p>L’iaelyon offre à ses 7.500 étudiants de formation initiale et participants de formation continue des parcours professionnalisants de haut niveau et un enseignement d’excellence dans le domaine de la gestion et du management. 160 enseignants permanents associés à plus de 400 intervenants professionnels préparent ainsi de futurs décideurs responsables et adaptés aux nouvelles réalités des mondes professionnels.<br></p>
                           <ul>
                              <li>Aenean non ultricies erat. Pellentesque nisl dui, egestas at justo sed, tincidunt mollis nibh. </li>
                              <li>Aliquam auctor facilisis nulla ut euismod.</li>
                           </ul>
                           <p>Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. </p>
                           <ol>
                              <li>Pellentesque nisl dui, egestas at justo sed, tincidunt mollis nibh. </li>
                              <li>Aliquam lorem ante facilisis nulla ut euismod.</li>
                           </ol>
                        </div> 
                     </div>

                     <div class="bo-heading">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="line-2style">
                                 <span class="line-pri"></span><span class="line-sec"></span>
                              </div>
                              <h2 class="card-title">Information de contact</h2> 
                           </div> 
                        </div>
                     </div> 
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="">Téléphone</label>
                              <input type="text" class="form-control" value="123456789">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="">Email</label>
                              <input type="email" class="form-control" value="comm-iae@unice.fr"> 
                           </div>
                        </div> 
                     </div>
                     <div class="form-group mb-1">
                        <label for="">Adresse</label>
                        <a href="#" class="bt-icon-add" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ajouter une adresse"><span class="ic-add"></span></a>
                     </div>
                    <div class="row">
                        <div class="col-sm-3 form-group">
                           <label class="sub-label" for="">No et nom de la rue</label> 
                           <input type="text" class="form-control" value="63 Rue de la Pradelle">
                        </div>
                        <div class="col-sm-3 form-group">
                           <label class="sub-label" for="">Code postal</label> 
                           <input type="text" class="form-control" value="63000">
                        </div>
                        <div class="col-sm-3 form-group">
                           <label class="sub-label" for="">Ville</label> 
                           <select class="form-control select2" data-placeholder="Ville">
                              <option>France</option> 
                           </select>
                        </div>
                        <div class="col-sm-3 form-group">
                           <label class="sub-label" for="">Pays</label> 
                           <select class="form-control select2" data-placeholder="Pays">
                                 <option value="1" >Agen</option>
                                <option value="2" >Aix-En-Provence</option>
                                <option value="3" >Albertville</option>
                                <option value="4" >Albi</option>
                                <option value="5" >Alès</option>
                                <option value="6" >Amiens</option>
                                <option value="7" >Angers</option>
                                <option value="8" >Angoulême</option>
                                <option value="9" >Annecy</option>
                                <option value="10" >Annecy-Le-Vieux</option>
                           </select>
                        </div>
                    </div> 
                     
                     <div class="ft-right">                         
                        <a href="#" class="btn btn-default btn-default-bo btn-view"><i class="bo_sprites bg-ibo-eye"></i> Prévisualiser ma fiche</a>

                        <button class="btn btn-lg btn-primary" type="submit" data-toggle="modal" data-target="#edit-school-submit-btn">
                           <i class="material-icons"> check_circle_outline </i>
                           <span class="process-hidden processing"><i class="fa fa-spinner fa-pulse "></i></span> Valider
                        </button>              
                     </div>
               </div><!-- /.bo-card -->
 

 

            </div><!-- /bo-main-content -->
         </div>
         <!-- /.content-dboard -->  
         <?php require_once('bo-footer.php'); ?> 
      </div>
      <!--/.wrapper_page-->

      <div class="modal fade modal-style-disponible" id="edit-school-submit-btn" tabindex="-1" role="dialog" style="display: none;">
          <div class="modal-dialog width_md" role="document">
              <div class="modal-content">
                  <div class="modal-body modal-disponible">
                      <div class="d_logo">
                          <img src="images/logo-main.png" alt="" width="200">
                      </div>
                      <div class="d_modal_content text-center">Les informations sur votre établissement ont été mises à jour avec succès!</div>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  </div>
              </div>
          </div>
      </div>

      <!-- start popup Change Pass -->
      <div class="modal fade modal-style-disponible" id="change-password-modal" role="dialog" style="display: none;">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="title-modal">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="lnr lnr-cross"></span></button>
                  <span>Changer mot de passe</span>
               </div>
               <div class="modal-body">                  
                  <div class="row">
                     <form class="col-sm-offset-2 col-sm-8" action="" method="post" id="change-password-form" novalidate="novalidate">
                        <div class="alert alert-danger" role="alert" style="display: none;">
                        </div>
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <label>Ancien mot de passe</label>
                                 <input type="password" class="form-control" id="password_old" name="password_old" required="" aria-required="true">
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <label>Nouveau mot de passe</label>
                                 <input type="password" id="password_new" name="password_new" class="form-control" required="" minlength="8" aria-required="true">
                                 <span class="validity"></span>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <label>Confirmer nouveau mot de passe</label>
                                 <input type="password" class="form-control" name="password_confir" id="password_confir" required="" aria-required="true">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12 text-center">
                              <button class="btn btn-lg btn-valider" id="update-user-profile-btn"><i class="bo_sprites bg-ibo-valid"></i> Valider</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /#change-password-modal -->

   </body>
</html>