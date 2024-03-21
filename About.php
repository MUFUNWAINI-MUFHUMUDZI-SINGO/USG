<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>32400012</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="navbar blue">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="logo">
        <img src="img/download.png" alt="Logo">
    </div>
    <ul class="menu">  
        <li>
            <a href="INDEX.php">
                <img src="img/HOMM.png" alt="Icon" style="vertical-align: middle; margin-right: 10px;">
                <b style="font-size: 24px;">UNIVEN STUDENT GYM</b>
            </a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li>
            <a href="Login.php">
                <img src="img/key.png" alt="Icon" style="vertical-align: middle; margin-right: 10px;">
                <b style="font-size: 24px;">LOGIN</b>
            </a>
        </li>
    </ul>
</div>

<div class="navbar red">
    <ul class="menu"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
        <li><a href="About.php"><img src="img/us.png" alt="About Us Icon"> ABOUT US</a></li>
        
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <li><a href="Train.php"><img src="img/gym.png" alt="Training Icon"> TRAINING</a></li>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <li><a href="membership.php"><img src="img/member.png" alt="Training Icon"> MEMBERSHIP</a></li>
        
        
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <li><a href="Login.php"><img src="img/book.png" alt="Login Icon"> BOOK A SESSION</a></li>
   
    </ul>
</div>


<div class="content">
    <h1>Welcome to UNIVEN Sport and Recreation</h1>
    <p>We would like to take this opportunity to welcome you to the University of Venda Sport and Recreation webpage. The Sport and Recreation Unit is under the auspices of Units within the Student Affairs.</p>
    <p>Thank you for affording the University of Venda the opportunity to contribute to your personal well-being and academic success as well as social and career development. Our Unit offers a range of Sport, Recreation, Arts and Culture programmes, events and activities in support of your academic success. These opportunities enhance your student life at the university, giving a sense of belonging through building networks for interaction, formulation of meaningful friendship and relationships with peers outside of the academic environment. These opportunities build and profiles the image of the University of Venda through the support of both competitive Sport, Arts, Culture and Campus Recreational Activities. By achieving these meaningful social outcomes, you will be better prepared for the university student life challenges and peer pressure.</p>
    <h2>Vision</h2>
    <p>Univen Sport and Recreation offers diverse programmes for informing meaningful social outcomes contributing to the holistic academic success, personal development and well-being of both students and staff</p>
    <h2>Mission</h2>
    <p>We offer administrative support for competitive sport, arts, culture, and recreation programmes, events and activities to enhance student well-being and success</p>

    <h2>Business hours</h2>
    <p>MONDAY - FRIDAY : 05.00-19.00<br/>
       SATURDAY-SUNDAY : 05.00-15.00<br/>
       HOLIDAYS        : CLOSED
    </p>


</div>


<div class="staff-section">
    <div class="staff-member">
        <img src="img/nthambe.jpg" alt="Ms. M.M.W Louw">
        <div class="staff-info">
            <h2>Ms. M.M.W Louw</h2>
            <p>Designation: Sport Officer: Competitive Sports</p>
            <p>Email address: natascha.louw@univen.ac.za</p>
            <p>Tel: 015 962 9161</p>
            <p>Office No: Sport Hall Building 1st floor; Office No: 13</p>
            
        </div>
    </div>

    <!-- Repeat the same structure for other staff members -->
    <div class="staff-member">
        <img src="img/staff.jpg" alt="Ms. M.M.W Louw">
        <div class="staff-info">
            <h2>Mr. J.A.M Mogashoa</h2>
            <p>Designation: Leisure & Recreation</p>
            <p>Email address: ambros.mogashoa@univen.ac.za</p>
            <p>Tel: 015 962 9161</p>
            <p>Sport Hall Building 1st floor; Office No: 11</p>
              </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="flex col-md-4">
            <div class="social-media">
                <h3>Let’s Connect</h3>
                <ul>
                    <li>Facebook</li>
                    <li>LinkedIn</li>
                    <li>Twitter</li>
                </ul>
            </div>
        </div>
        <div class="flex col-md-4">
            <div class="quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li>About UNIVEN</li>
                    <li>Student Affairs</li>
                    <li>Library</li>
                    <li>Research, Innovation and Postgraduate Studies</li>
                </ul>
            </div>
        </div>
        <div class="flex col-md-4">
            <div class="contact-info">
                <h3>Contact</h3>
                <p>Switchboard: +27 15 962 8000</p>
                <p>Emergency Numbers: 015 962 8603 / 8193 / 8120</p>
                <p>Ambulance: +27 15 962 5461 / 015 962 9152 / 079 901 9305 (WhatsApp: 081 463 0343)</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

<style>

       

.menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }

        .menu li {
            margin-right: 20px;
        }

        .menu li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .menu li a:hover {
            color: #FFD700;
        }

        .navbar red li a:hover{
            color:#FFD700;
        }

        .content {
            padding: 40px;
            text-align: center;
            color: #002232;
        }

        .footer {
            background-color: #002232;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .footer ul {
            list-style-type: none;
            padding: 0;
        }

        .footer ul li {
            display: inline;
            margin-right: 10px;
        }

        .footer ul li:before {
            content: "|";
            margin-right: 10px;
        }

        .footer ul li:first-child:before {
            content: "";
            margin-right: 0;
        }
    body {
    margin: 0;
    padding: 0;
}

p {
    font-size: 18px; /* Adjust the font size as needed */
}



.picture-section {
    display: flex;
    justify-content: space-between; /* Distribute space between images */
}

.picture-section img {
    flex: 1; /* Distribute available space equally among images */
    max-width: 100%; /* Ensure images don't exceed container width */
    height: 10cm; /* Set height of images */
}




.content {
    text-align: center; /* Center align the content */
    padding: 20px; /* Add padding for spacing */
}

.content h1 {
    color:  #005a87; /* Blue color for h1 */
    font-size: 36px; /* Adjust font size */
    margin-bottom: 20px; /* Add spacing below h1 */
}

.content h3 {
    font-size: 18px; /* Adjust font size */
    line-height: 1.5; /* Adjust line height for better readability */
}


.staff-section {
            padding: 20px;
            background-color: #f2f2f2;
        }

        .staff-member {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }

        .staff-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .staff-info {
            flex-grow: 1;
        }

        .staff-info h2 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .staff-info p {
            margin: 0;
        }




</style>
