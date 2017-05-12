<!DOCTYPE html>
<html>
<head>
<title>WatchUs</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="links">
Hello MAMPU48
</div>


<script>
function loadlink(){
    $('#links').load('test.php',function () {
         $(this).unwrap();
    });
}

loadlink(); // This will run on page load
setInterval(function(){
    loadlink() // this will run after every 3 seconds
}, 3000);
</script>


</body>
</html>