let left = document.getElementsByClassName('leftArrow');
let right = document.getElementsByClassName('rightArrow');
let inhalt = document.getElementsByClassName('product');
let count = 0;
let oldCount;
console.log(inhalt);
    var i;
  for (i = 0; i < inhalt.length; i++) {
    if(inhalt[i].style.display != 'none'){
        count = i;
        console.log(count);
    }
  }

left[0].addEventListener("click", lolLeft);
function lolLeft(){
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
    console.log("count"+count);
    console.log("old"+oldCount);
    inhalt[oldCount].style.display = 'none';
    inhalt[count].style.display = 'flex';
 /* if(direct = 'r'){
    inhalt[count].animate([
  // keyframes
  { transform: 'translateX(20px)' }
], { 
  // timing options
  duration: 1000
});
  }
  setTimeout(function() 
{ 
  inhalt[count].style.display = 'none';
  //inhalt[count+1].style.display = 'block'
}, 
3000);
  var i;
  //for (i = 0; i < inhalt.length; i++) {
    //inhalt[i].style.display='none';
    //inhalt[count].style.display='block';
  //}*/
}