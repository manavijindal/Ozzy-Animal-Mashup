<!DOCTYPE html>
    <html>
        <head>
            <meta charset=“utf-8”/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="various types of fish">
            <title>Web Page</title>
            <link rel="stylesheet" href="Stylesheet.css">
        </head>
        <body>
            <header>
                <h1>Fish</h1>
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
                $fishs = [
                    ["commonname" => "barramundi", "class" => "Actinopterygii", "order" => "Perciformes", "genus" => "Lates", "species" => "L. calcarifer"]];
                    foreach ($fishs as $fish) {
                    echo "<tr>";
                    echo "<td>" . $fish['commonname'] . "</td>";
                    echo "<td>" . $fish['class'] . "</td>";
                    echo "<td>" . $fish['order'] . "</td>";
                    echo "<td>" . $fish['genus'] . "</td>";
                    echo "<td>" . $fish['species'] . "</td>";
                    echo "</tr>";
                    }
                $fishs = [
                    ["commonname" => "freshwater catfish", "class" => "Actinopterygii", "order" => "Siluriformes", "genus" => "Tandanus", "species" => "freshwater catfish"]];
                    foreach ($fishs as $fish) {
                    echo "<tr>";
                    echo "<td>" . $fish['commonname'] . "</td>";
                    echo "<td>" . $fish['class'] . "</td>";
                    echo "<td>" . $fish['order'] . "</td>";
                    echo "<td>" . $fish['genus'] . "</td>";
                    echo "<td>" . $fish['species'] . "</td>";
                    echo "</tr>";
                        }
                $fishs = [
                    ["commonname" => "australian bass", "class" => "Actinopterygii", "order" => "Perciformes", "genus" => "Macquaria", "species" => "M. novemaculeata"]];
                    foreach ($fishs as $fish) {
                    echo "<tr>";
                    echo "<td>" . $fish['commonname'] . "</td>";
                    echo "<td>" . $fish['class'] . "</td>";
                    echo "<td>" . $fish['order'] . "</td>";
                    echo "<td>" . $fish['genus'] . "</td>";
                    echo "<td>" . $fish['species'] . "</td>";
                    echo "</tr>";
                            }
                ?>
            </table>
            
            <div id = "Page">
                <nav id="animalmenu">
                    <div><img src="images/barramundi.jpg" alt="barramundi"/><a href="barramundi.html">barramundi</a></div>
                    <div><img src="images/catfish.jpg" alt="catfish"/><a href="catfish.html">catfish</a></div>
                    <div><img src="images/bass.jpg" alt="bass"/><a href="bass.html">bass</a></div>
                </nav>
            </div>
            <footer>
                © 2024 Manavi Jindal
            </footer>
        </body>
    </html>