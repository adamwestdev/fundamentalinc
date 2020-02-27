jQuery(document).ready( function() {

    var header_nav = jQuery( '#header-nav' );
    var mobile_nav_btn = jQuery( '#mobile-nav-btn' );
    var mnb_icon = jQuery( '#mnb-icon' );

    var header_search = jQuery( '#main-search' );
    var header_search_btn = jQuery( '#main-search-btn' );
    var close_search_btn = jQuery( '#close-main-search' );

    //Change icon function
    function changeIcon ( icon_id, icon_class_old, icon_class_new ) {
        var icon_element = jQuery(icon_id);
        if( icon_element.hasClass( icon_class_old ) ) {
            icon_element.removeClass( icon_class_old );
            icon_element.addClass( icon_class_new );
        }
        else if( icon_element.hasClass( icon_class_new ) ) {
            icon_element.removeClass( icon_class_new );
            icon_element.addClass( icon_class_old );
        }
    }

    //Show Search form
    header_search_btn.on( 'click', function ( e ) {
        header_search.toggleClass( 'sf-visible' );
        header_search_btn.toggleClass( 'sfb-clicked' );
        changeIcon( '#search-btn-icon','fa-search','fa-times' );
        if( header_nav.hasClass( 'show-mobile-nav' )  ) {
            header_nav.toggleClass( 'show-mobile-nav' );
            mobile_nav_btn.toggleClass( 'mnb-clicked' );
            changeIcon( '#mnb-icon','fa-bars','fa-times' );
        }
    });
    close_search_btn.on( 'click', function ( e ) {
        e.preventDefault();
        header_search.toggleClass( 'sf-visible' );
        header_search_btn.toggleClass( 'sfb-clicked' );
        changeIcon( '#search-btn-icon','fa-search','fa-times' );
        if( header_search.hasClass( 'sf-visible' ) ) {
            changeIcon( '#search-btn-icon','fa-search','fa-times' );
        } 
    });

    //Mobile nav btn
    mobile_nav_btn.on( 'click', function ( e ) {
        header_nav.toggleClass( 'show-mobile-nav' );
        jQuery( this ).toggleClass( 'mnb-clicked' );
        changeIcon( '#mnb-icon','fa-bars','fa-times' );
        if( header_search.hasClass( 'sf-visible' ) ) {
            header_search_btn.toggleClass( 'sfb-clicked' );
            header_search.toggleClass( 'sf-visible' );
            changeIcon( '#search-btn-icon','fa-search','fa-times' );
        }
    });

    //Escape Key
    jQuery( document ).on( 'keydown', function ( e ) {
        if ( e.keyCode === 27 ) { // ESC

            //search box escape
            if( header_search.hasClass( 'sf-visible' ) ) {
                changeIcon( '#search-btn-icon','fa-search','fa-times' );
                header_search.toggleClass( 'sf-visible' );
                header_search_btn.toggleClass( 'sfb-clicked' );
            }

            //mobile nav esc
            if( header_nav.hasClass( 'show-mobile-nav' ) ) {
                changeIcon( '#mnb-icon','fa-bars','fa-times' );
                header_nav.toggleClass( 'show-mobile-nav' );
                mobile_nav_btn.toggleClass( 'mnb-clicked' );
            }

            //home page hero esc
            if( service_block.has( 'btn-clicked' ) ) {
                jQuery( '.service-text' ).removeClass( 'show-block' );
                jQuery( '.service-block-background' ).removeClass( 'show-block-bg' );
                jQuery( '.service--btn' ).removeClass( 'btn-clicked' );
                jQuery( '.esc-btn' ).removeClass( 'esc-visible' )
            }
        }
    });
    //esc btn
    jQuery('.esc-btn').on( 'click',function () {
        jQuery( '.service-text' ).removeClass( 'show-block' );
        jQuery( '.service-block-background' ).removeClass( 'show-block-bg' );
        jQuery( '.service--btn' ).removeClass( 'btn-clicked' );
        jQuery( this ).removeClass( 'esc-visible' )
    });

    var service_block = jQuery( '.service--btn' );
    jQuery('.service--btn').on( 'click',function serviceBtn() {
        var i = 0;

        var serviceType = jQuery(this).attr('id');
        var serviceBG = jQuery('.service-block-background');
        var tabcontent = jQuery( '.service-text' );
        var escBtn = jQuery('.esc-btn');
        for ( i = 0; i < tabcontent.length; i++ ) {
            tabcontent.removeClass('show-block');
            serviceBG.removeClass('show-block-bg')
            escBtn.removeClass('visible');
        }

        var tablinks = jQuery( '.service--btn' );
        for (i = 0; i < tablinks.length; i++) {
            tablinks.removeClass( 'btn-clicked' );
        }

        jQuery('#service-text-'+serviceType).addClass( 'show-block' );
        jQuery(this).addClass('btn-clicked');
        jQuery('#service-bg-'+serviceType).addClass('show-block-bg');
        escBtn.addClass('esc-visible');
        console.log('#service-text-'+serviceType);
    
    }
     );
});
/*function serviceBtn(evt, serviceType) {
    var i, tabcontent, tablinks;
  
    tabcontent = document.getElementsByClassName("service-text");
    for (i = 0; i < tabcontent.length; i++) {
      //tabcontent[i].style.display = "";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("service--btn");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" btn-clicked", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    //document.getElementById(serviceType).style.display = "block";
    document.getElementById(serviceType).classList.add('show-block');
    evt.currentTarget.className += " btn-clicked";
    console.log(serviceType+ ' - block');
}*/