// ESEMÉNYKEZELÉS TUTORIAL :)

// 1.) Mi minden van az eseményben? (bemenet, kimenet, kiváltó)
const button = document.querySelector("button")
const span = document.querySelector("span")

// 2.) Mi történik? (ez egy függvény!)
function handleButtonClick(){
    span.innerText = "Rámkattintottál!"
    document.body.style.backgroundColor = "darkred"
    document.body.style.color = "white"
}

// 3.) Mikor történik? (mikor fusson le a függvény?)
button.addEventListener('click', handleButtonClick)



