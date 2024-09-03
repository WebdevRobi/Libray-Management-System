<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Borrow Books
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Transaction</li>
        <li class="active">Borrow</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-warning"></i> Error!</h4>
                <ul>
                <?php
                  foreach($_SESSION['error'] as $error){
                    echo "
                      <li>".$error."</li>
                    ";
                  }
                ?>
                </ul>
            </div>
          <?php
          unset($_SESSION['error']);
        }

        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              
              <div class="col-md-6 well">
             
		<form class="form-inline" method="POST" action="">
    <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Borrow</a>
    <button class="btn btn-sm btn-success bg-success btn-flat" type="button" id="print"><i class="fa fa-print"></i> Print</button>
			<label>Date:</label>
			<input type="date" class="form-control" placeholder="Start"  name="from_date" id="from_date" value="<?php echo isset($_POST['from_date']) ? $_POST['from_date'] : '' ?>" />
			<label>To</label>
			<input type="date" class="form-control" placeholder="End"  name="end_date" id="end_date" value="<?php echo isset($_POST['end_date']) ? $_POST['end_date'] : '' ?>"/>
			<button class="btn btn-primary" name="btn_search" id="btn_search" value="Search"><span class="glyphicon glyphicon-search"></span></button> <a href="borrow.php" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a>
     
    
    </form>

    
      </div>
            </div>
            <div class="box-tools pull-right">
            <form class="form-inline">
                  <div class="form-group">
                    <label>Section List: </label>
                    <select class="form-control input-sm" id="select_section">
                      <option value="0">Select Section</option>
                      <?php
                        $sql = "SELECT * FROM course";
                        $query = $conn->query($sql);
                        while($title = $query->fetch_assoc()){
                          $selected = ($id == $id['id']) ? " selected" : "";
                          echo "
                            <option value='".$title['code']."' ".$selected.">".$title['code']."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="box-body" id="order_table">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Date Borrow</th>
                  <th>Student ID</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Section</th>
                  <th>ISBN</th>
                  <th>Title</th>
                  <th>Status</th>
           
                </thead>
                <tbody>

                
                
                  <?php
                 

                 
                    $sql = "SELECT *, students.student_id AS stud, borrow.status AS barstat FROM borrow LEFT JOIN students ON students.id=borrow.student_id LEFT JOIN course ON course.id=students.course_id LEFT JOIN books ON books.id=borrow.book_id ORDER BY date_borrow DESC";
                    $query = $conn->query($sql);

              
                      while($row = $query->fetch_assoc()){
                      if($row['barstat']){
                        $status = '<span class="label label-success">returned</span>';
                      }
                      else{
                        $status = '<span class="label label-danger">not returned</span>';
                      }
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".date('M d, Y', strtotime($row['date_borrow']))."</td>
                          <td>".$row['stud']."</td>
                          <td>".$row['firstname'].' '.$row['lastname']."</td>
                          <td>".$row['gender']."</td>
                          <td>".$row['code']."</td>
                          <td>".$row['isbn']."</td>
                          <td>".$row['title']."</td>
                          <td>".$status."</td>
                         
                        </tr>
                      ";
                    }
                  ?>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
  <?php include 'includes/footer.php'; ?>
  
  <?php include 'includes/borrow_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>


<noscript id="print-header">
    <div class="row">
        <div class="col-2 d-flex justify-content-center align-items-center">
            <img src="images/school.png" class="img-circle" id="sys_logo" alt="">
        </div>
        <div class="col-8">
            <h4 class="text-center"><b>Benito Soliven National High School</b></h4>
            <h3 class="text-center"><b>Borrower's List</b></h3>
        </div>
        <div class="col-2"></div>
    </div>

    <div class="box-body" id="order_table">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Date Borrow</th>
                  <th>Student ID</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Section</th>
                  <th>ISBN</th>
                  <th>Title</th>
                  
                  <th>Status</th>
           
                </thead>
                <tbody>
                <?php
                 

                 
                 $sql = "SELECT *, students.student_id AS stud, borrow.status AS barstat FROM borrow LEFT JOIN students ON students.id=borrow.student_id LEFT JOIN course ON course.id=students.course_id LEFT JOIN books ON books.id=borrow.book_id ORDER BY date_borrow DESC";
                 $query = $conn->query($sql);

           
                   while($row = $query->fetch_assoc()){
                   if($row['barstat']){
                     $status = '<span class="label label-success">returned</span>';
                   }
                   else{
                     $status = '<span class="label label-danger">not returned</span>';
                   }
                   echo "
                     <tr>
                       <td class='hidden'></td>
                       <td>".date('M d, Y', strtotime($row['date_borrow']))."</td>
                       <td>".$row['stud']."</td>
                       <td>".$row['firstname'].' '.$row['lastname']."</td>
                       <td>".$row['gender']."</td>
                       <td>".$row['code']."</td>
                       <td>".$row['isbn']."</td>
                       <td>".$row['title']."</td>
                       <td>".$status."</td>
                      
                     </tr>
                   ";
                 }
               ?>
                </tbody>
              </table>
          
              <br>
              <br>
              <br>
              <br>
              <h4 class="text-left"><b>Prepared by: _________________</b></h4>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
</noscript>
<script>
$(function(){
  $(document).on('click', '#append', function(e){
    e.preventDefault();
    $('#append-div').append(
      '<div class="form-group"><label for="" class="col-sm-3 control-label">ISBN</label><div class="col-sm-9"><input type="text" class="form-control" name="isbn[]"></div></div>'
    );

    
  });
});




</script>


<script>
    $('#print').click(function(){
  
  $('#book-list').dataTable().fnDestroy()
  var _h = $('head').clone()
  var _p = $('#outprint').clone()
  var _ph = $($('noscript#print-header').html()).clone()
  var _el = $('<div>')
  _p.find('tr.bg-gradient-dark').removeClass('bg-gradient-dark')
  _p.find('tr>td:last-child,tr>th:last-child,colgroup>col:last-child').remove()
  _p.find('.badge').css({'border':'unset'})
  _el.append(_h)
  _el.append(_ph)
  _el.find('title').text('Borrowers List - Print View')
  _el.append(_p)


  var nw = window.open('','_blank','width=1000,height=900,top=50,left=200')
      nw.document.write(_el.html())
      nw.document.close()
      setTimeout(() => {
          nw.print()
          setTimeout(() => {
              nw.close()
              end_loader()
              $('.table').dataTable({
                  columnDefs: [
                      { orderable: false, targets: 5 }
                  ],
              });
          }, 300);
      }, (750));
      
  
})
</script>


<script>
  $(document).ready(function () {
 
    $('.dateFilter').datepicker({
      dateFormat: "yy-mm-dd"
    });
 
    $('#btn_search').click(function () {
      var from_date = $('#from_date').val();
      var end_date = $('#end_date').val();
      if (from_date != '' && end_date != '') {
        $.ajax({
          url: "filter.php",
          method: "POST",
          data: { from_date: from_date, end_date: end_date },
          success: function (data) {
            $('#order_table').html(data);
          }
        });
      }
      else {
        alert("Please Select the Date First");
      }
    });
  });
</script>

<!-- Script -->
<script src='jquery-3.3.1.js' type='text/javascript'></script>
   <script src='jquery-ui.min.js' type='text/javascript'></script>
   <script type='text/javascript'>
   $(document).ready(function(){
     $('.dateFilter').datepicker({
        dateFormat: "yy-mm-dd"
     });
   });
   </script>

   <script>
$(function(){
  $('#select_section').change(function(){
    var value = $(this).val();
    if(value == 0){
      window.location = 'borrow.php';
    }
    else{
      window.location = 'borrow.php?student_section='+value;
    }

    
  });
});
    </script>
</body>
</html>
