
jQuery(window).load(function() {
  var url = window.location.href;
  var tag = '.' + url.split('#')[1];
  var pathname = window.location.pathname;

  if(pathname === '/portfolio/'){
    console.log('works!')
    setTimeout(function(){
      jQuery('.fusion-portfolio-wrapper').isotope({ filter: tag });
    }, 700);
  }

});

//#web-applications

//#urban-planning

//#water-resource-planning

//#natural-resource-management
