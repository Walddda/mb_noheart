let left = document.getElementsByClassName('leftArrow');
let right = document.getElementsByClassName('rightArrow');
let inhalt = document.getElementsByClassName('product');
let count;

var i;
for (i = 0; i < inhalt.length; i++) {
  if(inhalt[i].style.display != 'none'){
      count = i;
  }
}

let oldCount;

let white = document.getElementsByClassName('white');
let black = document.getElementsByClassName('black');
let creme = document.getElementsByClassName('creme');
let whiteRad = document.getElementsByClassName('whiteRad');
let blackRad = document.getElementsByClassName('blackRad');
let cremeRad = document.getElementsByClassName('cremeRad');
let currentCol = 0;

let frontPicBut = document.getElementsByClassName('frontPicBut');
let backPicBut = document.getElementsByClassName('backPicBut');
let closePicBut = document.getElementsByClassName('closePicBut');

let frontPic = document.getElementsByClassName('frontPic');
let backPic = document.getElementsByClassName('backPic');
let closePic = document.getElementsByClassName('closePic');
let currentColorDesign;

if (currentCol == 0) {
  var i;
  for (i = 0; i < white.length; i++) {
    white[i].style.display = 'none';
    creme[i].style.display = 'none';
  }
}


pictureSwap();

whiteRad[count].onclick = function() {
  pictureSwap();
  var i;
  for (i = 0; i < white.length; i++) {
    white[i].style.display = 'block';
    creme[i].style.display = 'none';
    black[i].style.display = 'none';
  }
}
blackRad[count].onclick = function() {
  pictureSwap();
  var i;
  for (i = 0; i < white.length; i++) {
    white[i].style.display = 'none';
    creme[i].style.display = 'none';
    black[i].style.display = 'block';
  }
}
cremeRad[count].onclick = function() {
  pictureSwap();
  var i;
  for (i = 0; i < white.length; i++) {
    white[i].style.display = 'none';
    creme[i].style.display = 'block';
    black[i].style.display = 'none';
  }
}


left[0].addEventListener("click", lolLeft);
function lolLeft(){
  currentCol = 0;
    oldCount = count;
    count--;
    if(count<0){count = inhalt.length-1}
  lol('l');
}

right[0].addEventListener("click", lolRight);
function lolRight(){
    oldCount = count;
    count++;
if(count>inhalt.length-1){count = 0}
  lol('r');
}

function lol(direct){
    var i;
    for (i = 0; i < white.length; i++) {
      white[i].style.display = 'none';
      creme[i].style.display = 'none';
      black[i].style.display = 'block';
    }
    var i;
    for (i = 0; i < white.length; i++) {
      white[i].style.display = 'none';
      creme[i].style.display = 'none';
      black[i].style.display = 'block';
    }
    inhalt[oldCount].style.display = 'none';
    inhalt[count].style.display = 'flex';
    whiteRad[count].onclick = function() {
      pictureSwap();
      var i;
      for (i = 0; i < white.length; i++) {
        white[i].style.display = 'block';
        creme[i].style.display = 'none';
        black[i].style.display = 'none';
      }
    }
    blackRad[count].onclick = function() {
      pictureSwap();
      var i;
      for (i = 0; i < white.length; i++) {
        white[i].style.display = 'none';
        creme[i].style.display = 'none';
        black[i].style.display = 'block';
      }
    }
    cremeRad[count].onclick = function() {
      pictureSwap();
      var i;
      for (i = 0; i < white.length; i++) {
        white[i].style.display = 'none';
        creme[i].style.display = 'block';
        black[i].style.display = 'none';
      }
    }
    
}


function pictureSwap() {
  let i;
  for (i = 0; i < frontPicBut.length; i++) {
    if(frontPicBut[i].style.display != 'none'){
      currentColorDesign = i;
    }
  }
  console.log(currentColorDesign);
  console.log('sex');
    frontPic[currentColorDesign].style.display = 'block';
    backPic[currentColorDesign].style.display = 'none';
    closePic[currentColorDesign].style.display = 'none';

  frontPicBut[currentColorDesign].onclick = function(){
    frontPic[currentColorDesign].style.display = 'block';
    backPic[currentColorDesign].style.display = 'none';
    closePic[currentColorDesign].style.display = 'none';
  }
  backPicBut[currentColorDesign].onclick = function(){
    frontPic[currentColorDesign].style.display = 'none';
    backPic[currentColorDesign].style.display = 'block';
    closePic[currentColorDesign].style.display = 'none';
  }
  closePicBut[currentColorDesign].onclick = function(){
    frontPic[currentColorDesign].style.display = 'none';
    backPic[currentColorDesign].style.display = 'none';
    closePic[currentColorDesign].style.display = 'block';
  }
}