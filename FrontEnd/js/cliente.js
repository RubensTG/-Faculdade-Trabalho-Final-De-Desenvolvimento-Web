function cadastrarCliente(){
	var form = document.getElementById("formulario");
	var data = {};
	data['nome'] = form.nome.value 
	data['rg'] = form.rg.value;
	data['celular'] = form.celular.value;

	console.log(JSON.stringify(data));
	fetch('http://localhost/TrabalhoFinal/PhpBackEnd/cliente', {
		method: 'POST',       
		body: JSON.stringify(data)
	})
	.then((response) => {
		if (response.ok) {
			return response.json() 
		} else {
			return Promise.reject({ status: res.status, statusText: res.statusText });
		}   

	})
	.then((data) => console.log(data))
	.catch(err => console.log('Error message:', err.statusText));
}
