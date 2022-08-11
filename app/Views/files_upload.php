<!DOCTYPE html>
<html lang="en">
<head>
    
<body>
    <form action="<?php echo base_url();?>/fileupload/addfile"  method="post" enctype="multipart/form-data">
    <label>file upload:</lable>
    <input type="file" id="fileupload" name="fileupload"><br><br>
    <label>title:&nbsp</lable>
    <input type="text" id="title" name="title"><br><br>
    <label>description:</label>
    <input type="text" id="desc" name="desc"><br><br>

    <button type="submit" id="upload" name="upload" value="upload">upload file</button>
</form>

</body>
</html>
