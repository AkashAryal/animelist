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
function addslashes( str ) {
    return (str + '').replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
}
window.createRecBox = function(){

  var anime= localStorage.getItem("animeR");
  var selector1 = "changeNumRec"+anime;
  var howMany=  $('[id="' + selector1 + '"]').val();
  $("#rec").append("<div class='card-header formcard recContainer'><div class='row'><div class='col-md-8 col-lg-8'><h5>Recommended Anime:</h5></div><div class='col-md-4 col-lg-4'><div class='row'><div style='padding-left:0;' class='col-md-6 col-lg-6'><input id='howMany' type='number' value='"+howMany+"' min=1 style='max-width: 100%' /></div><div style='padding-right:0;padding-left:0;' class='col-md-6 col-lg-6'><input id='howManySubmit' type='submit' style='max-width: 100%' value='submit' /></div></div></div><div id='rList'></div></div>");
}

$("body").on('mousedown', '#howManySubmit', function(){
  console.log("hello");
  var howMany = $("#howMany").val();
  console.log(howMany);
  var anime= localStorage.getItem("animeR");
  console.log(anime);
  var selector2 = "rec"+anime;
  var selector1 = "changeNumRec"+anime;

  $('[id="' + selector1 + '"]').val(howMany);
  $('[id="' + selector2 + '"]').submit();

});
window.removeHoverContainers = function(){
  $(".synInfoContainer").remove();
  $(".recContainer").remove();

}

window.leave=true;
//window.isAddAnimeFormActive=false;
