const cim = document.querySelector("h1")
const gomb = document.querySelector("button")

function megnyomtad() {
    cim.style.color = "red"
    cim.innerHTML = "Kösz hogy megnyomtad"
}

gomb.addEventListener('click', megnyomtad)

