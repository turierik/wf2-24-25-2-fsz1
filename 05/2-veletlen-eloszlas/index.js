function veletlenKozott(alja, teteje) {
  return Math.floor(Math.random() * (teteje - alja) + alja);
}

const tablazatsor = document.querySelector("table tr");
const cellak = document.querySelector("#cellak");
const hatar = document.querySelector("#hatar");
const abrazolGomb = document.querySelector("#abrazol");
const szamolGomb = document.querySelector("#szamol");

// ========================================================

abrazolGomb.addEventListener("click", function() {
  const cellakSzama = +cellak.value
  // tablazatsor.innerHTML = ""
  // for(let i = 0; i < cellakSzama; i++){
  //   let td = document.createElement("td")
  //   td.innerText = 0
  //   tablazatsor.appendChild(td)
  // }
  tablazatsor.innerHTML = Array(cellakSzama).fill(0).map(x => `<td>${x}</td>`).join("")
})

szamolGomb.addEventListener("click", function() {
  const tds = document.querySelectorAll("td")
  let max = 0
  for (const td of tds){
    const rand = veletlenKozott(1, +hatar.value)
    td.innerText = +td.innerText + rand
    if (+td.innerText > max)
      max = +td.innerText
  }
  console.log(max)
  for (const td of tds){
    const vili = +td.innerText * 100 / max
    td.style.backgroundColor = `hsl(10, 70%, ${vili}%)`
  }
})