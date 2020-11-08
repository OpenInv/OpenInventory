const express = require("express");
const app = express();
const router = express.Router();

router.get("/", (req, res) => {
    res.send("OpenInventory API Endpoints");
});

router.use("/items",require("./items.js"));


router.use((req, res) => {
	res.status(404).send("No API endpoint at "+ '"' + req.url + '"'); // 404 API Endpoint Not Found
});

module.exports = router;