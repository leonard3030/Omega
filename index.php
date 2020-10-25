<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omega | Home</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<style type="">
    .top-about a img{
        width: 100%;
        height: 250px !important;
    }
    #loading {
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        top: 0;
        left: 0;
        position: fixed;
        /*display: block;*/
        opacity: 0.985;
        background-color: #0e1e2f;
        z-index: 99;
        color: #03d8fd;
        /*text-align: center;*/
    }

    #loading-image {
      z-index: 100;
      height: 400px;
      margin-top: -100px;
    }
</style>
<body>
    <div id="loading">
        <img id="loading-image" src="assets/img/lo4.gif" alt="Loading..." />
        <label style="margin-top: -150px;z-index: 9999">Loading...</label>
    </div>
    <div class="navbar">
        <div class="navbar-header">
            <h2 class="nav-brand">Omega</h2>
            <div class="nav-bars">
                <div class="bars">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
        <div class="nav-links">
            <a href="#" class="nav-item">Home</a>
            <a href="#" class="nav-item">About</a>
            <a href="#" class="nav-item">Services</a>
            <a href="#" class="nav-item">Works</a>
            <a href="#" class="talk nav-item">Let's Talk</a>
        </div>
        </div>
    </div>
    <!-- <div class="nav-container">
        <nav>
            <ul>
                <a href="" class="nav-brand">Omega</a>
                <div class="middle">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Works</a></li>
                </div>
                <li><a href="" class="talk">Let's Talk</a></li>
            </ul>
            <div class="nav-bars">
                <ul>
                    <li class="bar1"></li>
                    <li class="bar2"></li>
                    <li class="bar3"></li>
                </ul>
            </div>
        </nav>
    </div> -->
    <div class="port-section">
        <div class="port-container">
            <div class="img-widget">
                <img src="assets/img/CU3A83932.jpg">
            </div>
            <div class="info-widget">
                <h4 class="salutation">Hello Everybody, i am</h4>
                <h1 class="my-name">TUMUSHIME Leonard</h1>
                <h1 class="my-grade">Full Stack Web Developer</h1>
                <p class="my-desc">My Name is TUMUSHIME Leonard Alias Omega, I am a Hard-working Full Stack Web Developer, with a flair for creating elegant solutions in the least amount of time. I'm passionate about software architecture and cloud computing. </p>
                <p class="my-dec">
                    <label><span class="fa fa-phone"></span>&nbsp;&nbsp;(+250) 789-178-645</label>
                    <label><span class="fa fa-envelope"></span>&nbsp;&nbsp;leonardremy3030@gmail.com</label>
                </p>
                <a href="#" class="my-works">View Works</a>
            </div>
        </div>
    </div>





    <div class="about-section">
        <div class="about-widget">
            <div class="about-left">
                <div class="items-left">
                    <p><label class="term">Full&nbsp;Name&nbsp;&nbsp;</label></p>
                    <p><label class="term">Phone </label></p>
                    <p><label class="term">Email </label></p>
                </div>
                <div class="items-dots">
                    <p><label class="term">:</label></p>
                    <p><label class="term">:</label></p>
                    <p><label class="term">:</label></p>
                </div>
                <div class="items-ans">
                    <p><label class="term">TUMUSHIME Leonard</label></p>
                    <p><label class="term">(+250) 789-178-645</label></p>
                    <p><label class="term">leonardremy3030@gmail.com</label></p>
                </div>
            </div>
            <div class="about-right">
                <div class="items-left">
                    <p><label class="term">Citizenship </label></p>
                    <p><label class="term">Status </label></p>
                    <p><label class="term">Address </label></p>
                </div>
                <div class="items-dots">
                    <p><label class="term">:</label></p>
                    <p><label class="term">:</label></p>
                    <p><label class="term">:</label></p>
                </div>
                <div class="items-ans">
                    <p><label class="term">Rwandan</label></p>
                    <p><label class="term">Single</label></p>
                    <p><label class="term">Kigali, Rwanda</label></p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-section">
        <p>Copyright &copy; <b>Omega</b>&nbsp; 2020 - <?php echo date('Y'); ?> &nbsp;&nbsp;|&nbsp;&nbsp; All Rights Reserved</p>
    </div>


    <script type="text/javascript">
        
        const navLinks = document.querySelector('.nav-links');
        const navbars = document.querySelector('.nav-bars');

        navbars.addEventListener('click', function(){
            if (navLinks.classList.contains('collapse')) {
                navLinks.classList.remove('collapse');
                navbars.classList.remove('change');
            }else{
                navLinks.classList.add('collapse');
                navbars.classList.add('change');
            }
        })
    </script>
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <script src="assets/js/jquery.min.js"></script>
    <script>
        $(window).load(function() {
            $('#loading').hide();
        });
    </script>
</body>

</html>