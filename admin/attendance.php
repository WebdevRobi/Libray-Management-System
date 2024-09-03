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
      
      <ol class="breadcrumb">
        <i class="fa fa-dashboard"></i> Home</a></li>
        <li>settings</li>
        <li class="active">Attendance List</li>
      </ol>
      <button class="btn btn-sm btn-success bg-success btn-flat" type="button" id="print"><i class="fa fa-print"></i> Print</button>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
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
             
            </div>
            <div class="box-body" id="printableArea">
              <table id="example1" class="table table-bordered">
                <thead>
              
                  <th>Student ID</th>
                  <th>Student Name</th>
                  <th>Log type</th>
                  <th>Time log</th>
                  <th>Date Updated</th>
                  <th>Action</th>
               
                </thead>
                <tbody>
                <?php
            $attendance_qry = $conn->query("SELECT a.*,concat(e.firstname,' ',e.lastname) as name, e.student_id FROM `attendance` a inner join students e on a.student_id = e.id ") or die(mysqli_error());
            while($row = $attendance_qry->fetch_array()){
              
          ?>  
            <tr>
              <td><?php echo $row['student_id']?></td>
              <td><?php echo htmlentities($row['name'])?></td>
              <td><?php echo date("F d, Y", strtotime($row['datetime_log']))?></td>
              <?php 
              if($row['log_type'] ==1){
                $log = "TIME IN AM";
              }elseif($row['log_type'] ==2){
                $log = "TIME OUT AM";
              }
              elseif($row['log_type'] ==3){
                $log = "TIME IN PM";
              }elseif($row['log_type'] ==4){
                $log = "TIME OUT PM";
              }
              ?>
              <td><?php echo $log ?></td>
              <td><?php echo date("h:i a", strtotime($row['datetime_log']))?></td>
              <td><center><button data-id = "<?php echo $row['id']?>" class = "btn btn-sm btn-outline-danger remove_log" type="button"><i class = "fa fa-trash"></i></button></center></td>
            </tr>
          <?php
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
    
  
  <?php include 'includes/user_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>

<noscript id="print-header">
    <div class="row">
        <div class="col-2 d-flex justify-content-center align-items-center">
            <img src="images/school.png" class="img-circle" id="sys_logo" alt="">
        </div>
        <div class="col-8">
            <h4 class="text-center"><b>Benito Soliven National High School</b></h4>
            <h3 class="text-center"><b>Student Attendance List</b></h3>
        </div>
        <div class="col-2"></div>
    </div>

    <div class="box-body" id="printableArea">
              <table id="example1" class="table table-bordered">
                <thead>
              
               
                  <th>Student Name</th>
                  <th>Log type</th>
                  <th>Time log</th>
                  <th>Date Updated</th>
                
               
                </thead>
                <tbody>
                <?php
            $attendance_qry = $conn->query("SELECT a.*,concat(e.firstname,' ',e.lastname) as name, e.student_id FROM `attendance` a inner join students e on a.student_id = e.id ") or die(mysqli_error());
            while($row = $attendance_qry->fetch_array()){
              
          ?>  
            <tr>
            
              <td><?php echo htmlentities($row['name'])?></td>
              <td><?php echo date("F d, Y", strtotime($row['datetime_log']))?></td>
              <?php 
              if($row['log_type'] ==1){
                $log = "TIME IN AM";
              }elseif($row['log_type'] ==2){
                $log = "TIME OUT AM";
              }
              elseif($row['log_type'] ==3){
                $log = "TIME IN PM";
              }elseif($row['log_type'] ==4){
                $log = "TIME OUT PM";
              }
              ?>
              <td><?php echo $log ?></td>
              <td><?php echo date("h:i a", strtotime($row['datetime_log']))?></td>
              
            </tr>
          <?php
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
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'student_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.studid').val(response.studid);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#selcourse').val(response.course_id);
      $('#selcourse').html(response.code);
      $('.del_stu').html(response.firstname+' '+response.lastname);
    }
  });
}

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
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
  _el.find('title').text('Student Attendance List - Print View')
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
</body>
</html>
