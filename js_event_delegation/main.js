// Answer the questions here:

// - What do you think is going to happen?

// - What happened?

// - Why?

//========== Write your code below ===========//
$("document").ready(function(){
    $("#list li:first-child").on("click", function(){
        console.log("Button 1");
    });
    $("#list li:nth-child(2)").on("click", function(){
        console.log("Button 2");
    });
});

    function btnClicked() {

    }