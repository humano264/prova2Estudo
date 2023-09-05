<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <?php
        include('conexao.php');
        $sql = "select * from fluxo_caixa";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <h1>Listagem de Fluxo de Caixa</h1>
    <table align="center" border="1" width="90%">
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Histórico</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>
        <?php
            do{
                if($row)
                {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['data']."</td>";
                    echo "<td>".$row['tipo']."</td>";
                    echo "<td>".$row['valor']."</td>";
                    echo "<td><a href='altera_fluxo.php?id=" 
                    .$row['id']."'>".$row['historico']."</a></td>";
                    echo "<td>".$row['cheque']."</td>";
                    echo "<td><a href='excluir_fluxo.php?id=" 
                    .$row['id']."'>Excluir</a> </td>";
                    echo "</tr>";
                }
                    
             } while ($row = mysqli_fetch_array($result))
        ?>
        <th colspan="7"><a href="../index.php">Voltar</a></th>
    </table>
    
</body>
</html>