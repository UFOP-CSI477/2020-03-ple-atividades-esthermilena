function validar(){
    var nome = document.getElementById("nome");
    var endereco = document.getElementById("endereco");
    var cpf = document.getElementById("cpf");
    var contato = document.getElementById("contato");

    if(nome.value == "") {
        alert ("Nome não informado!");
        nome.focus();
    }
    if (endereco.value == ""){
        alert ("Endereço não informado!");
        endereco.focus;
    }
    if (cpf.value == ""){
        alert ("CPF não informado!");
        cpf.focus;
    }
    if (contato.value == ""){
        alert ("Contato não informado!");
        contato.focus;
    }

}
