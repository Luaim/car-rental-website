<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>DOOS Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./vechicles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

    <!-- THIS IS FOR THE WHATS APP FLOATING BUTTON-->
    <a href="https://api.whatsapp.com/send?phone=+601160602943&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- this part for the header the top part in the page-->
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="../assets/Doos logo.png" alt="DOOS Logo" style="margin-right: 20px;">
            </div>
            <nav>
                <ul>
                    <li><a href="../Main_Page/main.Html">Home</a></li>
                    <li><a href="../subscription_page/vechicles.HTML" class="active">Subscription</a></li>
                    <li><a href="../About_us_Page/about_us.html">About</a></li>
                    <li><a href="../FAQ_page/faq.HTML">FAQ</a></li>
                    <li><a href="../Contact_Page/contact.html">Contact</a></li>
                </ul>
            </nav>
            <button class="button-1">Sign Up</button>
        </div>
    </header>

    <!-- this part for the hero the part after the header-->
    <section class="hero">
        <div class="hero-text">
            <h1>Find the car that's best for you</h1>
            <h2>List your car on our platform and earn extra money by renting it out to others. It’s a win-win
                situation! List now and start making money on the side.</h2>
        </div>
        <img src="../assets/Cars subscription page.png" alt="Car Image" class="hero-image">
    </section>

    <!-- this part header of the cars options which is under the hero-->
    <section class="vehicle-section">
        <h2 class="vehicle-title">Our Vehicles</h2>
        <p class="vehicle-subtitle">Our fleet includes a variety of vehicles to suit every preference and budget, From
            compact cars for city exploration to spacious SUVs</p>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search for car">
            <button class="filter-button">
                <img src="../assets/Filter icon.png" alt="Filter Icon" class="filter-icon">
                Filter
            </button>
        </div>
    </section>

    <!-- PHP code to fetch data from the database and display car cards -->
    <section>
        <div class="car-grid">
            <?php
// Database connection parameters
$serverName = "LUAI\\LUAI"; // Replace with your actual SQL Server name
$connectionOptions = array(
    "Database" => "CarRentalDB", // Replace with your actual database name
    "TrustServerCertificate" => true // Optional: Use if SQL Server certificate is not trusted
    // "Uid" and "PWD" are not needed for Windows Authentication and can be omitted.
);

// Establishes the connection using Windows Authentication
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Check if the connection was successful
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// SQL query to fetch all car data
$sql = "SELECT * FROM Cars";
$stmt = sqlsrv_query($conn, $sql);

// Check if the query execution was successful
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Loop through the results and output each car card
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo '<div class="car-card">';
    echo '<img src="../assets/' . $row['Model'] . '.png" alt="' . $row['Model'] . '" class="car-image">';
    echo '<div class="car-details">';
    echo '<h3 class="car-title">' . $row['Model'] . '</h3>';
    echo '<p class="car-price">RM ' . number_format($row['PricePerYear'], 2) . '/Year</p>';
    echo '<div class="car-info">';

    echo '<div class="car-feature">';
    echo '<img src="../assets/Seats.png" alt="Seats">';
    echo '<span>' . $row['Seats'] . ' Seats</span>';
    echo '</div>';

    echo '<div class="car-feature">';
    echo '<img src="../assets/AC.png" alt="Air Conditioning">';
    echo '<span>' . ($row['AirConditioning'] ? 'AC' : 'No AC') . '</span>';
    echo '</div>';

    echo '<div class="car-feature">';
    echo '<img src="../assets/system.png" alt="Transmission">';
    echo '<span>' . $row['TransmissionType'] . '</span>';
    echo '</div>';

    echo '<div class="car-feature">';
    echo '<img src="../assets/Petrol station.png" alt="Fuel Type">';
    echo '<span>' . $row['FuelType'] . '</span>';
    echo '</div>';
    
    echo '</div>';
    echo '<button class="rent-car-btn">Rent the Car</button>';
    echo '</div>';
    echo '</div>';
}

// Free statement and close connection
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
        </div>
        <button id="loadMore" onclick="loadMoreCards()">Load More</button>
        <script src="./vechicles.js"></script>
    </section>

    <!--this section is the last part which is used for the footer-->
    <footer>
        <div class="container">
            <div class="logo">
                <a href="#">
                    <img src="../assets/Doos logo.png" alt="Logo">
                </a>
                <p>In God we trust because I'm the king of FRICA</p>
                <div class="social">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-twitter"></a>
                </div>
            </div>
            <div class="supported">
                <h3>Supported by</h3>
                <ul>
                    <li><img src="../assets/cyberview logo.png" alt="Support 1" width="100px"></li>
                    <li><img src="../assets/mdec logo.png" alt="Support 2" width="100px"></li>
                </ul>
            </div>
            <div class="links">
                <h3>Helpful Links</h3>
                <ul>
                    <li><a href="../Contact_Page/contact.html">Contact Us</a></li>
                    <li><a href="../FAQ_page/faq.HTML">FAQ</a></li>
                    <li><a href="../Invest_Form_Page/invest_form.HTML">Investors</a></li>
                    <li><a href="#">T&C</a></li>
                </ul>
            </div>
            <div class="contact">
                <h3>Contact Us</h3>
                <ul>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:hello@doos.my">hello@doos.my</a></li>
                    <li><i class="fas fa-phone"></i> <a href="tel:+60148095166">+60 148095166</a></li>
                    <li><i class="fas fa-map-marker-alt"></i> Level 1, Block 2330, Century Square, Jalan Usahawan, Off
                        Persiaran Multimedia, Cyberjaya, 63000, Selangor, Malaysia</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2024 DOOS. All rights reserved. <a href="#">Terms & Conditions</a> <a href="#"> . Privacy
                    Policy</a></p>
        </div>
        <!-- New section for LinkedIn icons and names -->
        <div class="credits">
            <a href="https://www.linkedin.com/in/luai-linkedin" target="_blank" class="credit-item">
                <span class="text">Made By</span>
                <i class="fab fa-linkedin"></i>
                <span class="name">Luai</span>
            </a>
            <a href="https://www.linkedin.com/in/ebriham-linkedin" target="_blank" class="credit-item">
                <i class="fab fa-linkedin"></i>
                <span class="name"> Ebriham</span>
            </a>
        </div>
    </footer>

</body>

</html>