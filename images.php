<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel ="stylesheet" href="https://icons.getbootstrap.com/">
<style>
* {
  box-sizing: border-box;
  /*font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;*/
  font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.bg-img{
            /*background-image: url("IMG_8704.JPEG");correct*/
            /*contain will make image landspace*/
            background-image:url("IMG_8693.JPEG");
            /*background-image: url("images/first_img.jpg");*/
            /*min-height: 1280px;*/
            /*min-height: 900px;*/
            object-fit: contain;
            /*height: 632px;correct*/
            height: 632px;
            /*height:auto;*/
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            /*background-size: cover;*/
            /* Needed to position the navbar */
            /*position: relative;*/
            /*width:3840px;
            height:2160px;*/
            /*background-color:bisque;*/
           

}



/*header .logo{
    /*background-image:url("SK_LOGO.JPG");
    padding:5px 10px;
    
    cursor:pointer;
    opacity: 5;
    height: 50px;
    width: 50px;

}*/
/*dem{
  padding:55px 110px;
  
}
dem #log{
    
    cursor:pointer;
    opacity: 5;
    position: absolute;
    border-style: none;
}*/
/*.logo{
    margin: auto;*/
    /*padding-left:700px;*/
    /*padding-right:50px ;*/
    /*padding-left:20px;
    padding-top:10px;*/

/*.logo img{
    padding:45px;

}*/
.navigation{
  height: 150px;
  background-color: rgb(255, 255, 255);
  
  position: fixed;
    top: 0;
  width: 100%;
  background-color: #ffffff;
  z-index: 1000;
  transition: background-color 0.5s ease;

 
}
header .navigation{
      position: relative;
      /*padding: 50px 447px;*/
      padding: 50px 447px;/*for nav items to appear up or down*/
      
}

header .navigation .nav a{
      position: relative;
      color: rgb(46, 29, 29);
            font-size: 1.5rem;
            font-weight: 500;
            text-decoration: none;
            margin-left: 60px;/*up*//*space between a*/
            transition: 0.5s ease;
           
            
        }
        header .navigation .nav a:before{
        content: '';
        position: absolute;
            /*background: rgb(66, 42, 40);*/
        background:rgb(196, 99, 30);
        width: 0;
        height: 3px;
            /*bottom: 10;*//*will come up*/
        bottom: -4px;
        left: 0;
        transition: 0.4s ease;
        }
        header .navigation .nav a:hover{
            /*color: rgba(244, 58, 135, 0.734); =>pink color*/
            /*color: rgba(244, 88, 135);*/
            color:rgb(22, 16, 16);
        }
        
        header .navigation .nav a:hover:before{
            width: 100%;

        }
        h4{
          text-align: center;
        }


.column {
  float: right;
  width: 33.33%;/*ALL THREE CAN FIT*/
  padding: 15px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.column{
  overflow: hidden;
}
.column img{
  transition:0.2s ease-in;
}
.column img:hover {
  transform: scale(1.5);
}
.column img:before{
    opacity: 0;
    cursor: pointer;
    /*border-radius: 20px;  */
    border-style: groove;
}
.column img:hover:after{
    opacity: 4;
    /*transition: ease 0.5s;*/
}



animate {
         -webkit-transition: 2s;
         transition: 2s;
         opacity: 1;
      }
.fa-user{
  padding: 20px 721px;
  margin-top: -80px;
  color:black;
  
}
.cart{
  padding: 2px 821px;
  margin-top:-60px;
  position:absolute;
}
.fa-shopping-cart{
  color:black;
  position: relative;
  z-index:9999;
 
}

/*serach bar*/

.openBtn {
  background: #f1f1f1;
  border: none;
  padding: 10px 1px;
  font-size: 20px;
  cursor: pointer;
}

.openBtn:hover {
  background: #bbb;
}

.overlay {
  height: 30%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
}

.overlay-content {
  position: relative;
  top: 36%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay .closebtn:hover {
  color: #ccc;
}

.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}

.overlay input[type=text]:hover {
  background: #f1f1f1;
}

.overlay button {
  float: left;
  width: 20%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
}
.navigation .logo{
  /*padding: 0px 2px;*/
  /*padding-top: -2px;*/
  margin-top: -80px;
  position: absolute;
  margin-left: -221px;
}
.logo img{
  position: relative;
  cursor: pointer;
 
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
  }
  header {
             /*padding: 12px 300px;*/
             /*margin:auto;*/
             padding: 12px 70px;

        }

  header .navigation{
            
            /*position: fixed;
            width: 100%;
            height: 100vh;
            top:0;
            left:0;
            display: flex;
            justify-content: center;
            align-items: center;
            background:rgba(1,1,1,0.5) ;*/
            display: none;

        }

        header .navigation.active{
            
            position: fixed;
            width: 100%;
            height: 100vh;
            top:0;
            left:0;
            display: flex;
            justify-content: center;
            align-items: center;
            background:rgba(1,1,1,0.5) ;
        }
        .menu-btn{
            /*position:absolute;*/
            /*margin-right:100px;*/
            padding:15px 105px;/*new*/
            background: url(\menubar.png)no-repeat;
            background-size: 70px;
            
            width: 30px;
            height: 70px;
            cursor: pointer;/*******/
            transition: 0.3s ease;
        }

        header .navigation .nav a{
         
            color: rgb(46, 29, 29);
            font-size: 1.5rem;
            margin: 20px;
        }
        header .navigation .nav a:before{
            background: #222;
            height: 4.5px;
        }
        header .navigation.active .nav{
            background: #fff;
            width: 600px;
            max-width:600px ;
            margin: 20px;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 5px;
            box-shadow:0px 5px 25px rgb(1 1 1/20%) ;
        }
        .menu-btn.active{
            z-index: 999;
            background:url(close.png)no-repeat ;
            background-size: 30px;
            background-position: center;
            transition: 0.3s ease;
            padding:40px 140px;

        }
        
        .button {
            background-color: purple;
            border: none;
            color: white;
            padding: 12px 12px;/*to adjust box/button size*/
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            position: relative;
        }

}
.nav img{
    
    padding-left:-20px;
}


ul {
  display: inline;
  margin: 0;
  padding: 0;
  
}
ul li {
  display: inline-block;
  min-width: 10px;
}

ul li:hover {background: #ffffff;}
ul li:hover ul {display: block;}
ul li ul {
  position: absolute;
  width: 200px;
  display: none;
  padding: 20px ;
}
ul li ul li { 
  background-color: #f4efef; 
  display: inline; 
  /*display: block;*/
  min-height: 50px;
  /*width: 5px;*/
}
ul li ul li a {
  /*display:block;*/
  display: inline-block;
  text-align: center;
  height: 50px;
  width: 150px;
  background-color: #ffe2e2d0;

} 
ul li ul li:hover {
  background: #e7b4b4;
}

marquee{
          text-align: center;   
        }
        marquee p{
          text-decoration:overline ;
          color:dark pink;
          width:40px;
          font-size:20px;
          letter-spacing:3px;
          /*font-family:'Times new roman';*/
        
        
        }
@media only screen and(max-width:760px){
 .navigation{
  
 }
}
.search-box {
  display: flex;
  align-items: center;
  position: relative;
  margin-left: auto;
}
.search-icon {
  position: absolute;
  top: 50%;
  left: 10px;
  transform: translateY(-50%);
  color: #999;
}
.search-input {
  width: 150px;
  padding: 10px;
  border: none;
  border-radius: 20px;
  background-color: #eee;
  font-size: 16px;
  color: #666;
  transition: all 0.2s ease-in-out;
  opacity: 0;
  visibility: hidden;
}
.search-input.active {
  opacity: 1;
  visibility: visible;
  width: 200px;
  margin-left: 20px;
}
.navigation {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav {
  display: flex;
  align-items: center;
}

.nav ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.nav li {
  margin: 0 10px;
}

.nav a {
  text-decoration: none;
  color: black;
  font-weight: bold;
  padding: 10px;
}

.search-box {
  display: flex;
  align-items: center;
  margin-left: auto;
}

.search-icon {
  margin-right: 10px;
}


</style>
</head>
<body>  
  
<header>


<div class="menu-btn"><!-- menu logo-->

</div>

<!--<div class="navigation">
  <div class="logo">
  <a href="/images.php"><img src="SK_LOGO.JPG" height="180px" width="180px" >
</div>
    <div class="nav">
    <i class="fa fa-menu-bar">
    <!--<img src="SK1.JPG" height="60px">
        <a href="shopping-cart/products.php">Shop</a>

    <ul>
      
    <li>
        <a href="">Collections</a>
      <ul>
        <li><a href="#">Tops</a></li>
        <li><a href="#">Kaftan</a></li>
        <li><a href="#">Skirts</a></li>
      </ul>
      </li>
  </ul>
        <a href="">Sk circle</a>
        
    </div>
    user login/register-->
    <div class="navigation">
  <div class="logo">
    <a href="/images.php"><img src="SK_LOGO.JPG" height="180px" width="180px" ></a>
  </div>
  <div class="nav">
    <i class="fa fa-menu-bar">
      <a href="shopping-cart/products.php">Shop</a>
      <ul>
        <li>
          <a href="#">Collections</a>
          <ul>
            <li><a href="#">Tops</a></li>
            <li><a href="#">Kaftan</a></li>
            <li><a href="#">Skirts</a></li>
          </ul>
        </li>
      </ul>
      <a href="">Sk circle</a>
    </li>
    <!-- Add search icon and search bar here -->
    <div class="search-box">
      <i class="fa fa-search search-icon"></i>
      <!--<input type="text" placeholder="Search" class="search-input" name="search_box">-->

      <input type="text" class="box" placeholder="search products..." name="search_box">
        <input type="submit" class="btn" value="search" name="search_btn">

    </div>
  </div>
  <a href="register.php" i class="fa fa-user" style="font-size:34px;color:black;"></a>
</div>

<section class="products" style="padding-top: 0;">

<div class="box-container">

   <?php
   @include 'conn.php';
     if(isset($_POST['search_btn'])){
      $search_box = mysqli_real_escape_string($conn, $_POST['search_box']);
      $select_products = mysqli_query($conn, "SELECT * FROM `product` WHERE name LIKE '%{$search_box}%'") or die('query failed');
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_products = mysqli_fetch_assoc($select_products)){
   ?>
   <form action="" method="POST" class="box">
      <a href="shopping-cart/view_page.php?pid=<?php echo $fetch_products['id']; ?>" class="fas fa-eye"></a>
      <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
      <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" class="image">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <input type="number" name="product_quantity" value="1" min="0" class="qty">
      <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
   </form>
   <?php
      }
         }else{
             echo '<p class="empty">no result found!</p>';
         }
     }else{
         echo '<p class="empty">search something!</p>';
     }
    
   ?>

</div>

</section>

   
      
    <div class="cart">
      
    <a href="" i class="fa fa-shopping-cart" style="font-size:34px"></a></i>
   
    

      <!--<div id="menu-btn" class="fas fa-bars"></div>-->
     
</div>
</div>

<!--serach bar-->
<div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>





<!--<button class="openBtn" onclick="openSearch()"><i class="fa fa-search"></i></button>-->

<script>
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
</script>





<div class="bg-img"><!--BACKGROUND IMAGE-->

</div><br>
<marquee width="90%" direction="right" height="100px" scrollamount="20">
<p>SHARMEENA KARIYANIYA</p> 
</marquee>

    <!--<img id="log" src="SK_LOGO.JPG" alt="logo" width="50%" height="50%" >-->


    <div class="row">
  <div class="column">
    <img src="capsule/anita.JPG" alt="Sec" style="width:100%">  
  </div>
  

  <div class="column">
    <img src="capsule/IMG_0662.jpg" alt="Sec" style="width:100%">
  </div>
  <div class="column">
    <img src="IMG_8709.JPEG" alt="Sec" style="width:100%">

    
  </div>
</div>
<!-------------------------------------------------------------->


<div class="row">
    <div class="column">
      <img src="capsule/anita1.JPG" alt="sec" style="width:100%">
      <!--<img src="capsule/anita1.JPG" alt="Hover Image" class="hover-image"  style="height:100%">-->
    </div>
    <div class="column">
      <img src="capsule/IMG_0662.jpg" alt="sec" style="width:100%">
    </div>
    <div class="column">
      <img src="IMG_8709.JPEG" alt="sec" style="width:100%">
    </div>
  </div>





        
  <script>
    document.getElementById("ROW").classList = 'animated';
  </script>


<script>
  const menubtn=document.querySelector(".menu-btn");

  const navigation=document.querySelector(".nav");/*for box to appear in mobile nav*/
        /*const button=document.querySelector(".button");*/
        /*const drop=document.querySelector(".drop");*/

        
        menubtn.addEventListener("click",()=>{
            menubtn.classList.toggle("active");
            nav.classList.toggle("active");
            /*button.classList.toggle("active");*/
        })

</script>

<script>
  const searchIcon = document.querySelector('.search-icon');
  const searchInput = document.querySelector('.search-input');
  searchIcon.addEventListener('click', () => {
    searchInput.classList.toggle('active');
    searchInput.focus();
  });
</script>

  </header>

  <div style = "width : 60px; height : 60px; position : fixed; right : 60px; bottom : 50px;">
  <tooltip="whatsapp">
   <a href = "#https://wa.me/917208334355"><i class="fa-brands fa-whatsapp fa-bounce fa-2xl" style="font-size:55px;color:black;"></i></div>
</body>
</html>
