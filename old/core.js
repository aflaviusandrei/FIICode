var timer;
var updateTimer;
var enemiesLeft = 10;
var enemy1 = undefined;
var enemy2 = undefined;
var heroPath = undefined;
var selectedHero = undefined;
var powerActivated = false;

function hoverHero() {
    if (powerActivated) {
        return;
    };
    var element = document.getElementById("inGameIcon");
    if (selectedHero == 'js') {
        element.setAttributeNS('http://www.w3.org/1999/xlink', 'href', './images/warriors/jshover.png');
    } else if (selectedHero == 'cpp') {
        element.setAttributeNS('http://www.w3.org/1999/xlink', 'href', './images/warriors/cpphover.png');
    } else if (selectedHero == "php") {
        element.setAttributeNS('http://www.w3.org/1999/xlink', 'href', './images/warriors/phphover.png');
    };
};

function unHoverHero() {
    if (powerActivated) {
        return;
    };
    var element = document.getElementById("inGameIcon");
    if (selectedHero == 'js') {
        element.setAttributeNS('http://www.w3.org/1999/xlink', 'href', './images/warriors/jsidle.png');
    } else if (selectedHero == 'cpp') {
        element.setAttributeNS('http://www.w3.org/1999/xlink', 'href', './images/warriors/cppidle.png');
    } else if (selectedHero == "php") {
        element.setAttributeNS('http://www.w3.org/1999/xlink', 'href', './images/warriors/phpidle.png');
    };
};

function activatePower() {
    if (powerActivated) {
        return;
    }
    hoverHero();
    powerActivated = true;
    if (selectedHero == 'cpp') {
        console.log(timer);
        clearTimeout(timer);
        console.log(timer);
        clearInterval(updateTimer);
        var timerElem = document.getElementById("timer");
        timerElem.textContent = "infinite";
    } else if (selectedHero == 'js') {
        var animationsArray = document.getElementsByClassName("animation");
        for (i = 0; i < animationsArray.length; i++) {
            animationsArray[i].setAttributeNS(null, "dur", 50 + i + "s");
        }
    } else if (selectedHero == 'php') {
        var enemies = document.getElementsByClassName("enemy");
        var length = enemies.length / 2;
        for (i = 0; i < length; i++) {
            enemies[i].parentNode.removeChild(enemies[i]);
            enemiesLeft--;
        };
    };

}

function hover(hero) {
    if (hero == 'cpp' && selectedHero != 'cpp') {
        var element = document.getElementById("cpp");
        element.setAttribute('src', './images/warriors/cpphover.png');
    } else if (hero == "js" && selectedHero != 'js') {
        var element = document.getElementById("js");
        element.setAttribute('src', './images/warriors/jshover.png');
    } else if (hero == "php" && selectedHero != 'php') {
        var element = document.getElementById("php");
        element.setAttribute('src', './images/warriors/phphover.png');
    }
}

function unHover(hero) {
    if (hero == 'cpp' && selectedHero != 'cpp') {
        var element = document.getElementById("cpp");
        element.setAttribute('src', './images/warriors/cppidle.png');
    } else if (hero == "js" && selectedHero != 'js') {
        var element = document.getElementById("js");
        element.setAttribute('src', './images/warriors/jsidle.png');
    } else if (hero == "php" && selectedHero != 'php') {
        var element = document.getElementById("php");
        element.setAttribute('src', './images/warriors/phpidle.png');
    }
}

function select(hero) {
    if (hero == 'cpp') {
        selectedHero = 'cpp';
        var element = document.getElementById("cpp");
        element.setAttribute('src', './images/warriors/cpphover.png');
        unHover('js');
        unHover('php');
    } else if (hero == "js") {
        selectedHero = 'js';
        var element = document.getElementById("js");
        element.setAttribute('src', './images/warriors/jshover.png');
        unHover('cpp');
        unHover('php');
    } else if (hero == "php") {
        selectedHero = 'php';
        var element = document.getElementById("php");
        element.setAttribute('src', './images/warriors/phphover.png');
        unHover('cpp');
        unHover('js');
    }
}

function addEnemies() {
    if (selectedHero == 'cpp') {
        enemy1 = 'js';
        enemy2 = 'php';
    } else if (selectedHero == 'js') {
        enemy1 = 'cpp';
        enemy2 = 'php';
    } else if (selectedHero == "php") {
        enemy1 = 'js';
        enemy2 = 'cpp';
    };
    var enemies = document.getElementsByClassName("enemy");
    for (i = 0; i < enemies.length; i++) {
        if (i % 2 == 0) {
            enemies[i].setAttributeNS('http://www.w3.org/1999/xlink', 'href', './images/warriors/' + enemy1 + 'hover.png');
        } else {
            enemies[i].setAttributeNS('http://www.w3.org/1999/xlink', 'href', './images/warriors/' + enemy2 + 'hover.png');
        };
    };
};


function startGame() {
    if (!selectedHero) {
        return;
    }
    var wrapper = document.getElementById("wrapper");
    wrapper.parentNode.removeChild(wrapper);

    if (Modernizr.smil == false) {
        finishGame(["Well..^1000", "Your browser doesn't have support for what we would like to show you...^1000", "but", "you deserve to know our secret...^1000", "FII CODE^1000",
            "A national algorithmic and web competition...", "Coming soon!^2000", "This message will selfdestruct in...",
            "3^1000", "2^1000", "1^1000", "PS: like us on Facebook! ^3000"
        ], true, true);
        return;
    };

    var svg = document.getElementById("svg");
    svg.classList.add("visible");
    var element = document.getElementById("inGameIcon");
    element.setAttributeNS('http://www.w3.org/1999/xlink', 'href', './images/warriors/' + selectedHero + 'idle.png');
    timer = setTimeout(function() {
        killHero();
    }, 30000);
    updateTimer = setInterval(function() {
        var timerElem = document.getElementById("timer");
        timerElem.textContent--;
    }, 1000);
    addEnemies();
};

function finishGame(stringsArray, noSupport, win) {
    var svg = document.getElementById("svg");
    var message = document.getElementById("message");

    if (!noSupport) {
        svg.classList.add("overlay");
    };
    var box = document.getElementsByClassName("box")[0];
    box.className += " visible";

    $(".box").typed({
        strings: stringsArray,
        typeSpeed: 0,
        callback: function() {
            var body = document.body;
            body.removeChild(svg);
            body.removeChild(message);
            if (win == true) {
                body.innerHTML += ' <div id="fb-root"></div><div class="end-message"><div class="fb-like" data-href="https://www.facebook.com/FIICode/?fref=ts" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div><a href="https://www.facebook.com/fiicode">Get to facebook page!</a></div>';
                facebook(document, 'script', 'facebook-jssdk');
            };
        },
    });
};

function killHero(evt) {
    var stringsArray = ["You failed...^500", "...this time.", "Refresh the page to try again!^2000"];
    clearInterval(updateTimer);
    finishGame(stringsArray);
};

function killEnemy(evt) {
    enemiesLeft--;
    evt.target.parentNode.removeChild(evt.target);
    if (enemiesLeft == 0) {
        clearTimeout(timer);
        clearTimeout(updateTimer);
        finishGame(["Congratulations!", "You seem ready for our competition!", "FII CODE^1000",
            "A national algorithmic and web competition...", "Coming soon!^2000", "This message will selfdestruct in...",
            "3^1000", "2^1000", "1^1000", "PS: like us on Facebook! ^3000"
        ], false, true);
    };
};

function facebook(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "http://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
    fjs.parentNode.insertBefore(js, fjs);
};
