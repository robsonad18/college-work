<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="<?= SITE_URL?>"><img src="<?= SITE_URL?>assets/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="<?= SITE_URL?>">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="#">Arquitetura</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Arte</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Aventura</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">comida</a></li>                                    
                                <li class="nav-item"><a class="nav-link" href="#">Estilo de vida</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Moda</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Tecnologia</a></li>
                            </ul>
                        </li>    
                        <li class="nav-item"><a class="nav-link" href="<?= SITE_URL ?>sobre-o-autor">Sobre o autor</a></li>
                        
                        <?php
                            if (1 == 1 ) {
                                ?>
                                <li class="nav-item"><a class="nav-link" href="<?= SITE_URL?>login">Área restrita</a></li>
                                <?php
                            } else {
                                ?>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Aldecir Fonseca</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="#">Perfil</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Trocar Senha</a></li>
                                    </ul>
                                </li>     
                                <?php
                            }
                        ?>
                    </ul>

                    <ul class="nav-shop">
                        <li class="nav-item"><a class="nav-link" href="index.php?view=contato">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>