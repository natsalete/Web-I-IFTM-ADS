//os falsos

console.log(!!0)
console.log(!!'')
console.log(!!null)
console.log(!!NaN)
console.log(!!undefined)

let nome = ""
console.log(nome || 'Desconhecido')


console.log("==============================================")


let isAtivo = false
console.log(isAtivo ? "Está ativo" : "Não está Ativo")

isAtivo = true
console.log(isAtivo ? "Está ativo" : "Não está Ativo")

isAtivo = 1
console.log(!!isAtivo)

console.log(1 < 0)

console.log("==============================================")

const valores = [7.7, 8.9, 6.3, 9.2]
console.log(valores[0], valores[3])
console.log(valores[4])

valores[4] = 10
console.log(valores)
console.log(valores.length)
valores.push({id:3}, false, null, "teste")

console.log(valores)

console.log(valores.pop())
delete valores[0]

console.log(valores)
console.log(typeof valores)


