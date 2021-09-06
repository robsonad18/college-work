<?php require __DIR__ . '/header.php' ?>
<?php require __DIR__ . '/navbar.php' ?>
<div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
    </div>
    <form method="post" action="<?=SOURCE?>/app/contact.php">
        <h3>Fale conosco</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Seu nome *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtEmail" class="form-control" placeholder="Seu e-mail *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Seu numero de telefone *" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Enviar" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Sua mensagem *" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>
<?php require __DIR__ . '/footer.php' ?>