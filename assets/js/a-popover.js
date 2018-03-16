$(document).ready(function(){
    $('[data-toggle="a-popover"]').popover({
        placement : 'top',
        html : true,
        title : 'Administrator Info',
        content : '<div class="media"><a href="#" class="pull-left"></a><div class="media-body"><p><table class="popovertext"><tr><td>Name:</td><td>Stephen Graham</td></tr><td>Country:</td><td>Canada</td></tr></table><button type="button" class="btn btn-warning btn-sm">Logout</button></p></div></div>'
    });
});