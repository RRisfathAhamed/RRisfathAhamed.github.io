# Portfolio Website - Risfath Ahamed

This is my personal portfolio website showcasing my projects, skills, and experience. The website is designed and developed using HTML, CSS, and JavaScript.

## Theme
The theme of this portfolio website is minimalistic and modern. I chose this theme to create a clean and professional look, allowing the focus to be on the content and the projects I have worked on.

## Features
- **Home**: The home section provides an introduction and overview of myself and my work.
- **Services**: In the services section, I describe the specific services or skills I offer.
- **Projects**: The projects section showcases a selection of my notable projects, including descriptions, technologies used, and live/demo links.
- **About**: In the about section, I provide more details about myself, my background, and my interests.
- **Contact**: The contact section includes a contact form for visitors to get in touch with me.

Additional Features:
- **Responsive Design**: The website is fully responsive and mobile-friendly, ensuring a seamless experience across different devices.
- **Smooth Scrolling**: Implementing smooth scrolling effect for improved navigation.
- **Social Media Links**: Connects visitors to my social media profiles, allowing them to explore more about me and my work.
- **Animated Transitions**: Utilizing subtle animations and transitions to enhance the user experience and add visual appeal.

## Getting Started
Repository URL: https://rrisfathahamed.github.io/
Source URL: https://github.com/RRisfathAhamed/RRisfathAhamed.github.io

Feel free to explore the different sections of the website and get in touch if you have any questions or opportunities to collaborate!


Update 2.0
# My Portfolio

Welcome to my updated portfolio! In this version, I've added exciting new features and improvements to enhance the user experience and interaction. Additionally, I've integrated a "Send Message" option and implemented comprehensive form validation to ensure accurate data entry.

## New Features

### Send Message Option

Now, you can easily get in touch with me using the "Send Message" option. Simply visit the Contact section of my portfolio and fill out the form to send me a message directly. I've implemented form validation to ensure that the information you provide is accurate and complete. Real-time feedback will guide you in filling out the form correctly.

### Form Validation

I've integrated form validation throughout the portfolio to ensure accurate and error-free data entry. Validation is applied to fields such as First Name, Last Name, Email Address, Mobile Number, and Message. Error messages are displayed if any information is incomplete or incorrectly formatted.

## Connecting to the MySQL Database (Using XAMPP)

To save the details submitted through the "Send Message" option, you can use XAMPP to set up a MySQL database. Follow these steps:

1. **Install and Start XAMPP:**
   Download and install XAMPP from [https://www.apachefriends.org](https://www.apachefriends.org). Start the Apache and MySQL modules.

2. **Create Database:**
   Open phpMyAdmin (usually accessed at http://localhost/phpmyadmin) and create a new database named `portfolio_data`.

3. **Import SQL File:**
   Import the `portfolio_data.sql` file provided in the repository. This file contains the necessary table structure for storing contact details.

4. **PHP Code for Database Connection:**
   Create a PHP file (e.g., `db_connect.php`) to establish a connection to the MySQL server. Here's an example of what the file may look like:

   ```php
   <?php
   // Database configuration
   $servername = "localhost";
   $username = "your_username";
   $password = "your_password";
   $dbname = "portfolio_data";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   ?>
Replace your_username and your_password with your MySQL username and password.