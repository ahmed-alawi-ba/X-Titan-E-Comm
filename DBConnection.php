
<?php



// a function to return the connection to the database "x_titan" in the server  "localhost", and root user, with the password "1234"

function connect(){

	$dbConnect = mysqli_connect("localhost","root","1234","x_titan");

	return $dbConnect;
}


// A function to return the query for select an image in the database 
function selectImageId($id){

	$selectImage = "SELECT image FROM announce_board WHERE id=" . $id .";";

	return $selectImage;
}



// A function to return the query for select an image and the title in the database
function selectImageAndTitleId($id){

	$selectImage = "SELECT title, image FROM announce_board WHERE id=" . $id .";";

	return $selectImage;
}









// a function to display the first big announcement
function show_announcement_1(){

	$dbConnect = connect();


	$selectImage = selectImageId(1);


	$result = $dbConnect->query($selectImage);

	if ($result->num_rows > 0) {

    	while($row = $result->fetch_assoc()) {
    		$image = $row["image"];
        	echo "<a href=\"\"><img class=\"left\" src=\"$image\" style=\"width:700px; height: 320px;\"></a>"; 
    	}
	}

}








// a function to display the second announcement, which is right to the big first announcement
function show_announcement_2(){

	$dbConnect = connect();


	$selectImage = selectImageId(2);


	$result = $dbConnect->query($selectImage);

	if ($result->num_rows > 0) {

    	while($row = $result->fetch_assoc()) {
    		$image = $row["image"];
        	echo "<a href=\"\"><img class=\"left\" id=\"ketchup_img\" src=\"$image\" style=\"width: 266px; height: 320px;\"></a>"; 
    	}
	}

}







// a function to display any special offer announcement
function show_special_offer($id){

	$dbConnect = connect();


	$selectImage = selectImageAndTitleId($id);


	$result = $dbConnect->query($selectImage);

	if ($result->num_rows > 0) {

    	while($row = $result->fetch_assoc()) {
    		$image = $row["image"];
    		$title = $row["title"];
        	echo "<a href=\"\">	
					<img class=\"item_img\" src=\"$image\" style=\"height: 220px; width: 220px;\">

					<h4 class=\"item_title\"> $title </h4>
				</a>"; 
    	}
	}

}








// a function to check if the user email and password are correct/exist in the database.
// returns true if correct, otherwise false.
function check_user($email, $password){


	$dbConnect = connect();

	$exist = false;

	$select = "SELECT email, password FROM admin_users";

	$result = $dbConnect->query($select);

	if ($result->num_rows > 0) {

    	while($row = $result->fetch_assoc()) {
	        $db_email = $row["email"];
	        $db_password = $row["password"];

	        if ($db_email == $email && $db_password == md5($password)) {
	        	$exist = true;
	        }

    	}
	}

	return $exist;
}









// a function to update any of the first two announcements' images.
// accepts two paremeters: 
// $image: the name of the image.
// $id: the id of the image in the database.
function update_image($image, $id){

	$dbConnect = connect();

	$update = "UPDATE announce_board SET image='images/$image' WHERE id=$id";

	if ($dbConnect->query($update) == true) {
    	echo "<p>Announcement updated successfully</p>";
	} else {
    	echo "<p>Error updating announcement: " . $dbConnect->error . "</p>";
	}
}










// a function to update any of the special offers announcements.
// accepts three paremeters: 
// $image: the name of the image.
// $title: the title of the announcement
// $id: the id of the image in the database.
function update_image_and_title($image, $title, $id){

	$dbConnect = connect();

	$update = "UPDATE announce_board SET image='images/$image', title='$title' WHERE id=$id";

	if ($dbConnect->query($update) == true) {
    	echo "<p>Announcement updated successfully</p>";
	} else {
    	echo "<p>Error updating Announcement: " . $dbConnect->error . "</p>";
	}
}












?>