<?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (check_credentials($username, $password)) {
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      header('Location: index.php');
      exit();
    } else {
      $error = "Usuário ou senha incorretos.";
    }
  }

  function check_credentials($username, $password) {
    return $username === 'admin' && $password === '12345';
  }

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Login - QR</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 500" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <!-- Main Login CSS -->
  <link rel="stylesheet" href="./style.css">

</head>

<body>

  <section class="user">
    <div class="user_options-container">
      <div class="user_options-text">

        <div class="user_options-unregistered">
          <img class="user_unregistered-logo right-content" src="../../../public/img/logo_seduc.png" alt="logo_seduc">
          <h2 class="user_unregistered-title right-content">Ainda não tem uma conta?</h2>
          <p class="user_unregistered-text right-content">Clique no botão abaixo para criar sua conta agora!</p>
          <button class="user_unregistered-signup right-content" id="signup-button">Cadastrar</button>
        </div>

        <div class="user_options-registered">
          <img class="user_registered-logo" src="../../../public/img/logo_seduc.png" alt="logo_seduc">
          <h2 class="user_registered-title">Você já tem uma conta?</h2>
          <p class="user_registered-text">Clique no botão abaixo para acessar sua conta agora!!!</p>
          <button class="user_registered-login" id="login-button">Login</button>
        </div>

      </div>

      <div class="user_options-forms" id="user_options-forms">
        <div class="user_forms-login">
          <h2 class="forms_title">Login</h2>

          <form class="forms_form" method="post" action="login.php">

            <fieldset class="forms_fieldset">
              <div class="forms_field">
                <h3 class="forms_subtitle">Nome Completo</h3>
                <input type="name" placeholder="Digite seu nome aqui..." class="forms_field-input" required autofocus />
              </div>

              <div class="forms_field">
                <h3 class="forms_subtitle">Email</h3>
                <input type="email" placeholder="Digite seu email aqui..." class="forms_field-input" required autofocus />
              </div>

              <div class="forms_field">
                <h3 class="forms_subtitle">Senha</h3>
                <input type="password" placeholder="Digite sua senha..." class="forms_field-input" required />
              </div>

              <div class="forms_field_bottom">
                <div class="left-content">
                  <input type="checkbox" class="remember" id="remember" checked>
                  <label for="remember">Lembrar de mim</label>
                </div>
                <div class="right-content">
                  <button type="button" class="forms_buttons-forgot">Esqueceu a senha?</button>
                </div>
              </div>
            </fieldset>

            <div class="forms_buttons">
              <input type="submit" value="Entrar" class="forms_buttons-action">
            </div>

            <?php if (isset($error)) { echo "<p>$error</p>"; } ?>

          </form>
        </div>

        <div class="user_forms-signup">
          <h2 class="forms_title">Cadastre-se</h2>
          <form class="forms_form">

            <fieldset class="forms_fieldset">
              <div class="forms_field">
                <h3 class="forms_subtitle">Nome Completo</h3>
                <input type="name" placeholder="Digite seu nome aqui..." class="forms_field-input" required autofocus />
              </div>

              <div class="forms_field">
                <h3 class="forms_subtitle">Email</h3>
                <input type="email" placeholder="Digite seu email aqui..." class="forms_field-input" required autofocus />
              </div>

              <div class="forms_field">
                <h3 class="forms_subtitle">Senha</h3>
                <input type="password" placeholder="Crie uma senha..." class="forms_field-input" required />
              </div>

              <div class="forms_field_bottom">
                <div class="center-content">
                  <button type="button" class="forms_buttons-forgot"></button>
                </div>
              </div>

            </fieldset>

            <div class="forms_buttons">
              <input type="submit" value="Cadastrar" class="forms_buttons-action">
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- partial -->
  <script src="./script.js"></script>

</body>
</html>
