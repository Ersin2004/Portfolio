<!DOCTYPE html>

<head>
   <meta charset="utf-8">
   <title>Portfolio</title>
   <link rel="stylesheet" href="style.css">
   <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
   <div class="btn">
      <span class="fas fa-bars"></span>
   </div>
   <nav class="sidebar">
      <div class="text">
         Menu
      </div>
      <ul>
         <li><a href="index.php">Home</a></li>
         <li>
            <a href="#" class="serv-btn">Portfolio
               <span class="fas fa-caret-down second"></span>
            </a>
            <ul class="serv-show">
               <li><a href="certificaten.php">Certificates</a></li>
               <li class="active"><a href="projecten.php">Projects</a></li>
            </ul>
         </li>
         <li><a href="about.php">About</a></li>
         <li><a href="contact.php">Contact</a></li>
      </ul>
   </nav>
   <div class="content">
      <div class="header">
         <h1>Projects</h1>
      </div>
      <p>
      <h3><a href="https://bitlab.bit-academy.nl/ersinkaraduman" class="serv-btn">Mijn GitHub</a></h3>
      </p>
      <script>
         $('.btn').click(function() {
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
         });
         $('.feat-btn').click(function() {
            $('nav ul .feat-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
         });
         $('.serv-btn').click(function() {
            $('nav ul .serv-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
         });
         $('nav ul li').click(function() {
            $(this).addClass("active").siblings().removeClass("active");
         });
      </script>
</body>

</html>
