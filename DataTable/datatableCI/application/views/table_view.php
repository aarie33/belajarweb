<?php 
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Datatable</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">

<style type="text/css">

.container{
	margin-top: 50px;
}

</style>

</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-9">

<table class="table table-striped table-desa">
<thead>
<tr><th style="width:50px">No</th><th>Barcode</th><th>Nama Barang</th></tr>
</thead>
</table>

</div>
</div>
</div>



<script type="text/javascript" src="<?php echo base_url('assets/jquery.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datatables/media/js/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datatables/media/js/dataTables.bootstrap.min.js') ?>"></script>

<script type="text/javascript">

$(".table-desa").DataTable({
	ordering: false,
	processing: true,
	serverSide: true,
	ajax: {
	  url: "<?php echo base_url('index.php/table/ambil_data') ?>",
	  type:'POST',
	}
});

</script>


</body>
</html>