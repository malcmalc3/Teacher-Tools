<?php $title = "Search for a Course"; include 'header.php';?>

<?php
if(!isset($_SESSION['FirstName']))
{
    $_SESSION['URL'] = basename($_SERVER['PHP_SELF']);
    header('Location: StudentLogin.php');
}
?>

<form action="Register_For_Class2.php" method="post">

<div>
<label><span style="white-space: nowrap; width: 400px;">Search by Professor First Name, Last Name, or Class Name:</span>
<input type="text" placeholder="Search" name="SearchText" required />
</label>
</div>
    
<div>
<input type="submit" value="Submit" />
</div>

</form>

<?php include 'footer.php';?>