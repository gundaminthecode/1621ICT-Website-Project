<?php
    $works = [
        ["icon" => "images/mk2wipicon.jpg", "name" => "(Current) Perfect Grade MK II", "link" => "wipworks/mk2wip.html"],
    ]
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>gundaminthewindow - Work In Progress</title>
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
                <li class="navlist"><a href="completedwork.php">Completed Works</a></li>
                <li class="navlist"><a class="active" href="wip.php">Works In Progress</a></li>
                <li class="navlist"><a href="techniques.php">Techniques</a></li>
                <li class="navlist"><a href="onlineshop.php">(Online Shop)</a></li>
            </ul>
            <div class="pagecontent">
                <div class="titlebar"><h2>Works In Progress</h2></div>
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