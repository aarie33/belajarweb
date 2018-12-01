<?php 
require '../pages/config.php';

$id = $_POST['id'];
$select="SELECT * FROM berita WHERE id='$id'";
$query_select=(mysql_query($select));
$data = mysql_fetch_array($query_select);
if($id > 0){
	$id = $data['id'];
	$judul = $data['judul'];
    $isi = $data['isi'];
	$tanggal = $data['tanggal'];
	if($data['status'] == 1){
        $status="Publikasikan";
    }else{
        $status="Draft";
    }
}else{
    $id = "";
    $judul = "";
    $isi = "";
    $tanggal = date('Y-m-d');
    $status = "";
}
?>

<form role="form" >
    <div class="form-group">
        <label for="id" class="control-label">ID</label>
        <input type="text" class="form-control" id="id" name="id" value="<?php echo $id; ?>" disabled>
    </div>
    <div class="form-group">
        <label for="judul" class="control-label">Judul</label>
		<input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>">
    </div>
    <div class="form-group">
        <label for="isi" class="control-label">Isi</label>
		<textarea class="form-control" name="isi" id="isi" rows="5"><?php echo $isi; ?></textarea>
    </div>
    <div class="form-group">
        <label for="tanggal" class="control-label">Tanggal</label>
        <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo $tanggal; ?>" placeholder="yyyy/mm/dd">
    </div>
    <div class="form-group">
        <label for="status" class="control-label">Status</label>
        <select id="status" class="form-control" name="status" class="form-control col-md-2">
            <option value="<?php echo $data['status']; ?>"><?php echo $status; ?></option>
            <option value="1">Publikasikan</option>
            <option value="0">Draf</option>
        </select>
    </div>
</form>