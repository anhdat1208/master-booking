<!doctype html>
<html lang="en">
   <?php require_once('head.php'); ?>
   <body>
      <div class="wrapper_page">
         <?php $t = 1; require_once('bo-header.php'); ?>
         <?php require_once('bo-nav.php'); ?>
         <div class="content-dboard">
            <?php require_once('bo-block-informations.php'); ?>
            <div class="bo-main-content">
               <div class="bo-heading">
                  <div class="row align-items-center">
                     <div class="col-md-8">
                        <h2 class="card-title mb-0">Bienvenue sur votre Back-office Eduniversal Booking</h2>
                     </div>
                     <div class="col-md-4 text-right">
                        <a href="bo-add-a-program.php" class="btn btn-primary"><i class="material-icons"> add </i> Ajouter un programme</a>                    
                     </div>
                  </div>
               </div>
               <!-- /bo-heading -->
               <div class="bo-card">
                  <div class="card-filter text-right">
                     <form class="form-inline form-search-tb">
                        <div class="form-group">
                           <label for="">RECHERCHE</label>
                           <input type="text" class="form-control" id="" placeholder="">
                        </div>
                        <button type="submit" class="btn"><span class="lnr lnr-magnifier"></span></button>
                     </form>
                  </div>
                  <div class="card-body p-0">
                     <div class="table-responsive">
                        <table class="table table-hover table-programs">
                           <thead>
                              <tr>
                                 <th class="text-left sorting_desc">Programme</th>
                                 <th class="sorting_asc">Type diplôme</th>
                                 <th class="sorting">Website</th>
                                 <th class="sorting">Ville</th>
                                 <th class="sorting">Statut</th>
                                 <th class="text-center"><span><img src="images/bo-icons/more.png" alt=""></span></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="text-left">Bachelor in Business Administration (BBA)</td>
                                 <td>Master </td>
                                 <td>Masters Booking</td>
                                 <td>Grenoble</td>
                                 <td><img src="images/bo-icons/exclamation-mark.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-left">DU IAP-Dauphine</td>
                                 <td>Master </td>
                                 <td>Masters Booking</td>
                                 <td>Grenoble</td>
                                 <td><img src="images/bo-icons/exclamation-mark.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-left">Bachelor in Business Administration (BBA)</td>
                                 <td>Master</td>
                                 <td>Masters Booking</td>
                                 <td>Grenoble</td>
                                 <td><img src="images/bo-icons/exclamation-mark.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-left">Master Diagnostic et Audit des Organisations</td>
                                 <td>MBA </td>
                                 <td>Masters Booking</td>
                                 <td>Clermont-Ferrand</td>
                                 <td><img src="images/bo-icons/checked.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr> 
                                 <td class="text-left">Master Diagnostic et Audit des Organisations</td>
                                 <td>MBA </td>
                                 <td>Masters Booking</td>
                                 <td>Clermont-Ferrand</td>
                                 <td><img src="images/bo-icons/checked.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr> 
                                 <td class="text-left">Master Diagnostic et Audit des Organisations</td>
                                 <td>MBA</td>
                                 <td>Masters Booking</td>
                                 <td>Clermont-Ferrand</td>
                                 <td><img src="images/bo-icons/checked.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr> 
                                 <td class="text-left">Master Diagnostic et Audit des Organisations</td>
                                 <td>Bachelor</td>
                                 <td>MBA Booking</td>
                                 <td>Clermont-Ferrand</td>
                                 <td><img src="images/bo-icons/checked.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr> 
                                 <td class="text-left">Master Diagnostic et Audit des Organisations</td>
                                 <td>Bachelor</td>
                                 <td>MBA Booking</td>
                                 <td>Clermont-Ferrand</td>
                                 <td><img src="images/bo-icons/checked.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr> 
                                 <td class="text-left">Master Diagnostic et Audit des Organisations</td>
                                 <td>Bachelor</td>
                                 <td>Bachelors Booking</td>
                                 <td>Clermont-Ferrand</td>
                                 <td><img src="images/bo-icons/checked.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr> 
                                 <td class="text-left">Master Diagnostic et Audit des Organisations</td>
                                 <td>Bachelor</td>
                                 <td>Bachelors Booking</td>
                                 <td>Clermont-Ferrand</td>
                                 <td><img src="images/bo-icons/checked.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr> 
                                 <td class="text-left">Master Diagnostic et Audit des Organisations</td>
                                 <td>Bachelor</td>
                                 <td>MBA Booking</td>
                                 <td>Clermont-Ferrand</td>
                                 <td><img src="images/bo-icons/checked.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr> 
                                 <td class="text-left">Master Diagnostic et Audit des Organisations</td>
                                 <td>Bachelor</td>
                                 <td>Bachelors Booking</td>
                                 <td>Clermont-Ferrand</td>
                                 <td><img src="images/bo-icons/checked.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr> 
                                 <td class="text-left">Master Diagnostic et Audit des Organisations</td>
                                 <td>Bachelor</td>
                                 <td>Bachelors Booking</td>
                                 <td>Clermont-Ferrand</td>
                                 <td><img src="images/bo-icons/checked.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr> 
                                 <td class="text-left">Master Diagnostic et Audit des Organisations</td>
                                 <td>Bachelor</td>
                                 <td>MBA Booking</td>
                                 <td>Clermont-Ferrand</td>
                                 <td><img src="images/bo-icons/checked.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                              <tr> 
                                 <td class="text-left">Master Diagnostic et Audit des Organisations</td>
                                 <td>Bachelor</td>
                                 <td>Bachelors Booking</td>
                                 <td>Clermont-Ferrand</td>
                                 <td><img src="images/bo-icons/checked.png" alt=""></td>
                                 <td>
                                    <a class="bt" href="#" title="Prévisualiser ce programme"><i class="bo_sprites bg-eye"></i></a>
                                    <a class="bt" href="#" title="Compléter la fiche programme"><i class="bo_sprites bg-edit"></i></a> 
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <!-- /.table-responsive -->
                     <div class="ft-table-center">
                        <nav aria-label="Page navigation" class="navigation">
                           <ul class="pagination pagination-lg">
                              <li class="disabled">
                                 <a href="#">
                                 <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                 </a>
                              </li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">...</a></li>
                              <li><a href="#">8</a></li>
                              <li>
                                 <a href="#">
                                 <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                 </a>
                              </li>
                           </ul>
                        </nav>
                        <a href="#" class="txtview-all">Voir tous les programmes</a> 
                     </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-foot">
                     <div class="note-icon">
                        <span><img src="images/bo-icons/exclamation-mark.png" alt="">En attente de validation</span>
                        <span><img src="images/bo-icons/checked.png" alt="">En ligne</span>
                     </div>
                  </div>
                  <!-- /.card-foot -->
               </div>
               <!-- /.bo-card -->
            </div>
            <!-- /bo-main-content -->
         </div>
         <!-- /.content-dboard -->  
         <?php require_once('bo-footer.php'); ?> 
      </div>
      <!--/.wrapper_page-->
   </body>
</html>