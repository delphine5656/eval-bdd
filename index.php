<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=multiplex', 'root', '');
    $search= 't%';
    $sql = 'SELECT centremultiplex.Nom FROM centremultiplex WHERE Nom LIKE \'' .$search.'\'';
    foreach ($pdo -> query($sql, PDO::FETCH_ASSOC) as $noms){
        echo $noms['Nom'].'<br>';
    }

    }catch (PDOException $e){
    echo 'votre recherche n\'a aboutit à rien';
}

echo  password_hash('MotDePasse', PASSWORD_BCRYPT);


