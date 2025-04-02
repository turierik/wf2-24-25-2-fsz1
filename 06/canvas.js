const canvas = document.querySelector("canvas")
const ctx = canvas.getContext("2d")

let x = 50

function render(){
    ctx.clearRect(0, 0, canvas.width, canvas.height)
    ctx.fillStyle = "red"
    ctx.fillRect(x, 50, 100, 70)
}

function update(dt){
    x += 0.01 * dt
}

let last = 0

function gameLoop(){
    render()
    const now = performance.now()
    const dt = now - last
    update(dt)
    last = now
    requestAnimationFrame(gameLoop)
}

gameLoop()