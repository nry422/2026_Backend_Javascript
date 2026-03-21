// cria referência ao form e ao elemento h3 (onde será exibida a resposta)
const frm = document.querySelector("form");
const respt = document.querySelector("h3");

frm.addEventListener("submit", (e) => {
    const nome = frm.inNome.value; // obtém o nome digitado no form
    const idade = frm.inIdade.value;
    const cidade = frm.inCidade.value;
    respt.innerText = `Olá sou ${nome} tenho ${idade} anos e estou em ${cidade}.`; //exibe a resposta do programa
    e.preventDefault(); //evita envio do form
});