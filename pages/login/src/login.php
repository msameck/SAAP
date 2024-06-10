<section class="user">
  <div class="user_options-container">
    <div class="user_options-text">

      <div class="user_options-unregistered">
        <img class="user_unregistered-logo" src="../../../img/logo_seduc.png" alt="logo_seduc">
        <h2 class="user_unregistered-title">Ainda não tem uma conta?</h2>
        <p class="user_unregistered-text">Clique no botão abaixo para criar sua conta agora!</p>
        <button class="user_unregistered-signup" id="signup-button">Cadastrar</button>
      </div>

      <div class="user_options-registered">
        <img class="user_registered-logo" src="../../../img/logo_seduc.png" alt="logo_seduc">
        <h2 class="user_registered-title">Você já tem uma conta?</h2>
        <p class="user_registered-text">Clique no botão abaixo para acessar sua conta agora!!!</p>
        <button class="user_registered-login" id="login-button">Login</button>
      </div>

    </div>

    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <h2 class="forms_title">Login</h2>

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