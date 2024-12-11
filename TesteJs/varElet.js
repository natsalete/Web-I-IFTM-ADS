{
    {
        {
            {
                var abc = "ABC"
            }
        }
    }
}

console.log(abc)

function teste(){
    var local = 123
    console.log(local)
}

teste()
//console.log(local)

for(let i = 0; i < 10; i++){
    console.log(i)
}
//console.log("i = " + i)

const funcs = []
for(var j = 0; j < 12; j++){
    funcs.push(function(){
        console.log(j)
    })
}

funcs[2]()
funcs[8]()