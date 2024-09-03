<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Students</li>
        <li class="active">Student List</li>
      </ol>
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
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
              <button class="btn btn-sm btn-success bg-success btn-flat" type="button" id="print"><i class="fa fa-print"></i> Print</button>
              <div class="box-tools pull-right">
              <form class="form-inline">
                  <div class="form-group">
                    <label>Section List: </label>
                    <select class="form-control input-sm" id="select_title">
                      <option value="0">Select Section</option>
                      <?php
                        $sql = "SELECT * FROM course";
                        $query = $conn->query($sql);
                        while($title = $query->fetch_assoc()){
                          $selected = ($title == $title['id']) ? " selected" : "";
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
            
            <div class="box-body" id="printableArea">
              <table id="example1" class="table table-bordered">
                <thead>
                <th>Class year</th>
                  <th>Section</th>
                  <th>Photo</th>
                  <th>Student ID</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Gender</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, students.id AS studid FROM students LEFT JOIN course ON course.id=students.course_id LEFT JOIN class_year ON class_year.id=students.class_year_id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      $photo = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                      echo "
                        <tr>
                        <td>".$row['class_year']."</td>
                          <td>".$row['code']."</td>
                          <td>
                            <img src='".$photo."' width='30px' height='30px'>
                            <a href='#edit_photo' data-toggle='modal' class='pull-right photo' data-id='".$row['studid']."'><span class='fa fa-edit'></span></a>
                          </td>
                          <td >".$row['student_id']."</td>
                          <td>".$row['firstname']."</td>
                          <td>".$row['lastname']."</td>
                          <td>".$row['gender']."</td>
                          <td>
                       
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['studid']."'><i class='fa fa-edit'></i> Edit</button>
                           
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['studid']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
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
    
  
  <?php include 'includes/student_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>

<noscript id="print-header">
    <div class="row">
        <div class="col-2 d-flex justify-content-center align-items-center">
            <img src="images/school.png" class="img-circle" id="sys_logo" alt="">
        </div>
        <div class="col-8">
            <h4 class="text-center"><b>Benito Soliven National High School</b></h4>
            <h3 class="text-center"><b>Student List</b></h3>
        </div>
        <div class="col-2"></div>
    </div>

    <div class="box-body" id="printableArea">
              <table id="example1" class="table table-bordered">
                <thead>
                <th>Class year</th>
                  <th>Section</th>
                  <th>Photo</th>
                  <th>Student ID</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Gender</th>
                 
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, students.id AS studid FROM students LEFT JOIN course ON course.id=students.course_id LEFT JOIN class_year ON class_year.id=students.id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      $photo = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                      echo "
                        <tr>
                        <td>".$row['class_year_id']."</td>
                          <td>".$row['code']."</td>
                          <td>
                            <img src='".$photo."' width='30px' height='30px'>
                            <a href='#edit_photo' data-toggle='modal' class='pull-right photo' data-id='".$row['studid']."'><span class='fa fa-edit'></span></a>
                          </td>
                          <td >".$row['student_id']."</td>
                          <td>".$row['firstname']."</td>
                          <td>".$row['lastname']."</td>
                          <td>".$row['gender']."</td>
                          
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

  $('#select_title').change(function(){
    var value = $(this).val();
    if(value == 0){
      window.location = 'student.php';
    }
    else{
      window.location = 'student.php?section='+value;
    }
  });

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.view', function(e){
    e.preventDefault();
    $('#view').modal('show');
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

$(document).ready(function(){
		$('#list').dataTable()
		$('.new_people').click(function(){
			uni_modal("New Individual","./people/manage.php",'mid-large')
		})
		$('.manage_people').click(function(){
			uni_modal("Manage Individual","./people/manage.php?id="+$(this).attr('data-id'),'mid-large')
		})
		$('.track_people').click(function(){
			uni_modal("Tracks","./people/tracks.php?id="+$(this).attr('data-id'),'mid-large')
		})
		$('.view').click(function(){
			uni_modal("Student's Profile Card","./includes/student_profile.php?id="+$(this).attr('data-id'))
		})
		$('.delete_people').click(function(){
		_conf("Are you sure to delete this Individual?","delete_people",[$(this).attr('data-id')])
		})
		$('#list').dataTable()
	})

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
  _el.find('title').text('Student List - Print View')
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




</script>
</body>
</html>
