<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "select * from fluxo_caixa where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/estiloCadastro/estilo.css" media="screen" /> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="box">
            <h1 class="titulo">
                Cadastro Fluxo de Caixa.
            </h1>
            <form action="altera_fluxo_exe.php" method="post">
                <input name="id" type="hidden" value="<?php echo $row['id'] ?>">
                <div class="form-group">
                    <label for="data">Data: </label>
                    <input type="date" name="data" id="data" class="form-control" value="<?php echo $row['data'] ?>">
                </div>

                <div>
                    <label for="tipo">Tipo: </label>
                    <input type="radio" name="tipo" value="entrada" required <?php if($row['tipo'] == 'entrada'){ echo "checked"; } else { echo "";} ?>>
                    <label for="tipo">Entrada</label>
                    <input type="radio" name="tipo" value="saida" required <?php if($row['tipo'] == 'saida'){ echo "checked"; } else { echo "";} ?>>
                    <label for="tipo">Saída</label>
                </div>


                <div class="form-group">
                    <label for="valor">Valor: </label>
                    <input type="number" value="<?php echo $row['valor'] ?>" name="valor" id="valor" required maxlength="13" class="form-control" step=".01">
                </div>
                <div class="form-group">
                    <label for="historico">Histórico: </label>
                    <input type="text" name="historico" value="<?php echo $row['historico'] ?>" id="historico" required maxlength="150" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cheque">Cheque: </label>
                    <select class="form-control" name="cheque">
                        <option value="sim" <?php if($row['cheque'] == 'sim'){ echo "selected"; } else { echo "";} ?>>Sim</option>
                        <option value="nao" <?php if($row['cheque'] == 'nao'){ echo "selected"; } else { echo "";} ?>>Não</option>
                    </select>
                </div>
                <input type="submit" value="Enviar" class="buttom">
                <button><a href="../index.php">Tela Inicial</a></button>
            </form>
        </div>
    </div>
</body>

</html>