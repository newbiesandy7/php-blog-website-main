<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website Footer - First Figure</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /*
 * Global Styles & Body Setup
 * Ensures the footer stays at the bottom of the viewport
 */
body {
    margin: 0;
    font-family: Arial, sans-serif; /* Using a common sans-serif font */
    background-color: #f0f0f0; /* Light grey background for the main content area */
    display: flex;
    flex-direction: column; /* Stacks content and footer vertically */
    min-height: 100vh; /* Ensures body takes at least full viewport height */
    box-sizing: border-box; /* Include padding and border in element's total width and height */
}

/* Placeholder for main content to push footer down */
.main-content {
    flex-grow: 1; /* Allows main content to take up available space */
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    padding: 100px 20px; /* Adjusted padding to visually match the context in the image */
    text-align: center;
    color: #333;
    font-size: 2.5em; /* Larger heading as in the image */
    font-weight: bold;
}

/*
 * FOOTER SECTION STYLES (Based on the first figure)
 * Main container for the entire footer
 */
.footer-7-travel {
    background-color: #000; /* Black background as per first image */
    color: #fff;
    padding: 60px 0 20px; /* Adjust padding as needed */
    font-size: 0.9em;
}

/* Inner container to control content width and centering */
.footer-7-travel .container {
    max-width: 1200px; /* Maximum width for footer content */
    margin: 0 auto; /* Centers the container */
    display: flex; /* Uses flexbox for column layout */
    flex-wrap: wrap; /* Allows columns to wrap on smaller screens */
    justify-content: space-between; /* Distributes space between columns */
    padding: 0 20px;
}

/* Styles for individual footer columns */
.footer-7-travel .footer-col {
    flex: 1; /* Distribute space equally */
    min-width: 200px; /* Minimum width before wrapping */
    margin-bottom: 30px;
    padding-right: 20px; /* Spacing between columns */
    box-sizing: border-box; /* Include padding in width calculation */
}

/* Specific flex basis for the logo/about column to match image width */
.footer-7-travel .logo-column {
    flex: 1.5; /* Give more space to the first column */
    max-width: 300px; /* Adjust max-width as needed */
}

/* For list columns, ensure they share space correctly */
.footer-7-travel .list-column {
    flex: 1;
    max-width: 200px; /* Adjusted for smaller, consistent columns */
}


/* Remove right padding for the last column in the main row */
.footer-7-travel .footer-col:last-child {
    padding-right: 0;
}

/* Footer logo styling */
.footer-7-travel .footer-logo {
    font-size: 1.5em;
    font-weight: bold;
    margin-bottom: 15px;
    color: #fff; /* White color */
}

/* Paragraph text styles within footer columns */
.footer-7-travel p {
    line-height: 1.8;
    color: #bbb; /* Lighter grey for body text */
    font-size: 0.9em;
}

/* Headings (empty in HTML for spacing, but styles are defined if needed) */
.footer-7-travel h4 {
    font-size: 1.1em;
    margin-bottom: 20px;
    color: #fff;
    font-weight: normal; /* To match the subtle look in the image */
}

/* List styling */
.footer-7-travel ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-7-travel ul li {
    margin-bottom: 10px;
}

.footer-7-travel ul li a {
    color: #bbb; /* Link color */
    text-decoration: none;
    transition: color 0.3s ease; /* Smooth color transition on hover */
}

.footer-7-travel ul li a:hover {
    color: #fff; /* White color on hover */
}

/* Social media and contact button column */
.footer-7-travel .social-contact-col {
    display: flex;
    flex-direction: column;
    align-items: flex-end; /* Align to the right as in the image */
    justify-content: flex-start; /* Align content to the top */
}

/* Social icons container */
.footer-7-travel .social-icons {
    margin-bottom: 20px;
    display: flex; /* Use flex to align icons horizontally */
}

/* Individual social icon links */
.footer-7-travel .social-icons a {
    color: #fff; /* White icon color */
    font-size: 1.2em;
    margin-left: 15px; /* Space between icons */
    transition: color 0.3s ease; /* Smooth color transition on hover */
}

.footer-7-travel .social-icons a:hover {
    color: #ff4d4d; /* Example accent hover color for social icons */
}

/* Contact Us button */
.footer-7-travel .contact-us-btn {
    background-color: #ff4d4d; /* Red button as per image */
    color: #fff;
    border: none;
    padding: 12px 25px;
    border-radius: 5px; /* Slightly rounded corners as in image */
    cursor: pointer;
    font-size: 1em;
    font-weight: bold;
    transition: background-color 0.3s ease; /* Smooth transition */
    flex-shrink: 0; /* Prevents button from shrinking */
}

