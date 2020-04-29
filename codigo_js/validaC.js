
var msg1 = document.getElementById("msg1");
var msg2 = document.getElementById("msg2");
var msg3 = document.getElementById("msg3");
var msg4 = document.getElementById("msg4");

function validarCadastro() {
    var meuForm = document.forms['formCadastro']
    var nome = meuForm.nome;
    var email = meuForm.email;
    var senha = meuForm.senha;
    var erro = false

    if (nome.value.length == 0) {

        msg1.innerHTML = "Digite seu nome<br>";
        
        msg1.style.display = "block";
        msg1.style.textAlign = "center";
        erro = true
        
    }else{
        msg1.innerHTML =""
    }
    if (email.value.length == 0) {
        msg2.innerHTML = "Digite um e-mail<br>";
        msg2.style.display = "block"
        erro = true

    } else if (email.value.indexOf('@') == -1)  {
        
            msg2.innerHTML = "Digite um e-mail válido<br>";
            msg2.style.display = "block"
            erro = true
    }
    else{
        msg2.innerHTML =""
    }

    if (senha.value.length == 0) {
        msg3.innerHTML = "Digite uma senha<br>";
        msg3.style.display = "block"
        erro = true

    } else if (senha.value.length != 6) {
        
            msg3.innerHTML = "Digite uma senha de 6 caracteres<br>";
            msg3.style.display = "block"
            erro = true
    }else{
        msg3.innerHTML =""
    }

    if(erro){
        return false
    }else{
        return true
    }
}