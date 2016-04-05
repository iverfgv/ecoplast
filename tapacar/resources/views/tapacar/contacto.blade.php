
    <!-- CONTACT
    ============================== -->
<div class="site-wrapper" id="contactanos">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <!-- Heading -->
            <h1 class="heading">
              Sientase libre de <span class="text-primary">contactarnos</span>
            </h1>
            <!-- Sub heading -->
            <p class="heading__sub">
              Resolveremos todas sus dudas
            </p>
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <!-- Alert message -->
            <div class="alert contact-form__alert" id="form_message" role="alert"></div>
            <!-- Setting the custom theme for reCaptcha.
                 Default themes and customization: 
                 https://developers.google.com/recaptcha/docs/customization -->
                 <script type="text/javascript">
                   var RecaptchaOptions = {
                    theme : 'custom',
                    custom_theme_widget: 'recaptcha_widget'
                  };
                </script>
                <!-- Contact form -->
            <!-- Please carefully read the README.txt file
            in order to setup the PHP contact form properly -->
            <form role="form" class="contact__form" id="form_sendemail">
              <div class="row">
                <h1>Contacto</h1>
                <div class="col-sm-6">

                  <!-- Email -->
                  <div class="form-group">
                    <label for="email" class="sr-only">Su correo electrónico</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico">
                    <span class="help-block"></span>
                  </div>
                  <!-- Name -->
                  <div class="form-group">
                    <label for="name" class="sr-only">Su nombre</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre Completo">
                    <span class="help-block"></span>
                  </div>
                  <!-- reCAPTCHA -->
             <!--  -->
              </div>
              <div class="col-sm-6">
                <!-- Message -->
                <div class="form-group">
                  <label for="message" class="sr-only">Su mensaje</label>
                  <textarea name="message" class="form-control" rows="11" id="message" placeholder="Mensaje"></textarea>
                  <span class="help-block"></span>
                </div>
              </div>
            </div> <!-- / .row -->
            <div class="text-center">
              <button type="submit" class="btn btn-lg btn-default">
                <span class="oi oi-arrow-right" title="Send it" aria-hidden="true"></span>
                <span>Enviar</span>
              </button>
              <div class="clearfix"></div>
            </div>
          </form>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6" style="text-align:center;">
          <div class="col-sm-6" style="text-align:center;">
            <h4 class="text-primary"><span class="oi oi-phone"></span> Teléfono</h4>
            <h5>Oficinas: <span>(33) 3797-9069</span></h5>
            <h5>Agente Móvil: <span>044 (33) 1147-1706</span></h5>
          </div>
          <div class="col-sm-6" style="text-align:center;">
            <h4 class="text-primary"><span class="oi oi-comment-square"></span> Email</h4>
            <h5>ventas@tapacar.com.mx</h5>
          </div>
        </div>
      </div>
    </div> <!-- / .row -->
  </div> <!-- / .row -->
</div> <!-- / .container -->
</div> <!-- / .site-wrapper -->