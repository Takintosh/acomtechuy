<!-- Form Email -->
<?php include 'includes/formemail.php' ?>

<!-- Header -->
<header id="contacto" class="contacto header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>
                    Contacto
                </h1>
                <h2>
                    Podemos ayudarte
                </h2>
                <h2>
                    Si tienes alguna duda o requerimiento, por favor, comunícate con nosotros a través
                    del siguiente formulario.
                </h2>
            </div>
        </div>
    </div>
</header>

<!-- Section Formulario -->
<section id="formulario" class="formulario">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <?php if (isset($emailError) || isset($messageError)) : ?> 
                    <div id="error-message">
                        <?php 
                            echo isset($emailError) ? $emailError . '<br>' : ''; 
                            echo isset($messageError) ? $messageError . '<br>' : ''; 
                        ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($sent) && $sent === true) : ?> 
                    <div id="done-message">
                        Su mensaje ha sido enviado! Gracias por contactarse.
                    </div>
                <?php endif; ?>

                <form class="cform" role="form" action="contacto" method="post">

                    <div class="form-row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" required pattern="[a-zA-Z\s]+" name="name" class="form-control form-control-lg input-text" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Porfavor, ingresa al menos 4 caracteres" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="email" required class="form-control form-control-lg input-text" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Porfavor, ingresa un email válido" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg input-text" name="phone" id="phone" placeholder="Teléfono" />
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea required class="form-control form-control-lg input-text text-area" name="message" id="message" rows="5" data-rule="required" data-msg="Porfavor, escribenos algo" placeholder="Mensaje"></textarea>
                                <div class="validation"></div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Enviar Mensaje</button></div>
                </form>

            </div>
        </div>
    </div>
</section>