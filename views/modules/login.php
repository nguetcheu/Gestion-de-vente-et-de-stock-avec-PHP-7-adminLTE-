<div id="back"></div>

<div class="login-box">

  <div class="login-logo">

    <img class="img-responsive" src="views/img/template/logo-blanc-bloque.png" style="padding: 30px 100px 0 100px">

  </div>

  <div class="login-box-body">

    <p class="login-box-msg">Connecter vous pour demarrer votre session</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Nom d'utilisateur" name="loginUser" required>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="mot de passe" name="loginPass" required>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Connexion</button>

        </div>
       
      </div>

      <?php

        $login = new ControllerUsers();
        $login -> ctrUserLogin();

      ?>

    </form>

  </div>

</div>
