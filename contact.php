<?php
session_start();
require_once 'C:\xampp\htdocs\blogphp\php-blog-website-main\db_conn.php';
$logged = false;
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
	 $logged = true;
	 $user_id = $_SESSION['user_id'];
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <style>
        *{
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}
:root{
  --libeige-color:#f2e4c0;
  --blue-color:#3f5fb3;
  --brown-color:#a1695d;
  --musta-color:#ceb357;
  --dabei-color:#cbb68f;
}
body{
  font-family: "Poppins", sans-serif;
  --color1: #FFF ;
  --color2: #181818 ;
}

  .logo {  
    font-family: "Tinos", serif;
    font-weight: 1000;
    font-style: normal;
    font-size: 2rem;
    text-transform: uppercase;
    letter-spacing: 0.4rem;
    padding: 0 1.2rem;
    color: rgb(254, 252, 252);
  }
  .logo h1{
    text-decoration: none;
  }
   nav{
    position: fixed;
    top: 0;
    left: 0;
    background-color:#25274D; 
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    padding: 12px 5px;
    z-index: 10;
    color: white;
      
  }
  nav ul li{
      list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: sticky;
    overflow: hidden;
  }
  .nbutton{
    display: inline-block;
    text-decoration: none;
    font-family: "Gafata", sans-serif;
    font-weight: 500;
    font-style: normal;
    font-size: 1.1rem;
    color: white;
    text-align: center;
    transition: 0.15s ease-in-out;
    position: relative;
    text-transform: uppercase;
    padding-bottom: 8px;
  }
  .nbutton::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 3px;
    color: #0082ff;
    background-color: #0082ff;
    transition: 0.15s ease-in-out;
  }
   li a:hover:after {width: 100%;}
  
  .button{
  display: inline-block;
  text-decoration: none;
  font-family: "Gafata", sans-serif;
  font-weight: 500;
  font-style: normal;
  font-size: 1.1rem;
  color: white;
  text-align: center;
  transition: 0.15s ease-in-out;
  position: relative;
  text-transform: uppercase;
  padding-bottom: 5px;
  border: 3px solid #0082ff;
  padding: 8px;
  border-radius: 20%;
  transition: 0.1s;
  }
  .button:hover{
  content: " ";
  background-color: #0082ff;
  color: #fff;
  }
  #contact {
    margin: 100px auto;
    width: 90%;
  
  }
  
  .contact_us {
    margin-top: 3rem;
    display: flex;
    font-family: 'Libre Franklin',sans-serif;
  }
  
  form {
    width: 50%;
  }
  
  .cbox {
    width: 45%;
    margin-left: 70px;
    padding: 10px 30px;
  }
  
  .cbox-message {
    font-size: 1.2em;
    margin: 0;
  }
  
  .cbox-line {
    width: 30px;
    height: 3px;
    background-color:#ff7d00;
    margin-bottom: 3em;
    margin-top: 1em;
  }
  
  .c_boxx a p {
    color: white;
    font-size: 1em;
    font-weight: 100;
    padding: 1rem;
    padding: 0px 40px;
  }
  
  .c_boxx a {
    padding: 1em;
    margin-bottom: 2em;
    padding-left: 2em;
    border: 0.1em solid #0082ff;
    background-color: #0082ff;
    color: white;
    display: flex;
    border-radius: 2em;
    align-items: center;
    border:#0082ff 0.1em solid;
    font-size: 1em;
  }
  
  .c_boxx a:hover {
    background-color: white;
    color: #0082ff;
    transition: all 0.1s ease;
  }
  
  .c_boxx i {
    font-size: 38px;
    margin-right: 10px;
    /* margin-left: 0.5em; */
  }
  
  input[type="text"],
  select,
  textarea {
    width: 95%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  
  label {
    padding: 0px 0px 7px 6px;
    display: inline-block;
  }
  
  input[type="submit"] {
    background-color:#0082ff;
    color: whitesmoke;
    padding: 12px 50px;
    border: 2px solid #0082ff;
    border-radius: 100vmax;
    cursor: pointer;
    font-family: var(--ff-montserrat);
    font-size: var(--fs-links-btns);
  }
  
  input[type="submit"]:hover {
    background-color: whitesmoke;
    color: #3f5fb3;
  }
  
  .cform {
border: 3px solid  #ff7d00 ;
border-radius: 2px;
    padding: 25px;
    border-radius: 0.5rem;
    margin-left: 40px;
    background-color: white;
    margin-bottom: 40px;
  }
  
  .ccol {
    float: left;
    width: 25%;
    margin-top: 6px;
  }
  
  .crow-in {
    width: 100%;
    display: flex;
    justify-content: space-between;
  }
  
  .crow-message {
    margin: 1rem;
  }
  
  .crow-message div {
    width: 30px;
    display: block;
    height: 1px;
    border-bottom: 3px solid#ff7d00;
  }
  
  .ccol-left {
    margin: 1em;
  }
  
  .ccol {
    float: left;
    width: 100%;
    margin-top: 6px;
  }
  
  #name {
    width: 90%;
    margin: 1em;
  }
  
  #email {
    width: 90%;
    margin: 1em;
  }
  
  .crow:after,
  .crow-s::after {
    content: "";
    display: table;
    clear: both;
  }
  
  .crow-s {
    margin: 1em;
    color: #0082ff;
  }
  .footer{
    background-color: #25274D;
      padding: 70px 0;
  }
  ul{
    list-style: none;
  }
  .footer-col{
     width: 25%;
     padding: 0 10px;
  }
  .footer-col h4{
    font-family: "Gafata", sans-serif;
    font-weight: 400;
    font-style: italic;
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 20px;
    font-weight: 500;
    position: relative;
  }
  .footer-col h4::before{
    content: '';
    position: absolute;
    left:0;
    bottom: -10px;
    background-color: orangered;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
  }
  
  .footer-col ul li:not(:last-child){
    margin-bottom: 10px;
  }
  .footer-col ul li a{
    font-size: 16px;
    font-family: "Hind Guntur", sans-serif;
          font-weight: 400;
     font-style: normal;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    margin: 0;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
  }
  .footer-col ul li a:hover{
    color: #ffffff;
    padding-left: 8px;
  }
  .footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255,255,255,0.2);
    margin:0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
  }
  .footer-col .social-links a:hover{
    color: #24262b;
    background-color: #ffffff;
  } 
