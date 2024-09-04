<?php
// Database connection
$serverName = "IBRAHIM";
$connectionOptions = array(
    "Database" => "CarRentalDB"
);

// Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Fetch car ID from the query string or other source
$carID = $_GET['CarID'];  // or other method to get the car ID

// Query to fetch car details
$sql = "SELECT * FROM Cars WHERE CarID = ?";
$params = array($carID);
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

$car = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

// Calculate prices for different plans
$pricePerMonth = $car['PricePerMonth'];
$price12Months = $pricePerMonth * 12;
$price24Months = $pricePerMonth * 24;
$price36Months = $pricePerMonth * 36;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Plan</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./plan.css">
</head>

<body>
    <!-- Header Section -->
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
    

    

    <div class="spec-item">
        <strong>BODY TYPE</strong>
        <p><?php echo htmlspecialchars($car['BodyType']); ?></p>
    </div>
    <div class="spec-item">
        <strong>TRANSMISSION</strong>
        <p><?php echo htmlspecialchars($car['TransmissionType']); ?></p>
    </div>
    <div class="spec-item">
        <strong>FUEL TYPE</strong>
        <p><?php echo htmlspecialchars($car['FuelType']); ?></p>
    </div>
    <div class="spec-item">
        <strong>SEATS</strong>
        <p><?php echo htmlspecialchars($car['Seats']); ?></p>
    </div>

    <div class="pricing-options">
        <input type="radio" id="plan1" name="subscription" value="36-months" checked>
        <label for="plan1">
            <span class="text">
                <span class="circle"></span>
                36 months
            </span>
            <span class="price">
                RM <?php echo htmlspecialchars(number_format($price36Months, 2)); ?>/mo
                <small class="small">RM <?php echo htmlspecialchars(number_format($price36Months, 2)); ?> billed every
                    month</small>
            </span>
        </label>

        <input type="radio" id="plan2" name="subscription" value="24-months">
        <label for="plan2">
            <span class="text">
                <span class="circle"></span>
                24 months
            </span>
            <span class="price">
                RM <?php echo htmlspecialchars(number_format($price24Months, 2)); ?>/mo
                <small class="small">RM <?php echo htmlspecialchars(number_format($price24Months, 2)); ?> billed every month</small>
            </span>
        </label>

        <input type="radio" id="plan3" name="subscription" value="12-months">
        <label for="plan3">
            <span class="text">
                <span class="circle"></span>
                12 months
            </span>
            <span class="price">
                RM <?php echo htmlspecialchars(number_format($price12Months, 2)); ?>/mo
                <small class="small">RM <?php echo htmlspecialchars(number_format($price12Months, 2)); ?> billed every   month</small>
            </span>
        </label>

        <input type="radio" id="plan4" name="subscription" value="monthly">
        <label for="plan4">
            <span class="text">
                <span class="circle"></span>
                Monthly
            </span>
            <span class="price">

            </span>
        </label>
    </div>

    <div class="mileage-plan">
        <h3>MILEAGE PER MONTH</h3>
        <div class="dropdown-container">
            <select>
                
            </select>
        </div>
    </div>

    <!-- Footer Section -->
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
        <!-- Credits Section -->
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

