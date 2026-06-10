
const reset = document.querySelector('.reset')
const start = document.querySelector('.start');
const  timerValue = document.querySelector('.timer-value');


 let  counter = 0;
 let interval = null

const initGame = () => {


  interval = setInterval(() => {
        

         if(counter < 100) {
            counter = counter +1
           timerValue.innerHTML = counter

         } else {
         clearInterval(interval)
         counter = 0
         timerValue.innerHTML = counter;
         }
    }, 1000);
}

const resetGame = () => {
    clearInterval(interval)
    interval = null
     counter = 0
    timerValue.innerHTML = counter;
}

start.addEventListener('click', initGame)
reset.addEventListener('click', resetGame)
