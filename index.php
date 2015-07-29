<html>
<head>
	<title>Lista</title>
	<link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/bootstrap/css/bootstrap-theme.min.css">
</head>
<body>
	<center>
		<textarea name="input_resultado"></textarea>
	</center>
	<p></p>
	<p></p>
	<p></p>
	<p></p>
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  		Ver lista
	</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Lista</h4>
      </div>
      <div class="modal-body">
        <code>Clique na lista que deja seleciona:</code><br>
        <div class="opcao">Categoria:A</div>
        <div class="opcao">Categoria:B</div>
        <div class="opcao">Categoria:C</div>
        <div class="opcao">Categoria:D</div>
        <div class="opcao">Categoria:E</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
      </div>
    </div>
  </div>
</div>
</body>
	<script src="public/jquery/jquery-1.11.3.min.js"></script>
	<script src="public/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript">
		$('.opcao').click(function(){
			$('#input_resultado').val(
				$(this).text());
		});
	</script>
</html>