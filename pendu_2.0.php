<?PHP
  $fichier = file("french.txt");
  $nb = rand(0, count($fichier));
  $mot = $fichier[$nb];
  $mot = trim($mot);
  $mot = utf8_encode($mot);
  echo "$mot \n";
  $mot = "$mot";
  $i = 0; 
  while($mot[$i]) {
  $mots[] = $mot[$i];
  $i++;
  } 
  print_r($mots);
  

  $reponse = False;
  $i = 0;
  $chance = 1;
  $liste = [];
  $longueurDuMot = strlen($mot);
  while ($i < $longueurDuMot) {
    $liste [] = "#";
    $i++;
  }

  while ($chance < 20 && $reponse == False) { 
    
    foreach ($liste as $values) {
      echo "$values";
    }
    echo "\n";
    echo "\n";

    $lettreChoisi = readline("Lettre choisi : ");

    foreach ($mots as $key => $value) {
      if ($lettreChoisi == $value) {
        $liste [$key] = $value;
      }
    }

    if ($liste == $mots) {
      echo "\n";
      echo "Gagner";
      $reponse = True;
    }
    else{
      echo "$chance\n";
      echo "\n";
      $chance++;
    }
  }
  if ($chance == 20) {
    echo "Le mots a deviner étais $mot";
  }
?>