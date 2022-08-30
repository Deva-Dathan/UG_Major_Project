<?php
if($this->session->flashdata('book_issued')){
  echo '
 <div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Success!</strong> Book issued.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
 }
 ?>



<div class="container p-lg-4 ">

    <nav aria-label="breadcrumb mt-sm-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Issue Book</li>
    </ol>
    </nav>




    
<link href="<?php echo base_url('assets/bootstrap-table/bootstrap-table.min.css'); ?>" rel="stylesheet">

<script src="<?php echo base_url('assets/bootstrap-table/tableExport.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap-table/jspdf.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap-table/jspdf.plugin.autotable.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap-table/bootstrap-table.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap-table/bootstrap-table-export.min.js'); ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>



    <div class="container" class="col-sm-12">

		<div id="toolbar">
			<select class="form-control">
				<option value="all">Export All</option>
				<option value="selected">Export Selected</option>
			</select>
		</div>

<table id="table"
  data-show-export="true"
  data-toolbar="#toolbar"
  data-search="true"
  data-sortable="true"
  data-show-columns="true"
  data-toggle="table"
  data-visible-search="true" 
  data-pagination="true"
  class="table">
  <thead class="table-primary">
		<tr>
			<th data-field="state" data-checkbox="true"></th>
			<th data-field="name" data-sortable="true">Name</th>
			<th data-field="author" data-sortable="true">Author</th>
			<th data-field="copies" data-sortable="true">Copies</th>
      <th data-field="edit">Option</th>
		</tr>
  </thead>
	<tbody>
	<?php 
	$sql=$this->db->get('books');
	foreach($sql->result() as $book)
	{
    ?>
		<tr>
			<td class="bs-checkbox"><input data-index="<?php echo $book->book_id ?>" name="btSelectItem" type="checkbox"></td>
			<td><?php echo $book->book_name ?></td>
			<td><?php echo $book->author ?></td>
			<td><?php echo $book->copies ?></td>
      <td class="text-center p-0">
        <a href="<?php echo base_url(); ?>Librarian/issue_book_page/<?php echo $book->book_id; ?>"><i class="fa fa-book text-primary" title="issue this book"> issue book</i></a>
      </td>
	  	</tr>
	<?php		
	}
	?>
	</tbody>
</table>

</div>






</div>
<script>
  
var $table = $('#table')

  $(function() {
    $('#toolbar').find('select').change(function () {
      $table.bootstrapTable('destroy').bootstrapTable({
        exportDataType: $(this).val(),
        exportTypes: ['json', 'xml', 'csv', 'txt', 'sql', 'excel', 'pdf'],
        columns: [
          {
            field: 'state',
            checkbox: true,
            visible: $(this).val() === 'selected'
          }
        ]
      })
    }).trigger('change')
  })
  
</script>

</div>