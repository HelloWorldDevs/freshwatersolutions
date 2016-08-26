
jQuery(window).load(function() {
  var url = window.location.href;
  var hash = '#' + url.split('#')[1];
  var tag = '.' + url.split('#')[1];
  var baseUrl = url.split('#')[0];
  if(url === 'http://fws.dev/portfolio/' + hash){
    setTimeout(function(){
      jQuery('.fusion-portfolio-wrapper').isotope({ filter: tag });
    }, 700);
  }
});

//#web-applications

//#urban-planning

//#water-resource-planning

//#natural-resource-management
