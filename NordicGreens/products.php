<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Produkter</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/products.css">
</head>
<body>
<div class="container">
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

    $categoryFilter = "";
    if (isset($_GET['category'])) {
        $categoryId = $_GET['category'];
        if (array_key_exists($categoryId, $categories)) {
            $categoryFilter = "WHERE category_id = $categoryId";
        }
    }

// Hent produkter fra databasen baseret på kategori-filter og søgefilter
$sql = "SELECT * FROM products $categoryFilter";

// Tjek om der er foretaget en søgning
if (isset($_GET['search'])) {
    $searchQuery = $_GET['search'];

    // Tilføj en WHERE-klausul til SQL-forespørgslen for at filtrere baseret på søgning
    // Brug af OR-operatoren for at matche søgeordet i både produktets navn og beskrivelse
    $sql .= " WHERE name LIKE '%$searchQuery%' OR description LIKE '%$searchQuery%'";
}


    $result = $conn->query($sql);
    ?>
    <div class="sidebar">
        <h2>Kategorier</h2>
        <ul>
            <li><a href="products.php">Alle produkter</a></li>
            <?php
            foreach ($categories as $id => $name) {
                echo '<li><a href="?category=' . $id . '">' . $name . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="content">
        <?php
        if (!empty($categoryFilter)) {
            $selectedCategory = $categories[$categoryId];
            echo '<h1>Produkt kategori: ' . $selectedCategory . '</h1>';
        } else {
            echo '<h1>Alle produkter</h1>';
        }
        ?>
        <div class="products">
            <?php
            if ($result->num_rows > 0) {
                // Vis produkter
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="product">';
                    echo '<img src="img/productimg/' . $row['image'] . '" alt="' . $row['name'] . '">';
                    echo '<h2>' . $row['name'] . '</h2>';
                    echo '<p>' . $row['description'] . '</p>';
                    echo '<p class="price">Pris: ' . $row['price'] . ' DKK</p>';
                    echo '<button class="add-to-cart">Føj til kurv</button>';
                    echo '</div>';
                }
            } else {
                echo 'Ingen produkter fundet.';
            }
            ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
