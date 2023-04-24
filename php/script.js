var buscar = document.getElementById("btnBuscar");
var tabela = document.getElementById("itens");

buscar.addEventListener('click', enviarDados);

function enviarDados(){
    $.ajax({
        url: 'itemHelper.php',
        type: 'POST',
        dateType:'JSON',
        data:{
            tipoF: 'buscarItem',
            nome: $("#nome").val()
        },
        success:(resultado) => {
         //   console.log(resultado);
            itens = JSON.parse(resultado);
            processarDados(itens);
        }
    });
}

function processarDados(itens){
   //console.log(itens);
   limparTela();
    for (var i= 0; i < itens.length; i++){
        item = itens[i];
        adicionarDados(item);
    }
}

function limparTela(){
    var filhos = document.querySelectorAll('tr');
    console.log(filhos);
    for (i = 1; i < filhos.length; i++){
        tabela.removeChild(filhos[i]);
    }
}

function adicionarDados(item){
   
    var linha = document.createElement('tr');

    var tdCodigo = document.createElement('td');
    var tdNome = document.createElement('td');

    var tdTipo = document.createElement('td');

    var tdAcao = document.createElement('td');

    var botao = document.createElement('a');

    botao.href = "itemHelper.php?id_item=" + item["id_item"];
    botao.textContent = "Adicionar";

    tdAcao.appendChild(botao);

    tdCodigo.textContent = item["id_item"];
    tdNome.textContent = item["nome"];
    tdTipo.textContent = item["tipo"];

    linha.appendChild(tdCodigo);
    linha.appendChild(tdNome);
    linha.appendChild(tdTipo);
    linha.appendChild(tdAcao);

    tabela.appendChild(linha);
;

    return false;

}

