//############Variable definition############

//buttons to swap between products --> Array with only one entry
let left = document.getElementsByClassName('leftArrow');
let right = document.getElementsByClassName('rightArrow');
let leftM = document.getElementsByClassName('leftArrowM');
let rightM = document.getElementsByClassName('rightArrowM');
//content of products --> Array with 3 entrys
let inhalt = document.getElementsByClassName('product');
//mobile images boxes
let inhaltM = document.getElementsByClassName('imageProductM');
//stores number of current product --> switches between 0, 1 or 2
let count;
//stores former selected product
let oldCount;

//mobile stuff
let mobile = document.getElementsByClassName('mobileFunkt');

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
//the same for mobile
let whiteRadM = document.getElementsByClassName('whiteRadM');
let blackRadM = document.getElementsByClassName('blackRadM');
let cremeRadM = document.getElementsByClassName('cremeRadM');
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

//productSwap() creates clickevents for arrows
productSwap();
function productSwap(){
  // event listener for left arrow, switch products
  left[0].addEventListener("click", function(){productSwapActivated('l')});
  right[0].addEventListener("click", function(){productSwapActivated('r')});
  leftM[0].addEventListener("click", function(){productSwapActivatedM('l')});
  rightM[0].addEventListener("click", function(){productSwapActivatedM('r')});
}

//changes product when arrow is clicked
function productSwapActivated(direction){
  console.log('productSwapActivated'+count);
  //stores former count
  oldCount = count;
  //if left arrow is pressed, decrease count
  if(direction == 'l'){
    count--;
    if(count<0){
      //if count is lower than 0 change it to highest product
      count = inhalt.length-1;
    }
  }else if(direction == 'r'){
    count++;
    if(count>inhalt.length-1){
      //if count is higher than highest product change it to lowest product
      count = 0;
    }
  }
  //changes color to black when changing product
  for (i = 0; i < white.length; i++) {
    white[i].style.display = 'none';
    creme[i].style.display = 'none';
    black[i].style.display = 'block';
  }
  //hide all images except black front image of product
  for (i = 0; i < frontPic.length; i++){
    backPic[i].style.display = 'none';
    closePic[i].style.display = 'none';
    if(frontPic[i].classList[1] != "black"){
      frontPic[i].style.display = 'none';
    }
  }
  
  //prepare Buttons
  pictureSwap();
  colorSwap();

  //hide old productbox and displays new product
  inhalt[oldCount].style.display = 'none';
  inhalt[count].style.display = 'flex';
}

//changes product when arrow is clicked - MOBILE
function productSwapActivatedM(direction){
  console.log('productSwapActivatedMobile'+count);
  //stores former count
  oldCount = count;
  //if left arrow is pressed, decrease count
  if(direction == 'l'){
    count--;
    if(count<0){
      //if count is lower than 0 change it to highest product
      count = inhalt.length-1;
    }
  }else if(direction == 'r'){
    count++;
    if(count>inhalt.length-1){
      //if count is higher than highest product change it to lowest product
      count = 0;
    }
  }
  //changes color to black when changing product
  for (i = 0; i < white.length; i++) {
    white[i].style.display = 'none';
    creme[i].style.display = 'none';
    black[i].style.display = 'block';
  }
  
  //prepare colorswitch buttons
  colorSwap();

  //hide old productbox & images and displays new product & images 
  inhalt[oldCount].style.display = 'none';
  inhalt[count].style.display = 'flex';
  inhaltM[oldCount].style.display = 'none';
  inhaltM[count].style.display = 'flex';
}

//prepares colorSwapButtons
function colorSwap(){
  whiteRad[count].onclick = function() {
    colorSwapActivated('w');
  }
  blackRad[count].onclick = function() {
    colorSwapActivated('b');
  }
  cremeRad[count].onclick = function() {
    colorSwapActivated('c');
  }
  whiteRadM[count].onclick = function() {
    colorSwapActivated('w');
  }
  blackRadM[count].onclick = function() {
    colorSwapActivated('b');
  }
  cremeRadM[count].onclick = function() {
    colorSwapActivated('c');
  }
}

//change color
function colorSwapActivated(color){
  pictureSwap();
  console.log('colorSwapActivated: '+color+count);
  var i;
  for (i = 0; i < white.length; i++) {
    if(color == 'w'){
      white[i].style.display = 'block';
      creme[i].style.display = 'none';
      black[i].style.display = 'none';
    }else if(color == 'b'){
      white[i].style.display = 'none';
      black[i].style.display = 'block';
      creme[i].style.display = 'none';
    }else if(color == 'c'){
      white[i].style.display = 'none';
      black[i].style.display = 'none';
      creme[i].style.display = 'block';
    }
  }
}

//prepares buttons to swap image
function pictureSwap() {
  let j = 0;
  for (i = 0; i < frontPicBut.length; i++) {
    if(frontPicBut[i].style.display != 'none'){
      blackFrontPicButs[j] = i;
      j++;
    }
  }
  currentColorDesign = blackFrontPicButs[count];
  console.log(currentColorDesign);
  frontPic[currentColorDesign].style.display = 'block';
  backPic[currentColorDesign].style.display = 'none';
  closePic[currentColorDesign].style.display = 'none';

  frontPicBut[currentColorDesign].onclick = function(){
    pictureSwapActivated('f');
  }
  backPicBut[currentColorDesign].onclick = function(){
    pictureSwapActivated('b');
  }
  closePicBut[currentColorDesign].onclick = function(){
    pictureSwapActivated('c');
  }
}

//changes image when prewiev is clicked
function pictureSwapActivated(image){
  console.log('pictureSwapActivated: '+count+image+currentColorDesign);
  if(image == 'f'){
    frontPic[currentColorDesign].style.display = 'block';
    backPic[currentColorDesign].style.display = 'none';
    closePic[currentColorDesign].style.display = 'none';
  }else if(image == 'b'){
    frontPic[currentColorDesign].style.display = 'none';
    backPic[currentColorDesign].style.display = 'block';
    closePic[currentColorDesign].style.display = 'none';
  }else if(image == 'c'){
    frontPic[currentColorDesign].style.display = 'none';
    backPic[currentColorDesign].style.display = 'none';
    closePic[currentColorDesign].style.display = 'block';
  }
}