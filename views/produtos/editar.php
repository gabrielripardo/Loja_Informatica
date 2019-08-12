<?php
/**/
?>

<div class="container">
    <form action="salvar/<?= $produto['id'] ?>" method="post">               
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?= $produto['nome'] ?>">

        <label for="nome">Preço</label>
        <input type="text" name="preco" class="form-control" value="<?= $produto['preco']?>">

        <label for="nome">Descrição</label>
        <input type="text" name="description" class="form-control" value="<?= $produto['description']?>">

        <button type="submit" class="btn btn-primary">Salvar</button>
        <?= anchor("produtos/index", "Voltar", array('class' => 'btn btn-primary')) ?>
    </form>
</div>