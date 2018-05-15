$(document).ready(function(){
    $('.nav-menu-btn').click(function () { 
        $('#line1').toggleClass('line1Active');
        $('#line2').toggleClass('line2Active');
        $('#line3').toggleClass('line3Active');

        $('#nav').toggleClass('show');

        $('#logotype').toggleClass('logotypeActive');
        $('#logotypeCircle').toggleClass('logotypeCircleActive');
     })
});

$(function(){
    $('a[href^="#"]:not([href="#"])').click(function(){
        $("#nav").removeClass('show');
        
        $('#line1').removeClass('line1Active');
        $('#line2').removeClass('line2Active');
        $('#line3').removeClass('line3Active');

        $('#logotype').removeClass('logotypeActive');
        $('#logotypeCircle').removeClass('logotypeCircleActive');

        $("html, body").animate({
        scrollTop: $($(this).attr("href")).position().top
        }, 350);
        return false;
    });
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    var pixsel = screen.height - 200;    
    if (scroll > pixsel) {
        $(".togglemenubtn").removeClass("colorwhite").addClass("coloronscroll");
    }else{
        $(".togglemenubtn").removeClass("coloronscroll").addClass("colorwhite");
    }
});




$('#form').validate({
    messages:{
        name:{
            required:'please write your name'
        },
        email:{
            required:'please write your email'
        }, 
        subject:{
            required:'please write subject'
        },
        text:{
            required:'please write text'
        },
        f1:{
            required:'please choose your gender'
        }
    }
 });

 $(document).ready(function(){
    $('#form').submit(function (e) {
        e.preventDefault();
        if($(this).valid()) {
            $('.message').text('Thank you for your intereset for us, your message has been sent!');
            $.ajax({
                type: "POST",
                url: "main.php",
                data: $('#form').serialize(),
                success: function(data) {
                },
                error: function(data) {
                    
                }
            });
        }
     });
});















// var slide = document.getElementsByClassName('slide-img');

// var nexts = document.getElementById('next');
// var perv = document.getElementById('prev');

// cindex = 0;

// pos = 100;


//     function swimg(){
//         for(var i=0; i<slide.length; i++){
//             slide[i].style.left = -pos + cindex + '%';
//         }
//     }

// nexts.addEventListener('click', function () { 
//     cindex++;
//     if(cindex>=slide.length){
//         cindex = 0;
//     }
//     swimg();
//  })

//  prev.addEventListener('click', function () { 
//     cindex--;
//     if(cindex<0){
//         cindex = slide.length -1;
//     }
//     swimg();
//  })
