
<?php $title = "File Upload"; include 'header.php';?>
<?php

$allowedExts = array("jpg", "jpeg", "gif", "png", "txt", "doc", "docx");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

if ((($_FILES["file"]["type"] == "text/plain")
|| ($_FILES["file"]["type"] == "application/msword")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/jpeg"))

&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";



    if (file_exists("temp/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
	
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"], "temp/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "temp/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
echo " <p>To view your files: ";
echo '<a href="list.html">Click here</a></p>';

?>
<?php include 'footer.php';?>