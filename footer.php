<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio</title>
  <link type="text/css" rel="stylesheet" href="index.css"/>
  <link type="text/css" rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
  <link type="text/css" rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
</head>
<body>
    <footer class="footer">
        <div class="footer-content">
            <h4>&copy;Vijay Adithya</h4>
        </div>
        <div class="footer-media">
            <button onclick="" class="icon-link"><i class="fas fa-phone-alt"></i></button>
            <button onclick="openForm()" class="icon-link"><i class="fas fa-comment-alt"></i></button>
        </div>
    </footer>

    <div class="form-popup" id="myForm">
        <form class="form-container">
            <button class="icon-link" onclick="closeForm()"><i class="fas fa-window-close"></i></button>
            <h2>Feedback Form</h2>
            <hr/>
            <input type="text" name="name" placeholder="Name" maxlength="100" required>
            <input id="fb" type="text" maxlength="300" name="feedback" placeholder="Feedback" height="200px" required>
            <button type="submit" class="icon-link" onclick=""><i class="fas fa-pen-nib"></i></button>
        </form>
    </div>
</body>
</html>
