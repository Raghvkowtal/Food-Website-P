<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Define an array of menu items and prices
$menu = array(
    "Pizza" => 15,
    "Burger" => 12,
    "Fries" => 5,
    "Soda" => 3
);

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the selected menu item and quantity from the form
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $price = $menu[$item];
    $total = $price * $quantity;
    // Display the order summary
    echo "You have ordered $quantity $item(s) at a total cost of $total.";
} else {
    // Display the menu form
    echo "<form method='post'>";
    echo "Select an item: <select name='item'>";
    foreach ($menu as $name => $price) {
        echo "<option value='$name'>$name - $$price</option>";
    }
    echo "</select><br>";
    echo "Quantity: <input type='number' name='quantity'><br>";
    echo "<input type='submit' name='submit' value='Order'>";
    echo "</form>";
}
?>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>