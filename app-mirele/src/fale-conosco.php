<?php require __DIR__ . '/header.php' ?>
<?php require __DIR__ . '/navbar.php' ?>
<div class="bg-info" data-content-fale-conosco>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">
            <form action="mail.php" method="post">
                <div class="card border-primary rounded-0">
                    <div class="card-header p-0">
                        <div class="bg-info text-white text-center py-2">
                            <h3><i class="fa fa-envelope"></i> Contato</h3>
                            <p class="m-0">Teremos prazer em ajudá-lo(a)</p>
                            <hr>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                </div>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nome para contato" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                </div>
                                <input type="email" class="form-control" id="nombre" name="email" placeholder="exemplo@gmail.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                </div>
                                <textarea class="form-control" placeholder="Enviar mensagem" required></textarea>
                            </div>
                        </div>

                        <div class="text-left">
                            <button class="btn btn-info"><i class="fas fa-phone"></i> Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require __DIR__ . '/footer.php' ?>