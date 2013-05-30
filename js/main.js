

$(function() {

    $(document).on({
        click: function () {
            if($(this).hasClass('hovered')) {
                var clicked_class = $(this).data('click');
                $('body').addClass(clicked_class);
            } 
        },
        mouseenter: function () {
            var body_class = $(this).data('class');

            $('body').addClass(body_class);

            $(this).addClass('hovered');
        },
        mouseleave: function () {
            $('body').removeClass(); 
            $(this).removeClass('hovered');
        }
    }, '#page-index .case');



    //$('body').addClass(body_class);

    // var heightOfContent = $('.content-wrapper').height();
    $(".main-wrapper").css({'height':($(".content-wrapper").height() + $(".intro-wrapper").height() + 40 + 'px')});
    




//Heeeelp meeee
    var caseOne   = $(".case.one").height(),
        caseTwo   = $(".case.two").height(),
        caseThree = $(".case.three").height();
    var tallestCase = Math.max(caseOne, caseTwo, caseThree);
        console.log(tallestCase);

        $('.case').height(tallestCase); 


    // if(($(".case.one").height()) > ($(".case.two").height()) || 
    //     ($(".case.one").height()) > ($(".case.three").height()) {
    //         var height = $('.case.one').height();

    //         $('.case').height() === height;
    // }; 
    //else if(($(".case.two").height()) > ($(".case.one").height()) && 
    //     ($(".case.two").height()) > ($(".case.three").height()) {
    //         $('.case').height() === $(".case.two").height();
    // } else {
    //         $('.case').height() === $(".case.three").height();
    // };
    // console.log(heightOfContent);
    // $('.element').height(heightOfContent);


    $(document).scroll(function() {
        var scrollingDistance = $(document).scrollTop(),
            caseOne = $("#intro-section").height() + $(".case.one").height(),
            caseTwo = caseOne + $(".case.one").height();

        
        if ((scrollingDistance + 20) < caseOne) {
            $('body').addClass('has-case-one');
            //console.log("one");
            //console.log(scrollingDistance);
        }

        if ((scrollingDistance + 20) > caseOne && (scrollingDistance + 20) < caseTwo) {
            $('body').addClass('has-case-two');
            //console.log("two");
        } 
        if ((scrollingDistance + 20) > caseTwo){
            $('body').addClass('has-case-three');
            //console.log("three");
        }

    })
});


    


