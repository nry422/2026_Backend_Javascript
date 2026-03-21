// cria referencia ao form e aos elementos h3 e h4 (resposta)
const frm = document.querySelector("form");
const resp1 = document.querySelector("h3");
const resp2 = document.querySelector("h4");

//cria um "ouvinte" de evento, acionado quando o botao submit for clicado
frm.addEventListener("submit", (e) => {

    const titulo = frm.inTitulo.value;
    const duracao = Number(frm.inDuracao.value);

    const horas = Math.floor(duracao / 60); // aredonda para baixo resultado
    const  minutos = duracao % 60; //obtem resto divisao

    resp1.innerText = titulo; //exibe resposta
    resp2.innerText = `${horas} hora(s) e ${minutos} minutis(s)`;

    e.preventDefault(); //evita envio do form







});