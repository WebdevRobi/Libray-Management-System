<?php


// Connect to database server
$conn = new mysqli('localhost', 'root', '', 'libsystem') or die(mysqli_error());

   // Select database
   

 // SQL query
 $sql = "SELECT * FROM category";
 $query = $conn->query($sql);
 while($catrow = $query->fetch_assoc()){
   $selected = ($catid == $catrow['id']) ? " selected" : "";
   echo "
     <option value='".$catrow['id']."' ".$selected.">".$catrow['name']."</option>
   ";
 }

// Execute the query (the recordset $rs contains the result)
$rs = mysqli_query($conn,$strSQL);


  print "
  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
   <tr>
   <td width=100>ID:</td> 
  <td width=100>First Name</td> 
  <td width=100>Last Name</td> 
  <td width=100>Email</td> 
  <td width=100>User Name</td>
  <td width=100>Password</td> 
  <td width=100>Date Of Birth</td> 
  <td width=100>Gender</td> 
  </tr>"; 
 while($row = mysqli_fetch_array($rs))
 { 
print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['fname'] . "</td>"; 
print "<td>" . $row['lname'] . "</td>"; 
print "<td>" . $row['Email'] . "</td>";
print "<td>" . $row['uname'] . "</td>";
print "<td>" . $row['password'] . "</td>";
print "<td>" . $row['dob'] . "</td>";
print "<td>" . $row['gender'] . "</td>"; 
print "</tr>"; 
} 
print "</table>"; 

  }
 }
?>