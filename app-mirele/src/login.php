<?php require __DIR__ . '/header.php' ?>
<?php require __DIR__ . '/navbar.php' ?>
<div id="login" class="bg-info p-5">
    <h3 class="text-center text-white pt-5">Bem vindo(a) ao login :)</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12 bg-light m-2">
                    <form id="login-form" action="<?=SOURCE?>/app/login.php" class="form p-3" action="" method="post">
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Usuario:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Senha:</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Lembrar-me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <button class="btn btn-info btn-md"><i class="fas fa-sign-in-alt"></i> Logar</button>
                            <button class="btn btn-danger btn-md" type="button" data-toggle="modal" data-target="#exampleModal">Registrar-me</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/footer.php' ?>