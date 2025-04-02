const form = document.querySelector("form");
const bgInput = document.querySelector("#background-image");
const addresseeInput = document.querySelector("#addressee");
const senderInput = document.querySelector("#sender");
const contentsFieldset = form.querySelector(".contents");
const contentTextarea = contentsFieldset.querySelector("textarea");
const alignRadio = form.elements["align1"];

const postcardSection = document.querySelector("#postcard");
const addresseeHeading = postcardSection.querySelector("h1");
const senderFooter = postcardSection.querySelector("footer");
const contentsDiv = postcardSection.querySelector(".contents");
const contentPar = contentsDiv.querySelector("p");

// Ide írd a megoldásodat!
form.addEventListener("input", function(){
    console.log(bgInput.value)
    if (bgInput.value)
        postcardSection.style.backgroundImage = `url("${bgInput.value}")`
    else
        postcardSection.style.backgroundImage = ''
    addresseeHeading.innerText = addresseeInput.value
    senderFooter.innerText = senderInput.value
    contentPar.innerText = contentTextarea.value
    contentPar.classList.remove("left")
    contentPar.classList.remove("right")
    contentPar.classList.remove("center")
    contentPar.classList.add(alignRadio.value)
})