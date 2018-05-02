$( document ).ready(function() {

    $(".s-accordion .panel").on('click', function() {
        var $this = $(this);
        $this.css('width','55%');
        $(".s-accordion .panel").addClass('active-tab');
        $this.siblings('div').css('width','15%');
        $this.siblings($this).removeClass('active-tab');
    });

//таблица тарифов в контекстной рекламе

    function changeTable(col1, col2, one, two) {
        $(".custom-table " + col1).css("display","none");
        $(".custom-table "+ col2).css("display","table-cell");
        $(".btn-tariff.btn-tariff-"+one).addClass("btn-tariff_active");
        $(".btn-tariff.btn-tariff-"+two).removeClass("btn-tariff_active");
    }

    $(".btn-tariff.btn-tariff-one").click(function () {
        changeTable('.t-col3', '.t-col2', 'one', 'two')
    });

    $(".btn-tariff.btn-tariff-two").click(function () {
        changeTable('.t-col2', '.t-col3', 'two', 'one')
    });

//слайдер работ в контекстной рекламе
    $('.slider-work').owlCarousel({
        loop:true, //Зацикливаем слайдер
        margin:50, //Отступ от картино если выводите больше 1
        autoplay:false, //Автозапуск слайдера
        smartSpeed:2000, //Время движения слайда
        autoplayTimeout:7000, //Время смены слайда
        dots: false,
        nav: true,
        navText: ["<img src='../img/Arrows-Back-icon.png'>","<img src='../img/Arrows-Back-icon.png'>"],
        responsive:{ //Адаптация в зависимости от разрешения экрана
            0:{
                items:1,
                dots: true,
                nav: false
            },
            600:{
                items:1,
                dots: true,
                nav: false
            },
            1000:{
                items:1
            }
        }
    });

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
    var formArr = ['order-kr-form','callback-form-kr','discover-form', 'freecalc-kr-form', 'callback-form'];

    formArr.forEach(function (elem) {
        $('#'+ elem).submit(function () {

            var str =  $(this).find("input[id^='phone']").val();
            var found = str.match(/(?:\w)(?:(?:(?:(?:\+?3)?8\W{0,5})?0\W{0,5})?[34569]\s?\d[^\w,;(\+]{0,5})?\d\W{0,5}\d\W{0,5}\d\W{0,5}\d\W{0,5}\d\W{0,5}\d\W{0,5}\d(?!(\W?\d))/);
            var testNumber = str && found !== null;


            if (testNumber) {
                $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: $(this).serialize()
                }).done(function() {
                    $('.modal').modal('toggle');
                    setTimeout(function() {
                        $('#modal-thank').fadeIn();
                    }, 700);
                });
            }

            else {
                $('.errorMessage').css("display","block");
            }
            return false;
        })
    });







    $('#open-close').show();
    $('.wrap-alert').show();

    $('#open-close').click(function(event) {
        event.preventDefault(); // Для того чтобы при нажатии на ссылку не кидало вверх
        $('.wrap-alert').slideToggle();
    });


    //Регулярные выражения на проверку телефона
    /* $( "#Phone" ).onfocus(function() {
         $(this).removeClass("bfh-phone");

     });*/

});
