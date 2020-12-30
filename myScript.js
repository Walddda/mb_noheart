//############Variable definition############

//buttons to swap between products --> Array with only one entry
let left = document.getElementsByClassName('leftArrow');
let right = document.getElementsByClassName('rightArrow');
//content of products --> Array with 3 entrys
let inhalt = document.getElementsByClassName('product');
//stores number of current product --> switches between 0, 1 or 2
let count;
//stores former selected product
let oldCount;

//gets current product number by looking for displayed
for (i = 0; i < inhalt.length; i++) {
  if(inhalt[i].style.display != 'none'){
      count = i;
  }
}

//get all images, which are in one color --> Array with multiple entries
let white = document.getElementsByClassName('white');
let black = document.getElementsByClassName('black');
let creme = document.getElementsByClassName('creme');
//get all radio buttons, used for collorswitch, seperated in color --> Array with 3 entries
let whiteRad = document.getElementsByClassName('whiteRad');
let blackRad = document.getElementsByClassName('blackRad');
let cremeRad = document.getElementsByClassName('cremeRad');
//stores current color
let currentCol = 0;

//get all buttons, used for image switches --> Array with 9 entries (every product has 3 buttons)
let frontPicBut = document.getElementsByClassName('frontPicBut');
let backPicBut = document.getElementsByClassName('backPicBut');
let closePicBut = document.getElementsByClassName('closePicBut');

//get all images of products, seperated in type of image --> Array with 9 entries
let frontPic = document.getElementsByClassName('frontPic');
let backPic = document.getElementsByClassName('backPic');
let closePic = document.getElementsByClassName('closePic');

//stores combination of color and product
let currentColorDesign;
//is used later to find out currentColorDesign
let blackFrontPicButs = [];

//hide all none black pictures
if (currentCol == 0) {
  var i;
  for (i = 0; i < white.length; i++) {
    white[i].style.display = 'none';
    creme[i].style.display = 'none';
  }
}

//pictureSwap() creates clickevents for the buttons for swapping pictures
pictureSwap();

//colorSwap() creates clickevents for the radiobuttons
colorSwap();

// event listener for left arrow, switch products
console.log(left);
left[0].addEventListener("click", function(){arrowPress('left')});
right[0].addEventListener("click", function(){arrowPress('right')});
function arrowPress(direction){
  console.log(direction+": "+count);
  //stores former count
  oldCount = count;
  //if left arrow is pressed, decrease count
  if(direction == 'left'){
    count--;
    if(count<0){
      //if count is lower than 0 change it to highest product
      count = inhalt.length-1;
    }
  }else if(direction == 'right'){
    count++;
    if(count>inhalt.length-1){
      //if count is higher than highest product change it to lowest product
      count = 0;
    }
  }
  //function to ...
  lol();
}

function lol(){
    var i;
    for (i = 0; i < white.length; i++) {
      white[i].style.display = 'none';
      creme[i].style.display = 'none';
      black[i].style.display = 'block';
    }
    for (i = 0; i < frontPic.length; i++){
      backPic[i].style.display = 'none';
      closePic[i].style.display = 'none';
      if(frontPic[i].classList[1] != "black"){
        frontPic[i].style.display = 'none';
      }
    }
    pictureSwap();
    inhalt[oldCount].style.display = 'none';
    inhalt[count].style.display = 'flex';
    whiteRad[count].onclick = function() {
      console.log('whiteRad2: '+count);
      pictureSwap();
      var i;
      for (i = 0; i < white.length; i++) {
        white[i].style.display = 'block';
        creme[i].style.display = 'none';
        black[i].style.display = 'none';
      }
    }
    blackRad[count].onclick = function() {
      console.log('blackRad2: '+count);
      pictureSwap();
      var i;
      for (i = 0; i < white.length; i++) {
        white[i].style.display = 'none';
        creme[i].style.display = 'none';
        black[i].style.display = 'block';
      }
    }
    cremeRad[count].onclick = function() {
      console.log('cremeRad2: '+count);
      pictureSwap();
      var i;
      for (i = 0; i < white.length; i++) {
        white[i].style.display = 'none';
        creme[i].style.display = 'block';
        black[i].style.display = 'none';
      }
    }
    
}


function colorSwap(){
  whiteRad[count].onclick = function() {
    console.log('whiteRad: '+count);
    pictureSwap();
    var i;
    for (i = 0; i < white.length; i++) {
      white[i].style.display = 'block';
      creme[i].style.display = 'none';
      black[i].style.display = 'none';
    }
  }
  blackRad[count].onclick = function() {
    console.log('blackRad: '+count);
    pictureSwap();
    var i;
    for (i = 0; i < white.length; i++) {
      white[i].style.display = 'none';
      creme[i].style.display = 'none';
      black[i].style.display = 'block';
    }
  }
  cremeRad[count].onclick = function() {
    console.log('cremeRad: '+count);
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
  let j = 0;
  for (i = 0; i < frontPicBut.length; i++) {
    if(frontPicBut[i].style.display != 'none'){
      blackFrontPicButs[j] = i;
      j++;
    }
  }
  currentColorDesign = blackFrontPicButs[count];
  frontPic[currentColorDesign].style.display = 'block';
  backPic[currentColorDesign].style.display = 'none';
  closePic[currentColorDesign].style.display = 'none';

  frontPicBut[currentColorDesign].onclick = function(){
    console.log('frontPicBut: '+currentColorDesign);
    frontPic[currentColorDesign].style.display = 'block';
    backPic[currentColorDesign].style.display = 'none';
    closePic[currentColorDesign].style.display = 'none';
  }
  backPicBut[currentColorDesign].onclick = function(){
    console.log('backPicBut: '+currentColorDesign);
    frontPic[currentColorDesign].style.display = 'none';
    backPic[currentColorDesign].style.display = 'block';
    closePic[currentColorDesign].style.display = 'none';
  }
  closePicBut[currentColorDesign].onclick = function(){
    console.log('closePicBut: '+currentColorDesign);
    frontPic[currentColorDesign].style.display = 'none';
    backPic[currentColorDesign].style.display = 'none';
    closePic[currentColorDesign].style.display = 'block';
  }
}