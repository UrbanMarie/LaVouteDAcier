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





var div_esc = document.getElementById('div_esc');
var div_verr = document.getElementById('div_verr');
var div_port = document.getElementById('div_port');

/* AFFICHAGE / MASQUAGE DES 3 PARTIES FOOTER */
function div1(){
    div_esc.style.display = "inline-block";
    div_verr.style.display = "none";
    div_port.style.display = "none";
}

function div2(){
    div_esc.style.display = "none";
    div_verr.style.display = "inline-block";
    div_port.style.display = "none";
}

function div3(){
    div_esc.style.display = "none";
    div_verr.style.display = "none";
    div_port.style.display = "inline-block";
}

