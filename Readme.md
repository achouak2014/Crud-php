connect => connextion à la base de donnée 
add.php => ajouter un user :
    -creer le formutaire 
    -dans le code php on verifere tout d'abord si on a envoyer le formulaire et une seconde verification si tout les case son remplie (if*2)
    - creer la requêt 
    - exécuter la requêt

index.php => contient aussi l'affichage des users 
    I   -connecter à la base de donnée 
        -creer la requêt
        -preparer la requête : $query = $conn->prepare($sql);
        -exécuter la requête : $query->execute();
        -a la fin stoche le resultat dans un tableau associatif : $result = $query->fetchAll(PDO::FETCH_ASSOC);
    II -on créer un tableau pour affiche le       resultat 
        -on utilise boucle foreach pour boucle sur le variable result : foreach($result as $produit)
        -et à la fin un bouton : Ajouter user qui nous raméne vers la page add.php

update.php =>


delete => 


