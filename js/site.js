$( document ).ready(function() {

	// Bilder im Artikeltyp "Bild" mit reposiver Bootstrap Klasse versehen
	$( 'article.format-image' ).find( 'img' ).addClass( 'img-responsive' );
	
	// Bilder mit entsprechender Bootstrap Klasse ausrichten
	$( 'img.alignleft' ).addClass( 'pull-left' );
	$( 'img.alignright' ).addClass( 'pull-right' );
	
	// Buttons Bootstrap-fähig machen
	$( 'input#submit').addClass( 'btn btn-default' );
	
	// Leere <p> ausblenden
    //		$( 'p' ).filter(function() {
    //    		return $.trim($(this).text()) === '' && $(this).children().length == 0
    //		}).remove()
	
	// StickyJS
	var browserWidth = $(window).width();
	if( browserWidth > 767 ) {
	    $( '#navigation-top' ).sticky( {topSpacing:0} );
	}
   	
   	// Kleines Logo im Header nach scrollen einblenden
    var myPosY;
	$(window).bind( 'scroll', function() {
		myPosY = $(window).scrollTop();
	    
		// Menü Schatten ein- und ausblenden
	    if ( myPosY >= 300 ) {
		    $('#navigation-top').addClass('scroll-border-bottom');
	    }
	    else if ( myPosY < 300 ) {
		    $('#navigation-top').removeClass('scroll-border-bottom');
	    }   
	    
	});
   	
	// Kommentare Bootstrap-fähig machen
	$( 'div#respond' ).find( 'h3' ).addClass( 'col col-md-12' );
	$( 'div#respond' ).find( 'p' ).addClass( 'col col-md-12' );
	
	// Gallery - Breite Caption anpassen
	var galleryWidth;
	galleryWidth = $( '.attachment-thumbnail' ).width();
	$( '.gallery-caption' ).css('width', galleryWidth);

});