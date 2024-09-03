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
        Category
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Books</li>
        <li class="active">Category</li>
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
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Category</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM category";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td>".$row['name']."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
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
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/category_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>

<noscript id="print-header">
    <div class="row">
        <div class="col-2 d-flex justify-content-center align-items-center">
            <img src="images/school.png" class="img-circle" id="sys_logo" alt="">
        </div>
        <div class="col-8">
            <h4 class="text-center"><b>Benito Soliven National High School</b></h4>
            <h3 class="text-center"><b>Category List</b></h3>
        </div>
        <div class="col-2"></div>
    </div>

    <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Category</th>
                
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM category";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td>".$row['name']."</td>
                          
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
              </table>
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
});
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
  _el.find('title').text('Category List - Print View')
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
    url: 'category_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.catid').val(response.id);
      $('#edit_name').val(response.name);
      $('#del_cat').html(response.name);
    }
  });
}
</script>
</body>
</html>
