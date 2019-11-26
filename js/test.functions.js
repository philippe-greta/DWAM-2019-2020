function multiply(num1, num2) {
    let result = num1 * num2;
    return result;
}

let a = multiply(4, 7);
let b = multiply(20, 20);
let c = multiply(0.5, 3);

console.log(a,b,c)

function direBonjour() {
    const message = "Bonjour !";
    return message;
  }
  
  console.log(direBonjour()); // "Bonjour !"
  // console.log(message); Erreur : la variable message n'existe pas ici