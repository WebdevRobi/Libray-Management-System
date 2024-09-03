<?php
// include database connection file
include('db_connect.php');

if(isset($_POST["from_date"], $_POST["end_date"])) {
    $orderData = "";
    $query = "SELECT * FROM borrow WHERE date_borrow BETWEEN '".$_POST["from_date"]."' AND '".$_POST["end_date"]."'";
    $result = mysqli_query($conn, $query);

    $orderData .='
    <table class="table table-bordered">
    <tr>
    <th width="5%">Date Borrow</th>
    <th width="30%">Student ID</th>
    <th width="40%">Name</th>
    <th width="15%">ISBN</th>
    <th width="10%">Title</th>
    <th width="10%">Status</th>
    </tr>';

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $orderData .='
            <tr>
            <td>'.$row["date_borrow"].'</td>
            <td>'.$row["student_id"].'</td>
            <td>'.$row['firstname'].' '.$row['lastname'].'</td>
            <td>'.$row["isbn"].'</td>
            <td>'.$row["title"].'</td>
            <td>'.$status.'</td>
            </tr>';
        }
    }
    else
    {
        $orderData .= '
        <tr>
        <td colspan="5">No Record Found, Contact Admin</td>
        </tr>';
    }
    $orderData .= '</table>';
    echo $orderData;
}
?>