const express = require("express");
const app = express();
const router = express.Router();
const ejs = require("ejs");

const appRoot = require("app-root-path");

router.get("/items", (req, res) => { // Main Index Page
	var breadcrumbs = {"Bobey":5, "Test":7};
	var items = [];
	for (let index = 0; index < 20; index++) {
		items[index] = {"id":index,"title":"Test"+index,"description":"riuhre","image":"https://upload.wikimedia.org/wikipedia/commons/e/eb/Box.agr.jpg"};
	}
	res.render(appRoot + "/views/items", {breadcrumbs: JSON.stringify(breadcrumbs), items: JSON.stringify(items)});
});

module.exports = router;