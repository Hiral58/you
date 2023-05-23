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
@media(max-width:860px)
{
    header{
        padding: 20px 3%;
        transition: .4s;
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
@media(max-width:860px)
{
    header{
        padding: 20px 3%;
        transition: .4s;
    }
    /*#gmail-button{
      top:1040px;
    }*/
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
    /*#gmail-button{
      margin-top:240px;
      position: absolute;
    }*/
    #gmail-button{
      margin-top:-250px;
      position:absolute;
    }
 

}
@media(max-width:470px)
{
  #gmail-button{
      top:10px;
      position:absolute;
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
    /*#gmail-button{
      top:140px;
    }*/
}    
</style>
<style>
        *{
	margin: 0;
	padding: 0;
}

body {
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
	/* background: #161616; */
	min-height: 100vh;
}

section::before {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	
	clip-path: circle(30% at right 70%);
}

section::after {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	
	clip-path: circle(20% at 10% 10%);
}

.container {
	position: relative;
	z-index: 1;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
	margin: 40px 0;
}

.container .card {
	position: relative;
	width: 300px;
	height: 400px;
	background: rgba(255, 255, 255, 0.05);
	margin: 20px;
	box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
	border-radius: 15px;
	display: flex;
	justify-content: center;
	align-items: center;
	backdrop-filter: blur(10px);
}

.container .card .content {
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	transition: 0.5s;
}

.container .card:hover .content {
	transform: translateY(-20px);
}

.container .card .content .imgBx {
	position: relative;
	width: 250px;
	height: 250px;
	overflow: hidden;
}

.container .card .content .imgBx img {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.container .card .content .contentBx h3 {
	color: ;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-weight: 500;
	font-size: 18px;
	text-align: center;
	margin: 20px 0 10px;
	line-height: 1.1em;
}

.container .card .content .contentBx h3 span {
	font-size: 12px;
	font-weight: 300;
	text-transform: initial;
}

.container .card .sci {
	position: absolute;
	bottom: 50px;
	display: flex;
}

.container .card .sci li {
	list-style: none;
	margin: 0 10px;
	transform: translateY(40px);
	transition: 0.5s;
	opacity: 0;
}

.container .card:hover .sci li {
	transform: translateY(0px);
	opacity: 1;
}

.container .card .sci li a {
	color: #fff;
	font-size: 20px;
}
</style>

<html>
<header>
  <a href="index_front.php" class="logo"><img src="LOGO1.JPG" alt="" height="250px" width="250px"></a>
<ul class="navmenu">

<li><a href="shopping-cart/products_.php">Shop</a></1i>

<li><a href="shopping-cart/col.php">Collections</a></1i>

<li><a href="circle.php">Sk circle</a></1i>

<li><a href="#">About</a></1i>


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

<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<body>

 	<section>
		<div class="container">
			<div class="card">
				<div class="content">
					<div class="imgBx">
                    <img src="IMG_0661.jpg" style="width: 240px; height: auto;">
						<!--<img src="images/IMG_0661.jpg">-->
					</div>
					<div class="contentBx">
						<h3>Anam Mirza<br><span></span></h3>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="content">
					<div class="imgBx">
						<img src="act2.2.jpg">
					</div>
					<div class="contentBx">
						<h3>Anita Hasanandani<br><span></span></h3>
					</div>
				</div>
				
			</div>
			<div class="card">
				<div class="content">
					<div class="imgBx">
						<img src="act1.jpg">
					</div>
					<div class="contentBx">
						<h3>Gauhar Khan<br><span></span></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="card">
				<div class="content">
					<div class="imgBx">
						<img src="act3.jpeg">
					</div>
					<div class="contentBx">
						<h3>Client<br><span></span></h3>
					</div>
				</div>
				
			</div>
					</div>
					
  <title>SK CIRCLE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <style>
    .slider-container {
      position: relative;
      width: 100%;
      height: 500px;
      overflow: hidden;
    }

    .slider {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 60%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .slider-item {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      opacity: 0;
      transform: translateY(-100%);
      animation: slide 2s forwards;
    }

   

    .slider-item h3 {
      font-size: 3em;
      margin-bottom: 1em;
    }

    .slider-item p {
      font-size: 2em;
      line-height: 1.5em;
    }

    @keyframes slide {
      from {
        opacity: 0;
        transform: translateY(-100%);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="slider-container">
    <div class="slider">
      <div class="slider-item">
        <h3></h3>
        <p style="font-size:30px; font-family:'Poppins','sans-serif';">Through SK Circle, we allow customers to resell their pre-loved SK items, offering a solution to extend the life cycle of our products. We can, in that way, reduce the need for placing new items on the market and avoid using resources beyond their capacity. We encourage you to prolong the use of your garment by placing it on our website once you no longer want to wear it. Get in touch with us to learn more.</p>
      </div>
	  
	  <!DOCTYPE html>
<html>
<head>
  <title>Open Gmail Button</title>
  <style>
    body {
      position: relative;
      margin: 0;
      padding-bottom: 50px; /* Space for the button at the bottom */
    }

    #gmail-button {
      /*position: fixed;*/
      bottom: 50px; /* Adjust the distance from the bottom as needed */
      left: 110;
      width: 20%;
      background-color: black;
      color: white;
      text-align: center;
      padding: 15px;
	  margin-top: 510px;
    }
  </style>
  <script>
    function openGmail() {
      var email = 'sharmeenakariyaniya@gmail.com';
      var subject = encodeURIComponent('Hello');
      var body = encodeURIComponent('This is the body of the email.');
      var url = 'https://mail.google.com/mail/?view=cm&fs=1&to=' + email + '&su=' + subject + '&body=' + body;
      window.open(url);
    }
  </script>
</head>
<body>
  <!-- Content of your webpage goes here -->

  <button id="gmail-button" onclick="openGmail()">Open Gmail</button>
</body>
</html>


     
    </div>
</div>

  <marquee behavior="scroll" direction="left" scrollamount="5">
    Sustainable Fashion | Sustainable Fashion | Sustainable Fashion | Sustainable Fashion
  </marquee>


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
