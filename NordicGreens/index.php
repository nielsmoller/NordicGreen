    <?php
        include_once 'header.php';
    ?>

    <div class="main-container">
      	<div class="carrousel-container">
			<section id="product-carousel">
			<h2>Vores kerne produkter</h2>
			<div class="carousel-container">
				<div class="carousel-track">
					<div class="carousel-item">
						<img src="img/cucumber.jpg" alt="Produkt 1">
						<p>Agurker</p>
					</div>
					<div class="carousel-item">
						<img src="img/redp.jpg" alt="Produkt 2">
						<p>Peberfrugter</p>
					</div>
					<div class="carousel-item">
						<img src="img/tomato.jpg" alt="Produkt 3">
						<p>Tomater</p>
					</div>
					<div class="carousel-item">
						<img src="img/salad.jpg" alt="Produkt 4">
						<p>Salater</p>
					</div>
				</div>
			</div>
			<div class="carousel-controls">
				<button id="prev-btn">&lt;</button>
				<button id="next-btn">&gt;</button>
			</div>
			</section>

			<section id="product-recommendations">
				<h2>Produkt anbefalinger</h2>
				<div class="product-list">
					<?php
					// Opret forbindelse til databasen
					$servername = "localhost";
					$username = "root";
					$password = "root";
					$dbname = "nordic_greens";

					$conn = new mysqli($servername, $username, $password, $dbname);

					// Tjek forbindelsen
					if ($conn->connect_error) {
						die("Forbindelsen mislykkedes: " . $conn->connect_error);
					}

					// Hent kun tre produkter fra databasen
					$sql = "SELECT * FROM products LIMIT 3";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
						$name = $row['name'];
						$image = $row['image'];
						$description = $row['description'];
					?>
					
					<div class="product">
						<p><?php echo $name; ?></p>
						<img src="img/productimg/<?php echo $image; ?>" alt="Produkt">
						<p><?php echo $description; ?></p>
					</div>

					<?php
						}
					} else {
						echo "Ingen produkter fundet.";
					}

					// Luk forbindelsen til databasen
					$conn->close();
					?>
				</div>
				<div class="view-all-btn">
					<button class="view-all-button" name="submit" onclick="window.location.href=('products.php')">Se alle produkter</button>
				</div>
			</section>
      	</div>
    </div>
  

    <?php
        include_once 'footer.php';
    ?>
<script src="caro.js"></script>
</body>
</html>