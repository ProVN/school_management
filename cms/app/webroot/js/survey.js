function get_mini_loading_image_html() {
	return '<img src="/img/ajax-loaders/ajax-loader-1.gif"/>';
}

function show_index_status_error_message(message) {
	var html = '<div class="index_status">';
	html += '<div class="alert alert-error">';
	html += '<button type="button" class="close" data-dismiss="alert">×</button>';
	html += '<strong>Unsuccessful!</strong> '+message;
	html += '</div>';
	$('#index_status').html(html);
}

function show_index_status_success_message(message) {
	var html = '<div class="index_status">';
	html += '<div class="alert alert-error">';
	html += '<button type="button" class="close" data-dismiss="alert">×</button>';
	html += '<strong>Well done!</strong> '+message;
	html += '</div>';
	$('#index_status').html(html);
}
