const ul = document.querySelector("ul")

const t = ["ananász", "banán", "citrom", 
"datolya", "eper", "füge", "gesztenye", 
"hibiszkusz"]

// paraszt megoldás - csak saját felelősségre :)
let s = ""
for (const el of t)
    s += "<li>" + el + "</li>"
ul.innerHTML = s

// szebb megoldás: map mint másolás tétel
ul.innerHTML = t.map(u => `<li>${u}</li>`).join(" ")

// borzasztó imperativ megoldás
for (const el of t){
    let li = document.createElement("li")
    li.innerText = el
    ul.appendChild(li)
}

function listEvent(e){
    if(!e.target.matches("li"))
        return;
    console.log(e)
    e.target.style.color = "red"
}

ul.addEventListener("click", listEvent)