
var msg1 = document.getElementById("msg1");
var msg2 = document.getElementById("msg2");


function validarLogin() {
    var meuFormL = document.forms['formLogin']
    var email = String(meuFormL.email.value);
    var senha = String(meuFormL.senha.value);
    var erro = false;

    if(email.length == 0){
        erro = true;
        msg1.innerHTML = '<center>Preencha o campo de email</center>';
        console.log('Preencha o campo de email');
    } else {
        console.log('campo de email preenchido');
    } 

    if(senha.length == 0){
        erro = true;
        msg2.innerHTML = "<center>Preencha o campo de senha</center>";
        console.log("Preencha o campo de senha");
    } else {
        console.log("campo de senha preenchido");
    }
    
    // se houver algun erro retorna false
    if(erro){
        return false
    }else{
        return true
    }
}

