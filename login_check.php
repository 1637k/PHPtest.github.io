

<?php 
include 'config.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

//echo $email . ' '. $password;

$query = "SELECT * FROM admin_user WHERE `email`='".$email."' AND `password`='".$password."'";
$run = mysqli_query($conn , $query);
$userdetail = mysqli_fetch_array($run);
$usercount = mysqli_num_rows($run);
//print_r($userdetail);
if($usercount > 0)
{ 
	
	//$abc = "";
	$_SESSION['userid'] = $userdetail['id'];
	$_SESSION['fname'] = $userdetail['first_name'];
	$_SESSION['lastname'] = $userdetail['last_name'];
	$_SESSION['email'] = $userdetail['email'];
?>
<script type="text/javascript">
	document.location.href="dashboard.php";
</script>
	<!--header("Location : dashboard.php"); -->
<?php }
else
{ ?>
	<script type="text/javascript">
	document.location.href="login.php?flg=invalid";
</script>
<?php 
}
?>