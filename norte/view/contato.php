<div>
    <h2>Informe seus dados para solicitação do serviço:</h2>
</div>
<form action="control/solicitacao_inserir_controller.php" method="post">
    <input type="hidden" name="categ" value="<?=$_GET['categ']?>">
    <input type="hidden" name="serv" value="<?=$_GET['serv']?>">
    <div class="row">
        <div class="col-md-4 form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="nome" class="form-control ">
        </div>
        <div class="col-md-4 form-group">
            <label for="phone">Telefone</label>
            <input type="text" id="phone" name="fone" class="form-control ">
        </div>
        <div class="col-md-4 form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-control ">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="message">Descrição do serviço</label>
            <textarea name="descr" id="message" class="form-control " cols="30" rows="8"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 form-group">
            <input type="submit" value="Enviar Solicitação" class="btn btn-primary">
        </div>
        <div class="col-md-6 justify-content-end d-flex"><h4>Se preferir utilize o Whatsapp</h4>
            <a href="https://bit.ly/2pXTwc6" class="whats">
            <!-- <a href="http://wa.me/5592991388513?text=Solicito%20um%20atendimento%20da%20Norte%20Assistência!">WhatsApp</a> -->
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>
</form>
