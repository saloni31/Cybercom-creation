<!DOCTYPE html>
<html>
<head>
	<title> Ajax Demo</title>
	<script type="text/javascript">
		function load(id,file) {
			if(window.XMLHttpRequest){
				xmlHttp = new XMLHttpRequest();
			}else{
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlHttp.onreadystatechange = function() {
				if(xmlHttp.readyState === 4 && xmlHttp.status === 200){
					document.getElementById(id).innerHTML = 
					xmlHttp.responseText;
				}
			}

			xmlHttp.open("GET",file,true);
			xmlHttp.send();
		}
	</script>
</head>
<body>
	<input type="submit" onclick="load('demo','include.inc.php')">
	<div id="demo"></div>
</body>
</html>