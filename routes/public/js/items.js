// Add breadcrumbs to navbar
function loadBreadcrumbs()
{
    var breadcrumbsJSON = null;
	var xhttp = new XMLHttpRequest(); // Create new XMLHttpRequest to get breadcrumb data from server
	xhttp.onreadystatechange = function()
	{
		if (this.readyState == 4 && this.status == 200)
		{
			breadcrumbsJSON = this.responseText;
			var itemObject = JSON.parse(breadcrumbsJSON)
			createBreadcrumbs(itemObject);
		}
	};
	xhttp.open("GET", "/api/items/parents", true);
	xhttp.send();
	function createBreadcrumbs(itemObject) {
		// Create breadcrumbs with provided data
		var BreadcrumbWrapperElement = document.getElementById("BreadcrumbWrapper");
		BreadcrumbWrapperElement.innerHTML = ""; // Delete children
		var itemObjectLength = Object.keys(itemObject).length;
		var itemKeys = Object.values(itemObject);
		for (var [id, name] of Object.entries(itemObject)) { // Generates breadcrumbs
			var Breadcrumb = document.createElement("a");
			BreadcrumbWrapperElement.appendChild(Breadcrumb);
			Breadcrumb.setAttribute("class","breadcrumb");
			Breadcrumb.setAttribute("href","?parentId="+id);
			var textNode = document.createTextNode(name);
			Breadcrumb.appendChild(textNode);
		};
		// Set backButton href (link) to be to previous item in array, unless there is only 1 item
		var backButtonElement = document.getElementById("backButton");
		if (itemObjectLength > 0) {
			var parentIdBackButton = itemKeys[itemObjectLength-2];
			backButtonElement.setAttribute("href","?parentId="+parentIdBackButton);
		} else {
			backButtonElement.parentNode.remove();
		};
	}
}

function loadItems()
{
	var itemsJSON = null;
	var xhttp = new XMLHttpRequest(); // Create new XMLHttpRequest to get breadcrumb data from server
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200)
		{
			itemsJSON = this.responseText;
			var itemObject = JSON.parse(itemsJSON)
			itemObject.forEach(item => {
				createItemBox(item.id, item.title, item.description, item.image);
			});
		}
	};
	xhttp.open("GET", "/api/items/children", true);
	xhttp.send();
	function createItemBox(id, title, description, image)
	{
		const itemContainer = document.getElementById("item-container");
		const template = document.getElementById("item-card-template");
		var clone = template.content.cloneNode(true);
		clone.querySelector('[name="card-title"]').innerHTML = title;
		clone.querySelector('[name="card-description"]').innerHTML = description;
		clone.querySelector('[name="card-image"]').src = image;
		clone.querySelector('[name="card-image-link"]').href = "?parentId="+id;
		clone.querySelector('[name="card-content-link"]').href = "?parentId="+id;

		var targetName = "itemDropdown"+id;
		var cardAction = clone.querySelector('[name="card-action"]')
		cardAction.dataset.target = targetName;
		clone.querySelector('[name="card-dropdown"]').id = targetName;
		itemContainer.appendChild(clone);
		var elems = document.querySelectorAll('.dropdown-trigger');
		var instances = M.Dropdown.init(cardAction, []);
	}
}

// Tooltips Javascript
document.addEventListener('DOMContentLoaded', function() {
	var addButtons = document.getElementsByName("addButton");
	var options = [0,200,"Add an item",5,300,250,"top",10];
	var instances = M.Tooltip.init(addButtons, options);
});

loadBreadcrumbs();
loadItems();