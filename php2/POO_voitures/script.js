window.onload = function() {

    var i = 500;
    var stop = 'false';

    function demarrer() {
        setTimeout(() => {
            if (stop == 'false') {  
                let pathLength = document.getElementById('carPathDiv').innerHTML.length;
                if (document.getElementById('carPathDiv').innerHTML.charAt(pathLength-1) == ".") {
                    var string = document.getElementById('carPathDiv').innerHTML;
                    var newString = '.' + string.substring(0, string.length -1);
                    document.getElementById('carPathDiv').innerHTML = newString;
                }
                else {
                    document.getElementById('miniJeuResult').style.opacity = "1";
                    stop = true;
                    document.getElementById('carSmoke').replaceWith(".....");
                }
            }
            demarrer();
        }, i);
    }

    function stop() {
        i = 99999999;
    }

    // TODO: Pour accelerer de plus en plus en restant appuyé sur le bouton: https://stackoverflow.com/questions/40573922/click-and-hold-event-listener-with-javascript
    function accelerer() {
        // Vitesse max:
        if (i >= 50) {
            i = i - 51;
        }
        // Accélération de l'anim landscape  ~  d é g u e u l a s s e  ~
        document.getElementById('landscapeDiv').classList.add('acceleratededed');
    }
    // Plus galere de ralentir pour le fun (ON NE PEUT ARRETER QUE SI <10km/h)
    function ralentir() {
        // Vitesse min:
        if (i <= 500) {
            i = i + 10;
        }
    }


    // Bouton pour *RE*démarrer (marche pas: rework demarrer())
    var buttonStart = document.createElement('button');
    buttonStart.innerText = 'Start';
    buttonStart.id = 'startUpCarButton';
    buttonStart.classList.add('miniJeuButton');
    buttonStart.addEventListener('click', function() {
        stop = false;
        document.getElementById('startUpCarButton').parentNode.replaceChild(buttonStop, document.getElementById('startUpCarButton'));
    });

    // Bouton Stop 
    var buttonStop = document.createElement('button');
    buttonStop.innerText = 'Stop';
    buttonStop.id = 'stopCarButton';
    buttonStop.classList.add('miniJeuButton');
    buttonStop.addEventListener('click', function() {
        // Fin anim landscape   ~   d é g u e u l a s s e    ~ 
        // document.getElementById('landscapeDiv').classList.remove('landscapeDivMove');
        stop = true;
        // Pause anim:
        document.getElementById('landscapeDiv').classList.add('paused');

        document.getElementById('stopCarButton').parentNode.replaceChild(buttonStart, document.getElementById('stopCarButton'));
    });


    document.getElementById('speedUpCarButton').addEventListener('click', function() {
        accelerer();
    });
    document.getElementById('initialStartUpCarButton').addEventListener('click', function() {
        demarrer();
        document.getElementById('carSmoke').style.opacity = "1";
        document.getElementById('carSmoke').classList.add('cloudAnim');
        document.getElementById('landscapeDiv').classList.add('landscapeDivMove');
        document.getElementById('initialStartUpCarButton').parentNode.replaceChild(buttonStop, document.getElementById('initialStartUpCarButton'));
    });
    document.getElementById('slowDownCarButton').addEventListener('click', function() {
        ralentir();
    });


}
