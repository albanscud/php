

<?php

// LES VARIABLES //
/* $prenom = 'marc';
$nom = 'doe';
$note = 15;
$note2 = 10;
$moyenne = ($note + $note2) /2;

echo "bonjour $prenom $nom vous avez eu $moyenne de moyenne";
 */



// LES TABLEAUX //
/* $note = [10, 15, 25, 7, 6, 20];
echo $note[4]; 
*/


/* $eleve = ['marc', 'doe', [10, 11, 12]];
echo $eleve[2][2]; 
*/


/* $eleve = [
    'prenom' => 'Marc',
    'nom' => 'Doe',
    'notes' => [10, 15, 18]
];
echo $eleve ['prenom'] . ' ' . $eleve ['nom'];
 */


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
 echo $classe [1]['note'][2]; 
 */




// LES CONDITIONS //
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


/* $action = (int)readline ('Entrez votre action (1: Attaquez, 2: Defendre, 3: Passer son tour)'); 
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
} */


/* $heure = (int) readline ('entrez une heure : ');

if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)){
    echo 'le magason sera ouvert';
}else {
    echo 'le magasin sera fermé';
}
 */




// LES BOUCLES //
/* $chiffre = null;

while($chiffre !== 10) {
    $chiffre = (int) readline ('Entrez une valeur : ');
    //break pour stoper la boucle 
}
 echo 'Bravo vous avez gagné !'
 */
// boucle avec incrementation en +1
/* for ($i = 0; $i < 10; $i++){
echo "- $i \n";
} */

//boucle avec incrementation en +2
/* for ($i = 0; $i < 10; $i += 2){
    echo "- $i \n";
} */

//boucle foreach

/* $notes = [10, 15, 20];

foreach ($notes as $note){
    echo "$note \n";
} */


/* $eleves = [
    'cm2' => ['jean', 'marie', 'pierre', 'luc'],
    'cm1' => ['peter', 'pan', 'rose']
];

foreach ($eleves as $classe => $listEleves){
    echo "La classe $classe:\n";
    foreach ($listEleves as $eleve){
        echo "- $eleve\n";
    }
    echo "\n";
} */

// LES FONCTIONS
 /* $notes = [10, 13, 20];
 $sum = array_sum($notes);
 $count = count($notes);
 echo  "$count \n$sum"; //"vous avez" . round($sum / $count ,2) . "de moyenne"; */

$notes = [10, 1, 15, 20];
$notesReversed = array_reverse($notes);
print_r($notes);
print_r($notesReversed);


?>

