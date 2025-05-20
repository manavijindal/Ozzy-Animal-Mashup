<!DOCTYPE html>
    <html>
        <head>
            <meta charset=“utf-8”/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="ivarious types of mammals">
            <title>Web Page</title>
            <link rel="stylesheet" href="Stylesheet.css">
        </head>
        <body>
            <header>
                <h1>Mammals</h1>
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
                $mammals = [
                    ["commonname" => "dingo", "class" => "Mammalia", "order" => "Carnivora", "genus" => "Canis", "species" => "C. lupus"]];
                    foreach ($mammals as $mammal) {
                    echo "<tr>";
                    echo "<td>" . $mammal['commonname'] . "</td>";
                    echo "<td>" . $mammal['class'] . "</td>";
                    echo "<td>" . $mammal['order'] . "</td>";
                    echo "<td>" . $mammal['genus'] . "</td>";
                    echo "<td>" . $mammal['species'] . "</td>";
                    echo "</tr>";
                    }
                $mammals = [
                    ["commonname" => "koala", "class" => "Mammalia", "order" => "Diprotodontia", "genus" => "Phascolarctos", "species" => "P. cinereus"]];
                    foreach ($mammals as $mammal) {
                    echo "<tr>";
                    echo "<td>" . $mammal['commonname'] . "</td>";
                    echo "<td>" . $mammal['class'] . "</td>";
                    echo "<td>" . $mammal['order'] . "</td>";
                    echo "<td>" . $mammal['genus'] . "</td>";
                    echo "<td>" . $mammal['species'] . "</td>";
                    echo "</tr>";
                    }
                $mammals = [
                    ["commonname" => "platypus", "class" => "Mammalia", "order" => "Monotremata", "genus" => "Ornithorhynchus Blumenbach", "species" => "O. anatinus"]];
                    foreach ($mammals as $mammal) {
                    echo "<tr>";
                    echo "<td>" . $mammal['commonname'] . "</td>";
                    echo "<td>" . $mammal['class'] . "</td>";
                    echo "<td>" . $mammal['order'] . "</td>";
                    echo "<td>" . $mammal['genus'] . "</td>";
                    echo "<td>" . $mammal['species'] . "</td>";
                    echo "</tr>";
                    }
                $mammals = [
                    ["commonname" => "echidna", "class" => "Mammalia", "order" => "Monotremata", "genus" => "Tachyglossus", "species" => "Echidnas"]];
                    foreach ($mammals as $mammal) {
                    echo "<tr>";
                    echo "<td>" . $mammal['commonname'] . "</td>";
                    echo "<td>" . $mammal['class'] . "</td>";
                    echo "<td>" . $mammal['order'] . "</td>";
                    echo "<td>" . $mammal['genus'] . "</td>";
                    echo "<td>" . $mammal['species'] . "</td>";
                    echo "</tr>";
                    }

                ?>
            </table>

            <div id = "Page">
                <nav id="animalmenu">
                    <div><img src="images/dingo.jpg" alt="dingo"/><a href="dingo.html">dingo</a></div>
                    <div><img src="images/koala.jpg" alt="koala"/><a href="koala.html">koala</a></div>
                    <div><img src="images/platypus.jpg" alt="platypus"/><a href="platypus.html">platypus</a></div>
                    <div><img src="images/echidna.jpg" alt="echidna"/><a href="echidna.html">echidna</a></div>
                </nav>
            </div>
            
            

            <footer>
                © 2024 Manavi Jindal
            </footer>
        </body>
    </html>