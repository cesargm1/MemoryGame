const reset = document.querySelector(".reset");
const start = document.querySelector(".start");
const timerValue = document.querySelector(".timer-value");
const board = document.querySelector(".board");

let counter = 0;
let interval = null;

const cards = ["a", "b", "c", "d", "e", "f"];

const copyOfCards = Array.from(cards);

let card1 = null;
let card2 = null;

let gameStarted = false;

const joinCards = [...cards, ...copyOfCards];

const startButton = () => {
    gameStarted = true;
    interval = setInterval(() => {
        if (counter >= 0) {
            counter = counter + 1;
            timerValue.innerHTML = counter;
            start.disabled = true;
        } else {
            start.disabled = false;
        }
    }, 1000);
};

const mixed = (joinCards) => {
    let shuffled = joinCards.sort(() => Math.random() - 0.5);
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
                if (card.classList.contains("flip")) {
                    return;
                }
                card.classList.toggle("flip");
                if (card1 === null) {
                    card1 = card;
                } else {
                    card2 = card;

                    // comprobar si son correctas
                    cardsEqueals();
                }
            }
        });

        if (gameStarted === false) {
            card.classList.remove("flip");
        }
    });
};

const cardsEqueals = () => {
    if (card1.innerHTML === card2.innerHTML) {
        card1 = null;
        card2 = null;
        card1.classList.add("front");
        card2.classList.add("front");
        card1.disabled;
        card2.disabled;
    } else {
        setTimeout(() => {
            card1.classList.remove("flip");
            card2.classList.remove("flip");
            card1 = null;
            card2 = null;
        }, 500);
    }
};

const resetButon = () => {
    gameStarted = false;
    clearInterval(interval);
    interval = null;
    counter = 0;
    timerValue.innerHTML = counter;
    start.disabled = false;
    let cards = document.querySelectorAll(".card");
    cards.forEach((card) => {
        card.classList.remove("flip");
    });
};

const initGame = () => {
    const shuffled = mixed(joinCards);
    renderBoard(shuffled);
};

document.addEventListener("DOMContentLoaded", initGame);
start.addEventListener("click", startButton);
reset.addEventListener("click", resetButon);
