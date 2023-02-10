window.onload = function() {

    var i = 500;
    var stop = 'false';

    function demarrer() {
        setTimeout(() => {
            if (stop == 'false') {
                var string = document.getElementById('carPathDiv').innerHTML;
                var newString = '.' + string.substring(0, string.length -1);
                document.getElementById('carPathDiv').innerHTML = newString;
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
    }
    // Plus galere de ralentir pour le fun (ON NE PEUT ARRETER QUE SI <10km/h)
    function ralentir() {
        // Vitesse min:
        if (i <= 500) {
            i = i + 10;
        }
    }


    // Bouton pour *RE*démarrer
    var buttonStart = document.createElement('button');
    buttonStart.innerText = 'Start';
    buttonStart.id = 'startUpCarButton';
    buttonStart.addEventListener('click', function() {
        stop = false;
        // replace 
        document.getElementById('startUpCarButton').parentNode.replaceChild(buttonStop, document.getElementById('startUpCarButton'));
    });

    var buttonStop = document.createElement('button');
    buttonStop.innerText = 'Stop';
    buttonStop.id = 'stopCarButton';
    buttonStop.addEventListener('click', function() {
        stop = true;
        // stop();
        document.getElementById('stopCarButton').parentNode.replaceChild(buttonStart, document.getElementById('stopCarButton'));
    });


    document.getElementById('speedUpCarButton').addEventListener('click', function() {
        accelerer();
    });
    document.getElementById('initialStartUpCarButton').addEventListener('click', function() {
        demarrer();
        document.getElementById('initialStartUpCarButton').parentNode.replaceChild(buttonStop, document.getElementById('initialStartUpCarButton'));
    });
    document.getElementById('slowDownCarButton').addEventListener('click', function() {
        ralentir();
    });


}
