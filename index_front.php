<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style3.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<title>Document</title>
<style>

.popup{
    background-color: #ffffff;
    width: 700px;
    padding: 20px 40px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 90%;
    border-radius: 0px;
    font-family: "Poppins",sans-serif;
    display: none;
    text-align: center;
}
.popup button{
    display: block;
    margin:  0 0 0px auto;
    background-color: transparent;
    font-size: 20px;
    color: #c5c5c5;
    border: none;
    outline: none;
    cursor: pointer;
}
.popup p{
    font-size: 24px;
    text-align: justify;
    margin: 10px 0;
    line-height: 25px;
}
.imageg{
  text-align: left;
}
.imageg img {
  display: inline-block;
  vertical-align: middle;
  height:350px;
  width:auto;
  
}
.log p{
  display: block;
  text-align:right;
}
.login-button {
    text-decoration: none;
    padding: 20px 40px;
    list-style-type: none;
    box-shadow: border-box;
    background-color: black;
    position: absolute;
    top: 80%; /* Adjust the vertical position */
    right: 100px; /* Adjust the horizontal position */
    transform: translate(0, -50%);
    font-family:'times new roman';
    color:White;
  }
  .login-button:hover{
    color:black;
    background-color: white;
    border-style:solid;
  }
  /*@keyframes popup {
    0% {
      transform: translateY(-100%);
    }
    100% {
      transform: translateY(0);
    }
  }*/

  </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <!--Stylesheets-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <!--popup-->
   <?php include('popup__.php'); ?>

    <!--popup-->
    <!--Script-->
   
</body>
</html>



  <header>
  <a href="#" class="logo"><img src="LOGO1.JPG" alt="" height="250px" width="250px"></a>
<ul class="navmenu">

<li><a href="shopping-cart/products_.php">Shop</a></1i>

<li><a href="shopping-cart/col.php">Collections</a></1i>

<li><a href="circle.php">Sk circle</a></1i>

<li><a href="about.php">About</a></1i>


</ul>

<div class="nav-icon">
<a href="#"><i class="bx bx-search-alt-2"></i></a>
|
<a href="#"><i class="bx bx-cart-download"></i></a>
|
<a href="#"><i class="bx bxs-user"></i></a>
|
<a href="#"><i class="bx bx-heart"></i></a>|

<div class="fa fa-bars" id="menu_icon" style="font-size:24px">


</div>
</div>
</header>
<section class="main-home">
  <div class="main-text">
    <img src="capsule/anita1.jpg" style="max-width:100%;height:auto;">
  </div>
</section>
<script>
let menu= document.querySelector('#menu_icon');
let navmenu= document.querySelector('.navmenu');
menu.onclick=()=>{
    menu.classList.toggle('bx-x');
    navmenu.classList.toggle('open');
}
/*popup*/
window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        1000
    )
});


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
/*popup*/
</script>
</body>
</html>