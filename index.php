<?php
    require __DIR__ . '/vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Socket Php Test</title>
</head>
<body>

<h1>Php Scoket Server Testing</h1>
<div>
<h1 id="h11"></h1>	
</div>

<script>
var conn = new WebSocket('wss://avwarstech.herokuapp.com:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
};

// conn.send('Hello World!');
</script>

</body>
</html>