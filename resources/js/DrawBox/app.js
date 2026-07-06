const drawArea = document.querySelector(".drawing-area");
const bin = document.querySelector(".trash");
const color = document.querySelector(".color");
const size = document.getElementById("size");
const sizeValue = document.querySelector(".size-value");
const ctx = drawArea.getContext("2d");
ctx.lineCap = "round";
let isInto = false;
let isDrawing = false;

let x = 0;
let y = 0;

const backgroundColorImg = "white";

drawArea.addEventListener("mouseover", function () {
    // console.log("entraste en el dibujo");
    isInto = true;
});

drawArea.addEventListener("mouseout", function () {
    // console.log("saliste del dibujo");
    isInto = false;
});

function getPos(e) {
    const rect = drawArea.getBoundingClientRect();
    const scaleX = drawArea.width / rect.width;
    const scaleY = drawArea.height / rect.height;
    return {
        x: (e.clientX - rect.left) * scaleX,
        y: (e.clientY - rect.top) * scaleY,
    };
}

drawArea.addEventListener("mousemove", function (event) {
    const pos = getPos(event);

    if (isDrawing) {
        ctx.lineTo(pos.x, pos.y);
        ctx.strokeStyle = color.value;
        ctx.lineWidth = size.value;
        ctx.stroke();
    }
});

drawArea.addEventListener("mousedown", function (event) {
    if (!isInto) {
        return;
    }
    // console.log("presionaste el cursor");
    isDrawing = true;
    ctx.beginPath();
});

drawArea.addEventListener("mouseup", function () {
    // console.log("soltaste el cursor");
    isDrawing = false;
});

const deleteBin = () => {
    ctx.clearRect(0, 0, drawArea.width, drawArea.height);
};

bin.addEventListener("click", deleteBin);

drawArea.toBlob(
    (blob) => {
        const a = document.createElement("a");
        a.href = URL.createObjectURL(blob);
        a.classList.add("dowload");
        a.download = "canvas-image.png";
        a.textContent = "Descargar imagen";

        ctx.fillStyle = backgroundColorImg;
        ctx.fillRect(0, 0, drawArea.width, drawArea.height);
        document.body.append(a);
    },
    "image/png",
    1.0,
);

size.addEventListener("click", function () {
    sizeValue.textContent = `${size.value}px`;
    return size.value;
});

color.addEventListener("click", function () {
    color.textContent = color.value;
    return color.value;
});
