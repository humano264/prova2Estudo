<?php
     include('conexao.php');
     $id = $_GET['id'];
     $sql = "select * from fluxo_caixa where id=$id";
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_array($result);
     $codigo = $row['id'];


    echo "<h1>Excluir</h1>";
    echo "<p>Código: $codigo</p>";
    $sql = "delete from fluxo_caixa where id = $id";


    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados deletados com sucesso!<br>";
    else
        echo "Erro ao deletar dados: ".$mysqli_error($con)."!";
?>

<a href="../index.php">Voltar</a>