$(window).load(function() {
	$("body").removeClass("preload");
});

$(function() {
    $(".m-post").fitVids({ customSelector: "iframe[src^='http://youtube.googleapis.com']" });
    $(".fluid-width-video-wrapper").each(function() {
      var $iframe = $(this).children('iframe');
      $iframe.attr('src', $iframe.attr('src'));
    });
});