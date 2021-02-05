<!DOCTYPE html>
<html>
<head>
	<title>Auto Suggest</title>
	<script type="text/javascript">
		function findMatch() {
			let name = document.search.keyword.value;
			if(window.XMLHttpRequest){
				xmlHttp = new XMLHttpRequest();
			}else{
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlHttp.onreadystatechange = function() {
				if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
					document.getElementById("suggest").innerHTML= xmlHttp.responseText;
				}
			}
			xmlHttp.open("GET","search.inc.php?search_text="+name,true);
			xmlHttp.send();
		}
	</script>
</head>
<body>
	<form id="search" name="search">
		Enter Name: <br>
		<input type="text" name="keyword" onkeyup="findMatch()">
	</form>
	<br><br>
	<div id="suggest"></div>
</body>
</html>