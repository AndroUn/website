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
      <input id="myInput" type="text" placeholder=" ძებნა" name="search" onkeyup="myFunction()">
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
  <li><a href="kompania.php">ჩვენს შესახებ</a></li>
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

</div>


<div class="row">
<a href="#" id="a">
<div class="imb games">
<img src="img/spidey.jpg">
<div class="desc"><a href="#href">Spider-Man: Miles Morales</a></div>
<div class="price">170₾</div>
<div class="under-text">PS5 ვერსია</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
</div>
</div>
<a>

<a href="#" id="a">
<div class="imb games">
<img src="img/ac.png">
<div class="desc"><a href="#href">Assassin's Creed: Valhalla</a></div>
<div class="price">140₾</div>
<div class="under-text">PS4 ვერსია</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
</div>
</div>

<a href="#">
<div class="imb komp">
<img src="img\DG.png">
<div class="desc"><a href="#href">Days Gone </a></div>
<div class="price">90₾</div>
<div class="under-text">PS4 ვერსია</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
</div>
</div>

<a href="#">
<div class="imb sxva">
<img src="img\ori.jpg">
<div class="desc"><a href="#href">Ori and the Will of the Wisps</a></div>
<div class="price">70₾</div>
<div class="under-text">Xbox One ვერსია</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
</div>
</div>

</div>
       



<div class="row">
<a href="#">
<div class="imb games">
<img src="img\cp.jpg">
<div class="desc"><a href="#href">Cyberpunk 2077</a></div>
<div class="price">130₾</div>
<div class="under-text">Xbox series one ვერსია</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
</div>
</div>
<a>

<a href="#">
<div class="imb games">
<img src="img\wdl.jpg">
<div class="desc"><a href="#href">Watch Dogs Legion</a></div>
<div class="price">130₾</div>
<div class="under-text">Xbox ვერსია</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
</div>
</div>

<a href="#">
<div class="imb games">
<img src="img\ds.jpg">
<div class="desc"><a href="#href">Demon Souls</a></div>
<div class="price">170₾</div>
<div class="under-text">PS5 დისკი</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
</div>
</div>

<a href="#">
<div class="imb games">
<img src="img\ghostof.jpg">
<div class="desc"><a href="#href">Ghost of Thushima</a></div>
<div class="price">100₾</div>
<div class="under-text">PS4 ვერსია</div>
<div class="card-footer">
<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
</div>
</div>

</div>


<div class="page">
<a href="#">1</a>
<a href="#">2</a>
<a href="#">3</a>

</div>

<?php include "phpElements/footer.php";?>


<script src="js/katalogi.js"></script>
<script src="js/script.js"></script>
</body>
</html>