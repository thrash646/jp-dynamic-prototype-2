<?php include("incl/header.php"); ?>

    <div class="bg-splash">
        <div class="box">
            <img src="img/mockup-imac.png" alt="">
        </div>
    </div>

    <a name="about"></a>
    <div class="bg-portrait animation-element fadeInRight container">
        <div class="box row">
            <div class="col-xs-12 animation-element fadeIn" id="click-resume">
                <h2>JP Nuyens</h2>
                <img src="img/portfolio-image-new2.png" alt="">
                <p>Download my CV:</p>
                <a href="img/JP-Nuyens-CV.pdf" download>
                    <button type="button" class="btn btn-danger btn-lg">
                        Click Here
                    </button>
                </a>
            </div>
        </div>



    </div>

    <div class="bg-services">
        <div class="container animation-element fadeIn">
            <h2 class="section-header">Services Offered</h2>

            <div class="row">
                <div class="col-xs-12 col-md-4 box animation-element fadeInUp" id="web-service">
                    <div class="service-icon" id="web-icon">
                        <?php echo file_get_contents("img/computer2-edit4.svg"); ?>
                    </div>
                    <h3>Websites</h3>
                    <ul>
                        <li>I design and implement responsive and <span>DYNAMIC</span> websites.</li>
                        <li>Whether it's a business, or personal blog website, I can handle it all.</li>
                        <li>I am proficient with most of the popular CMS:
                            <ul>
                                <li><span>WordPress</span></li>
                                <li><span>Drupal</span></li>
                                <li><span>Joomla</span></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <div class="col-xs-12 col-md-4 box animation-element fadeInUp" id="graphic-service">
                    <div class="service-icon" id="graphic-icon">
                        <?php echo file_get_contents("img/tech-hud-icon-4.svg"); ?>
                    </div>
                    <h3>Graphic Design</h3>
                    <ul>
                        <li>Another way to level up your brand is through proper graphic design elements.</li>
                        <li>I am detail oriented and will make sure every element is to your satisfaction.</li>
                        <li>I have designed:
                            <ul>
                                <li><span>Logos</span></li>
                                <li><span>Banners</span></li>
                                <li><span>Business cards</span></li>
                                <li><span>All sorts of other graphical elements</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-4 box animation-element fadeInUp" id="video-service">
                    <div class="service-icon" id="video-icon">
                        <?php echo file_get_contents("img/youtube-edit-blue2.svg"); ?>
                    </div>
                    <h3>Videography</h3>
                    <ul>
                        <li>Types of videos:</li>
                        <ul>
                            <li><span>Commercials</span></li>
                            <li><span>"How-to" videos</span></li>
                            <li><span>Animation</span></li>
                            <li><span>Short Film</span></li>
                        </ul>
                        <li>What I provide:</li>
                        <ul>
                            <li><span>Filming</span></li>
                            <li><span>Editing</span></li>
                            <li><span>Special Effects</span></li>
                        </ul>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 animation-element fadeIn" id="click-portfolio">
                    <p>Check out my <span>Portfolio</span> here:</p>
                    <a href="portfolio.php">
                        <button type="button" class="btn btn-danger btn-lg">
                            Portfolio
                        </button>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 animation-element fadeIn" id="click-demo">
                    <p>Check out my <span>Demo Reel</span> here:</p>
                    <a href="https://youtu.be/a1qua6s0uKw">
                        <button type="button" class="btn btn-primary btn-lg">
                            Demo Reel
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <a name="contact"></a>
    <div class="bg-contact animation-element fadeIn container">
        <h2>Contact Me</h2>
        <div class="box col-xs-12 animation-element fadeInRight">
            <form id="contact_form" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <div class="row">
                        <label for="name">Your name:</label>
                        <br />
                        <input id="name" class="input" name="name" type="text" value="" size="30" />
                        <br />
                    </div>
                    <div class="row">
                        <label for="email">Your email:</label>
                        <br />
                        <input id="email" class="input" name="email" type="text" value="" size="30" />
                        <br />
                    </div>
                    <div class="row">
                        <label for="message">Your message:</label>
                        <br />
                        <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea>
                        <br />
                    </div>
                    <input id="submit_button" type="submit" value="Send" />
                </fieldset>
            </form>
            <div class="feedback">
            </div>
        </div>
    </div>
    <?php include("incl/footer.php"); ?>