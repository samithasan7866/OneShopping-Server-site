<?php
session_start();
include("config.php");

?>


<html lang="en" dir="ltr">
<head>
	<title> OneShopping Group </title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="images/favicon.png" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />

	 	<link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />

	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>

	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>


	 <!-- Linking scripts -->
    <script src="js/main.js" type="text/javascript"></script>


</head>


<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
				<h1 id="logo"><a class="notext" href="#" title="SomStore">SomStore</a></h1>
				<div id="top-nav">
					<ul>

						<li><a href="contact.php"" title="contact"><span>Contact</span></a></li>
						<li><a href="Sign In.php" title="Sign In"><span>Sign In</span></a></li>
					</ul>
				</div>
				<div class="cl">&nbsp;</div>
	<div class="shopping-cart"  id="cart" id="right" >
<dl id="acc">
<dt class="active">
<p class="shopping" >Shopping Cart &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</dt>
<dd class="active" style="display: block;">
<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

if(isset($_SESSION["cart_session"]))
{
    $total = 0;
    echo '<ul>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>'."</br>";
        echo '<h3  style="color: green" ><big> '.$cart_itm["name"].' </big></h3>';
        echo '<div class="p-code"><b><i>ID:</i></b><strong style="color: #d7565b" ><big> '.$cart_itm["code"].' </big></strong></div>';
		echo '<span><b><i>Shopping Cart</i></b>( <strong style="color: #d7565b" ><big> '.$cart_itm["TiradaProductTiga"].'</big></strong>) </span>';
        echo '<div class="p-price"><b><i>Price:</b></i> <strong style="color: #d7565b" ><big>'.$currency.$cart_itm["Qiimaha"].'</big></strong></div>';
        echo '</li>';
        $subtotal = ($cart_itm["Qiimaha"]*$cart_itm["TiradaProductTiga"]);
        $total = ($total + $subtotal);
    }
    echo '</ul>';
    echo '<span class="check-out-txt"><strong style="color:green" ><i>Total:</i> <big style="color:green" >'.$currency.$total.'</big></strong> <a   class="a-btnjanan"  href="view_cart.php"> <span class="a-btn-text">Check Out</span></a></span>';
	echo '&nbsp;&nbsp;<a   class="a-btnjanan"  href="cart_update.php?emptycart=1&return_url='.$current_url.'"><span class="a-btn-text">Clear Cart</span></a>';
}else{
    echo ' <h4>(Your Shopping Cart Is Empty!!!)</h4>';
}
?>

</dd>
</dl>
</div>
 <div class="clear"></div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Header -->
    <!-- Begin Navigation -->

    <div id="navigation">
    			<!-- Begin Shell -->
    			<div class="shell">
    				<ul>
    					<li class="active">
    						<li><a href="index.php" title="index.php">Home</a></li>
    					<li>
    						<a style="cursor: context-menu;">Category</a>
    						<div class="dd">
    							<ul>
    								<li>
    									<a href="warehouse_1.php"> FoodStuff</a>

    								</li>

    								<li>
    									<a href="warehouse_2.php"> Beverage</a>

    								</li>

    								<li>
    									<a href="warehouse_3.php"> Cleaning Material</a>

    								</li>
    								</li>

    								<li>
    									<a href="warehouse_4.php"> Clothes</a>

    								</li>

    							</ul>
    						</div>

    					<li><a href="products.php"> Products</a></li>

    					<li><a href="about.php">About Us</a></li>
    					<li><a href="customer.php">Free Sign Up</a> </li>
    					</li>
    				</ul>
    				<div class="cl">&nbsp;</div>
    			</div>
    			<!-- End Shell -->
    		</div>
    		<!-- End Navigation -->

    		<!-- Begin Main -->
    		<div id="main" class="shell">
    			<!-- Begin Content -->
    			<div id="content">
    				<div class="post">
    					<img src="images/about.jpg" alt="Post Image" height="350" width="1200" style="padding-bottom: 15px;"/>
    					<h2>Welcome!</h2>

    					<p class="about_welcome">You can be confident when you're shopping online with OneShopping. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.You can be confident when you're shopping online with OneShopping. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.OneShopping is a place where u can order your daily needs. We respect your comfort.
    					We are trying out best to give your desire products as fast as we can.</p>
    					<div class="cl">&nbsp;</div>
    				</div>


    				<div class="post">

    					<h1 align="center"></font>About The Project Developers</font></h1><br>
    					<h2>Developer</h2>

    					<img class="circularsquare" src="images/abu.jpeg" alt="Post Image" width="140" height="159" />
    					<p class="about_bio">Abu Syed Khudri Roman
    					<br>
    					    Hello, this is Abu Sayed Khudri Roman, from Dhaka which is the capital city of Bangladesh. I am 23 years old and I have completed my HSC and SSC from Dhaka Imperial College. I have to say something about myself. Sometimes it is hard to introduce yourself because you know yourself so well that you do not know where to start with. Sometimes it is hard to introduce yourself because you know yourself so well that you do not know where to start with. Let me give a try to see what kind of image you have about me through my self-description. I hope that my impression about myself and your impression about me are not so different. Here it goes I am a person who is positive about every aspect of life.       </p>

    					<div class="cl">&nbsp;</div>
    				</div>
    				<div class="post">
    					<h2>Developer</h2>
    					<img class="circularsquare"  src="images/amit.png" alt="Post Image" width="140" height="159" />
    					<p class="about_bio">Amit Hasan <br> My name is Amit Hasan Sadhin. I am currently studying Computer Science, majoring in Software Engineering. I am from Bangladesh, a small country located in the South of Asia.
