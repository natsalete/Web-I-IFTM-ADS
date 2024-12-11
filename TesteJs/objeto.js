const prod1 = {} //representa objeto
//[] representa array

prod1.nome = "Celular"
prod1.preco = 5000
prod1["desconto"] = 0.4
//outra forma de definir atributo

console.log(prod1)

const prod2 = {
    nome: "Camisa Polo",
    preco: 80.0
}

//diferente de JSON, lá o índice
//fica entre aspas

console.log(prod2)
console.log(typeof Object)
class Produto{}
console.log(typeof Produto)