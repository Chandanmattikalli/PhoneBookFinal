<?php 
 $group= $_GET["group"];echo "<br>";
 $count=0;
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
  echo "group name:".$row['group_name'];
  $grp=$row['group_name'];

  
    $resul = mysqli_query($con,"SELECT * FROM details WHERE group_name='$grp'");
 

  echo "<br>";
echo "<h1>PEOPLE PRESENT IN THIS GROUP</h1>";
print"<table border=\"1\"align='center'>";
    print"<tr><td>Name</td><td>Ph. No.</td></tr>";
while($row = mysqli_fetch_array($resul))
  {
     echo"<tr><td>$row[1]<td>$row[2]<td></tr>";
     $count++;
  }
      echo "</table>";
      echo "NO FO PEOPLE :". $count;
      echo "<br>";
      echo "<br>";
      echo "<br><br>";echo "<br>";echo "<br>";echo "<br>";
      
      echo "<input type='button' value='click here to go back to main page' onclick='back();'>";
     mysqli_close($con);
?> 
<script>
    function back()
    {
        window.location.replace("phone_book.php")  ;
    }
</script>