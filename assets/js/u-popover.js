$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'top',
        html : true,
        title : 'Username',
        content : '<div class="media"> <a href="#" class="pull-left"></a><div class="media-body"><p>' + 
				'<table class="popovertext"><tr><td>Age:</td><td>#RIP</td></tr><td>Country:</td><td>#country</td></tr>' + 
				'<td>Education:</td><td>#education</td></tr><td>Gender:</td><td>#gender</td></tr></table><hr/>' + 
				'<a role="button" class="btn btn-warning btn-sm" href="u-logout.php">Logout</a> &nbsp ' + 
				'<a role="button" class="btn btn-dark btn-sm" href="u-deactivate.html">Deactivate Account </a></p></div></div>'
    });
});