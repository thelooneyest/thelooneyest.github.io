
$(document).ready(function() {
$('.shuffle').randomImage({path: 'homegallery/'});
$('a:first').click(function() {
location.reload();
return false;
});
});
