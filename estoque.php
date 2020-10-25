<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>DM System</title>

		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300'  type='text/css'>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		  <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          <script src='https://kit.fontawesome.com/a076d05399.js'></script>
		   <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		  <script src="https://code.highcharts.com/highcharts.js"></script>
		 <script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="main.js"></script>

		<style>	
		td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(even) {
  background-color: #ffbc00;
  color: black;
  font-family:   "Gadget";
}
 
tr:nth-child(odd) {
  background-color: #120a8f;
  color: white;
  font-family:  "Gadget";
}
 
 
 

		
		</style>
		

	</head>
	<body>
		<!-- Cabeçalho -->
		<div class="header">
			<div class="logo">
				<img src="img/logo.jpg" class="img-logo2">
				
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>

		<!-- Menu de navegação-->
		<div class="side-nav">
			<div class="logo">
				<img src="img/logo.jpg" class="img-logo1">
				
			</div>
			<nav>
				<ul>
					<li >
						<a href="#" >
							<span><i class="fa fa-home icon"></i></span>
							<span>Home</span>
						</a>
					</li>
					<li >
						<a href="#" >
							<span><i class="fa fa-money icon"></i></span>
							<span>Financeiro</span>
						</a>
					</li>
					<li >
						<a href="#" >
							<span><i class="fa fa-archive icon"></i></span>
							<span>Estoque</span>
						</a>
					</li>
					<li>
						<a href="#">

							<span><i class="fa fa-envelope icon"></i></span>
							<span>Lembretes</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span><i class="fa fa-file icon"></i></span>
							<span>Historico de vendas</span>
						</a>
					</li>
					<li class="active">
						<a href="#">
							<span><i class="fa fa-edit icon"></i></span>
							<span>Cadastro</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<!-- conteûdo do corpo do site -->
		<div class="main-content">
			<div class="container mt-3" style="margin-left:-1%;padding:1px 16px;height:1000px;">
 
        <div class="container">
         <center><h4> Adicionar Produto</h4></center>
       <form class="form-inline"  method="" action=""  id="ajax">
 
	
    <input type="text" class="form-control" id="produto" placeholder="Nome do produto" name="produto">
   
     <input type="text" class="form-control" id="cor" placeholder="cor" name="cor">
   
      <input type="number" class="form-control" id="valor" placeholder="valor do produto" name="valor">
   
       <input type="number" class="form-control" id="quantidade" placeholder="quantidade" name="quantidade">
    
     <input type="text" class="form-control" id="fornecedor" placeholder="Fornecedor" name="fornecedor">
    
   <input type="date" class="form-control" id="datadecomp" placeholder="datadecomp" name="datadecomp">
	
    
	</div>
    <br><center><button type="submit" class="btn btn-primary" >Cadastrar</button></center>
  </form>



 <br> <br><input class="form-control" id="myInput" type="text"  placeholder="Pesquisar Produto">
  <br>
 <table class="table table-bordered">
    <thead>
      <tr>
       <th>Id</th>
	   <th>Material</th>
        <th>Cor</th>
        <th>Valor</th>
		<th>Disponivel</th>
        <th>Valor em estoque</th>
		<th>Fornecedor</th>
		<th>Data Da Compra</th>
		<th>Ação</th>
	 </tr>
    </thead>
    <tbody id="myTable">
     
<?php 
include "conect.php";
$dados = mysqli_query($sql, "SELECT * FROM produto");
while($coluna = mysqli_fetch_array($dados)) {
     $id = $coluna['id'];
     $produto = $coluna['produto'];
     $cor = $coluna['cor'];
	 $valor= $coluna['valor'];
	 $quantidade= $coluna['quantidade'];
	 $fornecedor = $coluna['fornecedor'];
     $datadecomp = $coluna['datadecomp'];
	 $total=  $quantidade * $valor;
	 
	 
    
	
	echo"<tr>
    <td>$id</td>
	<td>$produto</td>
	<td>$cor</td>
	<td>$valor R$</td>
	<td>$quantidade</td>
	<td>$total R$</td>
    <td>$fornecedor</td>
	<td>$datadecomp</td>
	
	<td><pre><img src='img/lixeira.png' class='lixeira'>   <img src='img/teste.png' class='lixeira'></pre></td>
	
</tr>";	
	    
	/*if ($quantidade <= 1) {
  
    echo   "<td><div class='alert alert-danger alert-dismissible fade show'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Atenção!</strong> O Produto Acima Possui Baixa quantidade em estoque.
  </div></td>"; }*/
	
	}
	echo "Data da Consulta: " . date("d/m/y") . "<br>";

	
?>


    </tbody>
  </table>
  
  </div>
 </div>
</div>
  	
	<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
	
	
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <script type="text/javascript">
$(document).ready(function(){
    $('#ajax').submit(function(){
        var dados = $( this ).serialize();

        $.ajax({
            type: "POST",
            url: "salvar.php",
            data: dados,
            success: function( data )
            {
                document.location.reload(true);
            }
        });

        return false;
    });
});
</script>
	
	
	
	
	</body>
</html>