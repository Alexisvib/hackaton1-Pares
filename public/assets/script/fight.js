const attack = document.getElementById('attack');
const percy =  document.getElementById('percy');
const ginny =  document.getElementById('ginny');
const claw = document.getElementById('claw-attack');
const clawDamage = document.getElementById('claw-damage');
const enemy = document.getElementById('enemy');


const attacker = document.getElementById('attacker');

if (attacker.value === 'percy') {
    attack.addEventListener('click', async e => {
        percy.classList.toggle('animate__headShake');
        percy.classList.toggle('attack-percy');
        await sleep(800);
        claw.classList.toggle('interaction');
        await sleep(800);
        enemy.classList.toggle('red-filter');
        claw.classList.toggle('fadeOut');
        claw.classList.toggle('interaction');
        document.forms["menu-attack-action"].submit();
    })
}
if (attacker.value === 'ginny') {
    attack.addEventListener('click', async e => {
        ginny.classList.toggle('animate__shakeY');
        ginny.classList.toggle('attack-ginny');
        await sleep(1000);
        claw.classList.toggle('interaction');
        await sleep(800);
        enemy.classList.toggle('red-filter');
        claw.classList.toggle('fadeOut');
        claw.classList.toggle('interaction');
        await sleep(100);
        enemy.classList.toggle('red-filter');
        await sleep(500);
        enemy.classList.toggle('animate__bounce');
        enemy.classList.toggle('enemy');
        await sleep(10);
        enemy.classList.toggle('attack-enemy');
        await sleep(1000);
        clawDamage.classList.toggle('interaction');
        await sleep(600);
        clawDamage.classList.toggle('interaction');
        percy.classList.toggle('red-filter');
        ginny.classList.toggle('red-filter');
        await sleep(100);
        percy.classList.toggle('red-filter');
        ginny.classList.toggle('red-filter');
        await sleep(500);
        document.forms["menu-attack-action"].submit();
    })
}


function sleep(ms)
{
    return new Promise(resolve => setTimeout(resolve, ms));
}


const technology = document.getElementById('technology');
const menuFight = document.getElementById('menu-fight')
const skillPercy = document.getElementById('skills-Percy');
const skillGinny = document.getElementById('skills-Ginny');

if (attacker.value === 'percy') {
    technology.addEventListener('click', e => {
        e.preventDefault();
        skillPercy.classList.toggle('display-none');
        skillPercy.classList.toggle('menu-skills');
        menuFight.classList.toggle('display-none');
        menuFight.classList.toggle('menu-fight');
    });
}

const closeSkillsPercy = document.getElementById('close-skills-percy');
if (attacker.value === 'percy') {
    closeSkillsPercy.addEventListener('click', e => {
        e.preventDefault();
        skillPercy.classList.toggle('display-none');
        skillPercy.classList.toggle('menu-skills');
        menuFight.classList.toggle('display-none');
        menuFight.classList.toggle('menu-fight');
    });
}

if (attacker.value === 'ginny') {
    technology.addEventListener('click', e => {
        e.preventDefault();
        skillGinny.classList.toggle('display-none');
        skillGinny.classList.toggle('menu-skills');
        menuFight.classList.toggle('display-none');
        menuFight.classList.toggle('menu-fight');
    });
}

const closeSkillsGinny = document.getElementById('close-skills-ginny');
if (attacker.value === 'ginny') {
    closeSkillsGinny.addEventListener('click', e => {
        e.preventDefault();
        skillGinny.classList.toggle('display-none');
        skillGinny.classList.toggle('menu-skills');
        menuFight.classList.toggle('display-none');
        menuFight.classList.toggle('menu-fight');
    });
}


const laserspell = document.getElementById('spellLaser');
const laser = document.getElementById('laser-attack');


laserspell.addEventListener('click', async e => {
    e.preventDefault();
    laser.classList.toggle('interaction');
    laser.classList.toggle('laser-animation');
    await sleep(600);
    laser.classList.toggle('interaction');
    await sleep(400);
    enemy.classList.toggle('red-filter');
    await sleep(500);
    document.forms["form-laser"].submit();
});

const rocketspell = document.getElementById('spellRocket');
const rocket = document.getElementById('missile-attack');


rocketspell.addEventListener('click', async e => {
    e.preventDefault();
    rocket.classList.toggle('interaction');
    rocket.classList.toggle('rocket-animation');
    await sleep(1000);
    rocket.classList.toggle('interaction');
    await sleep(400);
    enemy.classList.toggle('red-filter');
    await sleep(500);
    document.forms["form-missile"].submit();
});


const musicspell = document.getElementById('spellMusic');
const music = document.getElementById('music-attack');


musicspell.addEventListener('click', async e => {
    e.preventDefault();
    music.classList.toggle('interaction');
    music.classList.toggle('rocket-animation');
    await sleep(1000);
    music.classList.toggle('interaction');
    await sleep(400);
    enemy.classList.toggle('red-filter');
    await sleep(500);
    document.forms["form-tecktonikAttack"].submit();
});

const asteroidspell = document.getElementById('spellAsteroid');
const asteroid = document.getElementById('asteroid-attack');


asteroidspell.addEventListener('click', async e => {
    e.preventDefault();
    asteroid.classList.toggle('interaction');
    asteroid.classList.toggle('asteroid-animation');
    await sleep(1900);
    asteroid.classList.toggle('interaction');
    await sleep(400);
    enemy.classList.toggle('red-filter');
    await sleep(500);
    document.forms["form-asteroid"].submit();
});

const magickissspell = document.getElementById('spellMagicKiss');
const magickiss = document.getElementById('magiskiss-attack');


magickissspell.addEventListener('click', async e => {
    e.preventDefault();
    magickiss.classList.toggle('interaction');
    magickiss.classList.toggle('magickiss-animation');
    await sleep(1900);
    magickiss.classList.toggle('interaction');
    await sleep(400);
    document.forms["magicKissForm"].submit();
});

const rockspell = document.getElementById('spellRock');
const rock = document.getElementById('rock-attack');


rockspell.addEventListener('click', async e => {
    e.preventDefault();
    rock.classList.toggle('interaction');
    rock.classList.toggle('rock-animation');
    await sleep(2300);
    rock.classList.toggle('interaction');
    await sleep(400);
    enemy.classList.toggle('red-filter');
    await sleep(500);
    document.forms["rockDropperForm"].submit();
});

const tornadospell = document.getElementById('spellTornado');
const tornado = document.getElementById('tornado-attack');


tornadospell.addEventListener('click', async e => {
    e.preventDefault();
    tornado.classList.toggle('interaction');
    tornado.classList.toggle('tornado-animation');
    await sleep(1800);
    tornado.classList.toggle('interaction');
    await sleep(400);
    enemy.classList.toggle('red-filter');
    await sleep(500);
    document.forms["martianTornadoForm"].submit();
});

const mckisspell = document.getElementById('spellMckiss');
const mckiss = document.getElementById('mckiss-attack');


mckisspell.addEventListener('click', async e => {
    e.preventDefault();
    mckiss.classList.toggle('interaction');
    mckiss.classList.toggle('mckiss-animation');
    await sleep(1900);
    mckiss.classList.toggle('interaction');
    await sleep(400);
    document.forms["eMcKissForm"].submit();
});
