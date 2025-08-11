<?php
    require_once 'queryDb.php';
    
    $search='';
    if(isset($_GET['CUSTOMERS'])){
        $search = $_GET['CUSTOMERS'];
    } else{
        $search='';
    }
    $CUSTOMERS= getCustomers($search);

    $search2='';
    if(isset($_GET['PRODUCTS'])){
        $search2 = $_GET['PRODUCTS'];
    } else{
        $search2='';
    }
    $PRODUCTS= getProducts($search2);

    $search3='';
    if(isset($_GET['EVENTS'])){
        $search3 = $_GET['EVENTS'];
    } else{
        $search3='';
    }
    $EVENTS= getEvents($search3);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>gundaminthewindow - (Online Shop)</title>
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
                <li class="navlist"><a href="wip.php">Works In Progress</a></li>
                <li class="navlist"><a href="techniques.php">Techniques</a></li>
                <li class="navlist"><a class="active" href="onlineshop.php">(Online Shop)</a></li>
            </ul>
            <div class="pagecontent">
                <div class="titlebar"><h2>(Online Shop)</h2></div>
                <h2>Customer List</h2>
                <div class="dbsearch">    
                    <form action="onlineshop.php" method="GET">
                        <label>Search:</label>
                        <input type="textbox" name="CUSTOMERS" id="CUSTOMERS">
                        <input type="submit" value="Search">
                    </form>
                </div>
                <div class="dbtables">
                    <table class="dbtable">
                        <thead>
                            <tr>
                                <th class="dbtable">CUSTID</th>
                                <th class="dbtable">FIRSTNAME</th>
                                <th class="dbtable">LASTNAME</th>
                                <th class="dbtable">ADDRESS</th>
                                <th class="dbtable">PHONE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($CUSTOMERS as $CUSTOMER) { ?>
                                <tr>
                                    <td class="dbtable"><?=$CUSTOMER['CUSTID']?></td>
                                    <td class="dbtable"><?=$CUSTOMER['FIRSTNAME']?></td>
                                    <td class="dbtable"><?=$CUSTOMER['LASTNAME']?></td>
                                    <td class="dbtable"><?=$CUSTOMER['ADDRESS']?></td>
                                    <td class="dbtable"><?=$CUSTOMER['PHONE']?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <h2>Product List</h2>
                <div class="dbsearch">    
                    <form action="onlineshop.php" method="GET">
                        <label>Search:</label>
                        <input type="textbox" name="PRODUCTS" id="PRODUCTS">
                        <input type="submit" value="Search">
                    </form>
                </div>
                <div class="dbtables">
                    <table class="dbtable">
                        <thead>
                            <tr>
                                <th class="dbtable">PRODID</th>
                                <th class="dbtable">PRODUCTNAME</th>
                                <th class="dbtable">MANUFACTURER</th>
                                <th class="dbtable">DESCRIPTION</th>
                                <th class="dbtable">PRICE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($PRODUCTS as $PRODUCT) { ?>
                                <tr>
                                    <td class="dbtable"><?=$PRODUCT['PRODID']?></td>
                                    <td class="dbtable"><?=$PRODUCT['PRODUCTNAME']?></td>
                                    <td class="dbtable"><?=$PRODUCT['MANUFACTURER']?></td>
                                    <td class="dbtable"><?=$PRODUCT['DESCRIPTION']?></td>
                                    <td class="dbtable"><?=$PRODUCT['PRICE']?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <h2>Event List</h2>
                <div class="dbsearch">    
                    <form action="onlineshop.php" method="GET">
                        <label>Search:</label>
                        <input type="textbox" name="EVENTS" id="EVENTS">
                        <input type="submit" value="Search">
                    </form>
                </div>
                <div class="dbtables">
                    <table class="dbtable">
                        <thead>
                            <tr>
                                <th class="dbtable">EVENTID</th>
                                <th class="dbtable">EVENTNAME</th>
                                <th class="dbtable">LOCATION</th>
                                <th class="dbtable">DESCRIPTION</th>
                                <th class="dbtable">DATE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($EVENTS as $EVENT) { ?>
                                <tr>
                                    <td class="dbtable"><?=$EVENT['EVENTID']?></td>
                                    <td class="dbtable"><?=$EVENT['EVENTNAME']?></td>
                                    <td class="dbtable"><?=$EVENT['LOCATION']?></td>
                                    <td class="dbtable"><?=$EVENT['DESCRIPTION']?></td>
                                    <td class="dbtable"><?=$EVENT['DATE']?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </body>
    <footer>
       <p>©2021 – Nick Mathiasen</p>
    </footer>
</html>