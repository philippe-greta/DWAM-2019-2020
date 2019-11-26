/*

Concaténation

*/

let a = 2;
let b = 10;

const c = a + b * b;
const d = a * b + b;
const e = a * (b + b);
const f = a * b / a;
const g = b / a * a;

/**/
console.log(a, b, c, d, e, f, g); // 2 10 102 30 40 10 10

console.log("--- --- ---");

console.log("ordre des opérateurs");
console.log(a + b * b);
console.log((a + b) * b);
console.log(a + (b * b));

console.log("--- --- ---");

console.log("affichage des formules et des valeurs");
var message = ("a = ") + a + "\n";
message = message + ("b = ") + b + "\n";
message = message + ("c = a + b * b = ") + c + "\n";
message = message + ("d = a * b + b = ") + d + "\n";
message = message + ("e = a * (b + b) = ") + e + "\n";
message = message + ("f = a * b / a = ") + f + "\n";
message = message + ("g = b / a * a = ") + g + "\n";

console.log(message);

console.log("--- --- ---");

console.log("modèles de libellés");
console.log(`La valeur de a est : ${a}`);
console.log(`La valeur de b est : ${b}`);