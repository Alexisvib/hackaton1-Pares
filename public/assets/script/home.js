const start = document.getElementById('start');
const load = document.getElementById('continue');
const newGame = document.getElementById('newGame');

start.addEventListener('click', e => {
    e.preventDefault();
    start.classList.toggle('interaction');
    load.classList.toggle('interaction');
    newGame.classList.toggle('interaction');
})