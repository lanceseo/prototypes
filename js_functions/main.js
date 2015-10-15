function myMessage(){
  console.log("Hi I am a function.");
}

function add(num1, num2){
  console.log(num1 + num2);
}

function add2(num1, num2){
  var total = num1 + num2;
  return total;
}

var add2result = add2(9,37);

function cardFlip(element){
  $(element).hide();
  console.log(getSrc(element));

  console.log(result);
}

function getSrc(back){
  var front = $(back).prev();
  var img = front.find("img");
  var src = img.attr("src");
  return src;
}

var result = add2(add2(5, 10), add2(20, 30));
