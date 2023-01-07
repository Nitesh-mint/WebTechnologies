<?php
if(isset($_POST['submit'])){
    if(isset($_FILES['img'])){
        $file_tmp=$_FILES['img']['tmp_name'];
        $file_name=$_FILES['img']['name'];
        move_uploaded_file(_files($file_tmp,"image\".$file_name));
    }
    
}
?>
<form method="post" action="" entype="multipart/data">
<input type=file name=img />
<input type=submit name=submit/>
</form>
