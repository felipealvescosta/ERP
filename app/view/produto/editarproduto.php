<?php

		//Codigo do produto a ser editado
		$codigo_produto_editar = ($_GET['codigo']);

		echo "$codigo_produto_editar";
		
		$conecta = mysql_connect("localhost", "root", "") or print (mysql_error()); 
		mysql_select_db("ocaeira", $conecta) or print(mysql_error()); 
        $sql = "SELECT codigo, nome, marca, descricao, quantidade, sessao, preco_compra, preco_venda, data_vencimento, data_cadastro, imagem FROM produtos WHERE codigo=$codigo_produto_editar";                    
        $result = mysql_query($sql, $conecta); 

         while( $consulta = mysql_fetch_array($result)) {
?>
<!DOCTYPE html>
<html>
	<head>

	<title>Editar Produtos</title>
	<link rel="stylesheet" type="text/css" href="../../model/css/bootstrap.css">
	<meta charset="utf-8">


	<script type="text/javascript">
			function voltar(){
				alert("Voltando!");
					window.location.href=('index.php');
			}
	</script>
	
	</head>
	<body class="container cadastro">

	
	<div  class="col-xs-12">

		<div class="panel panel-default">

			<div class="panel-heading">
				<h1 >Editar Produtos</h1>
				<a href="editarProduto.php">voltar</a>
			</div>
			<h3> Informações -  Produtos</h3>
			<h4><?echo "$consulta[nome]";?></h4>
			<div class="panel-body">

				<form   method="POST" enctype="multipart/form-data" action="../../controller/produto/editarproduto.php">
					<div class="form-group">
						<label class="control-label">Nome:</label>
						<div >
							<input type="text" name="nome_produto" value="<?php echo $consulta['nome']?>" class="form-control"/>
						</div>
					</div>	

					<div class="form-group">
						<label class="control-label">Marca:</label>
						<div >
							<input type="text" name="marca_produto" value="<?php echo $consulta['marca']?>" class="form-control"/>
						</div>
					</div>	

					
					<div class="form-group">	
						<label class=" control-label">Descrição:</label>
						<div >
							<input type="text" name="descricao_produto" value="<?php echo $consulta['descricao']?>" class="form-control"/>
						</div>
					</div>


					<div class="form-group">	
						<label>Quantidade:</label>
						<div >
							<input type="number" name="quantidade_produto" value="<?php echo $consulta['quantidade']?>" class="form-control"/>
						</div>
					</div>

						
					<div class="form-group">
						<label class="control-label">Sessão:</label>
						<div >
							<select  name="sessao_produto"  class="form-control">
								<option value="<?php echo $consulta['sessao'];?>">Prateleira <? echo $consulta['sessao'];?></option>
								<option value="0">Balcão</option>
								<option value="1">Prateleira 1</option>
								<option value="2">Prateleira 2</option>
								<option value="3">Prateleira 3</option>
								<option value="4">Prateleira 4</option>
								<option value="5">Prateleira 5</option>
								<option value="6">Prateleira 6</option>
								<option value="7">Prateleira 7</option>
								<option value="8">Prateleira 8</option>
								<option value="9">Prateleira 9</option>
								<option value="10">Prateleira 10</option>
								<option value="11">Prateleira 11</option>
								<option value="12">Prateleira 12</option>
								<option value="13">Prateleira 13</option>
								<option value="14">Prateleira 14</option>
								<option value="15">Prateleira 15</option>
								<option value="16">Prateleira 16</option>
								<option value="17">Prateleira 17</option>
								<option value="18">Prateleira 18</option>
								<option value="19">Prateleira 19</option>
								<option value="20">Prateleira 20</option>
								<option value="21">Prateleira 21</option>
								<option value="22">Prateleira 22</option>
								<option value="23">Prateleira 23</option>
								<option value="24">Prateleira 24</option>
								<option value="25">Prateleira 25</option>
								<option value="26">Prateleira 26</option>
								<option value="27">Prateleira 27</option>
								<option value="28">Prateleira 28</option>
								<option value="29">Prateleira 29</option>
								<option value="30">Prateleira 30</option>
								<option value="31">Prateleira 31</option>
								<option value="32">Prateleira 32</option>
								<option value="33">Prateleira 33</option>
								<option value="34">Prateleira 34</option>
								<option value="35">Prateleira 35</option>
								<option value="36">Prateleira 36</option>
								<option value="37">Prateleira 37</option>
								<option value="38">Prateleira 38</option>
								<option value="39">Prateleira 39</option>
								<option value="40">Prateleira 40</option>
								<option value="41">Prateleira 41</option>
								<option value="42">Prateleira 42</option>
								<option value="43">Prateleira 43</option>
								<option value="44">Prateleira 44</option>
								<option value="45">Prateleira 45</option>
								<option value="46">Prateleira 46</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label" >Preço Compra:</label>
						<div class="">
							<input type="text" name="precocompra_produto"  value="<?php echo $consulta['preco_compra']?>" class="form-control"/>
						</div>
					</div>	


					<div class="form-group">
						<label class=" control-label">Preço Venda:</label>
						<div class="">
							<input type="text" name="precovenda_produto"  value="<?php echo $consulta['preco_venda']?>" class="form-control"/>
						</div>
					</div>	


					<div class="form-group">	
						<label class="control-label">Data Vencimento:</label>
						<h4 style="color:red"><?php echo date('d/m/Y', strtotime($consulta['data_vencimento']));?>*</h4>
						<div class="">
							<!--<input type="date" name="datavencimento_produto" value="<?php //echo $consulta['data_vencimento']?>" class="form-control"/>-->
							<input size="10" type="date" name="datavencimento_produto" value="<?php echo date("d/m/Y",strtotime($consulta['data_vencimento']))?>" class="form-control"/>
							<!--<input type="datetime" name="datavencimento_produto" value="01/12/2014" class="form-control"/>-->
						</div>
					</div>	

					<div class="form-group">
						<label>Imagem Produto</label>
	    				<input class="form-control" type="file" name="imagem_produto"  size="20">		
						<? print "<img src='../../controller/produto/img_produtos/$consulta[imagem]' width='100' heigth='100'>"; ?>
					</div>

					<div class="form-group">
						<label class=" control-label">Código::</label>
						<input type="number" name="codigo_produto"  value="<?php echo $consulta['codigo']?>"class="form-control"/>

					</div>


						<br>
						<input type="submit" class="btn btn-info form-control" name="enviar" value="Atualizar"/>  <br><br>	
						
				</form>
					<button class="btn btn-warning form-control" onclick="voltar();">Cancelar</button>
					</div>
			</div>
		</div>
		
	</div>
<?php 
		};

?>
<?php
	require_once('../../model/footer.php');
?>
