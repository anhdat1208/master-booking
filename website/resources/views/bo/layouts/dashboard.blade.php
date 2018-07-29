<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <link rel="shortcut icon" href="{{ asset('/assets-bo/images/favicon.ico') }}" />  
    <title>title</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Include CSS -->  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('/assets-bo/css/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/assets-bo/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets-bo/css/linearicons.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets-bo/css/chosen.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets-bo/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets-bo/css/jquery.mCustomScrollbar.min.css') }}">   
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets-bo/css/jquery.typeahead.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets-bo/css/wmwysiwygeditor.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets-bo/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets-bo/css/style-back-office.css') }}">   

</head>
<body>

    <div class="wrapper_page">
         @include('bo.bo-header')
         @include('bo.bo-nav')
         <div class="content-dboard">
             @include('bo.bo-block-information')
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
                                 <th class="text-center"><span><img src="{{ asset('/assets-bo/images/bo-icons/more.png') }}" alt=""></span></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="text-left">Bachelor in Business Administration (BBA)</td>
                                 <td>Master </td>
                                 <td>Masters Booking</td>
                                 <td>Grenoble</td>
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/exclamation-mark.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/exclamation-mark.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/exclamation-mark.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/checked.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/checked.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/checked.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/checked.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/checked.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/checked.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/checked.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/checked.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/checked.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/checked.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/checked.png') }}" alt=""></td>
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
                                 <td><img src="{{ asset('/assets-bo/images/bo-icons/checked.png') }}" alt=""></td>
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
                        <span><img src="{{ asset('/assets-bo/images/bo-icons/exclamation-mark.png') }}" alt="">En attente de validation</span>
                        <span><img src="{{ asset('/assets-bo/images/bo-icons/checked.png') }}" alt="">En ligne</span>
                     </div>
                  </div>
                  <!-- /.card-foot -->
               </div>
               <!-- /.bo-card -->
            </div>
            <!-- /bo-main-content -->
         </div>
         <!-- /.content-dboard -->  
         @include('bo.bo-footer')
      </div>
      <!--/.wrapper_page-->




    <!-- Include JS -->  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

    <script src="{{ asset('/assets-bo/js/plagins.js') }}"></script>  
    <script src="{{ asset('/assets-bo/js/scrolltopcontrol.js') }}"></script>  
    <script src="{{ asset('/assets-bo/js/chosen.jquery.js') }}"></script> 
    <script src="{{ asset('/assets-bo/js/jquery.fancybox.min.js') }}"></script> 
    <script src="{{ asset('/assets-bo/js/jquery.matchHeight.js') }}"></script>
    <script src="{{ asset('/assets-bo/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>  
    <script src="{{ asset('/assets-bo/js/jquery.typeahead.min.js') }}"></script>
    <script src="{{ asset('/assets-bo/js/select2.full.min.js') }}"></script>    
    <script src="{{ asset('/assets-bo/js/wmwysiwygeditor.min.js') }}"></script> 
    <script src="{{ asset('/assets-bo/js/bo-scripts.js') }}"></script>
</body>
</html>
