const express = require("express");
const cors = require("cors");
const app = express();
var port = process.env.PORT || 8000;
var mongodb = require("mongodb");
var MongoClient = require("mongodb").MongoClient;
var path = require("path");

app.use(cors());
app.use(express.json());

var url =
  "mongodb+srv://cooldudehimanshu786:ctfdb2k19@cluster0-30ik6.mongodb.net/test?retryWrites=true&w=majority";

app.get("/", function(req, res) {
  res.sendFile(path.join(__dirname + "/templates/index.html"));
});

app.get("/actions.txt", function(req, res) {
  res.sendFile(path.join(__dirname + "/log.txt"));
});

app.get("/objects", function(req, res) {
  MongoClient.connect(url, function(err, db) {
    if (err) throw err;
    var dbo = db.db("ctf2k19").collection("ctf2k19");
    dbo.findOne({ _id: new mongodb.ObjectID(req.query.id) }, function(
      err,
      result
    ) {
      if (err) throw err;
      res.send(JSON.stringify(result));
      db.close();
    });
  });
});

app.use(express.static(__dirname + "/templates"));
app.listen(port, () => console.log(`Server started at port ${port}`));
module.exports = app;
