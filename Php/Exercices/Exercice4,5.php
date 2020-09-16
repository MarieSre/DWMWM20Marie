<?php
$genre = readline("Êtes vous un homme ou une femme ? :");
if ($genre = "homme") {
    $age = readline("Quel âge avez-vous :");
}if ($age >= 20) {
    echo "Vous êtes imposable";
} else {
    echo "Vous n'êtes pas imposable";
}
