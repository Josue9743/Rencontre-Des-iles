 <!-- doctype -->  
<?php $title = 'Login';  

  foreach($users as $user ){ 
//   echo ' valeur tableau user' . $user['full_name'] .'</br>'; 
        if($_POST['lastname'] === $user['full_name'] && $_POST['user_mail'] === $user['email']  ){
        $connected = true ; 
        break ;
        echo ' bienvenue' . $user['full_name'] ;
        }else{
         $connected = false ; 
            echo $connected ;
        }
    }  
//   echo ' lastname  est  = ' . var_dump($_POST['lastname']) ; 
//   echo ' user_mail  est  = ' .var_dump($_POST['user_mail']);
//   echo ' </br> ';
//   echo ' full_name  est  = ' .var_dump($user['full_name']);
//   echo ' email  est  = ' .var_dump($user['email']);
 ?> 
<!-- // Pour se connecter il faut un pseudo et un mot de passe 
// si c'est le bon  pseudo et le bon mot de passe
// alors connection sur la page index.php
// sinon  on reste sur la page login.php  --> 
<div class="container-fluid  ">
        <div class="row ps-3 mx-3  ">
            <div class="col  ">
               <!--Section: Contact v.2-->
                <section class="mb-4">
                    <!--Section heading-->
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Pour vous connecter</h2>
                    <!--Section description-->
                      <div class="row">
                        <!--Grid column-->
                        <div class="col-md-9 mb-md-0 mb-5">
                            <!-- verifier    -->
                            <form  action="Index.php" method="post" enctype="multipart/form-data" >
                                <!--Grid row-->
                                <div class="row">
                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="lastname" class="">Votre Nom Prenom</label>
                                            <input type="text" id="name" name="lastname" class="form-control">
                                        </div>
                                    </div> 
                                  </div>
                                  <!--Grid row-->
                                <div class="row">
                                    <div class="col-6 col-md-12">
                                        <div class="md-form mb-0">
                                            <label for="mail" class="">Votre mail</label>
                                             <input type="email" id="mail" name="user_mail" class="form-control">
                                        </div>
                                          <!-- envoyer -->
                                          <div class="mt-3">
                      <button type="submit" class="btn btn-primary">Envoyer</button>
                          </div>
                       </div>
                       </div> 
                    </div> 
                 </div> 
             </div>
         </div>  
      </div>                                   
</form>
<div class="d-flex p-3"> <p>   </p> </div> 
 <div class="d-flex p-3"> <p>   </p> </div>  
 