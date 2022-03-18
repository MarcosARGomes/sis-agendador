const formulario = document.querySelector("#cadMsgTarefa"); //Pegando o formulario de cadastro pelo id
dataAtual = new Date();
formulario.onsubmit = evento => {
    //Recebendo o valor do campo
    var titulo = document.querySelector('#titulo').value;
    var descricao = document.querySelector('#descricao').value;
    var conclusao = document.querySelector("#conclusao").value;
    




    if(titulo === ""){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p>Erro: necessario preencher o campo titulo</p>";
        return;
    }

    if(titulo.lenght < 3){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p>Erro: necessario preencher o campo titulo com no minimo 3 caracteres.</p>";
        return;
    }

    
    if(descricao === ""){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p>Erro: necessario preencher o campo descricao</p>";
        return;
    }

    if(conclusao < dataAtual){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p>Erro: necessario preencher o campo com uma data valida.</p>";
        return;
    }

   


}
