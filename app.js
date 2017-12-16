$(document).ready(function(){

var resultList=$(".results");
var toggleButton=$("#toggleButton");
toggleButton.on("click" , function (){
  resultList.toggle(500);
  if(toggleButton.text()==="MORE"){
    toggleButton.text("LESS");
  }
  else{
    toggleButton.text("MORE");
  }
});
var button=$("#new");
button.on("click",function (){
  if(button.text()==="HOME"){
   $("#sign_up").hide();
  $("#clear").show();
  $("#faculty").hide();
  $("#student").hide();
 button.text("new user");
 $("#text").text("click here for signup");
}
else{
    $("#chatterbox").hide();
  $("#clear").hide();
  $("#sign_up").show();
  button.text("HOME");
  $("#text").text("click here for HOME");
}
});
var click=$("#design1");
click.on("click",function (){
    $("#student").show();
    $("#faculty").hide();


  });
  var click1=$("#design2");
  click1.on("click",function (){
    $("#student").hide();
    $("#faculty").show();
  });
  var click2=$("#chet");
  var i=0;
click2.on("click",function (){
  if(i===0){
    $("#chatterbox").show();
    i++;
  }
 else{
  $("#chatterbox").hide();
  i--;
}
 });
});
 