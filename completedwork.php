<?php
    $works = [
        ["icon" => "images/tryonicon.jpg", "name" => "HGBF Tryon 3", "link" => "completedworks/tryon3.html"],
        ["icon" => "images/kehaar2icon.jpg", "name" => "HGUC Kehaar II", "link" => ""],
    ]
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>gundaminthewindow - Completed Works</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="hero-image">
            <div class="hero-text">
                <h1><a href="home.html">gundaminthewindow</a></h1>
            </div>
        </div>
        <div id="page">
            <ul class="navbar">
                <li class="navlist"><a href="home.html">Home</a></li>
                <li class="navlist"><a class="active" href="completedwork.php">Completed Works</a></li>
                <li class="navlist"><a href="wip.php">Works In Progress</a></li>
                <li class="navlist"><a href="techniques.php">Techniques</a></li>
                <li class="navlist"><a href="onlineshop.php">(Online Shop)</a></li>
            </ul>
            <div class="pagecontent">
                <div class="titlebar"><h2>Completed Works</h2></div>
                <table class="listings">
                    <tbody>
                        <?php foreach($works as $work) { ?>
                            <tr>
                                <td class="icon"><a href="<?=$work['link']?>"><img width=300px src="<?=$work['icon']?>"></td>
                                <td class="name"><a href="<?=$work['link']?>"><?=$work['name']?></a></td>
                            </tr>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>    
    </body>
    <footer>
       <p>©2021 – Nick Mathiasen</p>
    </footer>
</html>