<style>

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E5E4E2;
        }   
    .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
  
        /* Session styles */
        .session-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 50px;
        }

        .session {
            width: 250px;
            height: 250px;
            background-color: #fff;
            margin: 20px;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease;
            border: 2px solid #005a87; /* Black border */
        }

        .session:hover {
            transform: translateY(-10px);
        }

        .session-img {
            width: 120px;
            height: 120px;
            margin-bottom: 20px;
        }

        .session-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .session-description {
            text-align: center;
            margin-bottom: 20px;
        }

        .session-button {
            padding: 10px 20px;
            background-color: #005a87;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .session-button:hover {
            background-color: red;
        }
    </style>

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
    <div class="logo">
        <img src="img/download.png" alt="Logo">
    </div>
    <ul class="menu">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li>
            <a href="#">
                <img src="img/HOMM.png" alt="Icon" style="vertical-align: middle; margin-right: 10px;">
                <b style="font-size: 24px;">UNIVEN STUDENT GYM</b>
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a href="booking.php"><img src="img/book.png" alt="About Us Icon"> BOOK SESSION</a></li>
        
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <li><a href="profile.php"><img src="img/icons8-username-24 (1).png" alt="Training Icon"> PROFILE</a></li>
        
        
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <li><a href="logout.php"><img src="img/icons8-logout-24.png" alt="Login Icon"> LOG OUT</a></li>
   
    </ul>
</div>


<!-- Session Divs -->
<div class="container">
    <div class="session-container">
        <div class="session">
            <img src="img/CADI.png" alt="Cardio" class="session-img">
            <div class="session-name">Cardio</div>
            <div class="session-description">Cardio workouts for improving cardiovascular health and endurance.</div>
            <button class="session-button" onclick="location.href='EXER/CADIO.php';">Book sesssion</button>
        
        </div>

        <div class="session">
            <img src="img/YOGA.png" alt="Yoga" class="session-img">
            <div class="session-name">Yoga</div>
            <div class="session-description">Yoga sessions for relaxation, flexibility, and mental clarity.</div>
            <button class="session-button" onclick="location.href='EXER/YOGA.php';">Book sesssion</button>
        </div>

        <div class="session">
            <img src="img/ARO.png" alt="Aerobics" class="session-img">
            <div class="session-name">Aerobics</div>
            <div class="session-description">High-intensity aerobics classes for improving fitness and burning calories.</div>
            <button class="session-button" onclick="location.href='EXER/AERO.php';">Book sesssion</button>
        </div>
    </div>

    <div class="session-container">
        <div class="session">
            <img src="img/BOX.png" alt="Volleyball" class="session-img">
            <div class="session-name">Boxing</div>
            <div class="session-description">Boxing classes are for improving cardiovascular health and endurance.</div>
           
            <button class="session-button" onclick="location.href='EXER/BOXING.php';">Book sesssion</button>
        </div>

        <div class="session">
            <img src="img/KARA.png" alt="Karate" class="session-img">
            <div class="session-name">Karate</div>
            <div class="session-description">Karate classes for self-defense, discipline, and physical fitness.</div>
            <button class="session-button" onclick="location.href='EXER/KARATE.php';">Book sesssion</button>
        </div>

        <div class="session">
            <img src="img/GUP.png" alt="Group Fitness" class="session-img">
            <div class="session-name">Group Fitness</div>
            <div class="session-description">Group fitness sessions for diverse workouts and motivation.</div>
            <button class="session-button" onclick="location.href='EXER/GROUP.php';">Book sesssion</button>
        </div>
    </div>

    <div class="session-container">
        <div class="session">
            <img src="img/VOL.png" alt="Cardio" class="session-img">
            <div class="session-name">Volleyball</div>
            <div class="session-description">Volleyball games for team play and recreational sports.</div>
            <button class="session-button" onclick="location.href='EXER/VOLLEY.php';">Book sesssion</button>
        
        </div>
        <div class="session">
            <img src="img/CADI.png" alt="Cardio" class="session-img">
            <div class="session-name">NEW activity</div>
            <div class="session-description">under construction</div>
            <button class="session-button" href="#">Book sesssion</button>
        
        </div>

        <div class="session">
            <img src="img/GUP.png" alt="Cardio" class="session-img">
            <div class="session-name">NEW activity</div>
            <div class="session-description">under construction</div>
            <button class="session-button" href='#';>Book sesssion</button>
        
        </div>
    </div>

        
</div>

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
       </style>