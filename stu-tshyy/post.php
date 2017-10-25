<!doctype html>
<html>
	<head>
		<meta http-equiv='content-type' content='text/html;charset=utf-8'>
		<script src='http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js'></script>
	</head>
	<body>
		<script>
			// url,[data],[callback],[type]
			var ost='ctt';
      var syt='stt';
			$.post('./test4.php',{'os':ost,'system':syt},function(data){
				alert(data.os);
			},'json');
      alert('hahah');
		</script>
		<h1 id='h1'></h1>
	</body>
</html>
