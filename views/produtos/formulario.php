<html>
<head>  
    <!-- <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?> "> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cadastro de Produto</title>
</head>
<body>
    <div class="container">


        <h1>Cadastro de Produtos</h1>
        <?php
            echo form_open("produtos/novo");

            echo form_label("Nome", "nome");
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "maxlength" => "255"
            ));

            echo form_label("Preço", "preco");
            echo form_input(array(
                "name" => "preco",
                "id" => "preco",
                "class" => "form-control",
                "maxlength" => "255"
            ));            

            echo form_label("Descrição", "description");
            echo form_input(array(
                "name" => "description",
                "id" => "description",
                "class" => "form-control",
                "maxlength" => "255"
            ));

            echo form_button(array(
                "class" => "btn btn-primary",
                "type" => "submit",
                "content" => "Cadastrar"
            ));
            
            echo form_close();
        ?>
    </div>
</body>
</html>
