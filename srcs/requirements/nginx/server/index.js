const express = require("express");

const app = express();

app.get("/o", (req, res) => {
	res.send("3 - hello in index.js");
});

app.listen(7777,() => {
	console.log("listening on 7777");
});
