<?php
require_once('conn.php');
include('phpqrcode/qrlib.php'); 
if(isset($_GET['id']) && !empty($_GET['id'])){
	$qry = $conn->query("SELECT * FROM students where id = {$_GET['id']}");
	foreach($qry->fetch_array() as $k => $v){
		if(!is_numeric($k)){
			$$k = $v;
		}
	}
}


?>
<div class="row">
	<div class="col-md-12 mb-2 justifu-content-end">
		<button class="btn btn-sm btn-success float-right" type="button" id="print-card"><i class="fa fa-print"></i> Print</button>
	</div>
</div>
<div id="cts-card" style="overflow: auto;" align="center">
	<table style="width: 4in;border:1px solid black;border-collapse: collapse;">
		<tr>
			<td align="center" style="line-height: 5mm; padding:.5rem">
				<strong>
				Republic of the Philippines<br>
				Province of Isabela <br>
				City of Benito Soliven<br>
				
				
				</strong>
			</td>
			<td  rowspan="2" align="center" style="width:1.5in;border-left:2px solid black">
				<img src="<?php echo validate_image('temp/'.$code.'.png') ?>" alt="" style="width:1.3in;height: 1.3in"><br>
				<img src="<?php echo validate_image($image_path) ?>" alt="" style="width:1in;height: 1in;object-fit: cover">
			</td>
		</tr>
		<tr>
			<td style="width:2.5in; padding:.5rem" align="left">
				<br>
				<span><strong>Name: </strong><?php echo strtoupper($lastname.' '.$firstname.' '.$gender) ?></span> 
				<br><br>
				
			</td>
			
		</tr>
	</table>
</div>
<script>
	$('#print-card').click(function(){
		var ccts = $('#cts-card').clone()

		var nw = window.open('','_blank','height=600,width800');
		nw.document.write(ccts.html())
		nw.document.close()
		nw.print()
		setTimeout(function(){
			window.close()
		},750)
	})
	$(document).ready(function(){
		if($('#uni_modal .modal-header button.close').length <= 0)
		$('#uni_modal .modal-header').append('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
	})
</script>
<style>
	#uni_modal .modal-footer{
		display: none;
	}
</style>