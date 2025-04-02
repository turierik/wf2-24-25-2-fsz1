function random(a, b) {
  return Math.floor(Math.random() * (b - a + 1)) + a;
}
function xyCoord(td) {
  return {
    x: td.cellIndex,
    y: td.parentNode.rowIndex,
  };
}
function distanceHue(x1, y1, x2, y2) {
  const distance = Math.sqrt((x1 - x2) ** 2 + (y1 - y2) ** 2);
  const maxDistance = Math.sqrt((10 - 1) ** 2 + (14 - 1) ** 2);
  console.log(distance / maxDistance);
  const hue = (120 * distance) / maxDistance;
  return hue;
}

const containerDiv = document.querySelector("#container");
const counterSpan = document.querySelector("#span-counter");
const widthInput = document.querySelector("#input-width");
const heightInput = document.querySelector("#input-height");
const generateForm = document.querySelector("#form-generate");

// Ide jön a megoldásod!
const treasureX = random(0, 13)
const treasureY = random(0, 9)

const table = document.querySelector("table")

let counter = 0

table.addEventListener("click", function(e){
  if (e.target.matches("td")){
    const clicked = e.target
    if (clicked.dataset.jancsika != 1)
      counter++
    counterSpan.innerText = counter
    const clickedX = xyCoord(clicked).x
    const clickedY = xyCoord(clicked).y
    //console.log(clickedX, clickedY)
    const hue = distanceHue(treasureX, treasureY, clickedX, clickedY)
    console.log(hue)
    clicked.style.backgroundColor = `hsla(${hue}, 100%, 50%, 0.7)`
    if (clickedX === treasureX && clickedY === treasureY)
      clicked.classList.add('treasure')
    clicked.dataset.jancsika = 1
  }
})