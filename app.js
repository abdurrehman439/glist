// Required packages
const https = require('https');
const sockjs = require('sockjs');
const fs = require('fs');
const mysql = require('mysql');

const options = {
  key: fs.readFileSync('/etc/letsencrypt/live/glokallist.com/privkey.pem'),
  cert: fs.readFileSync('/etc/letsencrypt/live/glokallist.com/fullchain.pem')
};

const hostname = 'glokallist.com';
const port = 3050;

// Clients list
var clients = {};

var online_users = {};

// Broadcast to all clients
function broadcast(message){
  // iterate through each client in clients object
  for (var client in clients){
    // send the message to that client
    clients[client].write(JSON.stringify(message));
  }
}

// create sockjs server
var echo = sockjs.createServer();

// on new connection event
echo.on('connection', function(conn) {

  // add this client to clients object
  clients[conn.id] = conn;

  // on receive new data from client event
  conn.on('data', function(message) {
    
    var temp = JSON.parse(message);
    
    if(temp.action == "message"){

      console.log("Message Received.....!");

      var con = mysql.createConnection({
        host: "localhost",
        user: "gl_db_admin",
        password: "glokallist71@188",
        database: "gl_database4dvlpmnt"
      });

      con.connect(function(err) {
        if (!err){
          var temp = JSON.parse(message);
          
          var sql = "INSERT INTO `chat`(`user_id`, `message`, `zipcode`) VALUES ("+ temp.user_id +",\""+ temp.message +"\",\""+ temp.zipcode +"\")";
          
          con.query(sql, function (err, result) {
            var sql = "SELECT users.user_name, profile_info.profile_picture, chat.message, chat.date_time, chat.zipcode, chat.user_id from users,chat,profile_info where chat.id = " + result.insertId + " AND chat.user_id = users.user_id AND users.user_id = profile_info.user_id";
            
            con.query(sql, function (err, result) {
              broadcast(result);
              console.log("Message Broadcasted.....!");
            });

          });
        }
      });

    }
    else if(temp.action == "online"){
      
      // Add user to online users array 
      online_users[conn.id] = temp;

      console.log("User is online");
      
      var list = new Array();
      var loop = 0;

      // Send online user's list to new user
      for(var temp1 in online_users){
        list[loop++] = online_users[temp1];
      }
         
      clients[conn.id].write(JSON.stringify(list));
      
      var list = new Array();
      list[0] = temp;
      // Send notification about the new user to all other users
      for (var client in clients){
        if(client != conn.id)
          clients[client].write(JSON.stringify(list));
      }
    }
  });

  // on connection close event
  conn.on('close', function() {
    var temp = online_users[conn.id];
    
    if (temp != null)
    {
      console.log("User is offline");
      
      console.log("Closed : " + conn.id);
      
      temp.action = "offline";

      var list = new Array();
      list[0] = temp;
      // Send notification about the closing user to all other users
      for (var client in clients){
        if(client != conn.id)
          clients[client].write(JSON.stringify(list));
      }

      // delete closing user from online users array & clients array
      delete online_users[conn.id];
      delete clients[conn.id];
    }

    delete clients[conn.id];
  });
  
});

// Create an https server
var server = https.createServer(options);

// Integrate SockJS and listen on /echo
echo.installHandlers(server, {prefix:'/chat'});

server.listen(port, hostname, () => {
  console.log(`Server running at https://${hostname}:${port}/`);
});































// const http = require('http');
// const mysql = require('mysql');

// const hostname = '206.189.71.188';
// const port = 3000;

// const server = http.createServer((req, res) => {

//   var con = mysql.createConnection({
//     host: "localhost",
//     user: "gl_db_admin",
//     password: "glokallist71@188",
//     database: "gl_database4dvlpmnt"
//   });

//   con.connect(function(err) {
    
//     if (err){
//       res.statusCode = 200;
//       res.setHeader('Content-Type', 'text/plain');
//       res.end("Sql Not Connected!");
//     }

//     var sql = "Select * from users";
    
//     con.query(sql, function (err, result) {
//       res.statusCode = 200;
//       res.setHeader('Content-Type', 'text/plain');
//       res.end(JSON.stringify(result));
//     });

//   });
  
//   //res.end('Hello World\n');
// });

// server.listen(port, hostname, () => {
//   console.log(`Server running at http://${hostname}:${port}/`);
// });

