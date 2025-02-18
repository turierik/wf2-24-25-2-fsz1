const cel = Math.floor(Math.random() *100)

const button = document.querySelector("button")
const input = document.querySelector("input")
const span = document.querySelector("span")

function handleButtonClick(){
    const tipp = input.valueAsNumber
    if (cel < tipp)
        span.innerText = "Kisebbre gondoltam."
    else if (cel > tipp)
        span.innerText = "Nagyobbra gondoltam."
    else if (isNaN(tipp))
        span.innerText = "Hol a tipped?!"
    else
        span.innerText = "ELTALÁLTAD!"
}

button.addEventListener("click", handleButtonClick)

