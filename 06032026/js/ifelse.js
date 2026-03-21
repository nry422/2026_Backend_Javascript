//cria referencia ao form e elemendos de resposta do programa
const frm = document.querySelector("form")
const resp1 = document.querySelector("h3")
const resp2 = document.querySelector("h4")

//cria um ouvinte de evento, acionado quando o botao submit for clicado
frm.addEventListener("submit", (e) => {
    e.preventDefault() //evita envio do form

    const nome = frm.inNome.value // obtem valores do form
    const nota1 = Number(frm.inNota1.value)
    const nota2 = Number(frm.inNota2.value)

    const media = (nota1 + nota2) / 2 //calcula media divisao

    resp1.innerText = `Media das notas ${media.toFixed(2)}`

    //cria as condicoes
    if (media >= 7) {
        //altera o texto e estilo da cor do elemento resp2
        resp2.innerText = `Parabens ${nome}! Voce foi aprovado(a) `
        resp2.style.color = "blue"
    }else if (media >=4) {
        resp2.innerText = `Atencao ${nome}. Voce esta em exame`
        resp2.style.color = "green"
    } else {
        resp2.innerText = `Ops ${nome}... Voce foi reprovado(a)`
        resp2.style.color = "red"
    }
  }


);