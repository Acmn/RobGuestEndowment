jQuery(document).ready(function( $ ) {
	
	$(document).foundation();
	
	$(".image-gallery ul li a").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	
	$('a.book-now').on('click', function() {
    ga('send', 'event', 'purchase', 'ticketmaster');
  });
  
  $('.entry-content').fitVids();
  
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
  
  /* Flex box equal height fallback  */
	
	;( function( $, window, document, undefined )
    {
        'use strict';
     
        var s = document.body || document.documentElement, s = s.style;
        if( s.webkitFlexWrap == '' || s.msFlexWrap == '' || s.flexWrap == '' ) return true;
        
        var $list       = $( '.flex-box' ),
            $items      = $list.find( 'article' ),
            setHeights  = function()
            {
                $items.css( 'height', 'auto' );
     
                var perRow = Math.floor( $list.width() / $items.width() );
                if( perRow == null || perRow < 2 ) return true;
     
                for( var i = 0, j = $items.length; i < j; i += perRow )
                {
                    var maxHeight   = 0,
                        $row        = $items.slice( i, i + perRow );
     
                    $row.each( function()
                    {
                        var itemHeight = parseInt( $( this ).outerHeight() );
                        if ( itemHeight > maxHeight ) maxHeight = itemHeight;
                    });
                    $row.css( 'height', maxHeight );
                }
            };
     
        setHeights();
        $( window ).on( 'resize', setHeights );
        $list.find( 'img' ).on( 'load', setHeights );
     
    })( jQuery, window, document );
  
	
	
});