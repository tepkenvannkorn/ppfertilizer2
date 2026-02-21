jQuery( function() {

    var ppfertilizer = {

        init: function() {
            this.slideInMenu();
            this.searchBox();
            this.dropdownMenu();
            this.animateHeader();
            this.slickInit();
            this.backgroundColor();
            this.textAlignment();
            this.scrollAnimation();
            this.calculatePagingWidth( '.news-wrapper' );
            this.calculatePagingWidth( 'ul.donor' );
            this.tab( '.section-strategic-objectives' );
            this.isotopeLayout();
            this.loadVideo();
            this.toTop();
        },

        toTop: function( delay ) {

            /* Offset top possition to show the to top button*/

            var whereToShow = 400;

            jQuery( window ).scroll( function() {

                if ( jQuery( window ).scrollTop() > whereToShow ) {

                    jQuery( '.to-top' ).fadeIn( delay );

                } else {
                    jQuery( '.to-top' ).fadeOut( delay );
                }

            });

            jQuery('.to-top').click(function(e) {

                jQuery('body, html').animate({ scrollTop: 0 }, delay);

                e.preventDefault();

            });

        },

        loadVideo: function() {
            if ( jQuery( '.section .video__external' ).length ) {
                jQuery( '.section' ).each(function() {
                    let video_id = jQuery(this).find( '.video__external' ).attr( 'data-youtube-id' );
                    let video_player = '<iframe frameborder="0" height="100%" width="100%" frameborder="0" allowfullscreen src="https://youtube.com/embed/' + video_id + '?autoplay=1&loop=1&rel=0&showinfo=0&controls=0&mute=1&modestbranding=1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;web-share" allow="autoplay" data-id="' + video_id + '"></iframe>';
        
                    jQuery(this).find( '.video__external' ).html( video_player );
        
                });
            }
        },

        isotopeLayout: function() {
            if ( jQuery( '.grid' ).length) {

                // make Isotope a jQuery plugin
                jQueryBridget( 'isotope', Isotope, jQuery );
        
                var $el = '';
                var $grid = jQuery('.grid');
        
                jQuery( '.grid' ).isotope({
                    // options
                    percentPosition: true,
                    itemSelector: '.gallery',
                    layoutMode: 'fitRows',
                    fitRows: {
                        gutter: 16
                    },
                });
        
                jQuery( '.filter-box li' ).on( 'click', function() {
        
                    jQuery( '.filter-box li' ).removeClass( 'checked' );
        
                    jQuery(this).addClass( 'checked' );
        
                    $el = jQuery(this).attr( 'data-filter' );
        
                    $grid.isotope({ filter: $el });
        
                });
        
            }
        },

        tab: function( className ) {
            if ( jQuery( className + ' .tab' ).length ) {
                jQuery( className + ' .tab-heading > div' ).each( function() {
                    jQuery(this).on( 'click', function() {
                        tabChange(this, className);
                    });
                    jQuery(this).on( 'keypress', function(e) {
                        if (e.key === "Enter") {
                            tabChange(this, className);
                        }
                    });
                });

                function tabChange(_this, className){
                    $target_tab_content = jQuery(_this).attr( 'data-filter' );
                    jQuery( className + ' .tab-heading > div' ).removeClass( 'active' );
                    jQuery(_this).addClass( 'active' )

                    jQuery(  className + ' .tab-content .item' ).removeClass( 'active' ).fadeOut(300);
                    jQuery(  className + ' .tab-content ' ).find( '#' + $target_tab_content ).addClass( 'active' ).fadeIn(500);
                }
            }

            if ( jQuery( '.section-contact' ).length) {

                jQuery( '.section-contact .tab-heading .tab-switcher' ).on( 'click', function() {
                    jQuery( '.section-contact .tab-heading .tab-switcher' ).removeClass( 'active' );
                    jQuery(this).addClass('active');
        
                    let href = jQuery(this).attr( 'data-href' );
        
                    jQuery( '.section-contact .tab-content .tab' ).removeClass( 'active' );
                    jQuery(this).parents( '.tab-heading' ).next( '.tab-content' ).find('.' + href).addClass( 'active' );
                });
        
            }
        },

        scrollAnimation: function() {
            // Use Intersection Observer to determine if objects are within the viewport
            const observer = new IntersectionObserver( entries => {
                entries.forEach( entry => {
                    if ( entry.isIntersecting ) {
                        entry.target.classList.add( 'in-view' );
                        return;
                    }
                    entry.target.classList.remove( 'in-view' );
                });
            });
        
            // Get all the elements with the .animate class applied
            const allAnimatedElements = document.querySelectorAll( '.animate' );
        
            // Add the observer to each of those elements
            allAnimatedElements.forEach( (element) => observer.observe(element) );
        },

        textAlignment: function() {
            if ( jQuery( '.section[data-alignment]').length ) {
                jQuery( '.section[data-alignment]').each( function(e) {
                    let alignment = jQuery(this).attr( 'data-alignment' );
                    if ( 'center' == alignment ) {
                        jQuery(this).find( '.wrapper' ).css({
                            'text-align' : 'center'
                        });
                    }
                });
            }
        },
        backgroundColor: function() {
            if ( jQuery( '[data-bg-color]' ).length ) {
                jQuery( '[data-bg-color]' ).each( function(e) {
                    let bg_color = jQuery(this).attr( 'data-bg-color' );
                    // For some browsers, `bgColor` is undefined; for others,
                    // `bgColor` is false.  Check for both.
                    if ( typeof bg_color !== 'undefined' && bg_color !== false ) {
                        jQuery(this).css({
                            'background-color' : bg_color
                        });
                    }
                });
            }

            if ( jQuery( 'ul.box' ).length ) {
                jQuery( 'ul.box li' ).each( function() {
                    var bgColor = jQuery(this).find( '.box-wrapper' ).attr( 'data-bg-color' );
                    if ( typeof bgColor !== 'undefined' && bgColor !== false ) {
                        jQuery(this).find( '.box-wrapper' ).css({
                            'background-color' : bgColor
                        });
                    }
                });
            }
        },

        calculatePagingWidth: function( className ) {

            if ( jQuery(className).length ) {
                var totalWidth = jQuery( className + ' .slick-dots' ).width();
                var totalElement = jQuery( className + ' .slick-dots li' ).length;
                var pagingWidth = totalWidth / totalElement;
                jQuery( className + ' .slick-dots li' ).css({
                    'width' : pagingWidth,
                });
            }

        },

        slickInit: function() {

            if ( jQuery( '.slider-nav' ).length ) {

                jQuery( '.slider-for' ).slick({
                    mobileFirst: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: '<button type="button" class="slick-prev"><span class="bi-chevron-left"></button>',
                    nextArrow: '<button type="button" class="slick-next"><span class="bi-chevron-right"></button>',
                    fade: true,
                    cssEase: 'linear',
                    asNavFor: '.slider-nav',
                    autoplay: true,
                    arrows: false,
                    responsive: [
                        {
                            breakpoint: 760,
                            settings: {
                                swipe: false,
                                swipeToSlide: false,
                                touchMove: false,
                                draggable: false,
                            }
                        },
                    ]
                });
                jQuery( '.slider-nav' ).slick({
                    arrows: false,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    asNavFor: '.slider-for',
                    dots: false,
                    vertical: true,
                    focusOnSelect: true, // Disable scrolling
                    adaptiveHeight: true,
                    responsive: [
                        {
                            breakpoint: 740,
                            settings: {
                                slidesToShow: 3,
                            }
                        },
                    ]
                });
            }

            if ( jQuery( 'ul.donor' ).length ) {
                jQuery( 'ul.donor' ).slick({
                    mobileFirst: true,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    autoplay: true,
                    // autoplaySpeed: 6000,
                    dots: true,
                    customPaging : function( slider, i ) {
                        return '<span clas="paging-' + i + '"></span>';
                    },
                    fade: false,
                    speed: 1000,
                    infinite: false,
                    prevArrow: '<a href="javascript:void(0);" class="slick-prev hidden"></a>',
                    nextArrow: '<a href="javascript:void(0);" class="slick-next"></a>',
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4,
                            }
                        },
                        {
                            breakpoint: 730,
                            settings: {
                                slidesToShow: 3,
                            }
                        },
                        {
                            breakpoint: 320,
                            settings: {
                                slidesToShow: 2,
                            }
                        },
                    ]
                });
            }
        },

        animateHeader: function() {
            var prev_scroll; 
            jQuery(window).on( 'scroll', function() {
                if ( jQuery(window).scrollTop() > 80 ) {
                    jQuery( '.header-top' ).addClass( 'fade' );
                    jQuery( '.header-bottom' ).addClass( 'shrink' );
                    jQuery( '.breadcrumb' ).addClass( 'fade' );
                } else {
                    jQuery( '.header-top' ).removeClass( 'fade' );
                    jQuery( '.header-bottom' ).removeClass( 'shrink' );
                    jQuery( '.breadcrumb' ).removeClass( 'fade' );
                }

                if (jQuery(window).scrollTop() < prev_scroll ) {
                    jQuery( '.header-top' ).removeClass( 'fade' );
                    jQuery( '.header-bottom' ).removeClass( 'shrink' );
                    jQuery( '.breadcrumb' ).removeClass( 'fade' );
                }
                prev_scroll = jQuery(window).scrollTop();
            });
        },

        dropdownMenu: function() {
            jQuery( '.dropdown > a' ).on( 'click', function(e) {

                e.preventDefault();
                e.stopPropagation();

                jQuery( '.dropdown' ).removeClass( 'active' );
                jQuery( '.dropdown-menu' ).removeClass( 'shown' );
                jQuery(this).next( '.dropdown-menu' ).toggleClass( 'shown' );
                jQuery(this).parent( '.dropdown' ).toggleClass( 'active' );

                jQuery(document).one('click', function(evt) {

                    if (!jQuery(evt.target).is('.dropdown-menu')) {
                        jQuery('.dropdown-menu').removeClass('shown');
                        jQuery( '.dropdown' ).removeClass( 'active' );
                    }

                });
            });
        },

        searchBox: function() {
            jQuery( '.trigger-search-box' ).on( 'click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                jQuery( '.search-box' ).toggleClass( 'active' );
            });
            jQuery(document).on( 'click', function(evt) {
                if ( evt.target.id == 'searchControl' ) {
                    return;
                }
                jQuery( '.search-box' ).removeClass( 'active' );
            });
        },

        slideInMenu: function() {
            jQuery( '.hamburger' ).click( function(e) {
                jQuery( 'body' ).toggleClass( 'show-menu' );
            });
            jQuery( '.slidein-menu-backdrop, .close-button' ).click( function() {
                jQuery('body').removeClass('show-menu');
            });
        },
    }

    jQuery( document ).on( 'lity:ready', function( event, lightbox ) {
        if ( lightbox.opener().data( 'title' ) != '') {
            jQuery(event.currentTarget.activeElement).find( '.lity-content' ).prepend( '<p class="caption">' + lightbox.opener().data( 'title' ) + '</p>' );
        }
    });

    jQuery( window ).on( 'load', function () {
        jQuery('.slider-for').slick('setPosition');
        jQuery('.slider-nav').slick('setPosition');
    });

    jQuery( document ).ready( function() {
        ppfertilizer.init();
    });

});