const frm = document.querySelector("form");  //obtem elementos da pagina
const resp = document.querySelector("pre");

frm.addEventListener("submit", (e) => {
    e.preventDefault(); //evita o envio do form

    const produto = frm.inProduto.value;

    // se houver dados salvos...
    if (localStorage.getItem("comprasProduto")) {
        // obtem itens separando-os em elementos de vetor
        const produtos = localStorage.getItem("comprasProduto").split(";");

        //adiciona o novo produto ao vetor
        produtos.push(produto);

        //classifica o vetor
        produtos.sort();

        //salva vetor classificando (com elementos separados por "")
        localStorage.setItem("comprasProduto", produtos.join(";"));
    } else {
        // senao e a primeira inclusao, salva apenas o produto
        localStorage.setItem("comprasProduto", produto);
    }
    
    listarProdutos();
    

    

    frm.reset();
    frm.inProduto.focus();


});

const listarProdutos = () => {
    if(!localStorage.getItem("comprasProduto")) {
        resp.innerText = "";
        return;
    }

    const produtos = localStorage.getItem("comprasProduto").split(";");

    resp.innerText = `Produtos Adicionados\n------------------\n${produtos.join("\n")}`;



}
window.addEventListener("load", listarProdutos);

frm.btLimpar.addEventListener("click", ()=> {
    if (localStorage.getItem("comprasProduto")) {
        if (confirm("Deseja realmente excluir todos os itens da lista:")) {
            localStorage.removeItem("comprasProduto");
            listarProdutos();
        }
    } else {
        alert("lista esta vazia...");
    }
    frm.inProduto.focus();


});