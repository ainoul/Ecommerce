<script src="bootstrap-3.3.4/js/jquery.js"></script>
<script src="bootstrap-3.3.4/dist/js/bootstrap.min.js"></script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"> <a href="accueil.php">Accueil</a> </li>
      <li> <a href="jeux.php">Jeux</a> </li>
      <li> <a href="panier.php">Panier</a> </li>
      <li class="dropdown"> 
            <a data-toggle="dropdown" href="#">Se connecter<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <?php
                include 'identifier.php';
              ?>
            </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-right inline-form">
      <div class="form-group">
        <input type="search" class="input-sm form-control" placeholder="Recherche">
        <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
      </div>
    </form>
  </div>
</nav>
