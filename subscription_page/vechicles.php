<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>DOOS Website</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <!--this is used for the price slider-->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./vechicles.css">
</head>

<body>

    <!-- WhatsApp Floating Button -->
    <a href="https://api.whatsapp.com/send?phone=+601160602943&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

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

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>Find the car that's best for you</h1>
            <h2>List your car on our platform and earn extra money by renting it out to others. It’s a win-win
                situation! List now and start making money on the side.</h2>
        </div>
        <img src="../assets/Cars subscription page.png" alt="Car Image" class="hero-image">
    </section>

    <!-- Vehicle Section -->
    <section class="vehicle-section">
        <h2 class="vehicle-title">Our Vehicles</h2>
        <p class="vehicle-subtitle">Our fleet includes a variety of vehicles to suit every preference and budget, from compact cars for city exploration to spacious SUVs.</p>
        
        <div class="search-container">
            <div class="input-wrapper">
                <input type="text" class="search-input" placeholder="Search for car">
                <i class="fa fa-search search-icon"></i>
            </div>
            <button class="filter-button">
                <img src="../assets/Filter icon.png" alt="Filter Icon" class="filter-icon"> Filter
            </button>
        </div>
        
        <div class="filter-dropdown">
            <div class="filter-section">
                <h3>Main Filters</h3>
                <label>Brand 
                    <select>
                        <option value="">Please select a brand</option>
                        <option value="perodua">Perodua</option>
                        <option value="proton">Proton</option>
                        <option value="toyota">Toyota</option>
                        <option value="honda">Honda</option>
                        <option value="nissan">Nissan</option>
                        <option value="mercedes-benz">Mercedes-Benz</option>
                        <option value="mazda">Mazda</option>
                        <option value="mitsubishi">Mitsubishi</option>
                        <option value="ford">Ford</option>
                    </select>
                </label>
                <label>Duration 
                    <select>
                        <option value="1">1 Year</option>
                        <option value="2">2 Years</option>
                        <option value="3">3 Years</option>
                        <option value="4">4 Years</option>
                        <option value="5">5 Years</option>
                        <option value="6">6 Years</option>
                        <option value="7">7 Years</option>
                    </select>
                </label>
                <label>Sort By 
                    <select>
                        <option value="low_to_high">Low to high price</option>
                        <option value="high_to_low">High to low price</option>
                        <option value="newest">Newest</option>
                        <option value="oldest">Oldest</option>
                    </select>
                </label>
            </div>
            <div class="filter-section">
                <h3>More Filters</h3>
                <label>Price Range</label>
                <div class="price-range-slider">
                    <p class="range-value">
                    <input type="text" id="amount" readonly>
                    </p>
                    <div id="slider-range" class="range-bar"></div>
                    <div class="slider-labels">
                    <span class="slider-label">Min: RM500</span>
                    <span class="slider-label">Max: RM11500</span>
                    </div>
                </div>                                                
                <label>Body Type 
                    <select>
                        <option value="suv">SUV</option>
                        <option value="sedan">Sedan</option>
                        <option value="hatchback">Hatchback</option>
                        <option value="mpv">MPV</option>
                        <option value="coupe">Coupe</option>
                        <option value="convertible">Convertible</option>
                        <option value="sports_car">Sports Car</option>
                    </select>
                </label>
            </div>
            <div class="filter-actions">
                <button class="button cancel-button">Cancel</button>
                <button class="button confirm-button">Confirm</button>
            </div>
        </div>
    </section>

    <!-- PHP Code for Car Listings -->
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
                    echo '<p class="car-price">RM ' . number_format($row['PricePerMonth'], 2) . '/Month</p>';
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
                    echo '<a href="plan.php?CarID=' . $row['CarID'] . '" class="rent-car-btn">Rent the Car</a>';
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


    <script>
       document.addEventListener('DOMContentLoaded', function() {
            const filterButton = document.querySelector('.filter-button');
            const filterDropdown = document.querySelector('.filter-dropdown');

            filterButton.addEventListener('click', function(event) {
                event.stopPropagation(); 
                const isDisplayed = filterDropdown.style.display === 'block';
                filterDropdown.style.display = isDisplayed ? 'none' : 'block'; // Toggle display
            });

            // Close dropdown when clicking outside of it
            document.addEventListener('click', function(event) {
                if (!filterDropdown.contains(event.target) && !filterButton.contains(event.target)) {
                    filterDropdown.style.display = 'none';
                }
            });
        });
    </script>

    <!--this js for the price slider-->
    <script>
        $(document).ready(function() {
            $("#slider-range").slider({
                range: true,
                min: 500,
                max: 11500,
                values: [2000, 9500 ],
                slide: function(event, ui) {
                    $("#amount").val("RM" + ui.values[0] + " - RM" + ui.values[1]);
                }
            });
            $("#amount").val("RM " + $("#slider-range").slider("values", 0) + " - RM " + $("#slider-range").slider("values", 1));
        });
    </script>
    
        
</body>
</html>
