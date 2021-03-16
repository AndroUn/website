<html>
<head>
    <title> კატალოგი</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/imagebox.css">
    <link rel="stylesheet" href="css/komp.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="head">
<a href="index.php" style="cursor: pointer" ><img src="img/name.png"></a>
<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder=" ძებნა" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <button id="log" onclick="openForm()">შესვლა</button>
</div>
<div class="form-popup" id="myForm" action="php\sign-in.php">
        <form class="form-container" action="">
                <h1>შესვლა სისტემაში</h1>
                <input type="text" placeholder="სახელი" name="username">
                <input type="password" placeholder="პაროლი" name="psw">
                <p class="msg none">Lorem ipsum dolor sit amet.</p>
                <button type="submit" class="btn1 login-btn" value="submit">შესვლა</button>
                <button type="button" class="btn1-cancel" onclick="closeForm()"><i class="fa fa-times" aria-hidden="true"></i></button>
                არ გაქ აქქაუნტი? დარეგისტრირდი - <a href="register.php">რეგისტრაცია</a>
            </form>
        </div>
<div class="nav">    
<ul>
  <li><a href="index.php">მთავარი</a></li>
  <li><a href="komp.php">კომპიუტერის აქსესუარები</a></li>
  <li><a href="konsolgames.php">კონსოლების თამაშები</a></li>
  <li><a href="#contact">სხვა პროდუქცია</a></li>
  <li><a href="kompaia.php">ჩვენს შესახებ</a></li>
</ul>
</div>

<div class="list"> 
<div class="power">ქვეკატეგორიები</div>
 <a href="#">კლავიატურა</a>
 <a href="#">მაუსები</a>
 <a href="#">USB </a>
 <a href="#">დინამიკები</a>
 <a href="#">ვებ-კამერა</a>
 <a href="#">მიკროფონი</a>
 <a href="#">კაბელები და ადაპტერები</a>
 <a href="#">ყურსასმენები</a>
 <a href="#">გარე მყარე დისკები/SSD</a>
 <a href="#">მაუსპედები</a>
 <a href="#">კონტროლლერები</a>

</div>


<div class="row">
<a href="product.php">
<div class="imb games">
<img src="img\dell.jpg">
<div class="desc"><a href="#href">მონიტორი Dell S3220DGF </a></div>
<div class="price">1599₾</div>
<div class="under-text">მონიტორი</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
</div>
</div>
<a>

<a href="#">
<div class="imb games">
<img src="img\keyboard.png">
<div class="desc"><a href="#href">Razer BlackWidow</a></div>
<div class="price">320₾</div>
<div class="under-text">მექანიკური კლავიატურა</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
</div>
</div>

<a href="#">
<div class="imb komp">
<img src="img\razer-death-adder-gallery-29.png">
<div class="desc"><a href="#href">Razer Death Adder </a></div>
<div class="price">120₾</div>
<div class="under-text">მაუსი Razer</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
</div>
</div>

<a href="#">
<div class="imb sxva">
<img src="img\dualshock4.jpg">
<div class="desc"><a href="#href">Dualshock 4 (steel color)</a></div>
<div class="price">150₾</div>
<div class="under-text">PS4-ს კონტროლლერი</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
</div>
</div>

</div>
       



<div class="row">
<a href="#">
<div class="imb games">
<img src="img/razer_headset.jpg">
<div class="desc"><a href="#href">Razer Kraken Gaming </a></div>
<div class="price">260₾</div>
<div class="under-text">ყურსასმენები</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
</div>
</div>
<a>

<a href="#">
<div class="imb games">
<img src="img\dualsence.png">
<div class="desc"><a href="#href">Dualsence</a></div>
<div class="price">მალე გაყიდვაში</div>
<div class="under-text">PS5-ს კონტროლლერი</div>
<div class="card-footer">
<small class="text-muted">&#9734; &#9734; &#9734; &#9734; &#9734;</small>
</div>
</div>

<a href="#">
<div class="imb games">
<img src="img\s-l1000_h7d9-43.jpg">
<div class="desc"><a href="#href">ადაპტერი HDMI to VGA</a></div>
<div class="price">12₾</div>
<div class="under-text">PS5 დისკი</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
</div>
</div>

<a href="#">
<div class="imb games">
<img src="img\s-l1600.jpg">
<div class="desc"><a href="#href">მაუს პედი A4tech X7500MP</a></div>
<div class="price">14₾</div>
<div class="under-text">მაუს პედი</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
</div>
</div>


</div>

<?php include "phpElements/footer.php";?>



<script src="js/script.js"></script>
</body>
</html>
