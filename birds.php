<?php
require_once ('week9.php');
$animals = getAnimals();

if (isset($_GET['search'])){
    $animals = getAnimals($_GET['search']);
} else {
    $animals = getAnimals();
}
?>


<!DOCTYPE html>
    <html>
        <head>
            <meta charset=“utf-8”/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="varoius types of birds">
            <title>Web Page</title>
            <link rel="stylesheet" href="Stylesheet.css">
        </head>
        <body>
            <header>
                <h1>Birds</h1>
            </header>
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="amphibians.php">Amphibians</a></li>
                    <li><a href="arthopods.php">Arthopods</a></li>
                    <li><a href="birds.php">Birds</a></li>
                    <li><a href="fish.php">fish</a></li>
                    <li><a href="mammals.php">Mammals</a></li>
                    <li><a href="reptiles.php">Reptiles</a></li>
                    <li><a href="animal sightings.php">Animal Sightings</a></li>
                    <li><a href="contact us.php">Contact Us</a></li>
                </ul>
            </nav>
            <p>Dummy text</p>

            <form action="birds.php" method="get" >
                <input type="text" id="search" name="search" value=' <?php
                    if (isset($_GET['search'])){
                        echo $_GET['search'];
                    }
                ?>'>
                <input type="submit" value="Submit">
            </form>

            <table>
                <thead>
                    <tr>
                        <th>Common Name</th>
                        <th>Taxonomy</th>
                        <th>Class</th>
                        <th>Order</th>
                        <th>Genus</th>
                    </tr>
                </thead>
                <?php
                    foreach ($animals as $animal) {
                    echo "<tr>";
                    echo "<td>" . $animal['COMMONNAME'] . "</td>";
                    echo "<td>" . $animal['CLASS'] . "</td>";
                    echo "<td>" . $animal['SCI_ORDER'] . "</td>";
                    echo "<td>" . $animal['GENUS'] . "</td>";
                    echo "<td>" . $animal['SPECIES'] . "</td>";
                    echo "</tr>";
                    }
                ?>
            </table>
            
            <div id = "Page">
                <nav id="animalmenu">
                    <div><img src="images/cockatoo.jpg" alt="cockatoo"/><a href="cockatoo.html">cockatoo</a></div>
                    <div><img src="images/budgerigar.jpg" alt="budgerigar"/><a href="budgerigar.html">budgerigar</a></div>
                    <div><img src="images/kingfisher.jpg" alt="kingfisher"/><a href="kingfisher.html">kingfisher</a></div>
                </nav>
            </div>
            
            <footer>
                © 2024 Manavi Jindal
            </footer>
        </body>
    </html>