I live my life one day at a time. I know all my mistakes by heart, every silly misstep, every miscalculation, and every wrong step so I can learn and wake up tomorrow to be better than I was yesterday. I am a perfectionist in work and a realist by philosophy. I wouldn't say I like to leave anything to chance. I take advantage of every opportunity that pops up, and with each objective, my aim becomes more precise. Solving problems, whether it be related to my studies or the real world, is my forte. When I set my sight on a goal, it becomes my mission, a stronghold to conquer, and I stop at nothing to achieve it.
I realize that no one can be perfect. But I strive to be as close to it as possible. This is because I am not studying to live for myself but to make a change in this world.
         </p>

    					<div class="cl">&nbsp;</div>
    				</div>

    				<div class="post">
    					<h2>Developer</h2>
    					<img class="circularsquare"  src="images/xogmo.jpg" alt="Post Image" width="140" height="159" />
    					<p class="about_bio">Mostafa Musab Naveed
    					<br>
    					I am Mustafa Musab Naveed, from Dhaka Bangladesh. I had started my university life at BRAC University, and completed three semesters there. Then one of my cousins insisted me to apply in UTM. Because things were not going as expected there. Now it feels proud to being here at UTM with such talented people around. I choose Software Engineering as major for my undergrad program and this is one of my dream to achieve my desire to be a successful software developer. Besides all of this I love to watch movies and series during my leisure times.

    At work, I’m known for my love for extracurricular activities! I enjoy creating and designing projects outside of my academic life to share and engage with others experiences.</p>

    					<div class="cl">&nbsp;</div>
    				</div>
    			</div>
    			<!-- End Content -->


    <!-- Begin Sidebar -->

    			<!-- End Sidebar -->
    			<div class="cl">&nbsp;</div>

    		</div>
    		<!-- End Main -->

    		<div id="footer">
    			<div class="boxes">
    				<!-- Begin Shell -->
    				<div class="shell">
    					<div class="box post-box">
    						<h2>About OneShopping</h2>
    						<div class="box-entry">

    							<p class="about" style="margin-top: 0px;">You can be confident when you're shopping online with OneShopping. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.You can be confident when you're shopping online with Oneshopping. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.OneShopping is a place where u can order your daily needs. We respect your comfort.
    								We are trying out best to give your desire products as fast as we can. </p>
    							<div class="cl">&nbsp;</div>
    						</div>
    					</div>
    					<div class="box social-box">
    						<h2>We are Social</h2>
    						<ul>
    							<li><a href="#" title="Facebook"><img src="images/social-icon1.png" alt="Facebook"><span>Facebook</span><span class="cl">&nbsp;</span></a></li>
    							<li><a href="#" title="Twitter"><img src="images/social-icon2.png" alt="Twitter"><span>Twitter</span><span class="cl">&nbsp;</span></a></li>
    							<li><a href="#" title="RSS"><img src="images/social-icon4.png" alt="RSS"><span>RSS</span><span class="cl">&nbsp;</span></a></li>
    							<li><a href="#" title="Blogger"><img src="images/social-icon7.png" alt="Blogger"><span>Blogger</span><span class="cl">&nbsp;</span></a></li>
    						</ul>
    						<div class="cl">&nbsp;</div>
    					</div>
    					<div class="box">
    						<h2>Information</h2>
    						<ul>
    							<li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
    							<li><a href="#" title="Contact Us">Contact Us</a></li>
    							<li><a href="#" title="Log In">Log In</a></li>
    							<li><a href="#" title="Account">Account</a></li>

    						</ul>
    					</div>
    					<div class="box last-box">
    						<h2>Categories</h2>
    						<ul>
    							<li><a href="#" title="Clothes">Clothes</a></li>
    							<li><a href="#" title="Cleaning Material">Cleaning Material</a></li>
    							<li><a href="#" title="Fizzi Drinks">Fizzy Drinks</a></li>
    							<li><a href="#" title="Food Stuff">Food Stuff</a></li>
    						</ul>
    					</div>
    					<div class="cl">&nbsp;</div>
    				</div>
    				<!-- End Shell -->
    			</div>
    			<div class="copy">
    				<!-- Begin Shell -->
    				<div class="shell">

    					<p class="index_footer_copy"> <a href="index.php"><i>
    									<font color="fefefe"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M10.08 10.86c.05-.33.16-.62.3-.87s.34-.46.59-.62c.24-.15.54-.22.91-.23.23.01.44.05.63.13.2.09.38.21.52.36s.25.33.34.53.13.42.14.64h1.79c-.02-.47-.11-.9-.28-1.29s-.4-.73-.7-1.01-.66-.5-1.08-.66-.88-.23-1.39-.23c-.65 0-1.22.11-1.7.34s-.88.53-1.2.92-.56.84-.71 1.36S8 11.29 8 11.87v.27c0 .58.08 1.12.23 1.64s.39.97.71 1.35.72.69 1.2.91 1.05.34 1.7.34c.47 0 .91-.08 1.32-.23s.77-.36 1.08-.63.56-.58.74-.94.29-.74.3-1.15h-1.79c-.01.21-.06.4-.15.58s-.21.33-.36.46-.32.23-.52.3c-.19.07-.39.09-.6.1-.36-.01-.66-.08-.89-.23-.25-.16-.45-.37-.59-.62s-.25-.55-.3-.88-.08-.67-.08-1v-.27c0-.35.03-.68.08-1.01zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path></svg><strong>2021 OneShopping Groups. All rights reserved.</strong></font>
    								</i></a></p>
    					<div class="cl">&nbsp;</div>
    				</div>
    				<!-- End Shell -->
    			</div>
    		</div>

    	<!-- End Wrapper -->
    </body>
    </html>
