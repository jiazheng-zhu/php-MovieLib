<?php require 'partials/header.view.php' ?>

<div class="container ">
   <div class="row">

           <div class="col col-sm-12 col-md-6 col-md-offset-3 col-lg-4  col-lg-offset-4  bg-info ">
               <h1>Login</h1>
               <form id="login-form" action="/index.php/login/login" method="post">
                   <div class="form-group ">
                       <label >Username</label>
                       <input type="text" class="form-control " value="admin" name="username" autofocus="" aria-required="true" aria-invalid="true">
                   </div>
                   <div class="form-group ">
                       <label for="loginform-password">Password</label>
                       <input type="password" class="form-control" name="password" value="admin" aria-required="true">
                   </div>

                   <div >
                       <div class="form-group">
                           <button type="submit" class="btn btn-success" name="login-button">Login in</button>
                       </div>
                   </div>
               </form>
           </div>
   </div>
</div>

<?php require 'partials/footer.view.php' ?>
