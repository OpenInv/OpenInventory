<?php
include("header.html");
include("footer.html");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenInventory Home</title>
</head>
<body>
<div class="fixed-action-btn">
  <a name="addButton" class="btn-floating btn-large blue pulse" data-html="true" data-position="top" data-tooltip="Add an item">
    <i class="large material-icons">add</i>
  </a>
</div> 
</body>
<link rel="stylesheet" href="appCss.css">
<script src="materialize/js/materialize.min.js"></script>

<script>
  // Tooltips Javascript
  document.addEventListener('DOMContentLoaded', function() {
    let elems = document.getElementsByName("addButton");
    let options = [0,200,"Add an item",5,300,250,"top",10];
    let instances = M.Tooltip.init(elems, options);
  });

</script>
</html>