$(document).ready(function(){
var inProgress = false;
var begin = 0;
var id=$(this).data('id') || 1;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height() - 200 && !inProgress) {
            inProgress=true;
            begin+=10;
            $.post("?path=product/category",{id:id, begin:begin});
            inProgress=false;
        }
    });
});