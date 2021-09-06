<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Abrir conta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="login-form" class="form p-3" action="<?=SOURCE?>/app/registrar.php" method="post">
                    <div class="form-group">
                        <label for="username" class="text-info">Usuario/e-mail:</label><br>
                        <input type="text" name="username" placeholder="Digite aqui seu e-mail ou usuario" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password1" class="text-info">Senha:</label><br>
                        <input type="password" name="password1" placeholder="Digite aqui sua senha de acesso" id="password1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password2" class="text-info">Novamente:</label><br>
                        <input type="password" name="password2" id="password2" placeholder="Digite novamente sua senha de acesso" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark btn-md"> Abrir conta</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i></button>
            </div>
        </div>
    </div>
</div>