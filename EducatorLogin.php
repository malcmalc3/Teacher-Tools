<?php $title = "Educator Login"; include 'header.php';?>

<form method="post" action="EducatorLoginVerify.php">

<div>
<label><span>Username:</span>
<input type="text" id="AdminUsername" name="AdminUsername" />
</label>
</div>

<div>
<label><span>Password:</span>
<input type="password" id="EducatorPassword" name="EducatorPassword" />
</label>
</div>

<div>
<input type="submit" value="Submit" />
</div>

</form>

<?php include 'footer.php';?>