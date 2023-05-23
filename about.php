<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title style="font-family:Times;">ABOUT US</title>
  
  <style>
    *{
margin: 0;
padding: 0;
box-sizing: border-box;
scroll-behavior:smooth;
font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
list-style: none;
text-decoration: none;

}

header{
position: fixed;
width: 100%;
top: 0;
right: 0;

z-index: 1000;

display: flex;

align-items: center;
justify-content: space-between;
padding: 20px 10%;
/*padding-top: 50px;*/
background-color: #ffffff; 
transition: 0.3s ease-in;
box-shadow: 10px 10px 10px rgb(190, 183, 175);
}
.logo img{
    max-width: 180px;
    height: auto;
    
}
.navmenu{
    display: flex;
   
}
    
.navmenu a{
    color: #2c2c2c;
    font-size: 20px;
    text-transform:uppercase;
    padding: 1px 40px;
    font-weight: 200;
    transition: all .42s ease;
    list-style-type: none;
    text-decoration: none;
    
}
.navmenu a:hover{
    color: #fc9468;
}
.nav-icon{
    display: flex;
    align-items: center;
    
    }
.nav-icon i{
    margin-right: 20px;
    color: #2c2c2c;
    font-size: 25px;
    font-weight: 400;
    transition: all .42s ease;
    
    }
    
.nav-icon i:hover{
    transform: scale(1.1);
    color: #EE1C47;
}
#menu_icon{
    color: #2c2c2c;
    z-index: 10001;
    cursor: pointer;
    overflow: hidden;
    
} 
section{
    padding: 15% 10%;
}
.main-home{
    width:100%;
    height: 100vh;
    background-position: center;
    display: grid;
    background-size: cover;
    background-position: center;
    grid-template-columns: repeat(1, 1fr);
    align-items: center;
}
.text{
  /*text-align: right;*/
  position: absolute;
  right: 0;
  width:710px;
  height: 60px;
  top:400px;
}
@media(max-width:860px)
{
    header{
        padding: 20px 3%;
        transition: .4s;
    }
    .text{
  padding-left:20px;
  top:1610px;
}
}
@media(max-width:630px)
{
    .main-text{
        transition: .4s;
    }
    .main-text img{
        transition: .4s;
        width: fit-content;
        
    }

}
@media(max-width:750px)
{
    .navmenu{ 
    position: absolute;
    top: 100%;
    right: -100%;
    width: 300px;
    height: 130vh;
    background: #f9d88b;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 120px 30px;
    transition: all .42s;
    }
    .navmenu a{
        display: block;
        margin: 18px 0;
    }
    .navmenu.open{
        right: 0;
    }
}   

/*ABOUT US CSS*/
@media(max-width:630px)
{
 .container {
      display: flex;
      align-items: center;
    }
    .image {
      width:700px;
      height:990px;
      padding-right: 30px;
    }
    

 
  

    /*.text h3,
    .text h2,
    .text p {
      font-size: 10px;
      padding-right: 90px;
      margin-right: 50px;
    }*/
  

    .site-heading text-center p h2 {
      padding-right: 35px;
      padding-top: 20px;
      margin-right: 35px;
      margin-left: -100px;
    }
}
/*@media(max-width:1130px){
.text{
  padding-left:40px;
}
}*/
    
 
  
  </style>
</head>
<body>
<header>
  <a href="index_front.php" class="logo"><img src="LOGO1.JPG" alt="" height="250px" width="250px"></a>
<ul class="navmenu">

<li><a href="shopping-cart/products_.php">Shop</a></1i>

<li><a href="shopping-cart/col.php">Collections</a></1i>

<li><a href="circle.php">Sk circle</a></1i>

<li><a href="about.php">About</a></1i>


</ul>

<div class="nav-icon">
<a href="#"><i class="bx bx-search-alt-2"></i></a>
<a href="#"><i class="bx bx-cart-download"></i></a>
<a href="#"><i class="bx bxs-user"></i></a>
<a href="#"><i class="bx bx-heart"></i></a>

<div class="fa fa-bars" id="menu_icon" style="font-size:24px">

</div>
</div>
</header>
<br><br><br><br><br><br>
<body>
  <div class="row">
    <div class="site-heading text-center">
      <h2>The Brand</h2>
      <p style="font-size:21px;font-family:sans;">Sharmeena Kariyaniya is a luxury, women’s ready-to-wear label operating from Mumbai since 2018. Strongly rooted in the now but with a keen eye on the future, Our brand aims in delivering twisted modernity, neo-luxury, supreme craftsmanship, fine tailoring, and heterodox lifestyle. Our perspective on self-expression and freedom of speech is built into the fabric of the brand. We offer season-less, ethically produced clothing and accessories.</p>
    </div>
  </div>
  <br><br><br><br>
  <div class="container">
    <div class="image">
      <img src="SK1.jpg" alt="Designer">
    </div>
    <div class="text">
      <h3 style="font-size:20px;font-family:Times;">The Designer</h3>
      <h2 style="font-size:25px;font-family:Times;">Sharmeena Kariyaniya</h2>
      <p style="font-size:21px;font-family:sans;">Born in 1994, Sharmeena Kariyaniya is the founder and creative director of her label.<br> She holds a bachelor's degree in Textile and Apparel Designing from the SNDT university, Juhu. Since the brand initiation in 2018, she customized outfits for her personal clients.<br>She has experience of 6 years in the Fashion industry in multiple roles and has a great ocean of knowledge of practical fashion. <br>Hailing from a background where her dad was the second biggest leather exporter from Mumbai and her mom a shopaholic she instantly had established love for fashion at a very young age.</p>
    </div>
  </div>
</body>
</html>