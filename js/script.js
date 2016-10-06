jQuery(document).ready(function($) {
  $(".reveal-title-js").hover(function(){
      $(this).show(this.attr("title"));
});
    $(".dropdown-toggle").click(function(){
    $("#glyph").toggleClass("glyphicon-triangle-bottom");
    $("#glyph").toggleClass('glyphicon-triangle-top');
    });

    $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

});
