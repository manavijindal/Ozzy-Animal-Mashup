<!DOCTYPE html>
    <html>
        <head>
            <meta charset=“utf-8”/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="many types of arthopodes">
            <title>Web Page</title>
            <link rel="stylesheet" href="Stylesheet.css">
        </head>
        <body>
            <header>
                <h1>Arthopods</h1>
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
                $arthopods = [
                    ["commonname" => "scorpian", "class" => "Arachnida", "order" => "Scorpiones", "genus" => "Scorpio Linnaeus", "species" => "Scorpions"]];
                    foreach ($arthopods as $arthopod) {
                    echo "<tr>";
                    echo "<td>" . $arthopod['commonname'] . "</td>";
                    echo "<td>" . $arthopod['class'] . "</td>";
                    echo "<td>" . $arthopod['order'] . "</td>";
                    echo "<td>" . $arthopod['genus'] . "</td>";
                    echo "<td>" . $arthopod['species'] . "</td>";
                    echo "</tr>";
                    }
                $arthopods = [
                    ["commonname" => "tarantula", "class" => "Arachnida", "order" => "Araneae", "genus" => "Tarantulas", "species" => "Tarantulas"]];
                    foreach ($arthopods as $arthopod) {
                    echo "<tr>";
                    echo "<td>" . $arthopod['commonname'] . "</td>";
                    echo "<td>" . $arthopod['class'] . "</td>";
                    echo "<td>" . $arthopod['order'] . "</td>";
                    echo "<td>" . $arthopod['genus'] . "</td>";
                    echo "<td>" . $arthopod['species'] . "</td>";
                    echo "</tr>";
                    }
                $arthopods = [
                    ["commonname" => "emperor moth", "class" => "Insecta", "order" => "Lepidoptera", "genus" => "Saturnia", "species" => "S. pavonia"]];
                    foreach ($arthopods as $arthopod) {
                    echo "<tr>";
                    echo "<td>" . $arthopod['commonname'] . "</td>";
                    echo "<td>" . $arthopod['class'] . "</td>";
                    echo "<td>" . $arthopod['order'] . "</td>";
                    echo "<td>" . $arthopod['genus'] . "</td>";
                    echo "<td>" . $arthopod['species'] . "</td>";
                    echo "</tr>";
                            }
                ?>
            </table>
            
            <div id = "Page">
                <nav id="animalmenu">
                    <div><img src="images/scorpian.jpg" alt="scorpian"/><a href="scorpian.html">scorpian</a></div>
                    <div><img src="images/tarantula.jpg" alt="tarantula"/><a href="tarantula.html">tarantula</a></div>
                    <div><img src="images/emperor_moth.jpg" alt="emperor_moth"/><a href="emperor_moth.html">emperor moth</a></div>
                </nav>
            </div>
            <footer>
                © 2024 Manavi Jindal
            </footer>
        </body>
    </html>