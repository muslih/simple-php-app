(function() {
  $('.tanda').on('click', function(event) {
    if (confirm("Anda yakin melakukan ini?")) {
      return true;
    } else {
      return false;
    }
  });

  $(function() {
    var url;
    url = window.location.search;
    console.log(url);
    $('nav a').each(function() {
      if ($(this).attr('href') === url) {
        return $(this).addClass('active');
      } else {
        return $('#nav li').first(function() {
          return a.addClass('active');
        });
      }
    });
    $('.dropdown>ul').hide();
    return $('.dropdown').click(function() {
      return $('.dropdown>ul').slideToggle();
    });
  });

}).call(this);
