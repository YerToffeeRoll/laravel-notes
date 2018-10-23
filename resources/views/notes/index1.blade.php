 @extends('layouts.app1')
@section('content')


<div id="preloader">
        <div id="loader"></div>
    </div>

  <!-- header 
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                  <H1 class="display-2" style="color: white !important;">NOTES</H1>
            </a>
        </div>

        <nav class="row header-nav-wrap wide">
            <ul class="header-main-nav">
                <li class="current"><a class="smoothscroll" href="#home" title="intro">Login</a></li>
                <li><a class="smoothscroll" href="#about" title="about">About</a></li>
        
                <li><a href="https://www.regalmajestic.co.uk" title="blog">Blog</a></li>  
            </ul>

            <ul class="header-social">
                <li><a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#"><span>Menu</span></a>
    
    </header> <!-- end header -->


 <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section">

        <div class="home-image-part"></div>

        <div class="home-content">

            <div class="row home-content__main wide">

                <h1>
                A Notes App Example <br>
                One Example to Rule them all.
                </h1>

                <h3>
                This is just a quick example to show my skills with laravel and VueJS.
                </h3>

              <!--   <div class="home-content__button">
                    <a class="btn-video" href="https://player.vimeo.com/video/14592941?color=00a650&title=0&byline=0&portrait=0" data-lity>
                        <span class="video-icon"></span>
                    </a>
                    <a href="#download" class="smoothscroll btn btn--primary btn--large">
                       Login to use.
                    </a>
                </div> -->

            </div> <!-- end home-content__main -->

            <a href="#about" class="home-scroll smoothscroll">
                <span class="home-scroll__text">Scroll Down</span>
                <span class="home-scroll__icon"></span>
            </a>

        </div> <!-- end home-content -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row section-header narrower align-center" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                   The best example yet. With a full template as well.
                </h1>
                <p class="lead">
                  I love this template. Its so colourful and neat.
                </p>
            </div>
        </div> <!-- end section-header -->

       

        <div class="row about-bottom-image" data-aos="fade-up">
            <img src="images/app-screen-1400.png" 
                 srcset="images/app-screen-600.png 600w, 
                         images/app-screen-1400.png 1400w, 
                         images/app-screen-2800.png 2800w" 
                 sizes="(max-width: 2800px) 100vw, 2800px" 
                 alt="App Screenshots"> 
         </div>

    </section> <!-- end s-about -->


    <!-- process
    ================================================== -->
    <section id="process" class="s-process">

        <div class="row">
            <div class="col-full text-center" data-aos="fade-up">
                <h2 class="display-2">How The App Works?</h2>
            </div>
        </div>

        <div class="row process block-1-4 block-m-1-2 block-tab-full">
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h3>Sign Up</h3>
                    <p>
                  Quickly sign up using the register page <a href="">HERE</a>
                    </p>
                </div>
            </div>
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h3>Login</h3>
                    <p>
                    You can then login and start navigate the app. Notice how it just works!
                    </p>
                </div>
            </div>
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h3>Compose</h3>
                    <p>
                    You can then start creating notes! Compose and collaborate to your hearts content!
                    </p>
                </div>
            </div>
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h3>Logout</h3>
                    <p>
                    You can login and logout to your hearts content! Your messages will be kept and will be linked to your account.
                    </p>
                </div>
            </div>
        </div> <!-- end process -->

        <div class="row process-bottom-image" data-aos="fade-up">
            <img src="images/phone-app-screens-1000.png" 
                 srcset="images/phone-app-screens-600.png 600w, 
                         images/phone-app-screens-1000.png 1000w, 
                         images/phone-app-screens-2000.png 2000w" 
                 sizes="(max-width: 2000px) 100vw, 2000px" 
                 alt="App Screenshots"> 
         </div>
        
    </section> <!-- end s-process -->


    <!-- download
    ================================================== -->
    <section id="download" class="s-download">

        <div class="row download-content">
            <div class="col-six md-seven download-content__text pull-right" data-aos="fade-up">
                <h1 class="display-2">
                   It even works on your mobile!
                </h1>
                <p>
                   In this day an age responsive apps and functionality is a functional requirement. 
                </p>
                <ul class="download-content__badges">
                    <li><a href="#0" title="" class="badge-appstore">App Store</a></li>
                    <li><a href="#0" title="" class="badge-googleplay">Play Store</a></li>
                </ul>
            </div>
            <div class="download-content__image" data-aos="fade-up">
                <img src="images/phone-app-profile-550.png" 
                     srcset="images/phone-app-profile-550.png 1x, images/phone-app-profile-1100.png 2x">
            </div>
        </div>

    </section> <!-- end s-download -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer footer">

        <div class="row footer__top">
            <div class="col-six md-full">
                <h1 class="display-2">
                    Let's Stay In Touch.
                </h1>
                <p class="lead">
                    Subscribe for updates, special offers and more.
                </p>
            </div>
            <div class="col-six md-full footer__subscribe end">
                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">

                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
            
                        <input type="submit" name="subscribe" value="Sign Up">
            
                        <label for="mc-email" class="subscribe-message"></label>
            
                    </form>
                </div>
            </div>
        </div>

        <div class="row footer__bottom">
            <div class="col-five tab-full">
                <div class="footer__logo">
                    <a href="index.html">
                   <H1 class="display-1">NOTES</H1>
                    </a>
                </div>

                <p>
               This template can be implemented on your own website and can be bundled in as part of a package deal at <a href="https://www.regalmajestic.co.uk">RegalMajestic</a>. Please do get in contact, whether you are just saying "hi, good job".
                </p>

                <ul class="footer__social">
                    <li><a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="col-six tab-full end">
                <ul class="footer__site-links">
                    <li><a class="smoothscroll" href="#home" title="intro">Intro</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">About</a></li>
                    <li><a href="https://www.regalmajestic.co.uk" title="blog">Blog</a></li>	
                </ul>

                <p class="footer__contact">
                    Do you have a question? Send us a word: <br>
                    <a href="mailto:#0" class="footer__mail-link">sam@regalmajestic.co.uk</a>
                </p>

                <div class="cl-copyright">
                    <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://regalmajestic.co.uk" target="_blank">RegalMajestic</a>
</span>
                </div>
            </div>

        </div>

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>

    </footer> <!-- end s-footer -->

    @endsection