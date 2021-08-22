<!DOCTYPE html>
<html lang="en">

<?php
$info = '';
$js = '';

if (isset($_POST["submit"])) {
    // if (empty($_POST["email"]) || (empty($_POST["message"]) && empty($_POST["subject"]))) {
    //     $info = "Please Fill the necessary field to continue";
    // } else {
    session_start();
    $_SESSION["email"] = $_POST["email"];
    $email = $_SESSION["email"];
    $js = "<script type='text/javascript'>
    $(document).ready(function() {
        // Handler for .ready() called.
        $('html, body').animate({
            scrollTop: $('#scroll').offset().top
        }, 'slow');
    });
    </script>";
    $info =
        '<div class="alert alert-warning alert-dismissible fade show bg-primary" style="color:white" role="alert">
                 Hey ' . $email . ', Your Message was Sent Sucessfully.
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    // }
}
?>


<head>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>My Resume - HNGix8</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Yusuf Faruk A</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                    src="assets/img/profile.jpg" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Certifications">Certifications</a>
                </li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Contact-Me">Contact-Me</a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">

        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    Yusuf
                    <span class="text-primary">Faruk</span>
                </h1>
                <div class="subheading mb-5">
                    ICAMA ZONE, No. 17 Ogidiri Area, Offa, Kwara State.
                    <br>
                    <a href="mailto:faboy46@email.com" class="text-decoration-none">faboy@email.com</a>
                </div>
                <p class="lead mb-5">I am an experienced Laravel PHP developer/ Engineer Located in Offa, Nigeria. I am
                    an
                    ambitious youth that
                    is
                    passionate about
                    using my skill
                    to add
                    value
                    to
                    the society and the nation at large.</p>

            </div>
        </section>
        <hr class="m-0" />
        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Experience</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Laravel PHP Developer</h3>
                        <div class="subheading mb-3">Freelance</div>
                        <p>Expanded my technical knowledge, built up my understanding of data structures,
                            algorithms,
                            API’s and other fundamentals of computer programming while taking on freelance
                            projects
                            for clients</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Jan 2019 - Present</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Head of Electrical/Electronics unit</h3>
                        <div class="subheading mb-3">HIFA Skill Acquisition Center</div>
                        <p>Supervised the design and construction of multiple electrical/electronics projects
                            done
                            by
                            the students of the department.</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Nov. 2018 - Nov. 2019</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Industrial Trainee</h3>
                        <div class="subheading mb-3">Multi-Power Engineering Limited</div>
                        <p>Trained in Power and Control Engineering (Medium and Low)</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">April 2017 - Sept. 2017</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">University of Ilorin</h3>
                        <div class="subheading mb-3">Bachelor of Engineering</div>
                        <div>Electrical/Electronics Engineering</div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">2013 - 2018</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Oyun Baptist High School</h3>

                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">2006 - 2012</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-4">Skills</h2>

                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Ability to work alone or as a part of a team
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Excellent oral and written communication skill
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Ability to learn and assimilate quickly
                    </li>
                </ul>
                <div class="subheading mb-2">Technical Skills</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Intermediate experience with HTML, CSS and Laravel PHP
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Beginner experience with Python Programming Language
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Intermediate experience in Huawei HCIA-Routing & Switchingly
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Proficiency in the use of Microsoft Office suites (Excel, Word, PowerPoint)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Electrical Installation and Troubleshooting
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Hardware Troubleshooting and Repair (Gadgets)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Windows OS installation and Troubleshooting
                    </li>


                </ul>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Certifications-->
        <section class="resume-section" id="Certifications">
            <div class="resume-section-content">
                <h2 class="mb-5">Certifications</h2>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        National Youth Service Corps (NYSC)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        The Nigerian Society of Engineers (Graduate Membership)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Huawei HCIA-Routing & Switching (H12-211)
                    </li>

                </ul>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Contact-Me-->
        <section class="resume-section" id="Contact-Me" style="padding-bottom: 10px;">
            <div class="resume-section-content">
                <h2 class="mb-5">Contact-Me</h2>
                <form action="index.php" method="post" class="row gx-3 gy-2 align-items-center p-3"
                    style="padding-top:none;" id="scroll">required

                    <input type="text" name="name" class="form-control my-2 shadow-none" id="" placeholder="Name">
                    <input type="email" name="email" class="form-control my-2 shadow-none" id="" placeholder="Email"
                        required>
                    <input type="text" name="subject" class="form-control my-2 shadow-none" id="" placeholder="Subject"
                        required>
                    <input type="text" name="message" class="form-control my-2 shadow-none" id="" placeholder="Message"
                        required>
                    <button type="submit" name='submit' class="btn btn-primary shadow-none text-white">Submit</button>

                </form>
                <div class="" style="color:white;">
                    <?php echo $js ?>
                    <h3><?php echo $info ?></h3>
                </div>
            </div>
        </section>
        <div class="text-center" style="padding-bottom: 30px;">Sponsored by <a class="text-center text-decoration-none"
                href="https://zuri.team">Zuri team</a>
            <br>
            <img class="text-center" src="assets/img/favicon.png" alt="" style="width: 30px;">
            <img class="text-center" src="assets/img/favicon2.png" alt="" style="width: 50px;">
            <img class="text-center" src="assets/img/favicon3.png" alt="" style="width: 50px;">
        </div>

    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
