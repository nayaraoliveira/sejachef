<?php

session_start();

$link = mysqli_connect('db4free.net:3306', 'sejaochef', '123456789', 'sejaochef');

if (!$link) {
    die('Não foi possível conectar:' . mysqli_connect_error());
}
// caminho do seu arquivo de conexão ao banco de dados
$consulta = "SELECT * FROM ingredientes WHERE ingredientes.quantidade<6";
$con = $link->query($consulta) or die($link->error);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SejaChef</title>

    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
            integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/CSSpagina.css"> 
    <link rel="stylesheet" type="text/css" href="css/CSSpaginaADM.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
    <form id="formulario" name="Cadastrar" action="paginaCadastro.php" method="GET">

</head>
<body>

    <div id="ttadm">
<form id="formulario" name="ingredientes" action="paginaCadastro.php" method="GET"></form>
<div id="div1" align="center">
    <img id="imagens" src="imagens/img.sejaochef.png" align="center">
</div>
<!--menu da página inicial -->
<nav class="menu">
    <ul>
        <li><a href="paginaInicial.php">Inicial</a></li>
        <li><a href="paginaCardapio.php">Cardápio</a></li>
        <li><a href="paginaMontarpedido.php">Montagem</a>
        <li><a href="paginaLogin.php">Login</a></li>
        <li id="um">
            <?php
            if (isset($_GET['deslogar'])) {
                $_SESSION['nome'] = NULL;
            }

            if (@$_SESSION['nome'] == NULL) {
                $nome = 'Faça seu login!';
            } else {
                $nome = $_SESSION['nome'];
            }
            ?>
            <input type="image" src="imagens/img.usuario.png" width="30" height="30">
            <a href="paginaLogin.php"><i><?php echo $nome ?></i></a>
            <ul>
                <li><a href="paginaMeusPedidos.php">Meus Pedidos</a></li>
                <li><a href="deslogar" type="submit" name="deslogar" size="30">Sair</a></li>
            </ul>
        </li>
    </ul>
</nav><br><br><br><br>

    <div id="add">
        <table height=50>
            <label>Adicionar Ingredientes</label>
            <tr>
                <td>Ingrediente</td>
                <td>Quant</td>
                <td>Tipo</td>
                <td>Valor</td>
            </tr>

            <tr>
                <td><input type="stylesheet" name="ingrediente1"></td>
                <td><input type="text" name="quantidade1" size="6"></td>
                <td><select name="tipo1">
                        <option></option>
                        <option>Pães</option>
                        <option>Recheios</option>
                        <option>Molhos</option>
                        <option>Saladas</option>
                        <option>Bebidas</option>
                    </select></td>
                <td><input type="text" name="valor1" size="6"></td>
            </tr>

            <tr>
                <td><input type="stylesheet" name="ingrediente2"></td>
                <td><input type="text" name="quantidade2" size="6"></td>
                <td><select name="tipo2">
                        <option></option>
                        <option>Pães</option>
                        <option>Recheios</option>
                        <option>Molhos</option>
                        <option>Saladas</option>
                        <option>Bebidas</option>
                    </select></td>
                <td><input type="text" name="valor2" size="6"></td>
            </tr>
            <tr>
                <td><input type="stylesheet" name="ingrediente3"></td>
                <td><input type="text" name="quantidade3" size="6"></td>
                <td><select name="tipo3">
                        <option></option>
                        <option>Pães</option>
                        <option>Recheios</option>
                        <option>Molhos</option>
                        <option>Saladas</option>
                        <option>Bebidas</option>
                    </select></td>
                <td><input type="text" name="valor3" size="6"></td>
            </tr>


        </table>

        <tr>
            <p>
                <button class="btn btn-green" name="ingrediente" value="1">Cadastrar</button>
                <button class="btn btn-default" name="atualizar">Atualizar</button>
            </p>
        </tr>
    </div>

    <!--DIV da tabela Gerenciar Ingredientes -->


    <div id="add3">
        <table>
            <label>Gerenciamento dos Ingredientes</label>
            <tr>
                <td>Nome</td>
                <td>Quant</td>
                <td>Tipo</td>
                <td>Valor</td>

            </tr>
            <?php while ($dado = $con->fetch_array()) { ?>
                <tr>
                    <td align="left"><input type="text" size="20" maxlength="15" name="nome"
                                            value="<?php echo $dado['nome'] ?>"></td>
                    <td align="left"><input type="text" size="4" maxlength="15" name="quantidade"
                                            value="<?php echo $dado['quantidade'] ?>"></td>
                    <td align="left"><input type="text" size="10" maxlength="15" name="tipo"
                                            value="<?php echo $dado['tipo'] ?>"></td>
                    <td align="left"><input type="text" size="4" maxlength="15" name="valor"
                                            value="<?php echo $dado['valor'] ?>"></td>
                
                
                    <td>
                        <a href="paginaCadastro.php?codigo=<?php echo $dado['nome'] ?>">
                            <button class="btn btn-red" name="excluir">Excluir</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div><br><br><br><br>

    <div id="bo"align="center">

     <button class="btn btn-orange" onclick="window.location.href ='paginaADMpedidos.php'" name="excluir">Administrativo - Pedidos</button>

     </div>

    <div class="container-fluid" id="rodape">
        <div class=" container">
            <div class="row">
                <div class="col-xs-12 col-sn-12 col-md-4 col-lg-4">
                    <img id="imgrodape" src="imagens/img.sejaochef.png" align="center">
                </div>

                <div class="col-xs-12 col-sn-12 col-md-4 col-lg-4">
                    <p><span class=" glyphicon glyphicon-bishop"><b> CONTATOS: (82) 91111 - 2222</b></span></p>
                </div>

                <div class="col-xs-12 col-sn-12 col-md-4 col-lg-4">
                    <p>&reg; copyright 2018 - Seja Chef</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    </div>

</body>
</html>
