<?php
$id = @$_GET['id'];
mysqli_query($conn, "DELETE FROM stok WHERE id = '$id'") or die(mysqli_error($conn));
?>
<script type="text/javascript">
    alert("Data Berhasil Dihapus");
    window.location.href = "index.php?halaman=stok";
</script>