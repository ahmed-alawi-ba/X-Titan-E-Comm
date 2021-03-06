<!DOCTYPE html>

<head>

<meta />
<link rel="stylesheet" type="text/css" href="style.css"> 
</link>

<title> X Titan E-Comm
</title>
 
</head>

<body>
	<?php
		include 'copyright.php';
		include 'DBConnection.php';
	?>


	<div id="bg">

		<div id="main">

			<div id="header">

				<div class="left" id="logo">
					<h1 id="x_titan" class="left">X Titan</h1>
					<h2 id="header_title" class="left"> E-Comm Announcement Board</h2>
				</div>


				
				<div> <h6 id="for_admin" class="right">*for adminstrative users only</h6>
				</div>

				<a href="login.php">
				<div id="login" class="right">
					<h4> Login </h4>
				</div>
				</a>


		
			</div>




			<div id="sub_header">
				

			</div>


<!------------------------first part of the body------------------------->


			<div id="first_part">

				<div class="left" id="categories">
					<ul id="categ_list_1">
						<li class="list_title"> Groceries</li>
						<a href=""><li class="list"> Fresh food</li></a>
						<a href=""><li class="list"> Beverages</li></a>
						<a href=""><li class="list"> Pets food</li></a>
						<li class="list_title"> Electronics</li>
						<a href=""><li class="list"> Smart phones</li></a>
						<a href=""><li class="list"> Laptops</li></a>
						<a href=""><li class="list"> Accessories</li></a>
						<li class="list_title"> Health & Beauty</li>
						<a href=""><li class="list"> Skincare & makeup</li></a>
						<a href=""><li class="list"> food supplements</li></a>
					</ul>


				</div>



				<div id="big_announce">
					
					<?php

					show_announcement_1();

					show_announcement_2();

					?>
				

				</div>
				

			</div>



<!------------------------second part of the body------------------------->


			<div id="divider">
				
				<h6 id="special"> Special Offers</h6>

			</div>



			<div id="second_part">


				
				<div class="left specialoffer_item" id="item_1">
				
				<?php
				show_special_offer(3);
				?>	


				</div>
				


				<div class="left specialoffer_item" id="item_1">
				
				<?php
				show_special_offer(4);
				?>	

				</div>



				<div class="left specialoffer_item" id="item_1">

				<?php
				show_special_offer(5);
				?>	

				</div>



				<div class="left specialoffer_item" id="item_1">

				<?php
				show_special_offer(6);
				?>	

				</div>


				
 
				<div class="right" id="see_more"> <a href=""><h6> See more > </h6> </a></div>
				

			</div>


<!--------------------------   footer  ------------------------------>

			<div id="footer">
		
                <?php
				show_copyright();
			    ?>


			</div>







		</div>

	</div>
</body>