.color{
  font-size: 30px;
  font-family:  'Libre Franklin';
}
    </style>
    <script src="https://kit.fontawesome.com/5b72862894.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
    <?php
     include 'inc/Navbar.php';
     ?>
   
    </header>
    <section id="contact">
        <div class="contact_us">
            <form class="cform" action="" method="post">
                <div class="crow-message">
                    <h1 class="color">Send us a message</h1>
                    <div></div>
                </div>
                <div class="crow-in">
                    <input type="text" id="name" name="name" placeholder="Your name" />
                    <input type="text" id="email" name="email" placeholder="Your Email id" />
                </div>
                <div class="crow">
                    <div class="ccol-left">
                        <select name="country" id="country">
                            <option value="Province-1">Province-1</option>
                            <option value="Province-2">Province-2</option>
                            <option value="Province-3">Province-3</option>
                            <option value="Province-4">Province-4</option>
                            <option value="Province-5">Province-5</option>
                            <option value="Province-6">Province-6</option>
                            <option value="Province-7">Province-7</option>
                        </select>
                    </div>
                </div>
                <div class="crow">
                    <div class="ccol-left">
                        <textarea type="text" id="remarks" name="remarks" placeholder="Your Remarks....."
                            style="height: 150px"></textarea>
                    </div>
                </div>
                <input class="crow-s" type="submit" value="Submit" />
            </form>
            <div class="cbox">
                <div>
                    <p class="cbox-message">
                        Prefer some other way ?<br />Reach us by using the
                        details given below
                    </p>
                    <div class="cbox-line"></div>
                </div>
                <div class="c_boxx">
                    <a href="mailto:gantabya@gmail.com"><i class="fa fa-envelope"></i>
                        Mail: gantabya@adventure.com
                    </a>
                </div>
                <div class="c_boxx">
                    <a href="tel:+123456"><i class="fa fa-phone"></i>
                        Phone: +1234567
                    </a>
                </div>
                <div class="c_boxx">
                    <a href="#"><i class="fa fa-map-marker"></i>
                        Location:bharatpur-10 Chitwan, Nepal
                    </a>
                </div>
            </div>
        </div>
    </section>
    </div>
    <footer>
  <?php
    include'C:\xampp\htdocs\blogphp\php-blog-website-main\inc\footer.php';
    ?>
    </footer>

</body>
</html>
