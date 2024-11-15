<?php
// Database connection
$serverName = "LUAI\\LUAI";
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

$imageBasePath = '../assets/';
$imagePrefix = $car['Model']; 
$imageExtensions = ['.png', '2.png', '3.png', '4.png', '5.png'];

$images = [];
foreach ($imageExtensions as $extension) {
    $images[] = $imageBasePath . $imagePrefix . $extension;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Plan Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./plan.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

    <a href="https://api.whatsapp.com/send?phone=+60148095166&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>


    <header>
        <div class="navbar">
            <div class="logo">
                <img src="../assets/Doos logo.png" alt="DOOS Logo" style="margin-right: 20px;">
            </div>
            <nav>
                <ul>
                    <li><a href="../Main_Page/main.Html">Home</a></li>
                    <li><a href="../subscription_page/vechicles.php" class="active">Subscription</a></li>
                    <li><a href="../About_us_Page/about_us.html">About</a></li>
                    <li><a href="../FAQ_page/faq.HTML">FAQ</a></li>
                    <li><a href="../Contact_Page/contact.html">Contact</a></li>
                </ul>
            </nav>
            <button class="button-1">Sign Up</button>
        </div>
    </header>
    <section>
    <div class="slider">
        <div class="list">
            <?php foreach ($images as $image): ?>
                <div class="item">
                    <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($car['Model']); ?>">
                </div>
            <?php endforeach; ?>
        </div>
        <div class="buttons">
            <button id="prev">&lt;</button>
            <button id="next">&gt;</button>
        </div>
        <ul class="dots">
            <?php foreach ($images as $index => $image): ?>
                <li class="<?php echo $index === 0 ? 'active' : ''; ?>"></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <script src="./plan.js"></script>
    
    <!-- THE SECTION USED FOR THE PART UNDER THE IMAGES FOR THE CAR DETAILS -->
    <section class="subscription-details"> <!-- This is the big big father -->
        <div class="plan-options">
            <h2><?php echo htmlspecialchars($car['Model']); ?></h2>
            <div class="details">
                <span class="stars">
                    <!-- Star icons (use Font Awesome) -->
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span>
                <span class="separator">•</span>
                <span class="km"><?php echo htmlspecialchars($car['Mileage']) . " KM"; ?></span>
                <span class="separator">•</span>
                <span class="badge promo">PROMO</span>
                <span class="badge new">NEW</span>
                <span class="badge pre-book">PRE-BOOK</span>
            </div>
            <ul>
                <li><i class="fa-solid fa-check"></i> Subscribe for 12 - 36 months and swap cars when you want</li>
                <li><i class="fa-solid fa-check"></i> Insurance, road tax, maintenance & Concierge included</li>
                <li><i class="fa-solid fa-check"></i> No down payment and approval in 24 hours</li>
            </ul>
            <div class="promotions">
                <div class="promotion">
                    <i class="fas fa-tag"></i> Promotion Applied: 50% OFF for your 1st month
                </div>
                <div class="deal">
                    <i class="fas fa-fire"></i> Hot Deal: This listing is at least 15% below market price
                </div>
                <div class="pre-book">
                    <i class="fas fa-clock"></i> Pre-Book listing: This vehicle may take more than 7 days to deliver
                </div>
                <div class="delivery">
                    <i class="fas fa-truck"></i> Free delivery to Kuala Lumpur, Penang & Johor
                </div>
            </div>

            <!-- This part is used for the vehicles specs -->
            <section class="vehicle-specs">
                <h2>VEHICLE SPECS</h2>
                <div class="tabs">
                    <button class="tab-button active" data-tab="details">DETAILS</button>
                    <button class="tab-button" data-tab="features">FEATURES</button>
                </div>
                <div class="tab-content active" id="details">
                    <div class="specs-grid">
                        <div class="spec-item">
                            <strong>BODY TYPE</strong>
                            <p><?php echo htmlspecialchars($car['BodyType']); ?></p>
                        </div>
                        <div class="spec-item">
                            <strong>FUEL TYPE</strong>
                            <p><?php echo htmlspecialchars($car['FuelType']); ?></p>
                        </div>
                        <div class="spec-item">
                            <strong>TRANSMISSION</strong>
                            <p><?php echo htmlspecialchars($car['TransmissionType']); ?></p>
                        </div>
                        <div class="spec-item">
                            <strong>DRIVE TRAIN</strong>
                            <p><?php echo htmlspecialchars($car['DriveTrain']); ?></p>

                        </div>
                        <div class="spec-item">
                            <strong>ENGINE CAPACITY</strong>
                            <p><?php echo htmlspecialchars($car['EngineCapacity']); ?></p>
                        </div>
                        <div class="spec-item">
                            <strong>COLOUR</strong>
                            <p><?php echo htmlspecialchars($car['Colour']); ?></p>
                        </div>
                        <div class="spec-item">
                            <strong>0 - 100 KM/H</strong>
                            <p><?php echo htmlspecialchars($car['ZeroToHundred']); ?></p>
                        </div>
                        <div class="spec-item">
                            <strong>FUEL EFFICIENCY</strong>
                            <p><?php echo htmlspecialchars($car['FuelEfficiency']); ?></p>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="features">
                    <div class="features-grid">
                        <div class="feature-item">
                            <i class="fas fa-couch"></i>
                            <p>Leather Seats</p>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-chair"></i>
                            <p>Power Seats</p>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-music"></i>
                            <p>Audio System</p>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-car-crash"></i>
                            <p>Braking Assist</p>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-car-side"></i>
                            <p>Anti-lock Braking System (ABS)</p>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-camera"></i>
                            <p>Exterior View Camera</p>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-sun"></i>
                            <p>Sunroof</p>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-wind"></i>
                            <p>Climate Control</p>
                        </div>
                    </div>
                </div>
                <script src="./TAB.JS" defer></script>
            </section>

            <!-- This part is used for the vehicle's inspection rating -->
            <section class="inspection-rating">
                <p>Start your journey with confidence, knowing your vehicle has been meticulously checked with a
                    thorough inspection process by our Concierge team.</p>
                <p>5.0 stars</p>
                <span class="stars">
                    <!-- Star icons (use Font Awesome) -->
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span>
                <p>Inspected on 22-08-2024</p>
            </section>

            <!-- this section for the comparison table the part under the tabs content -->
            <section class="comparison-section">
                <div class="comparison-box">
                    <h2>BETTER THAN BUYING</h2>
                    <p>Subscribe to a Daihatsu Copen and save 55% compared to a 5-year loan.</p>

                    <div class="comparison-details">
                        <div class="detail-header">
                            <span>What’s Included</span>
                            <span>Loan</span>
                            <span>Doos</span>
                        </div>
                        <div class="detail-row">
                            <span class="included-item">Comprehensive insurance</span>
                            <span class="not-included">✗</span>
                            <span class="included">✔</span>
                        </div>
                        <div class="detail-row">
                            <span class="included-item">Road tax</span>
                            <span class="not-included">✗</span>
                            <span class="included">✔</span>
                        </div>
                        <div class="detail-row">
                            <span class="included-item">Maintenance</span>
                            <span class="not-included">✗</span>
                            <span class="included">✔</span>
                        </div>
                        <div class="detail-row">
                            <span class="included-item">Door-to-door delivery</span>
                            <span class="not-included">✗</span>
                            <span class="included">✔</span>
                        </div>
                        <div class="detail-row">
                            <span class="included-item">Concierge service</span>
                            <span class="not-included">✗</span>
                            <span class="included">✔</span>
                        </div>
                        <div class="detail-row">
                            <span class="included-item">Personal accident coverage</span>
                            <span class="not-included">✗</span>
                            <span class="included">✔</span>
                        </div>
                        <div class="detail-row">
                            <span class="included-item">24/7 roadside assistance</span>
                            <span class="not-included">✗</span>
                            <span class="included">✔</span>
                        </div>
                        <div class="detail-row">
                            <span class="included-item">Theft recovery services</span>
                            <span class="not-included">✗</span>
                            <span class="included">✔</span>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="how-to-subscribe">
                    <h2>HOW TO SUBSCRIBE</h2>
                    <div class="steps">
                        <div class="step">
                            <h3>1</h3>
                            <h4>Choose Your Car</h4>
                            <p>Select your subscription plan and mileage package.</p>
                        </div>
                        <div class="step">
                            <h3>2</h3>
                            <h4>Book Online</h4>
                            <p>Book your car online, it’s only RM 81 and takes less than 5 minutes.</p>
                        </div>
                        <div class="step">
                            <h3>3</h3>
                            <h4>Get It Delivered</h4>
                            <p>Our Concierge team delivers your car to your doorstep.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="pricing-container">
            <p class="pricing-header">
                <span class="highlighted-price">RM 1,755</span>/month for your 1st month
            </p>
            <p class="next-month">then RM 3,510/month</p>

            <div class="subscription-plan">
                <h3>SUBSCRIPTION PLAN</h3>

                <div class="radio-input">
                    <input type="radio" id="plan1" name="subscription" value="36-months">
                    <label for="plan1">
                        <span class="text">
                            <span class="circle"></span>
                            36 months
                        </span>
                        <span class="price">
                            RM <?php echo htmlspecialchars(number_format($price36Months, 2)); ?>/mo
                            <small class="small">RM <?php echo htmlspecialchars(number_format($price36Months, 2)); ?>
                                billed every
                                month</small>
                        </span>
                    </label>

                    <input type="radio" id="plan2" name="subscription" value="24-months" checked>
                    <label for="plan2">
                        <span class="text">
                            <span class="circle"></span>
                            24 Months
                        </span>
                        <span class="price">
                            RM <?php echo htmlspecialchars(number_format($price24Months, 2)); ?>/mo
                            <small class="small">RM <?php echo htmlspecialchars(number_format($price24Months, 2)); ?>
                                billed every month</small>
                        </span>
                    </label>

                    <input type="radio" id="plan3" name="subscription" value="12-months">
                    <label for="plan3">
                        <span class="text">
                            <span class="circle"></span>
                            12 Months
                        </span>
                        <span class="price">
                            RM <?php echo htmlspecialchars(number_format($price12Months, 2)); ?>/mo
                            <small class="small">RM <?php echo htmlspecialchars(number_format($price12Months, 2)); ?>
                                billed every month</small>
                        </span>
                    </label>

                    <input type="radio" id="plan4" name="subscription" value="1-month">
                    <label for="plan4">
                        <span class="text">
                            <span class="circle"></span>
                            1 Month
                        </span>
                        <span class="price">
                            RM <?php echo htmlspecialchars(number_format($pricePerMonth, 2)); ?>/mo
                            <small class="small">RM <?php echo htmlspecialchars(number_format($pricePerMonth, 2)); ?>
                                billed every month</small>
                        </span>
                    </label>
                </div>
            </div>

            <div class="mileage-plan">
                <h3>MILEAGE PER MONTH</h3>
                <div class="dropdown-container">
                    <select  class="mileage-select">
                        <option value="lite"><?php echo htmlspecialchars("Lite -  1,250 KM " . $car['MileageLite']); ?>
                        </option>
                        <option value="standard">
                            <?php echo htmlspecialchars("Standard - 2,000 KM " . $car['MileageStandard']); ?></option>
                        <option value="plus"><?php echo htmlspecialchars("Plus -  2,750 KM " . $car['MileagePlus']); ?>
                        </option>
                        <option value="unlimited">
                            <?php echo htmlspecialchars("Unlimited " . $car['MileageUnlimited']); ?></option>
                    </select>
                </div>
            </div>

            <div class="next-button">
                <button type="button">
                    <i class="fab fa-whatsapp"></i> Book Now
                </button>
            </div>

        </div>

    </section>

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
                    <li><i class="fas fa-map-marker-alt"></i> Level 1, Block 2330, Century Square, Jalan
                        Usahawan, Off
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
            <a href="https://www.linkedin.com/in/luaimohammed" target="_blank" class="credit-item">
                <span class="text">Made By</span>
                <i class="fab fa-linkedin"></i>
                <span class="name">Luai</span>
            </a>
            <a href="https://www.linkedin.com/in/ebrahim-khaled-b377512ba" target="_blank" class="credit-item">
                <i class="fab fa-linkedin"></i>
                <span class="name"> Ebriham</span>
            </a>
        </div>
    </footer>

</body>

</html>

<?php
// Free statement and close connection
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>