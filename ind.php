<?php
include ("footer.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link type="text/css" rel="stylesheet" href="index.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">

    <script language="javascript" type="text/javascript">
        function openForm(){
            document.getElementById("myForm").style.display = "block";
        }
        function closeForm(){
            document.getElementById("myForm").style.display = "none";
        }
    </script>
</head>
<body style="background: black">
    <header>
        <div class="landing-text">
            <h1 onclick="location.href='about.php'">Vijay Adithya <br/>B K</h1>
            <div class="social-media">
                <ul class="nav-list">
                    <li><button class="icon-link" onclick="location.href='https://bit.ly/30FxOb1'"><i class="fab fa-linkedin"></i></button></li>
                    <li><button class="icon-link" onclick="location.href='https://naukri.com/vijay-adithya-b-k'"><i class="fas fa-briefcase"></i></button></li>
                    <li><button class="icon-link" onclick="location.href='https://mail.google.com/mail/?view=cm&fs=1&to=vijayadithyabk@gmail.com'"><i class="fas fa-at"></i></button></li>
                    <li><button class="icon-link" onclick="location.href='https://github.com/VijayAdithyaBK?tab=repositories'"><i class="fab fa-github"></i></button></li>
                    <li><button class="icon-link" onclick="location.href='https://bit.ly/2D4gLqT'"><i class="far fa-file-pdf"></i></button></li>
                </ul>
            </div>
        </div>
    </header>


     <section class="certificates">
        <div class="container">
            <div class="certificate-heading">
                <h2>My Certificates</h2>
            </div>
        </div>
        <div class="social-media">
            <ul class="nav-list">
                <li><button class="icon-link"><i class="fas fa-certificate"></i></button></li>
            </ul>
        </div>
    </section>


</body>
</html>
