<!DOCTYPE html>
    <html>
        <head>
            <meta charset=“utf-8”/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="various types of amphibians">
            <title>Web Page</title>
            <link rel="stylesheet" href="Stylesheet.css">
        </head>
        <body>
            <header>
                <h1>Amphibians</h1>
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
                $amphibians = [
                    ["commonname" => "Leaf green tree frog", "class" => "Amphibia", "order" => "Anura", "genus" => "Ranoidea", "species" => "R. phyllochroa"]];
                    foreach ($amphibians as $amphibian) {
                    echo "<tr>";
                    echo "<td>" . $amphibian['commonname'] . "</td>";
                    echo "<td>" . $amphibian['class'] . "</td>";
                    echo "<td>" . $amphibian['order'] . "</td>";
                    echo "<td>" . $amphibian['genus'] . "</td>";
                    echo "<td>" . $amphibian['species'] . "</td>";
                    echo "</tr>";
                    }

                $amphibians = [
                    ["commonname" => "crinia", "class" => "Amphibia", "order" => "Anura", "genus" => "Crinia", "species" => "Crinia deserticola"]];
                    foreach ($amphibians as $amphibian) {
                    echo "<tr>";
                    echo "<td>" . $amphibian['commonname'] . "</td>";
                    echo "<td>" . $amphibian['class'] . "</td>";
                    echo "<td>" . $amphibian['order'] . "</td>";
                    echo "<td>" . $amphibian['genus'] . "</td>";
                    echo "<td>" . $amphibian['species'] . "</td>";
                    echo "</tr>";
                    }

                $amphibians = [
                    ["commonname" => "cane toad", "class" => "Amphibia", "order" => "Anura", "genus" => "Rhinella", "species" => "R. marina"]];
                    foreach ($amphibians as $amphibian) {
                    echo "<tr>";
                    echo "<td>" . $amphibian['commonname'] . "</td>";
                    echo "<td>" . $amphibian['class'] . "</td>";
                    echo "<td>" . $amphibian['order'] . "</td>";
                    echo "<td>" . $amphibian['genus'] . "</td>";
                    echo "<td>" . $amphibian['species'] . "</td>";
                    echo "</tr>";
                    }
                ?>
            </table>
            
            <div id = "Page">
                <nav id="animalmenu">
                    <div><img src="images/frog.jpg" alt="frog"/><a href="frog.html">frog</a></div>
                    <div><img src="images/crinia.jpg" alt="crinia"/><a href="crinia.html">crinia</a></div>
                    <div><img src="images/toad.jpg" alt="toad"/><a href="toad.html">toad</a></div>
                </nav>
            </div>
            <footer>
                © 2024 Manavi Jindal
            </footer>
        </body>
    </html>