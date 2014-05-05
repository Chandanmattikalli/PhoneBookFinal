<?php

mysql_connect("localhost","root","","phonebook")or die(mysqu_error());
$db=  mysql_select_db("test") or die(mysql_error());
$sql="select *from details";
$res=mysql_query($sql);
if(mysql_num_rows($res)>0)
{
    print"<center><h2>Query Executed Successfully !!</h2></center><hr>";
    print"<table border=\"1\"align='center'>";
    print"<tr><td>Name</td><td>sem</td></tr>";
    $res=mysql_query($sql);
    while($row=mysql_fetch_array($res))
    {
        echo"<tr><td>$row[0]<td>$row[1]<td></tr>";
        echo"<tr><td>$row[2]</td></tr>";
    }
    print"</table>";
}
?>
