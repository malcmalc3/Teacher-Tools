<?php $title = "My Classes"; include 'header.php';?>


<li>
	<a href="#">See other assignments</a>
</li>

	 <body>
	 
<h3>File upload </h3>
<p style="font-family:courier;">Select File</p>
<form action ="#" method = "post" enctype="multipart/form-data">
<input type="file" name ="file" size = "500" >
<input type ="submit" name="T1" value = "Upload File">

  <?php if (count($_POST)>0) echo "Form Submitted!"; ?>


</body>




<?php include 'footer.php';?>