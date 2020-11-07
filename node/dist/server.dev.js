"use strict";

var http = require('http');

var fs = require('fs');

var server = http.createServer(function (req, res) {
  console.log('request was made: ' + req.url);
  res.writeHead(200, {
    'content-type': 'text/html'
  });
  var myReadStream = fs.createReadStream(__dirname + '/home.html', 'utf8');
  myReadStream.pipe(res);
}); //function sayHello(req, res){
//console.log("received a request  for:" + req.url);
//res.write("hello From Node");
//res.end();
//}
//const  server = http.createServer(sayHello);

server.listen(8888, '127.0.0.1');
console.log('the sever is now listinng on port 8888');