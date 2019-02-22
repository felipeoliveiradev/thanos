        $(document).on('ready', function() {
            $(".centerGallery").slick({
                dots: false,
                infinite: false,
                lazyLoad: 'ondemand',
                waitForAnimate: false,
                slidesToShow: 5,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '0px',
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '0px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
        $(document).on('ready', function() {
            $(".centerGalleryOne").slick({
                dots: false,
                infinite: true,
                lazyLoad: false,
                waitForAnimate: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '0px',
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '0px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });



        //SLIDE PRINCIPAL

        $(function(){
            var curlSlide = 0;
            var slideSingle = $('.slide-single');
            var maxSlide = slideSingle.length - 1;
            var delay = 5000;
            var bullets = $('.bullets');
        
            initSlider();
            changeSlide();
        
            function initSlider(){
                slideSingle.hide();
                slideSingle.eq(0).show();
                for(var i = 0; i < maxSlide+1; i++){
                    var content = bullets.html();
                    if (i == 0)
                        content+='<span class="active-slider"></span>';
                    else
                        content+='<span></span>';
                        bullets.html(content);
                }
            }
            function changeSlide(){
                setInterval(function(){
                    slideSingle.eq(curlSlide).stop().fadeOut(delay);
                    curlSlide++;
                    if(curlSlide > maxSlide)
                        curlSlide = 0;
                        slideSingle.eq(curlSlide).stop().fadeIn(delay);
                        $('.bullets span').removeClass('active-slider');
                        $('.bullets span').eq(curlSlide).addClass('active-slider');
                }, delay)
            }
            $('body').on('click','.bullets span', function(){
                var currentBullet = $(this);
                slideSingle.eq(curlSlide).stop().fadeOut(delay);
                curlSlide = currentBullet.index();
                slideSingle.eq(curlSlide).stop().fadeIn(delay);
                $('.bullets span').removeClass('active-slider');
                currentBullet.addClass('active-slider');
            });
        })