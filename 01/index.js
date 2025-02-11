console.log("szia")

let t = [4, 3 ,8, 9, 12, -3, 0, 1]
let y = []

for(let i = 0; i < t.length; i++){
    if(t[i] % 2 === 0){
        y[y.length] = t[i]
    }   
}
console.log(y)

let z = []
for(const elem of t){
    if(elem % 2 === 0){
        z[z.length] = elem
    }
}
console.log(z)

let a = t.filter(function(x){
    return x % 2 === 0
})
console.log(a)

let b = t.filter(x => x % 2 === 0)
console.log(b)

// 1. minden elem köbre emelése
let c = t.map(x => x ** 3)
console.log(c)

// 2. páratlan számok négyzetének az összege

let d = t.filter(x => x % 2 === 1).map(x => x * x)
    .reduce((s, x) => s + x, 0)
console.log(d)

// 3. add meg a legnagyobb számot
console.log(Math.max(...t))

let auto = {
    model: 'Valami',
    year: 2023,
    broken: false
}

let cars = [
    {
        model: 'Valami',
        year: 2023,
        broken: false
    },
    {
        model: 'Izé',
        year: 2024,
        broken: true
    },
    {
        model: 'Hogyishijják',
        year: 2026,
        broken: false
    }
]

console.log(
    cars.filter(x => !x.broken).map(x => x.model)
)

