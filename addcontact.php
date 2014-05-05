<?php $name= $_GET["name"]; echo "NAME  :".$name;echo"<br>";
 $phno= $_GET["phno"]; echo "PHONE NUMBER  :".$phno;echo"<br>";
 $group= $_GET["group"]; echo "GROUP  :";

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
  echo $row['group_name'];   
  $sql="INSERT INTO details (group_name, name, phno)VALUES('$g','$name','$phno')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
  echo "<br>";
echo "SUCCESSFULLY ADDED"."<br>";
echo " <input type='button' value='click here to go back to main page' onclick=goback();>"
?> 
<script>
    function goback()
    {
        
         window.location.replace("phone_book.php")  ;
    }
</script>