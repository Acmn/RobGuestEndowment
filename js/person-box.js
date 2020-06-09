jQuery(document).ready(function( $ ) {

    // Cast Page
  
  if ($('.cast-list').length > 0) {
    contentDiv();
    var articles = $('article');
    $('.cast-list article').addClass('show');
  }
  
  
  // RESIZE -   
  $(window).resize(function() {
    if ($('.cast-list').length > 0) {
      contentDiv();
    }
  });
  
  
  
  $('.filters a').click(function(e){
    alert();
    $('.filters a').removeClass('active-filter');
    $(this).addClass('active-filter');
    e.preventDefault();
    var filter = $(this).data('filter');
    $('.container').empty();
    if( filter == "all") {
      $('.container').hide().html(articles).fadeIn(1000).append('<div class="content"></div>');
    } else {
      filter = '.'+filter;
      filter_articles = $(articles).filter(filter);
      $('.container').hide().html(filter_articles).fadeIn(1000).append('<div class="content"></div>');
    }
    
    contentDiv();
    
  });
  
  
  // ARTICLE CLICK
  $('.cast-list').on('click', 'article',function(e){
    e.preventDefault();
    content = $(this).find('div.details').html();
    box = $(this).nextAll('.content').first();
    if($(this).hasClass('current')) {
    
       $(this).removeClass('current');
       $(box).removeClass('open').empty();
       $(this).parent().find('.content').empty(); 
   
    } else {
   
      $('article').removeClass('current');
      $(this).addClass('current');
      $(this).parent().find('.content').empty(); 
      $('.open').removeClass('open').empty();
      $(box).addClass('open').html(content);
    
    }
   
   });
   
   
   function contentDiv() {
      $('.added').remove();
      $('article').removeClass('current');
      
      var docWidth = +$('.cast-list').width();
      var articleWidth = +$('.cast-list article').width();
      
      var ratio = docWidth / articleWidth;
      ratio = Math.floor(ratio);
      if(ratio == 0) {
        ratio = 1;
      }
      ratio = ratio + 'n';
      $('.cast-list article:nth-of-type(' + ratio + ')').after('<div class="content added"></div>');
  }
  

    
});