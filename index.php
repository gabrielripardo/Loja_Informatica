<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="/Loja_informatica/Loja_CRUD_of_CRUD_v1.5_-_jquery_div_hide/application/views/jquery-3.4.1.min.js"></script>
    <title>Loja de informática</title>
</head>
<body>        
    <div class="container">
        <h1>Produtos</h1>                                
        <div class="row">
            <div class="col-lg-4 align-self-center text-center border">
                <input type="text" placeholder="col-4 text-center border">
            </div>
            <div class="col-lg-4 text-center border">
                <input type="text" placeholder="col-4 text-center border">
            </div>
            <div class="col-lg-4 align-self-end text-center border">
                <br><br><br> 
                <input type="text" placeholder="col-4 text-center-end border">                               
            </div>
            <div class="col-lg-4 align-self-center border">
                <input type="text" placeholder="col-4 text-center border">
            </div>
            <div class="col-lg-4 align-self-center text-right border">
                <input type="text" placeholder="col-4 text-center border">
                <br><br><br> 
            </div>            
        </div>
        <div class="row border">                        
            <div class="col-lg-3 col-sm-3 text-right border">
                <input type="text" placeholder="col-3 text-right border"> 
                <br><br><br>              
            </div>
            <div class="col-lg-3 align-self-end text-left border">
                <input type="text" placeholder="col-3 text-left-end border">                
            </div>
            <div class="col-lg-3 align-self-end text-right border">
                <input type="text" placeholder="col-3 text-right-end border">                
            </div>
        </div>

        <button class="btn btn-primary" id="btnOpcoes1">Mostrar Opções 1</button>       
        
        <div id="opcoes1">
            <p>Campos exibidos</p>
        </div>
        
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($produtos as $produto) : ?>
                <tr>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['description'] ?></td>
                    <td><?= $produto['preco']?></td>
                    <td><a href="<?= site_url('produtos/delete/'.$produto['id']); ?>" class="btn btn-danger">Excluir</a></td>                                       
                    <td><a href="<?= site_url('produtos/editar?id='.$produto['id']); ?>" class="btn btn-warning">Editar</a></td>
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
    <script>            
        $(document).ready(function(){
            $("#opcoes1").hide(); 
            $("#btnOpcoes1").click(function(){                
                var nmBtn = document.getElementById("btnOpcoes1").textContent;
                if(nmBtn == "Mostrar Opções 1"){
                    document.getElementById("btnOpcoes1").textContent = "Ocultar Opções 1";
                    $("#opcoes1").show();
                }else{                    
                    document.getElementById("btnOpcoes1").textContent = "Mostrar Opções 1";                    
                    $("#opcoes1").hide();  
                }                       
            });            
        });
    </script>
</body>
</html>
