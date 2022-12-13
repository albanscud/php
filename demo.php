

<?php
/* $prenom = 'marc';
$nom = 'doe';
$note = 15;
$note2 = 10;
$moyenne = ($note + $note2) /2;

echo "bonjour $prenom $nom vous avez eu $moyenne de moyenne";
 */

/* $note = [10, 15, 25, 7, 6, 20];
echo $note[4]; */

/* $eleve = ['marc', 'doe', [10, 11, 12]];
echo $eleve[2][2]; */

/* $eleve = [
    'prenom' => 'Marc',
    'nom' => 'Doe',
    'notes' => [10, 15, 18]
];
echo $eleve ['prenom'] . ' ' . $eleve ['nom']; */

/* $classe = [
    [
        'nom' => 'scud',
        'prenom' => 'jean',
        'note' => [12, 15, 20]
    ],[
        'nom' => 'luzy',
        'prenom' => 'pierre',
        'note' => [15, 18, 13]
    ]
 ];
 echo $classe [1]['note'][2]; */

 /* $note = readline ('Entrez votre note');
 if ($note > 10){
    echo 'vous avez la moyenne';
 } elseif ($note == 10) {
    echo 'vous avez juste la moyenne';
 } else {
    echo 'vous n\'avez pas la moyenne';
 } */

 /* $action = (int)readline ('Entrez votre action (1: Attaquez, 2: Defendre, 3: Passer son tour)');
 if ($action === 1) {
    echo 'vous attaquez';
 }elseif ($action === 2){
    echo 'vous defendez';
 }elseif ($action === 3){
    echo 'vous passez votre tour';
 }else {
    echo 'commande inconnu';
 } */

 $action = (int)readline ('Entrez votre action (1: Attaquez, 2: Defendre, 3: Passer son tour)'); 
switch ($action) {
    case 1:
        echo 'vous attaquez';
        break;
    case 2:
        echo 'vous defendez';
        break;
    case 3:
        echo 'vous passez votre tour';
        break;
    default :
        echo 'commande inconnu';
}



?>

