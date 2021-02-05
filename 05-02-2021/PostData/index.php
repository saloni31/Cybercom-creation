<!DOCTYPE html>
<html>
<head>
	<title> Insert Data</title>
	<script type="text/javascript">
		function insert() {
			name = document.getElementById('name').value;
			if(window.XMLHttpRequest){
				xmlHttp = new XMLHttpRequest();
			}else{
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlHttp.onreadystatechange = function () {
				if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
					document.getElementById("success").innerHTML = xmlHttp.responseText;
				}
			}

			parameters = "name="+name;
			xmlHttp.open("post","update.inc.php",true);
			xmlHttp.setRequestHeader('content-type','application/x-www-form-urlencoded');
			xmlHttp.send(parameters);
		}
	</script>
</head>
<body>
	<input type="text" name="name" id="name">
	<input type="submit" name="submit" value="Add" onclick="insert()">
	<br><br>

	<div id="success"></div>
</body>
</html>