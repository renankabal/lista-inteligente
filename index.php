<html>
<head>
	<title>Lista</title>
	<link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/bootstrap/css/bootstrap-theme.min.css">
</head>
<style>
#bs-callout-danger {
  border-left-color: #3364A5;
}
.bs-callout {
  padding: 20px;
  margin: 20px 0;
  border: 1px solid #eee;
  border-left-width: 5px;
  border-radius: 3px;
}
.menor{
    font-size: 11px;
}
</style>
<body>
	<center>
		<textarea id="input_resultado"></textarea>
	</center>
	<p></p>
	<p></p>
	<p></p>
	<p></p>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lista">
  		Ver lista
	</button>
<!-- Modal -->
<div class="modal fade" id="lista" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Lista</h4>
      </div>
      <div class="modal-body">
        <code>Clique na lista que deja selecionar as informações:</code><br>
        	<div class='bs-callout' id='bs-callout-danger' style="cursor: pointer;" onmouseover="javascript:this.style.backgroundColor='#A9C3F9'" onmouseout="javascript:this.style.backgroundColor=''">A</div>
            <div class='bs-callout' id='bs-callout-danger' style="cursor: pointer;" onmouseover="javascript:this.style.backgroundColor='#A9C3F9'" onmouseout="javascript:this.style.backgroundColor=''">B</div>
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
		$('.bs-callout').click(function(){
			$('#input_resultado').val(
				$(this).text());
		});

		 $(document).bind('keydown', function(e) {
            if (e.which == 118) { // 118 = F7 http://odesenvolvedor.andafter.org/publicacoes/tabela-de-key-codes-para-javascript_1464.html
               $("#lista").modal("show");
            }
        });
	</script>
</html>