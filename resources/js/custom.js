$(document).ready(function(){
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 5000);

$( "td" ).hover(function() {
  $("#addAnimeForm").remove();
  
});

});

window.appendSynContainer = function(){
  $("#synInfo").append("<div class='synInfoContainer'><div class='card-header formcard'>Synopsis</div><div class='card-body formcard' style='border-bottom: 1px solid #7cb5ca;'><p style='color: #98def5;' class='mb-2'>Click on the anime name (in table) to freeze synopsis. Click again to unfreeze.</p><p id ='synopsis' class='pre-scrollable'></div>");
}

window.removeSynInfoContainer = function(){
  $(".synInfoContainer").remove();
}
window.leave=true;
