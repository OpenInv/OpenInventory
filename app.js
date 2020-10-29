const app_root_path = require("app-root-path");

require('dotenv').config()
global.reqlib = app_root_path.require;

const express = require("express");
const app = express();
const http = require("http").createServer(app);
const path = require("path");


app.set("view engine","ejs") // EJS Web Rendering Engine //
app.use("/static", express.static(path.join(__dirname, "/routes/public")));

// Routing

app.use("/",require("./routing.js"));

// Webserver

http.listen(80, '0.0.0.0', () => { // Start Webserver
	// Startup logs
	console.log("Whiteboard Webserver");
	console.log("Node.js Express Webserver started on Port 80");
	// Startup logs
});