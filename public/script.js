$(function(){
    $('.navbar').affix({
        offset: {
            /* Affix the navbar after scroll below header */
            top: $("header").outerHeight(true)}
    });
});

function verif ()
{
    var etat = document.getElementById('check').checked;

    if(etat)
    {
        document.getElementById('1').className = 'off';

        document.getElementById('2').className = 'on';
    }
    else
    {
        document.getElementById('1').className = 'on';

        document.getElementById('2').className = 'off';
    }
};

var stickyNav=".navbar-sticky > .navbar";
$(stickyNav).css({top:"0",width:"100%"}),$(".navbar-sticky").height($(stickyNav).outerHeight(!0)),$(stickyNav).affix({offset:{top:$(stickyNav).offset().top}});




    // Get the elements with class="column"
    var elements = document.getElementsByClassName("column");

    // Declare a loop variable
    var i;

    // Full-width images
    function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
}
}

    // Two images side by side
    function two() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
}
}

    // Four images side by side
    function four() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
}
}

    // Add active class to the current button (highlight it)
  /*  var header = document.getElementById("myHeader");
    //var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}*/

function get_subject(){

    var subject;
    var message;
    var action;

    var input = document.getElementById('subject');
    subject = input.value;

    var input = document.getElementById('message');
    message = input.value;

    document.getElementById("Form").action= "mailto:urbanomariecga@hotmail.com?subject="+subject+"&body="+message;
}

