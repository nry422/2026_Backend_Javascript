const frm = document.querySelector("form") //obtem elemtnos da pagina
const resp = document.querySelector("h3")

frm.addEventListener("submit", (e) => { //"escuta event submit do form"
    e.preventDefault()  //evita envio do form

    const ladoa = Number(frm.inLadoa.value) //obtem numero informado
    const ladob = Number(frm.inLadob.value) //obtem numero informado
    const ladoc = Number(frm.inLadoc.value) //obtem numero informado

    let resposta = "" //variavel tipo string para concatenar a resposta

    if (ladoa + ladob > ladoc && ladoc + ladob > ladoa && ladoc + ladoa > ladob) { //todas as condições tem que ser verdadeiras para ser triangulo, a soma de dois lados não pode ser maior que a do outro

        if (ladoa == ladob && ladob == ladoc) {
            resposta = "Triângulo Equilátero (3 lados iguais)";
        } else if (ladoa == ladob || ladob == ladoc || ladoa == ladoc) {
            resposta = "Triângulo Isósceles (2 lados iguais)";
        } else {
            resposta = "Triângulo Escaleno (3 lados diferentes)"; // se os 3 lados não forem iguais, nem 2 laods iguais, todos os 3 são diferentes, não precisa mais testar.
        }

    } else { resposta = "Não é triangulo" }; //se falhou o teste inicial do if, nao é um triangulo






    // manda a resposta para resp
    resp.innerText = resposta




})