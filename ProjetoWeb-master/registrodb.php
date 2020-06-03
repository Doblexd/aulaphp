<?php include "conecta.inc.php";  ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
        <div class="col-md-6 col-serv">
		<?php
			
			$login = $_POST['login'];
			$senha = $_POST['senha'];

			$dados = "INSERT INTO usuarios (login, senha) VALUES ('$login','$senha')";
			
			$query = mysqli_query($conexao,$dados);

			if($query){
				echo "<h4>Registrado com sucessso!</h4></center>";
		    }else{
		    	echo "<center><h4>Não foi possível registrar. <a href=index.php?pg=faleconosco>Tente novamente.</a></h4></center>";
		    }

		    header("refresh: 3;registro.php");
		?>
		</div>
	  </div>
	</div>
</div>


