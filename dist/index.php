<?php
include "phpmailer/PHPMailerAutoload.php"; // include the library file
include "phpmailer/class.phpmailer.php"; // include the class name
include "phpmailer/class.smtp.php";
if(isset($_POST["submit"])){
$name = validateInput($_POST["name"]);
$email = validateInput($_POST["email"]);
$message = validateInput($_POST["message"]);
$subject = "Email From Your Portfolio";
// $subject = "Email from Portfolio:  ".$name."-".$email.";
$allMsg =
"Name:	".$name."<br />
Email:	".$email."<br />
Message:	".$message."
";

    $mail = new PHPMailer;
    //Enable SMTP debugging. 
    $mail->SMTPDebug = 0;
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name                          
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password     
    $mail->Username = "nyue.07@gmail.com";
    $mail->Password = "Phathead582693";
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "ssl";
    //Set TCP port to connect to 
    $mail->Port = 465;
    $mail->setFrom($email, $name);
    $mail->addAddress ("nyue.07@gmail.com");   // Add a recipient
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = $subject;


    $mail->Body = $allMsg;
    if (!$mail->send()) {
       $error = "Sorry, Message was not sent. Please try again.";
    } else {
          $success = "Thank You! Your mail was sent successfully!";
      }

}  

function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return $data;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Open+Sans:300,400,600,700,800"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"
    />
    <link rel="stylesheet" href="css/main.css" />
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="js/jquery.aniview.js"></script>
    <title>Welcome To My Portfolio</title>
  </head>
  <body>
    <div id="preload">
      <img src="img/background.jpg" />
    </div>
    <header id="mobile-header">
      <div class="menu-btn">
        <div class="btn-line"></div>
        <div class="btn-line"></div>
        <div class="btn-line"></div>
      </div>
    </header>

    <section id="home">
      <h1 class="main-heading aniview delay" data-av-animation="bounceInLeft">
        Nathan
        <span class="text-secondary">Yue</span>
      </h1>
      <h2 class="sm-heading aniview delay" data-av-animation="bounceInRight">
        Front End Web Developer, Programmer, & Entrepreneur
      </h2>
      <div class="icons aniview delay" data-av-animation="bounceInRight">
        <a href="https://www.linkedin.com/in/nathan-yue-71619a162/">
          <i class="fab fa-linkedin fa-2x"></i>
        </a>
        <a href="https://github.com/natyue">
          <i class="fab fa-github fa-2x"></i>
        </a>
      </div>
    </section>

    <nav class="menu">
      <ul class="menu-nav">
        <li class="nav-item">
          <a href="#home" class="nav-link">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="#about" class="nav-link">
            About Me
          </a>
        </li>
        <li class="nav-item">
          <a href="#work" class="nav-link">
            My Work
          </a>
        </li>
        <li class="nav-item">
          <a href="#contact" class="nav-link">
            How To Reach Me
          </a>
        </li>
      </ul>
    </nav>

    <section id="about">
      <h1 class="lg-heading aniview" data-av-animation="slideInLeft">
        About
        <span class="text-secondary">Me</span>
      </h1>
      <h2 class="sm-heading aniview" data-av-animation="slideInLeft">
        Let me tell you a few things...
      </h2>
      <div class="about-info">
        <div class="bio aniview" data-av-animation="bounceInRight">
          <img src="img/profilepic.png" alt="Nathan Yue " class="bio-image" />
          <h3 class="text-secondary">Who am I?</h3>
          <p>
            I'm a Web Developer located in San Diego, CA, who is in love with
            coding and has a passion for dynamic user experiences.
          </p>
        </div>
        <div class="skill skill-1 aniview" data-av-animation="bounceInLeft">
          <ul>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>Bootstrap</li>
            <li>Sass</li>
            <li>Javascript</li>
            <li>jQuery</li>
            <li>React</li>
            <li>PHP</li>
            <li>Wordpress</li>
            <li>Apache</li>
            <li>MySQL</li>
            <li>Node</li>
            <li>Express</li>
            <li>MongoDB</li>
            <li>Git</li>
          </ul>
        </div>
      </div>
    </section>

    <section id="work">
      <h1 class="lg-heading aniview" data-av-animation="slideInRight">
        My
        <span class="text-secondary">Work</span>
      </h1>
      <h2 class="sm-heading aniview" data-av-animation="slideInRight">
        Check out some of my projects...
      </h2>
      <div class="projects">
        <div class="item  aniview first" data-av-animation="rotateInUpLeft">
          <a href="http://teachersforkorea.epizy.com"
            ><img src="img/projects/teachersforkorea.png" alt="Project"
          /></a>
          <a href="http://teachersforkorea.epizy.com" class="btn-light"
            ><i class="fas fa-eye"></i> Project</a
          >
          <a href="#" class="btn-dark"><i class="fab fa-github"></i> Github </a>
        </div>
        <div class="item aniview second" data-av-animation="rotateInUpRight">
          <a href="https://immense-beyond-81508.herokuapp.com/"
            ><img src="img/projects/yelpcamp.png" alt="Project"
          /></a>
          <a
            href="https://immense-beyond-81508.herokuapp.com/"
            class="btn-light"
            ><i class="fas fa-eye"></i> Project</a
          >
          <a href="#" class="btn-dark"><i class="fab fa-github"></i> Github </a>
        </div>
        <div class="item aniview third" data-av-animation="rotateInUpLeft">
          <a href="http://ascendtech.epizy.com"
            ><img src="img/projects/ascendtech.png" alt="Project"
          /></a>
          <a href="http://ascendtech.epizy.com" class="btn-light"
            ><i class="fas fa-eye"></i> Project</a
          >
          <a href="#" class="btn-dark"><i class="fab fa-github"></i> Github </a>
        </div>
        <div class="item aniview fourth" data-av-animation="rotateInUpRight">
          <a href="#!"><img src="img/projects/resized4.jpg" alt="Project"/></a>
          <a href="#" class="btn-light"><i class="fas fa-eye"></i> Project </a>
          <a href="#" class="btn-dark"><i class="fab fa-github"></i> Github </a>
        </div>
        <div class="item aniview fifth" data-av-animation="rotateInUpLeft">
          <a href="#!"><img src="img/projects/resized5.jpg" alt="Project"/></a>
          <a href="#" class="btn-light"><i class="fas fa-eye"></i> Project </a>
          <a href="#" class="btn-dark"><i class="fab fa-github"></i> Github </a>
        </div>
      </div>
    </section>

    <section id="contact">
      <h1 class="lg-heading aniview" data-av-animation="slideInLeft">
        Contact
        <span class="text-secondary">Me</span>
      </h1>
      <h2 class="sm-heading aniview" data-av-animation="slideInLeft">
        This is how you can reach me...
      </h2>

      <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
          <div>
            <input
              class="aniview"
              data-av-animation="slideInLeft"
              type="text"
              name="name"
              placeholder="Name"
              required
            />
          </div>
          <div>
            <input
              class="aniview"
              data-av-animation="slideInRight"
              type="email"
              name="email"
              placeholder="Email"
              required
            />
          </div>
          <div>
            <textarea
              class="aniview"
              data-av-animation="slideInLeft"
              name="message"
              placeholder="Your Message"
              required
            ></textarea>
          </div>
          <span class="success"><?php echo $success?></span>
          <span class="error"><?php echo $error?></span>
          <button
            class="aniview"
            data-av-animation="slideInRight"
            type="submit"
            name="button"
          >
            Submit
          </button>
        </form>
      </div>
      <div class="boxes aniview" data-av-animation="bounceInUp">
        <div>
          <span class="text-secondary">Email:</span>
          Cyue123@gmail.com
        </div>
        <div>
          <span class="text-secondary">Phone:</span>
          (858) 210-0499
        </div>
        <a href="img/Nathan Resume.pdf" download="Nathan Yue's Resume"
          ><div>
            <span class="text-secondary">Resume:</span>
            PDF File
          </div></a
        >
      </div>
      <div class="icons">
        <div class="aniview" data-av-animation="slideInLeft">
          <a href="https://www.linkedin.com/in/nathan-yue-71619a162/">
            <i class="fab fa-linkedin fa-2x"></i>
          </a>
        </div>
        <div class="aniview" data-av-animation="slideInRight">
          <a href="https://github.com/natyue">
            <i class="fab fa-github fa-2x"></i>
          </a>
        </div>
      </div>
    </section>

    <footer id="main-footer">
      <div class="homebutton aniview" data-av-animation="bounceInUp">
        <a href="#home">
          <i class="fas fa-arrow-circle-up fa-3x"></i>
        </a>
      </div>
      Copyright &copy; 2019 Nathan Yue
    </footer>
    <script src="js/main.js"></script>
  </body>
</html>
