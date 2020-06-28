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

    </style>
</head>
<body>
  <?php include "header.html" ?>
  <nav class="breadcrumbs indigo darken-1">
  <div>
    <div class="nav-wrapper">
      <div class="left" id="BreadcrumbWrapper">
        <a href="/" class="breadcrumb small material-icons center">home</a>
      </div>
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
      for (let [name, id] of Object.entries(itemArray)) {
        let Breadcrumb = document.createElement("a");
        BreadcrumbWrapper.appendChild(Breadcrumb);
        Breadcrumb.setAttribute("class","breadcrumb");
        Breadcrumb.setAttribute("href","?parentId="+id);
        let textNode = document.createTextNode(name);
        Breadcrumb.appendChild(textNode);
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
