const express = require("express");
const app = express();
const http = require("http").createServer(app);
const path = require("path");
const favicon = require('serve-favicon');

const appRoot = require("app-root-path");

require('dotenv').config();
global.reqlib = appRoot.require;

app.use(favicon(path.join(__dirname, "/routes/public/favicon.ico"))); // Favicon
app.set("view engine","ejs"); // EJS Web Rendering Engine //
app.use("/static", express.static(path.join(__dirname, "/routes/public"))); // Static content; JS, CSS, Images

// Routing

app.use("/",require("./routing.js"));

app.use((req, res) => {
	res.status(404).render(appRoot + "/views/404");
});

// Webserver

http.listen(80, '0.0.0.0', () => { // Start Webserver
	// Startup logs
	console.log("OpenInventory Webserver");
	console.log("Node.js Express Webserver started on Port 80");
	// Startup logs
});