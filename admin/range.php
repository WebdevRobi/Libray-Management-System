<?php  

include 'includes/session.php';

?>

<?php
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
   
      
      $output = '';  
      $query = "  
           SELECT * FROM borrow  
           WHERE date_borrow BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">Date Borrow</th>  
                     <th width="30%">Student ID</th>  
                     <th width="43%">Name</th>  
                     <th width="10%">ISBN</th>  
                     <th width="12%">Title</th>  
                     <th width="12%">Status</th>  
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["date_borrow"] .'</td>  
                          <td>'. $row["student_id"] .'</td>  
                          <td>'$row['firstname'].' '.$row['lastname'].'</td>  
                          <td>$ '. $row["isbn"] .'</td>  
                          <td>'. $row["title"] .'</td> 
                          <td>'. $row["status"] .'</td> 
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Records Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>
