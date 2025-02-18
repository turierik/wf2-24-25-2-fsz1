const input = document.querySelector("input")
const span = document.querySelector("span")

function handleInputInput(){
    span.innerText = input.value.length
}

input.addEventListener("input", handleInputInput)
