<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    require "vendor/autoload.php";
$robo = 'wallexfi@tech-center.com';

$mailSent = false;
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$developmentMode = true;
$mailer = new PHPMailer($developmentMode);

try {
    $mailer->SMTPDebug = 2;
    $mailer->isSMTP();

    if ($developmentMode) {
    $mailer->SMTPOptions = [
        'ssl'=> [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        ]
    ];
    }


    $mailer->Host = 'ssl://smtp.gmail.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'favournwevo@gmail.com';
    $mailer->Password = 'orplfwjdidwvyqdh';
    $mailer->SMTPSecure = 'tls';
    $mailer->Port = 465;

    $mailer->setFrom($email, $name);
    $mailer->addAddress('kingjoseph1621@gmail.com', 'city_boyy');

    $mailer->isHTML(true);
    $mailer->Subject = $subject;
    $mailer->Body = $message;

    ob_start(); $mailer->send(); ob_get_clean();
    $mailer->ClearAllRecipients();
    $mailSent = true;

} catch (Exception $e) {
    // echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
    
    $mailSent = false;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>@city_boyy | Joseph theGreat!</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
    <link rel="shortcut icon" href="assets/imgs/city_boy_logo.png" type="image/png">
	<link rel="stylesheet" href="assets/css/joecss.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a  href="#">
                <img width="200" src="assets/imgs/city_boy_logo.png" alt="@city_boyyy">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Testmonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="components.html" class="ml-4 nav-link btn btn-primary btn-sm rounded">Components</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header">
     
        <div class="overlay">
            <h1 class="subtitle">YOU PITCH, I WORK, DEAL?</h1>
            <div class="main-div"></div>
            <h1 id="title" class="title"></h1>  
        </div>  
        <?php if ($mailSent) { ?>
         <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Mail has been sent!
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
              </div>
        <?php } ?>
      
           
      <script type="text/javascript">

            const mainDiv = document.querySelector(".title")

            // wrap timeout in a promise
            function type(c, ms) {
                return new Promise(resolve => {
                    setTimeout(() => {
                        mainDiv.innerHTML += c;
                        resolve()
                    }, ms)
                })
            }

            // execute promises sequentially
            async function typeWriter(txt, ms) {
                const characters = txt.split("")
                 // for loop is key, forEach would not work
                 for (var i = 0; i < characters.length; i++) {
                    await type(characters[i], ms)
                }
            }

            // await each asynchronous function
            async function main() {
                const ms = 200;

                await typeWriter("Hello, ", ms)
                await typeWriter("There!", ms)
                mainDiv.innerHTML = ''; 
                await typeWriter("My name is Joseph ", ms)
                mainDiv.innerHTML = ''; 
                await typeWriter("I am a Tech Consultant", ms)
                
            }

        main()

    </script>
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->

    <!-- Service Section -->
    <section  id="service" class="section pt-0">
        <div class="container">
            <h6 class="section-title text-center">Services</h6>
            <h6 class="section-subtitle text-center mb-5 pb-3">Join me, let's bring your idea to life!</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">01</small>
                            <h5 class="card-title mt-3">Software Developments<h5>
                            <p class="mb-0">From application content designing to it's development, data management, ease-content, considering a user's experience
                            <b>Responsive Websites, Cross-platform Mobile apps, Desktop Applications, GUI</b> </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">02</small>
                            <h5 class="card-title mt-3"> Media Development<h5>
                            <p class="mb-0">Inputed Customer's Request to Delivered Modern media works
                                including <b>Modern Graphics Design, Image Processing/Editing, Videography/VFX, Motion Graphics, 2-3 Dimensional Artist, </b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">03</small>
                            <h5 class="card-title mt-3">Content Engineering<h5>
                            <p class="mb-0">Critically, processing technically the Collection, management, distribution of different set of digitally given information, in any requested or inputed format <b>Data Science and Visualization</b></p>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h6 class="section-title mb-0">About Me</h6>
                    <h6 class="section-subtitle mb-4">Techropreneur</h6>
                    <p >Good day!, My name is Joseph Nwaigbo, I'm a <b>17 years young</b> Male Nigerian <b>Tech Consultant</b> who hails from the East-Side, I have <b>3+ years progressive experience</b> with over <b>10,000</b> satisfied customers </p>
                    <img width="400" src="assets/imgs/IMG_01.jpg" alt="My picture">
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row">
                        <div class="col-6">
                            <img src="assets/imgs/about-1.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="assets/imgs/about-2.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-12 mt-4">
                            <p>I have worked for some notable tech institutes which include:</p>
                            <p><b>Beulah Computer Institute, A.J Tech, Bidex Graphics, IKT Technical Consortium</b><br>
                            </p>
                            <p>From Teaching the students to Brand Content management,2 - 3Dimensional Printing. Processing, Managing, Analyzing, Type Checking, Optimization, Allocation of the middle - end aspect of company's development, Diligently producing exceptionally clean, strong, sophisticated designs, through testing, implementation and clients updates. </p>
                               <a href="Joseph Nwaigbo.pdf"><button class="btn btn-primary rounded">View CV</button></a>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="section portfolio-section">
        <div class="container">
            <h6 class="section-title text-center">Portfolio</h6>
            <h6 class="section-subtitle mb-5 text-center">Stunning Projects just for You!</h6>
            <div class="filters">
                
                <a class="active" href="#" data-filter=".advertising">
                    Design
                </a>
                <a href="#" data-filter=".branding">
                    Branding
                </a>
                <a href="#" data-filter=".web">
                    Applications
                </a>
            </div>
            <div class="portfolio-container"> 
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/REGGIE DESIGN.png" class="img-fluid" alt="Some Graphics Image">                        
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Brand Design</h6>
                                <p class="subtitle">Brand Design for a makeover artist</p>
                            </div>
                        </div> 
                    </div>
                </div> 
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/IB MAKEOVER.png" class="img-fluid" alt="Some Graphics Image">                        
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Brand Design</h6>
                                <p class="subtitle">Banner Design for a makeover artist!</p>
                            </div>
                        </div> 
                    </div>
                </div>
                 <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/IB MAKEOVER LOGO.png" class="img-fluid" alt="Some Graphics Image">                        
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Brand Design</h6>
                                <p class="subtitle">Logo Design for a makeup artist!</p>
                            </div>
                        </div> 
                    </div>
                </div>  
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/presentationSLides5.png" class="img-fluid" alt="Some Graphics Image">                        
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Brand Design</h6>
                                <p class="subtitle">Instant merches for some company!</p>
                            </div>
                        </div> 
                    </div>
                </div> 
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/presentationSLides6.png" class="img-fluid" alt="Some Graphics Image">                        
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Brand Design</h6>
                                <p class="subtitle">Instant merches for some company!</p>
                            </div>
                        </div> 
                    </div>
                </div> 

                
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                     
                </div> 
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">   
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                    
                </div> 
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                      
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                      
                </div> 
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-5.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">          
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-5.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                   
                </div>
                <div class="col-md-6 col-lg-4 web">
                    <div class="portfolio-item">
                        <img src="assets/imgs/image33.png" class="img-fluid" alt="Some Graphics Image">                        
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/image33.png"></a>
                            <div class="text-holder">
                                <h6 class="title">Web Application</h6>
                                <p class="subtitle">IMS for some company</p>
                            </div>
                        </div> 
                    </div>
                </div>
                 <div class="col-md-6 col-lg-4 web">
                    <div class="portfolio-item">
                        <img src="assets/imgs/work_2.png" class="img-fluid" alt="Some Graphics Image">                        
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/image33.png"></a>
                            <div class="text-holder">
                                <h6 class="title">Game Application</h6>
                                <p class="subtitle">Game for some company</p>
                            </div>
                        </div> 
                    </div>
                </div>
                 <div class="col-md-6 col-lg-4 web">
                    <div class="portfolio-item">
                        <img src="assets/imgs/work5.png" class="img-fluid" alt="Some Graphics Image">                        
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/work5.png"></a>
                            <div class="text-holder">
                                <h6 class="title">Mobile Application</h6>
                                <p class="subtitle">Mobile Application for some company</p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 web">
                    <div class="portfolio-item">
                        <img src="assets/imgs/work6.png" class="img-fluid" alt="Some Graphics Image">                        
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/work6.png"></a>
                            <div class="text-holder">
                                <h6 class="title">Mobile Application</h6>
                                <p class="subtitle">Mobile Application for some company</p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>   
        </div>            
    </section>
    <!-- End of portfolio section -->


    <!-- Testmonial Section -->
    <section class="section" id="testmonial">
        <div class="container">
            <h6 class="section-title text-center mb-0">Testmonials</h6>
            <h6 class="section-subtitle mb-5 text-center">What My Cients Says</h6>
            <div class="row">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/IMG_9932.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Favour Nwaigbo</h6>
                                    <small class="text-muted mb-0">Makeover Artist</small>     
                                </div>
                            </div>
                            <p class="mb-0"><b>@city_boyy </b>is really great at what he does, from frontend beautification of my brand to it's management, i would definately recommend him to anyone! </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="https://pps.whatsapp.net/v/t61.24694-24/305829169_493918952172387_5574256896823164399_n.jpg?ccb=11-4&oh=01_AVwxvls7G9NLypWygaTmycvT9xKAZZgpqWBmZCkT3S760A&oe=63378C15" alt="No Image">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Fress Boss</h6>
                                    <small class="text-muted mb-0">Manager/Director</small>      
                                </div>
                            </div>
                            <p class="mb-0">Joseph really brings your imagination to life DIGITALLY, I was really amazed by the level of committment and dilligency he put in his daily activities, KUDOS to <b>@city_boyy</b> </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="https://pps.whatsapp.net/v/t61.24694-24/292474799_1030601340926806_4363566098697780297_n.jpg?ccb=11-4&oh=01_AVwPuylaNuJLVwwI2i6nacUi7TgrTN06UWXddX_XxVFD8Q&oe=6338146E" alt="No Image">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Mr. Tony</h6>
                                    <small class="text-muted mb-0">Administrator</small>        
                                </div>
                            </div>
                            <p class="mb-0">I honestly can't believe how far i have come, mostly because of <b>@city_boyy</b>i will fully recommend him to anyone out there!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/bootstrap-icons.svg"></script>
    <!-- Contact Section -->
    <section id="contact" class="section has-img-bg pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">Phone</h6>
                    <p class="mb-4">+ 233-5988-62167</p>

                    <h6 class="mb-0">Address</h6>
                    <p class="mb-4">12, Otumofuor's Store, Abogri, Koforidua, Ghana</p>

                    <h6 class="mb-0">Email</h6>
                    <p class="mb-0">city_boyy@techconsultant.com, </p>
                    <p>kingjoseph1621@gmail.com</p>
                    <p  style="word-spacing: 10px; cursor: pointer;">
                    <a target="_blank" href="https://www.facebook.com/joseph.nwaigbo.56"><i class="ti-facebook"></i></a>
                     <a target="_blank" href="https://github.com/kingJoseph-dev"><i class="ti-github"></i></a>
                     <a target="_blank" href="https://ng.linkedin.com/in/joseph-nwaigbo-a82457246"><i class="ti-linkedin"></i></a>

                 </p>
                </div>
                <div class="col-md-7">
                    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                        <h4 class="mb-4">Drop A Line</h4>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" required placeholder="Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="email" class="form-control text-white rounded-0 bg-transparent" name="email" required placeholder="Email">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="subject" required placeholder="Subject">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" required placeholder="Message"></textarea>

                            </div>
                            <div class="form-group col-12 mb-0">
                                <button type="submit" name="submit"  class="btn btn-primary rounded w-md mt-3">Send</button>
                            </div>                          
                        </div>                          
                    </form>
                </div>
            </div>
            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary">
                <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, @city_boyy Created By <a href="https://wa.me/233598447018?text=Hello%20My%20Name%20Is:%20I%20would%20Love%20us%20to%20work%20together%20on" target="_blank">Joseph Nwaigbo</a>  All rights reserved </p>     

            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>

</body>
</html>
