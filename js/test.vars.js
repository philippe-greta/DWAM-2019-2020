/*let*/

let var1 = true;
console.log(var1)
var1 = 10;
console.log(var1)

/*const*/
const CONFIG = 'maConfig';
console.log(CONFIG);

/*portée*/
function test() {
  if (1 === 1) {
    let var2 = true;
    console.log(var2);
    // Retourne true
  }

  console.log(var2);
  // Retourne une erreur, var2 n'existe pas hors du bloc "if"
}

//test();

/*sans var portée globale (window)*/
function test2() {
  maVar = 'valeur';
}
test2();
console.log(maVar);
  // Retourne 'valeur'
