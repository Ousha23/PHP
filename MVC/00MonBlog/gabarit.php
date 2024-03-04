<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?= $titre?></title>
</head>
    <body>
        <div id=global>
            <header>
                <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
                <p>Je vous souhaite la bienvenue sur ce modeste blog</p>
            </header>
            <div id="contenu">
                <?php echo $contenu ?>
            </div>
            <footer id="piedBlog">
            Blog réalisé avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->        
    </body>
</html>

