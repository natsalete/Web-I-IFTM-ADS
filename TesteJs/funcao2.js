//Armazena uma função arrow em uma variavel
const imprimirSoma = function(a,b){
    console.log(a+b)
}

imprimirSoma(2,3)

//Armazena uma função arrow em uma variavel
const soma = (a,b) => {
    return a+b
}
console.log(soma(2,3))

//retorno implicito
const substracao = (a,b) => a-b
console.log(substracao(5,3))

const imprimir2 = a => console.log(a)
imprimir2("Hello")