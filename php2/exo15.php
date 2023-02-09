<?php
    echo 
    "<h2>Exercice 15: Validateur d'adresse mail:</h2>
    <form action='exo15.php' method='post'>
        <input id='mail' name='mail' type='text' placeholder='Entrez une adresse mail'>
        <input id='boutonSubmit' type='submit' value='Vérifier la validité'>
    </form><br>

    <style>
        button:disabled, button[disabled] {
            color:white;
        }
        * {
            font-family: monospace;
        }
        #closeButton {
            font-size: 1.7em;
            opacity: 0.5;
            margin-left: 30px;
            padding: 5px 10px;
            cursor: pointer;
            transition: all 0.3s;
            text-shadow: 0 0 black;
            font-weight: bold;
        }
        #closeButton:hover {
            opacity: 1;
        }
        #mail {
            padding: 10px 15px;
            border-radius: 3px;
            border:1px solid black;
        }
        #boutonSubmit {
            padding: 5px 7px; 
            border-radius:4px;
            cursor:pointer;
            transition: all 0.3s;
            margin: 20px;
            border: 2px solid rgba(14,235,174,1);
            color: black;
        }
        #boutonSubmit:hover {
            border-color: rgba(0,0,0,0);
            border-radius:6px;
            background-color: rgba(14,235,174,1);
            color: black;
        }
        .validated {
            position:relative;
            left: -500px;

            border: 2px solid rgba(14,235,174,1);
            opacity: 0;
            background-color: rgba(14,235,174,0.7);
            border-radius: 7px;
            width: fit-content;
            padding: 10px 25px;
            font-size: 1.5em;
            // text-shadow: -1px -1px 0 rgba(0,0,0,0.7), 1px -1px 0 rgba(0,0,0,0.7), -1px 1px 0 rgba(0,0,0,0.7), 1px 1px 0 rgba(0,0,0,0.7);
            animation: fadeSlideIn 0.5s 0s normal forwards ease-in;
            color: black;
        }
        .denied {
            position:relative;
            left: -500px;

            border: 2px solid rgba(235,45,14,1);
            opacity: 0;
            background-color: rgba(235,45,14,0.7);
            border-radius: 7px;
            width: fit-content;
            padding: 10px 25px;
            font-size: 1.5em;
            text-shadow: -1px -1px 0 rgba(0,0,0,0.7), 1px -1px 0 rgba(0,0,0,0.7), -1px 1px 0 rgba(0,0,0,0.7), 1px 1px 0 rgba(0,0,0,0.7);
            animation: fadeSlideIn 0.5s 0s normal forwards ease-in, shake 0.2s 0.5s 3 normal ease;
            color: white;
        }
        .null {
            position:relative;
            left: -500px;

            border: 1px solid rgba(235,187,14,1);
            color: white;
            opacity: 0;
            background-color: rgba(235,187,14,0.7);
            border-radius: 7px;
            width: fit-content;
            padding: 10px 25px;
            font-size: 1.5em;
            text-shadow: -1px -1px 0 rgba(0,0,0,0.7), 1px -1px 0 rgba(0,0,0,0.7), -1px 1px 0 rgba(0,0,0,0.7), 1px 1px 0 rgba(0,0,0,0.7);
            animation: fadeSlideIn 0.4s 0s normal forwards ease-in, shake 0.2s 0.5s 3 normal ease;
        }
        @keyframes fadeSlideIn {
            from {
            }
            to {
                opacity: 1;
                left: 0;
            }
        }
        @keyframes shake {
            0% { transform: translateX(0) }
            25% { transform: translateX(5px) }
            50% { transform: translateX(-5px) }
            75% { transform: translateX(5px) }
            100% { transform: translateX(0) }
        }
        .fadeOut {
            animation: fadeOut 0.4s 0s forwards ease-out;
        }
        @keyframes fadeOut {
            from {
                left:0;
                opacity: 1;
            }
            to {
                opacity: 0;
                left: 100%;
            }
        }
    </style>
    <script>
        window.onload = function() {
            if (document.getElementById('closeButton') !== null) {
                document.getElementById('closeButton').addEventListener('click', function() {
                    document.getElementById('messageDiv').classList.add('fadeOut');
                    setTimeout(function() {
                        document.getElementById('messageDiv').remove();
                    }, 400);
                    
                });    
            }
        }
    </script>

    ";

    if (isset($_POST['mail'])) {
        if ($_POST['mail'] == "") {
            echo "<div id='messageDiv' class='null'>Veuillez d'abord entrez une adresse email.</span><span id='closeButton'>&times;</span></div><br>";
        }
        else if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            echo "<div id='messageDiv' class='validated'><span>L'adresse mail \"<span id='mailString' style='font-weight:bold;'>" . $_POST['mail'] . "</span>\" est valide.</span><span id='closeButton'>&times;</span></div>";
        }
        else {
            echo "<div id='messageDiv' class='denied'><span>L'adresse mail \"<span id='mailString' style='font-weight:bold;'>" . $_POST['mail'] . "</span>\" n'est pas valide.</span><span id='closeButton'>&times;</span></div>";
        }
    }


?>