const frm = document.querySelector("form") //obtem elemtnos da pagina
const resp = document.querySelector("pre")

frm.addEventListener("submit", (e) =>{ //"escuta event submit do form"
    e.preventDefault()  //evita envio do form

    const numero = Number(frm.inNumero.value) //obtem numero informado

    let resposta = "" //variavel tipo string para concatenar a resposta

    //ciar uma laco de repeticao (i comeca em 1 e é incrementado até 10)
    for (let i = 1; i<= 10; i++) {
        // a variavel resposta vai acumulando os novos conteudos
        resposta = resposta + numero + " x " + i + " = " + (numero * i) + "\n"
        // resposta = `${resposta} ${numero x ${i} = ${numero * o}) \n`
        }




    // o conteudo da tag pre é alterado para exibir a tabuada do numero
    resp.innerText = resposta




})