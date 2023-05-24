<link rel="stylesheet" type="text/css" href="footer.css">

<footer>
    <div class="footer-left">
        <p class="company-name">Nordic Greens A/S.</p>
        <p class="copyright">&copy; 2023. Alle rettigheder forbeholdt.</p>
        <p class="privacy-terms">Privacy terms</p>
    </div>

    <div class="footer-middle">
        <p>Produkter</p>
        <ul>
            <?php
            // Opret forbindelse til databasen
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "nordic_greens";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Forbindelse mislykkedes: " . $conn->connect_error);
            }

            // Hent kategorier fra databasen
            $sql_categories = "SELECT * FROM categories";
            $result_categories = $conn->query($sql_categories);

            $categories = array(); // Opret et array til at gemme kategorierne

            if ($result_categories->num_rows > 0) {
                while ($row = $result_categories->fetch_assoc()) {
                    $categories[$row['id']] = $row['name']; // Gem kategoriens navn med dens id som nøgle
                }
            }

            foreach ($categories as $id => $name) {
                echo '<li><a href="products.php?category=' . $id . '">' . $name . '</a></li>';
            }

            $conn->close();
            ?>
        </ul>
    </div>

    <div class="footer-middle">
        <p>Kontakt</p>
        <ul>
            <li><a href="about.php">Om os</a></li>
            <li><a href="contact.php">Kontaktformular</a></li>
            <li><a href="#">Socials</a></li>
            <li><a href="#">FAQ</a></li>
        </ul>
    </div>

    <div class="footer-right">
        <p>Vilkår og sikkerhed</p>
        <ul>
            <li><a href="#">Cookiepolitik - ændr dit samtykke</a></li>
            <li><a href="#">Handelsbetingelser</a></li>
            <li><a href="#">Persondatapolitik</a></li>
            <li><a href="#">Tryghedsgaranti</a></li>
        </ul>
    </div>
</footer>