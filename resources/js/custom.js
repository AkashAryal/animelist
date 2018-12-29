$(document).ready(function(){
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 5000);

var timeoutId;
$(".AnimeNameCell").hover(function() {
    if (!timeoutId) {
        timeoutId = window.setTimeout(function() {
            timeoutId = null; // EDIT: added this line
            $("#addAnimeForm").remove();
            console.log("false");
            //window.isAddAnimeFormActive=false;
            localStorage.setItem("isAddAnimeFormActive", false);
       }, 700);
    }
},
function () {
    if (timeoutId) {
        window.clearTimeout(timeoutId);
        timeoutId = null;
    }
    else {

    }
});

});

$(window).on('load', function(){
    // your logic here`enter code here`
    if($('#addAnimeForm').length){
      localStorage.setItem("isAddAnimeFormActive", true);
    }else{
      localStorage.setItem("isAddAnimeFormActive", false);
    }

});
window.appendSynContainer = function(){
  $("#synInfo").append("<div class='synInfoContainer'><div class='card-header formcard'>Synopsis</div><div class='card-body formcard' style='border-bottom: 1px solid #7cb5ca;'><p style='color: #98def5;' class='mb-2'>Click on the anime name (in table) to freeze synopsis. Click again to unfreeze.</p><p id ='synopsis' class='pre-scrollable'></div>");
}

window.removeSynInfoContainer = function(){
  $(".synInfoContainer").remove();
}
window.leave=true;
//window.isAddAnimeFormActive=false;
