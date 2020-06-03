<?php
include "../conecta.inc.php";
?>


      <a href="admindex.php">Voltar</a>


<table border="1" style="background-color:lightgray;">
    <tr >
        <td style="width: 25px;"> Id </td>
        <td style="width: 205px;">Nome </td>
        <td style="width: 205px;">Email </td>
        <td style="width: 205px;">Telefone </td>
        <td style="width: 205px;">Assunto </td>
        <td style="width: 205px;">Mensagem </td>

    </tr>
    
    <?php while($dados=mysqli_fetch_array($query)) {?>
        <tr>
        <td><?php echo $dados["id"];?></td>
        <td><?php echo $dados['nome'];?></td>
        <td><?php echo $dados['email'];?></td>
        <td><?php echo $dados['telefone'];?></td>
        <td><?php echo $dados['assunto'];?></td>
        <td><?php echo $dados['mensagem'];?></td>
        </tr>
    <?php } ?>


</table>