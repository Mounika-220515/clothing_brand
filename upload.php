<?php
$message="";
$fileName="";
if(isset($_POST['upload']))
    {
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFile = $targetDir . $fileName;

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)){
        $message = "File Uploaded Successfully!";
    } else {
        $message = "File Upload Failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
<h2>Upload File</h2>
<form method="post" enctype="multipart/form-data">
    Select File:
    <input type="file"name="file" required>
    <input type="submit"name="upload" value="Upload">
</form>

<p>
    <?php echo $message; ?>
</p>

<?php
if($fileName!="")
{
    echo "<a href='download.php?file=$fileName'>Download File</a>";
}
?>
</body>
</html>