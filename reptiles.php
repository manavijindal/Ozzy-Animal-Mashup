<!DOCTYPE html>
    <html>
        <head>
            <meta charset=“utf-8”/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="various types of reptiles">
            <title>Web Page</title>
            <link rel="stylesheet" href="Stylesheet.css">
        </head>
        <body>
            <header>
                <h1>Reptiles</h1>
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
                $reptiles = [
                    ["commonname" => "crocodile", "class" => "Reptilia", "order" => "Crocodilia", "genus" => "Crocodylus", "species" => "Crocodiles"]];
                    foreach ($reptiles as $reptile) {
                    echo "<tr>";
                    echo "<td>" . $reptile['commonname'] . "</td>";
                    echo "<td>" . $reptile['class'] . "</td>";
                    echo "<td>" . $reptile['order'] . "</td>";
                    echo "<td>" . $reptile['genus'] . "</td>";
                    echo "<td>" . $reptile['species'] . "</td>";
                    echo "</tr>";
                    }
                $reptiles = [
                    ["commonname" => "lizard", "class" => "Reptilia", "order" => "Squamata", "genus" => "Lizards", "species" => "Lizards"]];
                    foreach ($reptiles as $reptile) {
                    echo "<tr>";
                    echo "<td>" . $reptile['commonname'] . "</td>";
                    echo "<td>" . $reptile['class'] . "</td>";
                    echo "<td>" . $reptile['order'] . "</td>";
                    echo "<td>" . $reptile['genus'] . "</td>";
                    echo "<td>" . $reptile['species'] . "</td>";
                    echo "</tr>";
                        }
                $reptiles = [
                    ["commonname" => "python", "class" => "Reptilia", "order" => "Squamata", "genus" => "Python", "species" => "Python"]];
                    foreach ($reptiles as $reptile) {
                    echo "<tr>";
                    echo "<td>" . $reptile['commonname'] . "</td>";
                    echo "<td>" . $reptile['class'] . "</td>";
                    echo "<td>" . $reptile['order'] . "</td>";
                    echo "<td>" . $reptile['genus'] . "</td>";
                    echo "<td>" . $reptile['species'] . "</td>";
                    echo "</tr>";
                            }
                ?>
            </table>
            
            <div id = "Page">
                <nav id="animalmenu">
                    <div><img src="images/crocodile.jpg" alt="crocodile"/><a href="crocodile.html">crocodile</a></div>
                    <div><img src="images/lizard.jpg" alt="lizard"/><a href="lizard.html">lizard</a></div>
                    <div><img src="images/python.jpg" alt="python"/><a href="python.html">python</a></div>
                </nav>
            </div>
            <footer>
                © 2024 Manavi Jindal
            </footer>
        </body>
    </html>