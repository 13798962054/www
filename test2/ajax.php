<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<button>ajax test</button>
	<div id="div1"></div>
</body>


<script type="text/javascript">
	$("button").click(function(){
		$.ajax({
			url:"index.html",
			success: function(result){
				$("#div1").html(result);
			}
		})
	})
</script>
</html>