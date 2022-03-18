const formulario = document.querySelector("#cadMsgContato"); //Pegando o formulario de cadastro pelo id
dataAtual = new Date();
formulario.onsubmit = evento => {
    //Recebendo o valor do campo
    var nome = document.querySelector('#nome').value;
    var email = document.querySelector('#email').value;
    var telefone = document.querySelector("#telefone").value;
    var nascimento = document.querySelector("#nascimento").value;
    




    if(nome === ""){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p>Erro: necessario preencher o campo nome</p>";
        return;
    }

    if(nome.lenght < 3){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p>Erro: necessario preencher o campo nome com no minimo 3 caracteres.</p>";
        return;
    }

    
    if(email === ""){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p>Erro: necessario preencher o campo email</p>";
        return;
    }

    if(telefone === ""){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p>Erro: necessario preencher o campo telefone</p>";
        return;
    }

    if(telefone.lenght < 6){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p>Erro: necessario preencher o campo telefone com no minimo 6 números.</p>";
        return;
    }

    if(nascimento > dataAtual){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p>Erro: necessario preencher o campo com uma data valida.</p>";
        return;
    }

   


}
