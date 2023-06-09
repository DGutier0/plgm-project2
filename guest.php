<!DOCTYPE html>

<html>
    <style>
        .blink {
            animation: 1.2s infinite blink;
            display: inline-block;
        }
        @keyframes blink {
            0%, 15% {
            opacity: 0;
        }
            16%, 100% {
            opacity: 1;
        }
        }
        header {
            background-image: url("images/stars.gif");
            color:black
        }
        body {
            background-image: url("images/stars.gif");
            color:aliceblue
        }
        nav {
            width:900px;
            margin:0 auto;
        }
        nav ul {
            display:inline-block;
            list-style-type:none;
        }
        nav ul li {
            width:350px;
            float:left;
            background-color:rgb(51, 203, 0);
            padding:5px;
            margin-right: 10px;
            text-align:center;
            border:1px solid black;
            border-radius:5px;
            box-shadow:5px 5px 5px Black;
        }
        nav ul li a {
            color:Black;
            text-decoration:none;
        }
    </style>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Planet of the Little Green Men</title>
        <meta name="description" content="This is an example of an artist page that I am making for class.">
        <meta name="keywords" content="rock, college band, loyola university new orleans, artist page, new orleans, psych rock, planet of the little green men, New Orleans.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <center><h1 style="color:rgb(255, 255, 255)">Planet of the Little Green Men</h1>
                <img src="images/lgm-mouth.jpeg" style="width: 250px;height: 250px;">
                </center>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="music.html">Music</a></li>
                    <li><a href="tour.html">Shows</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="epk.html">Press Kit</a></li>
                    <li><a href="guest.php">Guest Book</a></li>
                    <li><a href="ttm.html">The Time Machine</a></li>
     
                </ul>
            </nav>
        </header>
    <main>
        <center>
        <h1>Guest Book</h1>
        <h3><i>Feel free to sign your name and a message about your experience with this website, the band, your day, or whatever else you'd like us to hear!</i></h3>
        
        <form action="guest.php" method="POST" enctype="multipart/form-data">
        <div>
            <label>Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label>Date</label>
            <input type="date" name="date" id="date" min="2023-05-10">
        </div>
        <div>
            <label>Message</label>
            <input type="text" name="message" id="message" required>
        </div>
        <button type="reset">Reset</button>
        <button type="submit">Submit</button>
        </form>
        </center>
    </main>
    <hr>
    <footer>
        <center>
        <p style="color:rgb(255, 255, 255)">&copy; Planet of the Little Green Men 2023. All Rights Reserved.</p>
        </center>
                
    </footer>
    
    
    
    </body>
</html>