<!DOCTYPE html>
<html>
<body>

<?php
function setHeight($minheight = 50) {
  echo "<h2>The height is : $minheight </h2><br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>

</body>
</html>