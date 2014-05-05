<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">
          body{ 
            background-image:url("./background.jpg");
            /*background-repeat:no-repeat;*/ 
            background-size:100%;
            font-family:"Freestyle Script", Times, serif;
            color: white;
           
          }
          </style>
    </head>
    <body>
       <form action="last_five_messages.php" method="get">
            <table>
                <tr>
                    <td><h1>DISPLAY RECENT 5 MESSAGES</h1></td>
                </tr>
                <tr>
                 <td>GROUP NAME:
                <?php
                       $con=mysqli_connect("localhost","root","","phonebook");
                       // Check connection
                       if (mysqli_connect_errno())
                       {
                         echo "Failed to connect to MySQL: " . mysqli_connect_error();
                       }
                       $result = mysqli_query($con,"SELECT * FROM groups");
                       echo "<select name='group'>";
                            $row = mysqli_fetch_array($result);
                            echo "<option value='1'>".$row['group_name']."</option>";  
                            $row = mysqli_fetch_array($result);
                            echo "<option value='2'>".$row['group_name']."</option>";    
                            $row = mysqli_fetch_array($result);
                            echo "<option value='3'>".$row['group_name']."</option>";    
                            $row = mysqli_fetch_array($result);
                            echo "<option value='4'>".$row['group_name']."</option>";    
                            $row = mysqli_fetch_array($result);
                            echo "<option value='5'>".$row['group_name']."</option>";    
                            $row = mysqli_fetch_array($result);
                            echo "<option value='6'>".$row['group_name']."</option>";    
                            $row = mysqli_fetch_array($result);
                            echo "<option value='7'>".$row['group_name']."</option>";    
                            $row = mysqli_fetch_array($result);
                            echo "<option value='8'>".$row['group_name']."</option>";    
                            $row = mysqli_fetch_array($result);
                            echo "<option value='9'>".$row['group_name']."</option>";    
                            $row = mysqli_fetch_array($result);
                            echo "<option value='10'>".$row['group_name']."</option>";    
                       
                       mysqli_close($con);
                    ?> 
                     </td>
             </tr>
             <tr>
                 <td>&nbsp;</td>
             </tr>
             <tr>
                 <td >
                     <input type="submit" value="     GET     ">
                 </td>
             </tr>
            </table>
        </form>
    </body>
</html>
