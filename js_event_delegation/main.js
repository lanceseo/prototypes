// Answer the questions here:

// - What do you think is going to happen?
/* When the last added button is clicked, it may display the "Delegated Button #5 Handler" text in the console */

// - What happened?
/* Clicking the last added button did not console out any message. It did nothing. */

// - Why?
/* Because the new button was added to the DOM after the feature 1 (Get Button Text) function was loaded, thus the
   last added button was never applied with the previous function method */
/* This console outing issue is resolved by moving "addBtn()" function to above the feature 1 operation */


//========== Write your code below ===========//
$("document").ready(function(){

    //feature 2 - calls the function to add another button to the DOM
    addBtn();

    //feature 1 - outputs button text
    $("#list button").on("click", function(){
        var btnTxt = $(this).text();
        console.log(btnTxt);
    });

});

function addBtn() {
    var newBtn;
    newBtn = $("<li><button style='margin: 10px'>Delegated Button #5 Handler</button></li>");
    $("#list").append(newBtn);
}