<?php

include("config/db_config.php");
$email = $_POST['email'];
$location = $_POST['redirect_location'];
$query="select * from cravings_test_user_details where email_id = '$email'";
$result = $conn->query($query);
if(!$result) {echo $conn->error; }
if (mysqli_num_rows($result) > 0)
{
    session_start();
    echo "user exists";
    if(!isset($_SESSION['cravings_id']))
    {

        while ($row = mysqli_fetch_assoc($result))
        {
            $_SESSION['cravings_id']= $row['cravings_id'];
            $_SESSION['email'] = $row['email_id'];
            $_SESSION['first_name'] = $row['first_name'];
            //$_SESSION['last_name']= $row['last_name'];
            header("Location: ../$location");
        }
    }
    else
    {
        echo "<script>console.log('session already started');</script>";
        echo $_SESSION['cravings_id'];
    }


}
else{
	echo "here";
  $name= $_POST['name'];
  $google_id= $_POST['google_id'];
  $profile_image_url= $_POST['img_url'];
  //$name = trim($name);
  //$last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
  //$first_name = trim( preg_replace('#'.$last_name.'#', '', $name ) );
  $query="insert into cravings_test_user_details (first_name, last_name, email_id, profile_image_url, google_id) values "
        ."('$name', '$name', '$email','$profile_image_url', '$google_id')";
  if($result = $conn->query($query))
  {
    echo "new user added";
    session_start();
    $_SESSION['cravings_id'] = $conn->insert_id;
    $_SESSION['email'] = $email;
    $_SESSION['first_name'] = $name;
    //$_SESSION['last_name']= $last_name;
    header("Location: ../$location");
  }
  else
  {
  	echo $conn->error;
  }

}
?>
