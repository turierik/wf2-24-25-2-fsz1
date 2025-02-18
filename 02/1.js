const cim = document.querySelector("h1")
// cim.innerText = "Más <i>lett</i> a cím"
cim.innerHTML = "Más <i>lett</i> a cím"

const bek = document.querySelectorAll("p")
for (const b of bek)
    b.style.color = "green"

const kep = document.querySelector("img")
kep.src = "https://th.bing.com/th/id/OIP.9PgKpNQMMmVl0qj8Q27AvQHaE8?rs=1&pid=ImgDetMain"

// 1. feladat
// Helyezz el az oldaladra linkeket!
// Ird ki a konzolra, hogy mi a link felirata
// és hova visz.

// 1.b feladat
// Legyen minden link szövege tiszta NAGYBETŰ!

const linkek = document.querySelectorAll("a")
let eredmeny = []
for (const link of linkek){
    eredmeny.push({
        szoveg: link.innerText,
        hova: link.href
    })
    link.style.textTransform = "uppercase"
}
console.log(eredmeny)


