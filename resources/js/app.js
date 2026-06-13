const reset = document.querySelector(".reset");
const start = document.querySelector(".start");
const timerValue = document.querySelector(".timer-value");
const board = document.querySelector(".board");

let counter = 0;
let interval = null;

const cards = ["a", "b", "c", "d", "e", "f"];

const copyOfCards = Array.from(cards);
let gameStarted = false;

const joinCards = [...cards, ...copyOfCards];

const startButton = () => {
    gameStarted = true;
    interval = setInterval(() => {
        if (counter < 10) {
            counter = counter + 1;
            timerValue.innerHTML = counter;
            start.disabled = true;
        } else {
            clearInterval(interval);
            counter = 0;
            timerValue.innerHTML = counter;
            start.disabled = false;
        }
    }, 1000);
};

const mixed = (joinCards) => {
    let shuffled = joinCards.sort(() => Math.random() - 0.5); // no entiendo el .5
    return shuffled;
};

const renderBoard = (shuffled) => {
    board.innerHTML = "";
    shuffled.map((item) => {
        let card = document.createElement("div");
        card.classList.add("card");
        board.appendChild(card);
        const front = document.createElement("div");
        front.classList.add("card-front");
        card.appendChild(front);
        front.innerHTML = "?";

        const back = document.createElement("div");
        back.classList.add("card-back");
        card.appendChild(back);
        back.innerHTML = item;

        card.addEventListener("click", () => {
            if (gameStarted === true) {
                card.classList.toggle("flip");
            }
        });

        if (gameStarted === false) {
            card.classList.remove("flip");
        }
    });
};

const resetButon = () => {
    gameStarted = false;
    clearInterval(interval);
    interval = null;
    counter = 0;
    timerValue.innerHTML = counter;
    start.disabled = false;
};

const initGame = () => {
    const shuffled = mixed(joinCards);
    renderBoard(shuffled);
};

document.addEventListener("DOMContentLoaded", initGame);
start.addEventListener("click", startButton);
reset.addEventListener("click", resetButon);
