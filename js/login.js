let btn = document.querySelector('#verSenha');
let btnEntrar = document.getElementById('btnEntrar');

//SE A TECLA ENTER FOR PRESSIONADA, SE COMPORTA COMO UM CLIQUE DO MOUSE NO BOTÃO
document.addEventListener("keypress", function (e) {
    if (e.key === 'Enter') {
        var btn = document.querySelector("#btnEntrar");
        btn.click();
    }
});
//-------------------------------------------REALIZA LOGIN-------------------------------------------------
function entrar() {
    let usuario = document.querySelector('#usuario')
    let userLabel = document.querySelector('#userLabel')

    let senha = document.querySelector('#senha')
    let senhaLabel = document.querySelector('#labelSenha')

    let msgError = document.querySelector('#msgError');


    //VERIFICA SE OS DADOS SÃO VALIDOS
    if (usuario.value == '' && senha.value == '') {
        alert("DIGITE O NOME DE USUÁRIO E SUA SENHA")
    }

    else if (usuario.value == userValid.user && senha.value == userValid.senha) {
        btnEntrar.setAttribute('style', 'background-color: green; color: white');
    
        if(usuario.value == 'admin'){
            setTimeout(() => {
                window.location.href = 'admin-panel.php';
            }, 1500) 

        }else{ 
            setTimeout(() => {
                window.location.href = 'player-panel.php';
            }, 1500) 
         }
        
    }
    else {
        btnEntrar.setAttribute('style', 'background-color: red; color: white');
        userLabel.setAttribute('style', 'color: red; border-color: red');
        usuario.setAttribute('style', 'border-color: red; color: red');
        senhaLabel.setAttribute('style', 'border-color: red; color: red');
        senha.setAttribute('style', 'color: red; border-color: red');
        msgError.innerHTML = 'Usuário e/ou senha incorretos';
        msgError.setAttribute('style', 'display: block');
        usuario.focus();
    }
}
btn.addEventListener('click', () => {
    let inputSenha = document.querySelector('#senha')
    if (inputSenha.getAttribute('type') == 'password') {
        inputSenha.setAttribute('type', 'text')
    } else {
        inputSenha.setAttribute('type', 'password')
    }
});