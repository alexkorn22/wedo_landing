$( document ).ready(function() {

    $(function() {
        $('select').selectric();
    });

//движения фона в шапке
    var currentX = '';
    var currentY = '';
    var movementConstant = .015;
    $(document).mousemove(function(e) {
        if(currentX == '') currentX = e.pageX;
        var xdiff = e.pageX - currentX;
        currentX = e.pageX;
        if(currentY == '') currentY = e.pageY;
        var ydiff = e.pageY - currentY;
        currentY = e.pageY;
        $('.parallax div').each(function(i, el) {
            var movement = (i + 1) * (xdiff * movementConstant);
            var movementy = (i + 1) * (ydiff * movementConstant);
            var newX = $(el).position().left + movement;
            var newY = $(el).position().top + movementy;
            $(el).css('left', newX + 'px');
            $(el).css('top', newY + 'px');
        });
    });


//timeline
    (function() {

        'use strict';

        // define variables
        var items = document.querySelectorAll(".timeline li");

        // check if an element is in viewport
        // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function callbackFunc() {
            for (var i = 0; i < items.length; i++) {
                if (isElementInViewport(items[i])) {
                    items[i].classList.add("in-view");
                }
            }
        }

        // listen for events
        window.addEventListener("load", callbackFunc);
        window.addEventListener("resize", callbackFunc);
        window.addEventListener("scroll", callbackFunc);

    })();



//открытие модального окна
    $('#myModal').on('shown.bs.modal', function () {
        // $('#myInput').focus()
    })


//форма

    $('.toggle').on('click', function() {
        $('.container1').stop().addClass('active');
    });

    $('.close').on('click', function() {
        $('.container1').stop().removeClass('active');
    });


//плавый скролл
    $("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });

//Аякс отправка форм
    //Документация: http://api.jquery.com/jquery.ajax/
    $("#callback-form").submit(function() {
        $.ajax({
            type: "GET",
            url: "mail.php",
            data: $("#callback-form").serialize()
        }).done(function() {
            $('.modal').modal('toggle');
            setTimeout(function() {
                alert("Спасибо за заявку!");
            }, 500);
        });
        return false;
    });


});
