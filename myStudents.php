
<?php
session_start();
$title = 'My Students - ' . $_SESSION['$CourseName']; 
include 'header.php';

if(!isset($_SESSION['CourseID']) || !isset($_SESSION['TeacherID']))
{
	header('Location: myClass.php');
}

include("ConnectDatabase.php"); //Goes through steps of connecting to database

echo $_SESSION['$CourseID'];
echo $_SESSION['$CourseName'];
echo "<h2>Select a student to view performance in course.</h2><br>";

$CourseID = $_SESSION['$CourseID'];
$query = "SELECT UserName, FirstName, LastName, StudentID FROM StudentsUser WHERE StudentID IN (SELECT StudentID FROM Enrollment WHERE CourseID = '$CourseID')";

//Attempt to get students's information taking the course

if($r=mysqli_query($link, $query))
{
	while($row=mysqli_fetch_array($r))
	{
		echo "<button class='button' onclick='myFunction(" . $row['StudentID'] . ")'>"
		. $row['FirstName'] . " " . $row['LastName'] . " " . $row['UserName'] . "</button><br><br>";    		
	}
}
else
{
	echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}

include 'footer.php';
?>