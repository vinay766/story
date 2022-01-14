<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepcoding Certificate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class = "main">
<nav>
    <a href="#" class = "logo">
    <img src="images/log.png" alt="">
    </a>

    <ul class = "menu">
        <li><a href="#" class = "active">HOME</a></li>
        <li><a href="#">Feature</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>

<div class = "main-heading">
<h1>Welcome to Pepcoding</h1>
<p>Lorem ipsum dolor sit amet consectetur.</p>
<a class = "main-btn" href="#">Contact</a>
</div>
    </section>

    <section class = "features">
        <div class = "feature-container">
            <div class = "feature-box">
                 <div class = "f-img">
                     <img src="images/info-icon1.png" alt="">
                 </div>
                 <div class = "f-text">
                      <h4>Web Development</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                      <a href="#" class = "main-btn">Check</a>
                 </div>
            </div>
            <div class = "feature-box">
                 <div class = "f-img">
                     <img src="images/info-icon2.png" alt="">
                 </div>
                 <div class = "f-text">
                      <h4>Data Structures & Algorithms</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                      <a href="#" class = "main-btn">Check</a>
                 </div>
            </div>
            <div class = "feature-box">
                 <div class = "f-img">
                     <img src="images/info-icon3.png" alt="">
                 </div>
                 <div class = "f-text">
                      <h4>Data Structures & Algorithms with DataScience</h4>
                      <p>Lorem ipsum, dolor sit amet.</p>
                      <a href="#" class = "main-btn">Check</a>
                 </div>
            </div>
        </div>

    </section>

    <section class = "about">
        <div class = "about-img">
            <img src="images/about.png" alt="">
        </div>
        <div class = "about-text">
             <h2>Coding from Pepcoding</h2>
             <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, amet optio odit eius alias corporis illum laborum repellendus repellat nihil.</p>
             <button class = "main-btn">Know More</button>
        </div>

    </section>

    <section class = "contact">
         <div class = "contact-heading">
             <h1>Contact Us</h1>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
         </div>

         <form action = "user.php" method = "post">
                <input type="text" name = "user" placeholder = "Your Full Name"/>
                <input type="email" name = "email" placeholder = "Your E-Mail"/>
                <textarea name="message" placeholder = "Type Your Message Here.........."></textarea>
                <button class = "main-btn contact-btn" type = "submit">Continue</button>
         </form>
    </section>

<footer id = "footer">
    <h4>Made By Vinay Kasana</h4>
</footer>
</body>
</html>