<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WENDY CHEW | PORTFOLIO</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="node_modules/baguettebox.js/dist/baguetteBox.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.css">
</head>
<body>
    <div class="loader-container">
        <div class="loader"></div>
    </div>
    <!-- header -->
    <?php include("include/header.php") ?>
    <section class="banner" id="home">
        <div class="container banner-text">
            <div class="banner-text-items">
                <h1>I am <span class="typed"></span></h1>
            </div>
        </div>
    </section>
    <main>
        <!-- About -->
        <?php include("include/about.php") ?>
        
        <!-- Experience -->
        <?php include("include/experience.php") ?>
    
        <section class="main1" id="language">
            <div class="container main2-grid">
                <div class="left">
                    <h2>Education</h2>
                    <hr>
                    <h4>American Degree Transfer Program | Sunway University Malaysia</h4>
                    <p class="text-muted">Mar 2018 - May 2019</p>
                    <ul>
                        <li>CGPA: 3.59</li>
                    </ul>
                    <h4>Bachelor of Science & Engineering |  Western Washington University</h4>
                    <p class="text-muted">Sep 2019 - current</p>
                    <ul>
                        <li>CGPA: 3.82</li>
                    </ul>
                </div>
                <div class="right">
                    <h2>Languages</h2>
                    <ul>
                        <li class="html">HTML5</li>
                        <li class="css">CSS3</li>
                        <li class="javascript">JAVASCRIPT</li>
                        <li class="php">PHP</li>
                        <li class="java">JAVA</li>
                        <li class="c">C LANGUAGE</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="skills">
            <div class="container">
                <h2 class="text-center text-white"> Skills </h2>
                <div class="skills-carousel owl-carousel owl-theme">
                    <div class="skill">
                        <p><i class="fas fa-users"></i></p>
                        <h3 class="text-white" >Leadership & Teamwork</h3>
                            <p class="text-light" >
                                Good leadership provides a clear vision for the team and a strategy for achieving the vision.
                            </p>
                    </div>
                    <div class="skill">
                        <p><i class="fas fa-book-reader"></i></i></p>
                        <h3 class="text-white" >Problem solving</h3>
                            <p class="text-light" >
                                Problem-solving skills help me determine the source of a problem and find an effective solution. 
                            </p>
                    </div>
                    <div class="skill">
                        <p><i class="fas fa-tasks"></i></p> 
                        <h3 class="text-white" >Self-management</h3>
                            <p class="text-light" >
                                Self-management skills allow me to improve my workplace performance and efficiently achieve professional goals.
                            </p>
                    </div>
                    <div class="skill">
                        <p><i class="fas fa-calendar-check"></i></p>
                        <h3 class="text-white" >Flexibility</h3>
                            <p class="text-light" >
                                Willing to learn complex new software that will increase efficiency & able to adapt to change, particularly regarding how and when work gets done. 
                            </p>
                    </div>
                    <div class="skill">
                        <p><i class="fas fa-sitemap"></i></p>
                        <h3 class="text-white" >Critical thinking</h3>
                            <p class="text-light" >
                                Critical thinking skill allows me to make logical and informed decisions to the best of my ability.
                            </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio -->
        <?php include("include/portfolio.php") ?>
    </main>
    <!-- contact -->
    <?php include("include/contact.php") ?>
    <!-- footer -->
    <?php include("include/footer.php") ?>

    <!-- javascript -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script src="node_modules/baguettebox.js/dist/baguetteBox.js"></script>
    <script src="node_modules/mdbootstrap/js/mdb.js"></script>
    <script src="js/main.js"></script>
    <script src="js/contact.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script> 
</body>
</html>