const tehenek = [
  {
      "fajta" : "Holstein-fríz",
      "szin" : "fekete-fehér",
      "nem" : "bika",
      "kor": 3
  },
  {
      "fajta" : "Magyar tarka",
      "szin" : "barna-fehér",
      "nem" : "tehén",
      "kor": 5
  },
  {
      "fajta" : "Angus marha",
      "szin" : "barna",
      "nem" : "tehén",
      "kor": 10
  },
  {
      "fajta" : "Angus marha",
      "szin" : "barna",
      "nem" : "bika",
      "kor": 2
  },
  {
      "fajta" : "Holstein-fríz",
      "szin" : "fekete-fehér",
      "nem" : "bika",
      "kor": 12
  },
  {
      "fajta" : "Holstein-fríz",
      "szin" : "fekete",
      "nem" : "tehén",
      "kor": 4
  },
  {
      "fajta" : "Magyar tarka",
      "szin" : "barna",
      "nem" : "bika",
      "kor": 13
  },
  {
      "fajta" : "Angus marha",
      "szin" : "barna",
      "nem" : "bika",
      "kor": 11
  },
  {
      "fajta" : "Angus marha",
      "szin" : "barna",
      "nem" : "bika",
      "kor": 1
  }
]

const task1 = document.querySelector('#task1')
const task2 = document.querySelector('#task2')
const task3 = document.querySelector('#task3')
const task4 = document.querySelector('#task4')

// Megoldás innen

task1.innerText = tehenek.every(tehen => tehen.kor > 2)

task2.innerText = tehenek.filter(tehen => tehen.fajta === "Holstein-fríz").length

task2.innerText = tehenek.reduce((db, tehen) => tehen.fajta === "Holstein-fríz" ? db + 1 : db, 0)

task3.innerText = Math.max(...tehenek.map(tehen => tehen.kor))

task4.innerText = tehenek.some(tehen => tehen.szin === "fekete-fehér" && tehen.nem === "tehén")
