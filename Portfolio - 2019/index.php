<!DOCTYPE html>

<!-- FORM CODE -->
<?php
$message_sent = false;

    if(isset($_POST["email"]) && $_POST["email"] != ""){
        if(filter_var( $_POST["email"], FILTER_VALIDATE_EMAIL) ){
            //submit the form
            $userName = $_POST["name"];
            $userEmail = $_POST["email"];
            $messageSubject = $_POST["subject"];
            $message = $_POST["message"];

            $to = "bgstarrenburg@outlook.com";
            $body = "";

            $body .= "From: ".$userName."\r\n";
            $body .= "Email: ".$userEmail."\r\n";
            $body .= "Message: ".$message."\r\n";

            mail($to, $messageSubject, $body);

            $message_sent = true;
        }
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The portfolio of Ben George Starrenburg">
        <meta name="keywords" content="portfolio, c# developer, Ben Starrenburg, Starrenburg, Ben George Starrenburg">
        <meta name="author" content="Ben George Starrenburg">
        <title>Portfolio | Ben Starrenburg</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    
    <body>
        <nav id="nav-bar">
            <div class="container">
                <a href="#main-screen"><b>Ben Starrenburg</b></a>
                <a href="#about"><b>About</b></a>
                <a href="#projects"><b>Projects</b></a>
                <a href="#contact"><b>Contact</b></a>                
            </div>
        </nav>

        <section id="main-screen">
            <div class="container">
                <h1>Ben Starrenburg</h1>
                <h3>Front-End Developer & Software Engineer</h3>                
            </div>
        </section>

        <div class="bar"></div>

        <section id="about">
            <div class="container">
                <h1>About Me</h1>
                <h3>I am a freshman computer science student at Hogeschool Rotterdam.<br>
                I have experience using python, c#, HTML and CSS.<br>
                I would like an intership as a front-end developer or as a software engineer.
                </h3>
                <a href="./pdf/test.pdf" target="_blank"><h3>Look at my resume.</h3></a>
            </div>
        </section>

        <section id="projects">
            <div class="container">
                <h1>Projects</h1>
                <h3>Cinema Application</h3>
                <img src="./img/cinema.jpg" id="cinema-picture">
                <div id="cinemaApp-buttons">
                    <a href="https://github.com/TobiZelders/ConsoleAppGroep2" target="_blank"><h3>Github</h3></a>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <h1>Contact</h1>
                
                <!-- EMAIL FORM -->
                <?php
                if($message_sent):
                ?>

                    <h3>Thank you for your time, I will be in touch.</h3>

                <?php
                else:
                ?>
                <div class="container">
                    <form action="#contact" method="POST" class="form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" tabindex="1" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="your@mail.com" tabindex="2" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject!" tabindex="3" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message." tabindex="4" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn">SEND EMAL!</button>
                        </div>
                    </form>
                </div>
                <?php
                endif;
                ?>
            </div>
        </section>

        <!-- MAKE THIS A FOOTER --> 
        <div class="container">
            <footer>
                <a href="https://github.com/bgstarrenburg" target="_blank">
                    <img src="./img/github-logo.png" id="github-logo">
                </a>
            </footer>
        </div>
    </body>
</html>