<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
	$("#cep").focusout(function(){
		$.ajax({
			url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
			dataType: 'json',
			success: function(resposta){
				//Preenchendo automaticamente
				$("#cidade").val(resposta.localidade);
				$("#bairro").val(resposta.bairro);
				$("#rua").val(resposta.logradouro);
				$("#uf").val(resposta.uf);
			}
		});
	});
	function visualizar()
	{
		location.href="visualizar.php";
	}
	function inicio()
	{
		location.href=" index.php";
	}
	function mostrar(){
		var valor = document.getElementById("participante");
		var itemSelecionado = valor.options[valor.selectedIndex].value;
		if(itemSelecionado === "aluno"){
			document.getElementById('matricula').style. display = 'block';
		}
		if(itemSelecionado === "servidor"){
			document.getElementById('matricula').style. display = 'block';
		}
		if(itemSelecionado === "comunidade"){
			document.getElementById('matricula').style. display = 'none';
		}
	}
</script>