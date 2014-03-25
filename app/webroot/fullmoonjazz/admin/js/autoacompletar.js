$(function() {
    
    //autocomplete
    $(".auto").autocomplete({
        source: "search.php",
        minLength: 3
    });                
 
});