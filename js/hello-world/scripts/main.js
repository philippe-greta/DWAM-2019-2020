//https://developer.mozilla.org/fr/docs/Apprendre/Commencer_avec_le_web/Les_bases_JavaScript

/**
 *
let myHeading = document.querySelector('h1');
myHeading.textContent = 'Bonjour, monde !';
 */

/**
 * 
let myElements = document.querySelectorAll('li');

myElements.forEach(function(element) {
  if (element.textContent === 'builders') {
    element.textContent = 'Bonjour, monde !';
  }
});
*/

/**
 * 
let myHeading = document.getElementById('myId');
myHeading.textContent = 'Bonjour, monde !';
*/

/**
 * 
let myImage = document.querySelector('img');
myImage.addEventListener('click', function() {
    let mySrc = myImage.getAttribute('src');
    if (mySrc === 'images/firefox-icon.png') {
      myImage.setAttribute('src', 'images/firefox-icon2.png');
    } else {
      myImage.setAttribute('src', 'images/firefox-icon.png');
    }
});
*/


let myButton = document.querySelector('button');
let myHeading = document.querySelector('h1');

function setUserName() {
  let myName = prompt('Veuillez saisir votre nom.');
  localStorage.setItem('nom', myName);
  myHeading.textContent = 'Mozilla est cool, ' + myName;
}

if (!localStorage.getItem('nom')) {
  setUserName();
} else {
  let storedName = localStorage.getItem('nom');
  myHeading.textContent = 'Mozilla est cool, ' + storedName;
}

myButton.addEventListener('click', function() {
  setUserName();
});
/**
 * */