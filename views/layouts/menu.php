<!-- Menu de Medios de COntacto con la Empresa -->
<div class="container-fluid" style="background-color: #90a4ae;">
    <div class="row">
        <div class="col-12 ">
            <ul class="nav float-right">
                <li class="nav-item"><a href="<?= URL ?>" class="nav-link text-light">Ubicación</a></li>
                <li class="nav-item"><a href="<?= URL ?>" class="nav-link text-light">Contacto</a></li>
                <li class="nav-item"><a href="<?= URL ?>" class="nav-link text-light">Soporte</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Filtro de Busqueda de Productos -->
<div class="container">
    <div class="row">
        <div class="col-md-12 p-3">
            <form class="form-inline my-2 my-lg-0 justify-content-center">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
          </form>
      </div>
  </div>
</div>

<!-- Menu de la Pagina Web -->
<div class="container"  style="background-color: #cfd8dc;">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="<?= URL ?>"><?= NAME_APP ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-cog"></i> CPanel
                    </a>
                    <div class="dropdown-menu" style="padding:1px;" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= URL ?>cpanel/"><i class="fas fa-signal"></i>  General</a>
                        <div class="dropdown-divider" style="margin:0px;"></div>
                        <a class="dropdown-item" href="<?= URL ?>User/PanelUsuarios/1"><i class="fas fa-users"></i>  Usuarios</a>
                        <div class="dropdown-divider" style="margin:0px;"></div>
                        <a class="dropdown-item" href="<?= URL ?>Parking/PanelEstacionamientos/1"><i class="fas fa-car"></i>  Estacionamientos</a>
                        <div class="dropdown-divider" style="margin:0px;"></div>
                        <a class="dropdown-item" href="<?= URL ?>Other/PanelOtros"><i class="fas fa-cogs"></i>  Otros</a>
                    </div>
                </li>
                <?php 
                if (isset($_SESSION["RoleUser"])):
                    if ($_SESSION["RoleUser"] == 2):
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>Reserve/CPanel"><i class="fas fa-cog"></i> CPanel</a>
                        </li>
                        <?php
                    elseif ($_SESSION["RoleUser"] == 1):
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i> CPanel
                            </a>
                            <div class="dropdown-menu" style="padding:1px;" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= URL ?>cpanel/"><i class="fas fa-signal"></i>  General</a>
                                <div class="dropdown-divider" style="margin:0px;"></div>
                                <a class="dropdown-item" href="<?= URL ?>User/PanelUsuarios/1"><i class="fas fa-users"></i>  Usuarios</a>
                                <div class="dropdown-divider" style="margin:0px;"></div>
                                <a class="dropdown-item" href="<?= URL ?>Parking/PanelEstacionamientos/1"><i class="fas fa-car"></i>  Estacionamientos</a>
                                <div class="dropdown-divider" style="margin:0px;"></div>
                                <a class="dropdown-item" href="<?= URL ?>Other/PanelOtros"><i class="fas fa-cogs"></i>  Otros</a>
                            </div>
                        </li>
                        <?php
                    endif;
                endif;
                ?>
            </ul>
            <!-- &nbsp;&nbsp; -->
            <ul class="navbar-nav">
                <?php if(isset($_SESSION["EmailUser"])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-address-book"></i> <?= $_SESSION["FullNameUser"] ?>
                        </a>
                        <div class="dropdown-menu" style="padding: 1px;" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="padding-top: 6px; padding-bottom: 6px;" href="<?= URL ?>User/Perfil"><i class="fas fa-user"></i> Perfíl</a>
                            <div class="dropdown-divider" style="margin:0px;"></div>
                            <a class="dropdown-item" style="padding-top: 6px; padding-bottom: 6px;" href="<?= URL ?>User/BuzonMensajes"><i class="fas fa-envelope"></i> Buzón de Mensajes</a>
                            <div class="dropdown-divider" style="margin:0px;"></div>
                            <a class="dropdown-item" style="padding-top: 6px; padding-bottom: 6px;" href="<?= URL ?>User/ModificarDatos"><i class="fas fa-edit"></i> Modificar Datos</a>
                            <div class="dropdown-divider" style="margin:0px;"></div>
                            <a class="dropdown-item" style="padding-top: 6px; padding-bottom: 6px;" href="<?= URL ?>User/ModificarClave"><i class="fas fa-lock-open"></i> Modificar Contraseña</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>User/Salir" id="logout"><i class="fas fa-sign-out-alt"></i> Salir</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>User/Entrar"><i class="fas fa-user"></i> Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>User/Registrarse"><i class="fas fa-user-plus"></i> Registrarse</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</div>