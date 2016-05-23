var app =require('express');
var http = require('http').server(app);
var io = require('socket.io');

io.on('hello', function(){
   console.log('Hello Wolrd');
});

http.listen('3000'), function () {
   console.log('listening on port 3000');
};

// Client
// io.emit()