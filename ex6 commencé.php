</head>
    <body>

    <?php
        $tableau=["SMITH","DOE","DOYYLE"];
        echo $tableau[0];//Affiche SMITH

        $tableauAsso=["SMITH"=>5,"DOE"=>22,"DOYYLE"=>37];
        echo $tableauAsso["SMITH"];//Affiche 5
    ?>

    <?php
    include("fichier.php");
    ?>

    <?php
    $titre = 'exercice 3';
    $contenu ='il faut faire ca';
    $titre =' ';
    $contenu =' ';
    $niveau=1;
    element($titre,$contenu,$niveau);
    ?>
    <br>
    <?php
    $element=[];
    parseElements($titre,$contenu,$niveau);
    ?>