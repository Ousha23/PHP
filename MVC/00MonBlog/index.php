<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','root','root');
} catch (PDOException $e){
    echo $e;
}
$billets = $bdd->query('select BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu from t_billet order by BIL_ID desc');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mon Blog</title>
</head>
    <body>
        <div id=global>
            <header>
                <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
                <p>Je vous souhaite la bienvenue sur ce modeste blog</p>
            </header>
            <div id="contenu">
                <?php
                
                foreach ($billets as $billet): ?>
                <article>
                    <header>
                        <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
                        <time><?= $billet['date'] ?></time>
                    </header>
                <p><?= $billet['contenu'] ?></p>
                </article>
                <hr />
                    <?php endforeach; ?>
            </div> <!-- #contenu -->
        <footer id="piedBlog">
            Blog réalisé avec PHP, HTML5 et CSS.
        </footer>
        </div> <!-- #global -->        
    </body>
</html>
