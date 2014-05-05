<?php $message= $_GET["message"]; echo "MESSAGE  :".$message;echo"<br>";
 $group= $_GET["group"];

$con=mysqli_connect("localhost","root","root","phonebook");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  $result = mysqli_query($con,"SELECT * FROM groups");
  if($group==="1")
    $row = mysqli_fetch_array($result);
  if($group==="2")
  {
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
  }
  if($group==="3")
  {
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
  }
  if($group==="4")
  {
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
  }
  if($group==="5")
  {
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
  }
  if($group==="6")
  {
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
  }
  if($group==="7")
  {
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
  }
  if($group==="8")
  {
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
  }
  if($group==="9")
  {
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
  }
  if($group==="10")
  {
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
      $row = mysqli_fetch_array($result);
  }
  $g=$row['group_name'];
  echo "GROUP :".$row['group_name']."<br>";   
  $sql="INSERT INTO messages (group_name, message)VALUES('$g','$message')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "SENT SUCCESSFULLY....!!";
echo "<br>";
echo "<input type='button' value='click here to go back to main page' onclick='back();'>";
mysqli_close($con);
?>
<script>
    function back()
    {
        window.location.replace("phone_book.php")  ;
    }
</script>
 