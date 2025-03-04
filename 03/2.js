const m = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
]

// 1. generálj táblázatot!
// 2. egy elemre kattintva,
//    duplázd meg az értékét
// 3. ha rámutatok egy sorra,
//    legyen sárga a háttere,
//    utána meg álljon vissza

const table = document.querySelector("table")

table.innerHTML =  m.map(r => `<tr>${r.map(c => `<td>${c}</td>`).join("")}</tr>`).join("")

table.addEventListener("click", tableEvent1)

function tableEvent1(e) {
    if(e.target.matches("td")) {
        e.target.innerText = e.target.innerText * 2
    }
}


// for (const r of m){
//     let tr = document.createElement("tr")
//     for (const c of r){
//         let td = document.createElement("td")
//         td.innerText = c
//         tr.appendChild(td)
//     }
//     table.appendChild(tr)
// }

function delegate(parent, type, selector, handler) {
    parent.addEventListener(type, function (event) {
      const targetElement = event.target.closest(selector);
  
      if (this.contains(targetElement)) {
        handler.call(targetElement, event);
      }
    });
  }

  function tableEvent2(e){
    this.style.backgroundColor = "yellow"
  }

  function tableEvent3(e){
    this.style.backgroundColor = "white"
  }

  delegate(table, "mouseover", "tr", tableEvent2)
  delegate(table, "mouseout", "tr", tableEvent3)
  