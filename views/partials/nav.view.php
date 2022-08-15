<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="font-size: x-large" class="navbar-brand" href="/">Movie library</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li style="font-size: x-large"><a href="/index.php/movie">Movies</a></li>
        <li style="font-size: x-large"><a href="/index.php/director">Director</a></li>
          <li style="font-size: x-large"><a href="/index.php/myfavorite">My Favorite</a></li>
          <?php
          if( getUser() ){ ?>
              <li>
                  <form  action="/index.php/login/logout" method="post">
                      <button type="submit" class="but "
                              style="border: 0;background-color: rgba(0,0,0,0);color: rgb(119,119,119);margin-top: 15px"
                      >Logout (<?= getUserName() ?>)</button>
                  </form>
              </li>
          <?php }else{?>
            <li style="font-size: x-large"><a href="/index.php/login/login">Login</a></li>
          <?php  } ?>
      </ul>
    </div>
  </div>
</nav>
