<?php require __DIR__ . '/header.php' ?>
<?php require __DIR__ . '/navbar.php' ?>
<div id="login" class="bg-dark p-5">
    <h3 class="text-center text-white pt-5">Acesso o painel de vendas</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12 bg-light m-2">
                    <form id="login-form" action="<?=SOURCE?>/app/login.php" class="form p-3" action="" method="post">
                        <div class="form-group">
                            <label for="username" class="text-info">Usuario/e-mail:</label><br>
                            <input type="text" name="username" id="username" placeholder="Entre com seu e-mail ou usuario" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Senha:</label><br>
                            <input type="text" name="password" placeholder="Senha de acesso ao painel" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Lembrar-me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <button class="btn btn-success btn-md">Entrar</button>
                            <button class="btn btn-danger btn-md" type="button" data-toggle="modal" data-target="#exampleModal">Não tenho conta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/footer.php' ?>