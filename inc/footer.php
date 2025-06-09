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
        :root {
            --primary-color: #6D9773;          /* Muted Green */
            --dark-accent: #0C3B2E;            /* Dark Forest Green */
            --button-color: #BB8A52;           /* Earthy Brown */
            --highlight-color: #FFBA00;        /* Vibrant Yellow */
            --text-color: #333;
            --background-light: #f8f8f8;
            --container-bg: #fff;
            --border-color: #e0e0e0;
        }
        body {
            margin: 0;
            font-family: Arial, sans-serif; /* Using a common sans-serif font */
            background-color: var(--background-light); /* Using palette variable */
            display: flex;
            flex-direction: column; /* Stacks content and footer vertically */
            min-height: 100vh; /* Ensures body takes at least full viewport height */
            box-sizing: border-box; /* Include padding and border in element's total width and height */
        }
        .footer-7-travel {
            background-color: var(--dark-accent); /* Dark Forest Green background */
            color: #fff; /* White text for general footer content */
            padding: 60px 0 20px;
            font-size: 0.9em;
        }

        /* Inner container to control content width and centering */
        .footer-7-travel .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 0 20px;
        }

        /* Styles for individual footer columns */
        .footer-7-travel .footer-col {
            flex: 1;
            min-width: 200px;
            margin-bottom: 30px;
            padding-right: 20px;
            box-sizing: border-box;
        }

        /* Specific flex basis for the logo/about column to match image width */
        .footer-7-travel .logo-column {
            flex: 1.5;
            max-width: 300px;
        }

        /* For list columns, ensure they share space correctly */
        .footer-7-travel .list-column {
            flex: 1;
            max-width: 200px;
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
            color: #fff;
        }
        /* Style for the image inside the logo div */
        .footer-7-travel .footer-logo img {
            max-width: 100%; /* Ensure image is responsive */
            height: auto;
            vertical-align: middle; /* Align image with text if any */
        }


        /* Paragraph text styles within footer columns */
        .footer-7-travel p {
            line-height: 1.8;
            color: #bbb; /* Lighter grey for body text, good contrast on dark green */
            font-size: 0.9em;
        }

        /* Headings (empty in HTML for spacing, but styles are defined if needed) */
        .footer-7-travel h4 {
            font-size: 1.1em;
            margin-bottom: 20px;
            color: #fff;
            font-weight: normal;
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
            color: #bbb; /* Link color, good contrast on dark green */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-7-travel ul li a:hover {
            color: var(--highlight-color); /* Vibrant Yellow on hover */
        }

        /* Social media and contact button column */
        .footer-7-travel .social-contact-col {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: flex-start;
        }

        /* Social icons container */
        .footer-7-travel .social-icons {
            margin-bottom: 20px;
            display: flex;
        }

        /* Individual social icon links */
        .footer-7-travel .social-icons a {
            color: #fff; /* White icon color */
            font-size: 1.2em;
            margin-left: 15px;
            transition: color 0.3s ease;
        }

        .footer-7-travel .social-icons a:hover {
            color: var(--highlight-color); /* Vibrant Yellow on hover */
        }

        /* Contact Us button */
        .footer-7-travel .contact-us-btn {
            background-color: var(--button-color); /* Earthy Brown for the button */
            color: var(--dark-accent); /* Dark Forest Green text for contrast on button */
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s ease;
            flex-shrink: 0;
        }

        .footer-7-travel .contact-us-btn:hover {
            background-color: var(--primary-color); /* Muted Green on hover */
        }

        /* Footer bottom section (copyright) */
        .footer-7-travel .footer-bottom {
            text-align: center;
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid var(--primary-color); /* Muted Green border for separation */
            color: #bbb; /* Lighter grey for copyright text */
        }

        /*
        * Responsive Design (Media Queries)
        * Adjusts layout for different screen sizes
        */
        @media (max-width: 992px) {
            .footer-7-travel .container {
                justify-content: flex-start;
            }

            .footer-7-travel .footer-col {
                flex: 1 1 45%;
                max-width: 45%;
                padding-right: 20px;
            }

            .footer-7-travel .footer-col:nth-child(2n) {
                padding-right: 0;
            }
            .footer-7-travel .footer-col:nth-child(2n-1) {
                padding-right: 20px;
            }

            .footer-7-travel .social-contact-col {
                flex: 1 1 100%;
                max-width: 100%;
                align-items: flex-start;
                margin-top: 20px;
                order: 5;
            }

            .footer-7-travel .social-icons {
                margin-bottom: 15px;
                margin-left: 0;
            }

            .footer-7-travel .social-icons a {
                margin-right: 15px;
                margin-left: 0;
            }

            .footer-7-travel .logo-column {
                flex: 1 1 100%;
                max-width: 100%;
                padding-right: 0;
            }
        }

        @media (max-width: 768px) {
            .footer-7-travel .footer-col {
                flex: 1 1 100%;
                max-width: 100%;
                padding-right: 0;
            }

            .footer-7-travel .social-contact-col {
                align-items: center;
                margin-top: 30px;
            }

            .footer-7-travel .social-icons {
                justify-content: center;
            }

            .footer-7-travel .contact-us-btn {
                width: 100%;
                padding: 12px 0;
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
                <div class="footer-logo">
                    <img src="img\whitelogo_wt.png" alt="logo" style="width: 50px; height: 50px;">
                </div>
                <p>Your journey starts here. Discover breathtaking destinations, find amazing deals, and create unforgettable memories with us.</p>
            </div>
            <div class="footer-col list-column">
                <h4></h4> <ul>
                    <li><a href="#">Destinations</a></li>
                    <li><a href="#">Packages</a></li>
                    <li><a href="#">Flights</a></li>
                    <li><a href="#">Hotels</a></li>
                    <li><a href="#">Cruises</a></li>
                </ul>
            </div>
            <div class="footer-col list-column">
                <h4></h4> <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="/blog.php">Blog</a></li>
                </ul>
            </div>
            <div class="footer-col list-column">
                <h4></h4> <ul>
                    <li><a href="/contact.php">FAQs</a></li>
                </ul>
            </div>
            <div class="footer-col social-contact-col">
                <div class="social-icons">
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Google Plus"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <button class="contact-us-btn" action="contact.php">Contact Us</button>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 gantabya. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>