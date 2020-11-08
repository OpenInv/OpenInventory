const express = require("express");
const app = express();
const router = express.Router();

router.get("/", (req, res) => {
    res.send("OpenInventory API Endpoints");
});

// Items Endpoints

router.get("/items/children/", (req, res) => { // Children of item endpoint
	var items = [];
	var photoArr = ["https://richmondrack.com/wp-content/uploads/new-shelving-2.jpg", "https://upload.wikimedia.org/wikipedia/commons/e/eb/Box.agr.jpg", "https://www.americansurplus.com/_resources/cache/images/product/schaefferShelving_400x4000-max.JPG", "https://i.pinimg.com/originals/5d/06/db/5d06dbf673bae47ad5df5684a98ad59e.jpg", "https://www.kivodaily.com/wp-content/uploads/2019/05/Optimal-Ways-To-Organize-Your-Warehouse-1000x600.jpg"];
	for (let index = 0; index < 100; index++) {
		items[index] = {"id":index,"title":"Item "+(index+1),"description":"riuhre","image":photoArr[Math.floor(Math.random() * photoArr.length)]};
	}
	res.send(items);
});

router.get("/items/parents", (req, res) => { // Parents of child endpoint (used for breadcrumbs)
    var breadcrumbs = {"ABC":5, "Test":7};
	res.send(breadcrumbs);
});

router.use((req, res) => {
	res.status(404).send("No API endpoint at "+ '"' + req.url + '"'); // 404 API Endpoint Not Found
});


module.exports = router;