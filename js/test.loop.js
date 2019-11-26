/*for (let i = 1 ; i < 21 ; i++) { console.log(i) }*/

var chats = ['Bill', 'Jeff', 'Pete', 'Biggles', 'Jasmin'];
var info = 'Mes chats s\'appellent ';


for (var i = 0; i < chats.length; i++) {
  info += chats[i] + ', ';
  //console.log(chats[i]);
}
//console.log(chats[0])
//console.log(chats.length)
console.log(info);