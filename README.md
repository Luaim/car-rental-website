DOOS Car Rental Website
Welcome to the DOOS Car Rental website repository! This project was developed collaboratively by Luai and Ebrahim to create a seamless car rental experience. Built using HTML, CSS, JavaScript, PHP, and Microsoft SQL Server, this website features a subscription model that allows users to browse, invest in, and subscribe to cars.

Project Overview
The DOOS Car Rental website provides an interactive platform where users can:

Explore and subscribe to various cars with customized plans.
Invest their cars by listing them on the platform to earn income.
Contact support through the website or the WhatsApp floating button for assistance.
Features
Homepage:

An introductory page showcasing the platform with links to browse vehicles, learn about car investment opportunities, and connect with support.
Subscription Page:

Allows users to view detailed specifications and features of each car.
Choose between different subscription plans and mileage options.
Use the comparison section to see the benefits of renting over purchasing.
Includes promotions, pricing details, and an easy-to-follow subscription process.
FAQ Page:

Contains frequently asked questions with an accordion-style layout for easy navigation.
Investment Form Page:

A form that allows car owners to list their vehicles, including details on make, model, location, and photos.
Contact Page:

Contact details and links to social media, making it easy for customers to connect.
WhatsApp Integration:

Floating button for WhatsApp support accessible on all pages.
Tech Stack
Frontend: HTML, CSS (with Google Fonts), and JavaScript
Backend: PHP, connected to a Microsoft SQL Server database
Database: Microsoft SQL Server for handling car inventory, subscription details, and user data
Development Environment: XAMPP for local PHP and SQL testing
Getting Started
Clone the Repository:

bash
Copy code
git clone https://github.com/your-username/doos-car-rental.git
Database Setup:

Import the SQL script provided in subscription_page.sql to initialize the CarRentalDB database on Microsoft SQL Server.
Configure the serverName in plan.php to match your server setup.
XAMPP Setup:

Ensure XAMPP is running.
Place the project in the htdocs folder.
Access the site on http://localhost/[project-folder].
Project Structure
plaintext
Copy code
├── Main_Page/
│   ├── main.html
│   └── main.css
├── subscription_page/
│   ├── vechicles.php
│   ├── plan.css
│   └── plan.js
├── FAQ_page/
│   ├── faq.html
│   └── faq.css
├── Invest_Form_Page/
│   ├── invest_form.html
│   └── invest_form.css
├── Contact_Page/
│   ├── contact.html
│   └── contact.css
├── assets/
│   └── (images and logos)
├── README.md
└── SQL/
    └── subscription_page.sql
Contributors
Luai Mohammed - LinkedIn
Ebrahim Khaled - LinkedIn
License
This project is open-source and available under the MIT License.
