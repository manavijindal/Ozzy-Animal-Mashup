<!DOCTYPE html>
    <html>
        <head>
            <meta charset=“utf-8”/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="form for any animal sighting done by people">
            <title>Web Page</title>
            <link rel="stylesheet" href="Stylesheet.css">
            <script type="text/javascript" src="script.js" ></script>
        </head>
        <body>
            <header>
                <h1>Animal Sightings</h1>
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
            <article>
                <form id="animal sighting" action="confirmation.php" method="GET">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name">
            
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name">
            
                    <label for="mobile_number">Mobile Number:</label>
                    <input type="tel" id="mobile_number" name="mobile_number">
            
                    <label for="animal_class">Class of Animal:</label>
                    <select id="animal_class" name="animal_class">
                        <option value="">Select</option>
                        <option value="arthopods">Arthopods</option>
                        <option value="amphibians">Amphibians</option>
                        <option value="bird">Bird</option>
                        <option value="fish">Fish</option>
                        <option value="mammal">Mammal</option>
                        <option value="reptile">Reptile</option>
                    </select>
            
                    <label for="date_sighting">Date of Sighting:</label>
                    <input type="date" id="date_sighting" name="date_sighting">
            
                    <label>Time of Sighting:</label>
                    <label><input type="radio" name="time_sighting" value="day"> Day</label>
                    <label><input type="radio" name="time_sighting" value="night"> Night</label>
            
                    <label for="animal_description">Description of Animal:</label>
                    <textarea id="animal_description" name="animal_description" rows="4"></textarea>
            
                    <label for="state_sighted">State Animal Sighted:</label>
                    <select id="state_sighted" name="state_sighted">
                        <option value="">Select</option>
                        <option value="QLD">Queensland</option>
                        <option value="NSW">New South Wales</option>
                        <option value="WA">Western Australia</option>
                        <option value="SA">South Australia</option>
                        <option value="TAS">Tasmania</option>
                    </select>
            
                    <label for="nearest_town">Nearest Town:</label>
                    <input type="text" id="nearest_town" name="nearest_town">
            
                    <input type="submit" onClick="validateForm(event)" value="Submit Sighting" />
                </form>
            </article>
            <footer>
                © 2024 Manavi Jindal
            </footer>
        </body>
    </html>

    