<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{
				width: 838px;
                height: 300px;
                padding:30px;
                font-family: sans-serif;
                margin: auto;

	}
		.selection{
			margin-top: 40px;
			font-size: 40px;

		}
		.img{
			font-size: 40px;
		}
		.submit{
			font-size: 40px;
		}
		button{
			font-size: 40px;
			text-align: center;
			padding: 20px;
			background-color: #045DA7;
			color: white;
			
			align-self:center;
		}
	</style>
</head>
<body>
  <a href="p.php"><button class="print">Print Prescription</button></a>
  <button onclick="store()" class="store">Store Prescription</button>
  <div id="selectFile"></div>
</body>
</html>
<script type="text/javascript">
	function store() {
		document.getElementById('selectFile').innerHTML= "<form action='upload.php' method='post' enctype='multipart/form-data'>\
    <div class='selection'><label class='imgTag'>Select Image File:</label>\
    <input class ='img' type='file' name='image'><br><br>\
    <input type='submit' name='submit' value='Upload' class='submit'></div>\
</form>"
	}
</script>