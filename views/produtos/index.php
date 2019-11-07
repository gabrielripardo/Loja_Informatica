<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Loja de informática</title>
</head>
<body>
    <div class="container">
        <h1>Produtos</h1>
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>     
            
            <?php $DT_ENTRADA = "11/02/2018 00:00:00"; echo $DT_ENTRADA; ?>       
                  
            <?php foreach ($produtos as $produto) : ?>
               
                <tr>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['description'] ?></td>
                    <td><?= $produto['preco']?></td>
                    <td><a href="<?= site_url('produtos/delete/'.$produto['id']); ?>" class="btn btn-danger">Excluir</a></td>                                       
                    <td><a href="<?= site_url('produtos/editar?id='.$produto['id']); ?>" class="btn btn-warning">Editar</a></td>
                    <td><a href="<?= site_url(); ?>/produtos/exibirDetalhe/?id=<?= $produto['id']?>&dt=<?php echo (new DateTime(str_replace('/', '-', $DT_ENTRADA)))->modify('+2 hour')->getTimestamp(); ?>" class="btn btn-info">Detalhe</a></td>
                </tr>
            <?php endforeach ?>
        </table>

        <!-- Abrir formulário de novo produto -->
        <?= anchor("produtos/formulario",
            "Novo Produto",
            array(
                "class" => "btn btn-primary"))
        ?>
    </div>
</body>
</html>
