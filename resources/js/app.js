const reset = document.querySelector(".reset");
const start = document.querySelector(".start");
const timerValue = document.querySelector(".timer-value");
const board = document.querySelector(".board");

let counter = 0;
let interval = null;

const cards = ["a", "b", "c", "d", "e", "f"];

const copyOfCards = Array.from(cards);

const joinCards = [...cards, ...copyOfCards];

const startButton = () => {
    interval = setInterval(() => {
        if (counter < 100) {
            counter = counter + 1;
            timerValue.innerHTML = counter;
        } else {
            clearInterval(interval);
            counter = 0;
            timerValue.innerHTML = counter;
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
        card.innerHTML = "?";

        card.addEventListener("click", () => {
            card.innerHTML = item;
            card.classList.add("flip");
            card.classList.add("card-back");
        });
    });
};

const resetButon = () => {
    clearInterval(interval);
    interval = null;
    counter = 0;
    timerValue.innerHTML = counter;
};

const initGame = () => {
    const shuffled = mixed(joinCards);
    renderBoard(shuffled);
    startButton();
};

document.addEventListener("DOMContentLoaded", initGame);
start.addEventListener("click", startButton);
reset.addEventListener("click", resetButon);
