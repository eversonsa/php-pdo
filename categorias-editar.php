<?php require_once 'cabecalho.php' ?>
<?php require_once 'classes/Categoria.php';
$id = $_GET['id'];
$categoria = new Categoria($id);

?>
<div class="row">
    <div class="col-md-12">
        <h2>Editar Categoria</h2>
    </div>
</div>
<form action="categorias-editar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome da Categoria</label>
                <input type="hidden" value="<?=$categoria->getId()?>" name="id">
                <input type="text" value="<?=$categoria->getNome()?>" name="nome" class="form-control" placeholder="Nome da Categoria">
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Atualizar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php' ?>
