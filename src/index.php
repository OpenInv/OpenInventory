<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OpenInventory Home</title>
	<style>

		nav.breadcrumbs {
			height: 40px;
			line-height: 40px;

			padding-left: 10px;
		}

		.breadcrumb {
			vertical-align: middle;
		}

		.material-icons {
			vertical-align: middle;
		}

		.row { margin-bottom: 0; }

		.nav-wrapper.breadcrumb-nav {
			white-space: nowrap;
			display: inline;
		}

		.breadcrumb-wrapper {
			white-space: nowrap;
			overflow: hidden;
			display: inline-block
		}

		.back-button-wrapper {
			white-space: nowrap;
			overflow: hidden;
			margin-right: 20px;
			display: inline-block;
			vertical-align: top;
		}

	</style>
</head>
<body>
	<?php include "header.html" ?>
	<nav class="breadcrumbs indigo darken-1">
		<div class="left-align nav-wrapper breadcrumb-nav row">
			<div class="back-button-wrapper">
				<a id="backButton" class="breadcrumb small material-icons" href="/">arrow_back</a>
			</div>
			<div class="left-align breadcrumb-wrapper" id="BreadcrumbWrapper">		
				<a class="breadcrumb small material-icons" href="/">home</a>
			</div>
		</div>
	</nav>
<main>
	<div class="item-container">

	</div>
</main>
	
<div class="fixed-action-btn">
	<a name="addButton" class="btn-floating btn-large blue pulse" data-html="true" data-position="top" data-tooltip="Add an item">
	<i class="large material-icons">add</i>
	</a>
</div> 
</body>
<link rel="stylesheet" href="appCss.css">
<script src="materialize/js/materialize.min.js"></script>

<script>
	// Add breadcrumbs to navbar
	function createBreadcrumbs(itemArray) {
		let BreadcrumbWrapper = document.getElementById("BreadcrumbWrapper");
		let itemArrayLength = Object.keys(itemArray).length;
		let itemKeys = Object.values(itemArray);
		for (let [name, id] of Object.entries(itemArray)) { // Generates breadcrumbs
			let Breadcrumb = document.createElement("a");
			BreadcrumbWrapper.appendChild(Breadcrumb);
			Breadcrumb.setAttribute("class","breadcrumb");
			Breadcrumb.setAttribute("href","?parentId="+id);
			let textNode = document.createTextNode(name);
			Breadcrumb.appendChild(textNode);
		};
		// Set backButton href (link) to be to previous item in array, unless there is only 1 item
		let backButton = document.getElementById("backButton");
		console.log("test")
		console.log(itemArrayLength)
		if (itemArrayLength > 1) {
			console.log("more than 1")
			let parentIdBackButton = itemKeys[itemArrayLength-2];
			backButton.setAttribute("href","?parentId="+parentIdBackButton);
		};
	};

	createBreadcrumbs({"Home":1,"Chase's Room":3,"Bookshelf":5,"Book about Birds":9});



	// Tooltips Javascript
	document.addEventListener('DOMContentLoaded', function() {
	let elems = document.getElementsByName("addButton");
	let options = [0,200,"Add an item",5,300,250,"top",10];
	let instances = M.Tooltip.init(elems, options);
	});

</script>
</html>
