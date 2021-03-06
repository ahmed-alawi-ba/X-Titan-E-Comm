<!DOCTYPE html>

<head>

<meta />
<link rel="stylesheet" type="text/css" href="edit.css"> 
</link>

<title> X Titan E-Comm
</title>
 
</head>

<body>
	


	<div id="bg">

		<div id="main">

			<div id="header">

				<div class="left" id="logo">
					<h1 id="x_titan" class="left">X Titan</h1>
					<h2 id="header_title" class="left"> E-Comm Announcement Board</h2>
				</div>


				
				

				<a href="index.php">
				<div id="login" class="right">
					<h4> Go t the HOME page </h4>
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
					<div class="left" id="big_left_announce">
						<h6 id="big_left_text">To change the image, upload the new image to the folder "images" </br>in the server, and type its name in the following field (with the extension).</br></br>the image extension must be "jpg"</br> </br>The image preferred size is:</br>700 x 320</br></br>image name:</h6>
						 
						<form action="edit.php" method="post">
							<input type="text" name="image_1">
							<input type="submit" name="save_1" value="save" class="submit">

							<?php

							include 'DBConnection.php';
							include 'copyright.php';

							if(isset($_POST['save_1'])){
								$image = $_POST['image_1'];
								if($image ==! ""){
									update_image($image,1);
								}
							}

							?>


						</form>
					</div>
					
				
					<div class="right" id="right_announce">
						<h6 id="right_text">To change the image, upload the new image to the folder "images" in the server, and type its name in the following field (with the extension).</br></br>the image extension must be "jpg"</br> </br>The image preferred size is:</br>266 x 320</br></br>image name: </h6>
						
						<form action="edit.php" method="post">
							<input type="text" name="image_2">
							<input type="submit" name="save_2" value="save" class="submit">

							<?php


							if(isset($_POST['save_2'])){
								$image = $_POST['image_2'];
								if($image =! ""){
									update_image($image,2);
								}
							}

							?>

						</form>
					</div>
					
				</div>
				

			</div>



<!------------------------second part of the body------------------------->


			<div id="divider">
				
				<h6 id="special"> Special Offers</h6>

			</div>



			<div id="second_part">


				
				<div class="left specialoffer_item" id="item_1">
				
					<h6 id="special_text">To change the image, upload the new image to the folder "images" in the server, and type its name in the following field (with the extension).</br></br>the image extension must be "jpg"</br> </br>The image preferred size is:</br>220 x 220</br></br>image name:</h6> 
					<form action="edit.php" method="post">
						<input type="text" name="image_3">
						<h6 id="special_text_title">Title</h6>
						<input type="text" name="title_3">
						<input type="submit" name="save_3" value="save" class="submit">

						<?php

						if(isset($_POST['save_3'])){
							$image = $_POST['image_3'];
							$title = $_POST['title_3'];
							if(!($image == "" && $title == "")){
								update_image_and_title($image,$title,3);
							}
						}

						?>

					</form>
				


				</div>
				


				<div class="left specialoffer_item" id="item_1">

					<h6 id="special_text">To change the image, upload the new image to the folder "images" in the server, and type its name in the following field (with the extension).</br></br>the image extension must be "jpg"</br> </br>The image preferred size is:</br>220 x 220</br></br>image name:</h6> 
					<form action="edit.php" method="post">
						<input type="text" name="image_4">
						<h6 id="special_text_title">Title</h6>
						<input type="text" name="title_4">
						<input type="submit" name="save_4" value="save" class="submit">

						<?php

						if(isset($_POST['save_4'])){
							$image = $_POST['image_4'];
							$title = $_POST['title_4'];
							if(!($image == "" && $title == "")){
								update_image_and_title($image,$title,4);
							}
						}

						?>

					</form>	

				

				</div>



				<div class="left specialoffer_item" id="item_1">

					<h6 id="special_text">To change the image, upload the new image to the folder "images" in the server, and type its name in the following field (with the extension).</br></br>the image extension must be "jpg"</br> </br>The image preferred size is:</br>220 x 220</br></br>image name:</h6> 
					<form action="edit.php" method="post">
						<input type="text" name="image_5">
						<h6 id="special_text_title">Title</h6>
						<input type="text" name="title_5">
						<input type="submit" name="save_5" value="save" class="submit">

						<?php

						if(isset($_POST['save_5'])){
							$image = $_POST['image_5'];
							$title = $_POST['title_5'];
							if(!($image == "" && $title == "")){
								update_image_and_title($image,$title,5);
							}
						}

						?>

					</form>


				</div>



				<div class="left specialoffer_item" id="item_1">
				
					<h6 id="special_text">To change the image, upload the new image to the folder "images" in the server, and type its name in the following field (with the extension).</br></br>the image extension must be "jpg"</br> </br>The image preferred size is:</br>220 x 220</br></br>image name:</h6> 
					<form action="edit.php" method="post">
						<input type="text" name="image_6">
						<h6 id="special_text_title">Title</h6>
						<input type="text" name="title_6">
						<input type="submit" name="save_6" value="save" class="submit">

						<?php

						if(isset($_POST['save_6'])){
							$image = $_POST['image_6'];
							$title = $_POST['title_6'];
							if(!($image == "" && $title == "")){
								update_image_and_title($image,$title,6);
							}
						}

						?>

					</form>


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