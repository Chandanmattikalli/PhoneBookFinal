<html>
    <title>
        PHONE BOOK
    </title>
    <style>
       
    </style>
    <body bgcolor="white">
        <h1 class="one" align="center">PHONE BOOK</h1>
        <div class="one">
        <form action="addcontact.php" method="get">
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
                       $con=mysqli_connect("localhost","root","root","phonebook");
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
                        <input type="submit" value="          ADD          ">
                    </td>
                </tr>
            </table>
        </form>
            </div>
        <div class="three">
        <form action="add_group.php" method="get">
            <table>
                <tr><td><h1>ADD NEW GROUP</h1></td></tr>
                <tr><td>GROUP NAME  :<input type="text" size="20" name="name" maxlength="20"></td></tr>
                <tr>
                 <td>&nbsp;</td>
                 
             </tr>
             <tr>
                 <td>&nbsp;</td>
             </tr>
                <tr><td align="left"><input type="submit" value="            ADD             "></td></tr>
            </table>
        </form>
        </div>
        
        <div class="two">
        <form action="send_message.php" method="get">
            <table>
                <tr>
                    <td>
                        <h1>SEND MESSAGE</h1>
                    </td>
                </tr>
             <tr>
                 <td>GROUP NAME:
                <?php
                       $con=mysqli_connect("localhost","root","root","phonebook");
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
                 <td>
                     MESSAGE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="20" maxlength="40" name="message">
                 </td>
             </tr>
             <tr>
                 <td>&nbsp;</td>
             </tr>
             
             <tr>
                 <td >
                     <input type="submit" value="     send message     ">
                 </td>
             </tr>
            </table>
        </form>
            </div>
        <div class="four">
        <form action="retrieve.php" method="get">
            <table>
                <tr>
                    <td><h1>GET NO. OF PEOPLE IN GROUP</h1></td>
                </tr>
                <tr>
                 <td>GROUP NAME:
                <?php
                       $con=mysqli_connect("localhost","root","root","phonebook");
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
            </div>
        
          <div class="five">
        <form action="last_five_messages.php" method="get">
            <table>
                <tr>
                    <td><h1>DISPLAY RECENT 5 MESSAGES</h1></td>
                </tr>
                <tr>
                 <td>GROUP NAME:
                <?php
                       $con=mysqli_connect("localhost","root","root","phonebook");
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
            </div>
        <div class="six">
        <form action="conmmon_contacts.php" method="get">
            <table>
                <tr>
                    <td><h1>DISPLAY COMMON CONTACTS IN TWO DIFFERENT GROUPS</h1></td>
                </tr>
             
             <tr>
                 <td >
                     <input type="submit" value="     GET     ">
                 </td>
             </tr>
            </table>
        </form>
            <div class="seven">
                <form action="disp_all.php" method="get">
                    <input type="submit" value="VIEW ALL CONTACTS">
                </form>
            </div>
    </body>
</html>

