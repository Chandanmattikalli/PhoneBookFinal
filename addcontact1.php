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
        <script type="text/javascript">
var RE_SSN = /^[0-9]{10}$/;
 
function validate(ssn){
 if (RE_SSN.test(ssn)) {
   //  window.location.action("addcontact.php");
   
 } else {
  alert("INVALID  Phone Number\t" + ssn);
  //window.confirm("still want tio add");
  window.close();
  window.stop();
  window.self();
  
  window.home();
  document.form[0].reset();
  
 }
}
</script>
        
        
        
        
        
    </head>
    <body>
       <form  action="addcontact.php"  method="get"  >
            <table>
                <tr colspan="2">
                    <td><H1>ADD NEW CONTACT</h1></td>
                </tr>
                <tr>
                    <td>NAME :<input type="text" size="30" name="name" maxlength="20"></td>
                </tr>
                <tr>
                    <td>PHNO &nbsp;:<input type="text " size="30" name="phno" maxlength="16"></td>
                </tr>
                <tr>
                    <td>SELECT GROUP
                
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
                </select>
                </td>
                </tr>
                <tr>
                 <td>&nbsp;</td>
             </tr>
                <tr>
                    <td align="left">
                        <input type="submit" value="          ADD          " name="sub" onclick="validate(this.form.phno.value)">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
