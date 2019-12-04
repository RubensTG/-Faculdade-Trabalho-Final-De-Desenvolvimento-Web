function login(){
	var usuario = "rubens";
	var senha = 123;
	if (usuario == form.Usuario.value && senha == form.Senha.value) {
		window.location='html/clientes.html';
	}
	else if(!form.Usuario.value || !form.Senha.value){
		alert("Preencha todos os campos");
	}
	else {
		alert("Senha ou usuário invalido!");
	}
 }
