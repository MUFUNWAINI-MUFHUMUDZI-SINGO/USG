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
   <li><a href="Train.php"><img src="img/member.png" alt="Training Icon"> MEMBERSHIP</a></li>
        
        
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <li><a href="Login.php"><img src="img/book.png" alt="Login Icon"> BOOK A SESSION</a></li>
   
    </ul>
</div>



<!-- Membership Form Section -->
<div class="content">
    <div class="form-container">
        <h1>Membership</h1>
        <form action="payment_processing.php" method="post">
            <label for="name">Full Name</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="membership_type">Membership Type</label><br>
            <select id="membership_type" name="membership_type" required>
                <option value="monthly">Monthly</option>
                <option value="annual">Annual</option>
            </select><br>
            <label for="payment_amount">Payment Amount</label><br>
            <input type="number" id="payment_amount" name="payment_amount" required><br>
            <label for="card_number">Card Number</label><br>
            <input type="text" id="card_number" name="card_number" required><br>
            <label for="expiry_date">Expiry Date</label><br>
            <input type="text" id="expiry_date" name="expiry_date" required><br>
            <label for="cvv">CVV</label><br>
            <input type="text" id="cvv" name="cvv" required><br><br>
            <input type="submit" value="Submit Payment">
        </form>
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


<style>  <style>

.form-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        select {
            width: calc(100% - 20px);
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        select {
            appearance: none;
            background: url('img/down-arrow.png') no-repeat right;
            background-size: 20px;
            padding-right: 40px;
        }

        input[type="submit"] {
            background-color: #002232;
            color: white;
            border: none;
            padding: 15px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #001a21;
        }

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            .form-container {
                width: 90%;
            }
        }


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
    </style>
    </style>