.footer-7-travel .contact-us-btn:hover {
    background-color: #e03d3d; /* Darker red on hover */
}

/* Footer bottom section (copyright) */
.footer-7-travel .footer-bottom {
    text-align: center;
    margin-top: 50px;
    padding-top: 20px;
    border-top: 1px solid #333; /* Separator line */
    color: #bbb; /* Lighter grey for copyright text */
}

/*
 * Responsive Design (Media Queries)
 * Adjusts layout for different screen sizes
 */
@media (max-width: 992px) {
    .footer-7-travel .container {
        justify-content: flex-start; /* Align columns to start on smaller screens */
    }

    .footer-7-travel .footer-col {
        flex: 1 1 45%; /* Two columns per row */
        max-width: 45%;
        padding-right: 20px;
    }

    /* Remove right padding for every second column to create correct spacing */
    .footer-7-travel .footer-col:nth-child(2n) {
        padding-right: 0;
    }
    .footer-7-travel .footer-col:nth-child(2n-1) {
        padding-right: 20px;
    }

    .footer-7-travel .social-contact-col {
        flex: 1 1 100%; /* Take full width on smaller screens */
        max-width: 100%;
        align-items: flex-start; /* Align to left */
        margin-top: 20px;
        order: 5; /* Ensure it appears at the end when wrapped */
    }

    .footer-7-travel .social-icons {
        margin-bottom: 15px;
        margin-left: 0; /* Remove left margin for social icons */
    }

    .footer-7-travel .social-icons a {
        margin-right: 15px; /* Add right margin for social icons */
        margin-left: 0;
    }

    .footer-7-travel .logo-column {
        flex: 1 1 100%; /* Make logo column full width on this breakpoint */
        max-width: 100%;
        padding-right: 0; /* Remove padding */
    }
}

@media (max-width: 768px) {
    .footer-7-travel .footer-col {
        flex: 1 1 100%; /* One column per row */
        max-width: 100%;
        padding-right: 0;
    }

    .footer-7-travel .social-contact-col {
        align-items: center; /* Center align on very small screens */
        margin-top: 30px; /* Add more space when stacked */
    }

    .footer-7-travel .social-icons {
        justify-content: center; /* Center social icons when stacked */
    }

    .footer-7-travel .contact-us-btn {
        width: 100%; /* Make button full width */
        padding: 12px 0; /* Adjust padding for full width button */
    }
}

@media (max-width: 480px) {
    .footer-7-travel {
        padding: 40px 0 15px;
    }

    .footer-7-travel .footer-logo {
        font-size: 1.3em;
    }

    .footer-7-travel p {
        font-size: 0.85em;
    }

    .footer-7-travel .contact-us-btn {
        padding: 10px 20px;
        font-size: 0.9em;
    }

    .footer-7-travel .footer-bottom {
        margin-top: 30px;
        font-size: 0.8em;
    }

    .footer-7-travel .social-icons a {
        font-size: 1.1em;
        width: 35px;
        height: 35px;
    }
}

    </style>
</head>
<body>
 <footer class="footer-7-travel">
        <div class="container">
            <div class="footer-col logo-column">
                <div class="footer-logo"><img src="C:\xampp\htdocs\blogphp\php-blog-website-main\img\logo_wobg.png" alt="logo" style="width: 50px; height: 50px;"></div>
                <p>Your journey starts here. Discover breathtaking destinations, find amazing deals, and create unforgettable memories with us.</p>
            </div>
            <div class="footer-col list-column">
                <!-- Empty h4 for consistent spacing as in the image -->
                <h4></h4>
                <ul>
                    <li><a href="#">Destinations</a></li>
                    <li><a href="#">Packages</a></li>
                    <li><a href="#">Flights</a></li>
                    <li><a href="#">Hotels</a></li>
                    <li><a href="#">Cruises</a></li>
                </ul>
            </div>
            <div class="footer-col list-column">
                <!-- Empty h4 for consistent spacing as in the image -->
                <h4></h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-col list-column">
                <!-- Empty h4 for consistent spacing as in the image -->
                <h4></h4>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            <div class="footer-col social-contact-col">
                <div class="social-icons">
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Google Plus"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <button class="contact-us-btn">Contact Us</button>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 gantabya. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>