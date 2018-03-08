
<?php
include ('../php/config/db_config.php');
////////////////////////////////////////////////////////////////////

$cake_type = str_replace("string:","",$_POST['cake_type']);
$cake_subtype = str_replace("string:","",$_POST['cake_subtype']);
$cake_title = $_POST['cake_title'];
$cake_price = $_POST['cake_price'];
echo $cake_type;
echo "<br>".$cake_subtype;

/////////////////////////////////////////////////////////////////////

$target_dir = "images/cakes/";
$subtype_id = 0;

if($cake_type == 'Baptism')
{
  $type_id = 2;
  $target_dir.="baptism/";
}
else if($cake_type == 'Communion')
{
  $type_id = 4;
  $target_dir.="communion/";
}
else if($cake_type == 'Wedding')
{
  $type_id = 5;
  $target_dir.="wedding/";
}
else if($cake_type == 'Adult')
{
  $type_id = 6;
  $target_dir.="adult/";
}
else if($cake_type == 'Other')
{
  $type_id = 7;
  $target_dir.="other/";
}
else if($cake_type == 'Anniversary')
{
  $type_id = 1;
  if($cake_subtype == '25th Anniversary')
  {
    $subtype_id = 1;
    $target_dir.="anniversary/25-anniversary/";
  }
  else if($cake_subtype == '50th Anniversary')
  {
    $subtype_id = 2;
    $target_dir.="anniversary/50-anniversary/";
  }
  else if($cake_subtype == 'other')
  {
    $subtype_id = 8;
    $target_dir.="anniversary/other/";
  }
}
else if($cake_type == 'Birthday')
{
  $type_id = 3;
  if($cake_subtype == '1st Birthday')
  {
    $subtype_id = 3;
    $target_dir.= "birthday/1-birthday/";
  }
  if($cake_subtype == '21st Birthday')
  {
    $subtype_id = 4;
    $target_dir.= "birthday/21-birthday/";
  }
  if($cake_subtype == '50th Birthday')
  {
    $subtype_id = 5;
    $target_dir.= "birthday/50-birthday/";
  }
  if($cake_subtype == 'football')
  {
    $subtype_id = 9;
    $target_dir.= "birthday/football/";
  }
  if($cake_subtype == 'Kids')
  {
    $subtype_id = 6;
    $target_dir.= "birthday/cartoon-birthday/";
  }
  if($cake_subtype == 'other')
  {
    $subtype_id = 7;
    $target_dir.= "birthday/other/";
  }
}
$location = $target_dir;
$target_dir = "../".$target_dir;
//////////////////////////////////////////////////////////////////////////////

$query= "insert into cravings_test_cake_details(title, type_id, subtype_id, location, price) "
        ." values('$cake_title', $type_id, $subtype_id, '$location', $cake_price)";
if($result = $conn->query($query))
{
  echo "<br>insert check";
  $cake_id = $conn->insert_id;
}
$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
$image_name = "$cake_id.$imageFileType";

$query = "update cravings_test_cake_details set location = CONCAT(location, '$image_name') where cake_id=$cake_id";
if($result = $conn->query($query))
{
  echo "<br>update check";
}


////////////////////////////////////////////////////////////////////////////

echo "<br> basename: ".basename($_FILES["fileToUpload"]["name"])."<br>";
$target_file = $target_dir . $image_name;
$uploadOk = 1;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<br>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded."
        ."<br> location: ".$target_dir.$image_name;
    } else {
        echo "<br>Sorry, there was an error uploading your file.";
    }
}
?>
