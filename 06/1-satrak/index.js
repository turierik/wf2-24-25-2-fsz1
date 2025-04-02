const solution = [
  [".", ".", "F", "."],
  [".", ".", "S", "."],
  ["S", "F", ".", "F"],
  [".", ".", ".", "S"],
];

const puzzle1 = [
  [".", ".", "F", " "],
  [" ", " ", "S", "."],
  ["S", "F", ".", "F"],
  [".", ".", ".", "S"],
];

// Ide írd a megoldásodat!
const task1 = solution[0].some(x => x === "F")
const task2 = solution[2].filter(x => x === "S").length
const task3 = solution.map(row => row.map(x => x === "F" ? "F" : " "))
const task4 = puzzle1.every(row => row.every(x => x !== " "))

console.log(task1);
console.log(task2);
console.log(task3);
console.log(task4);
