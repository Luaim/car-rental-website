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
git clone https://github.com/your-username/doos-car-rental.git


Database Setup:

Import the SQL script provided in CarRental.sql to initialize the CarRentalDB database on Microsoft SQL Server.
Configure the serverName in plan.php to match your server setup.
XAMPP Setup:

Ensure XAMPP is running.
Place the project in the htdocs folder.
Access the site on http://localhost/[project-folder].

Project Structure
CAR-RENTAL-WEBSITE/
├── About_us_Page/
│   ├── about_us.css
│   └── about_us.html
├── assets/
│   └── (images and logos)
├── Contact_Page/
│   ├── contact.css
│   └── contact.html
├── FAQ_page/
│   ├── faq.css
│   └── faq.html
├── Invest_Form_Page/
│   ├── invest_form.css
│   └── invest_form.html
├── Main_Page/
│   ├── main.css
│   └── main.html
├── subscription_page/
│   ├── CarRental.sql
│   ├── plan.css
│   ├── plan.js
│   ├── plan.php
│   ├── TAB.js
│   ├── vechicles.css
│   ├── vechicles.js
│   └── vechicles.php
└── README.md

Contributors
Luai Mohammed - LinkedIn
Ebrahim Khaled - LinkedIn

License
This project is open-source and available under the MIT License.
