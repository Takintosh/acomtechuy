<nav class="navbar navbar-expand-lg navbar-light bg-light stroke" id="navbar">
    <div class="container">
        <a class="navbar-brand">
            <img src="assets/images/logo.webp" width="120" height="60" alt="ACOM">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item ml-auto <?php if ($CURRENT_PAGE == "Inicio") { ?>active<?php } ?>">
                    <a class="nav-link" href="<?php echo $ROUTE_INICIO ?>">INICIO</a>
                </li>

                <li class="nav-item ml-auto <?php if ($CURRENT_PAGE == "Servicios") { ?>active<?php } ?>">
                    <a class="nav-link" href="<?php echo $ROUTE_SERVICIOS ?>">SERVICIOS</a>
                </li>

                <li class="nav-item ml-auto <?php if ($CURRENT_PAGE == "Outsource") { ?>active<?php } ?>">
                    <a class="nav-link" href="<?php echo $ROUTE_OUTSOURCE ?>">OUTSOURCE</a>
                </li>

                <li class="nav-item ml-auto <?php if ($CURRENT_PAGE == "Sobre") { ?>active<?php } ?>">
                    <a class="nav-link" href="<?php echo $ROUTE_SOBRE ?>">SOBRE NOSOTROS</a>
                </li>

                <li class="nav-item ml-auto <?php if ($CURRENT_PAGE == "Contacto") { ?>active<?php } ?>">
                    <a class="nav-link" href="<?php echo $ROUTE_CONTACTO ?>">CONTACTO</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>