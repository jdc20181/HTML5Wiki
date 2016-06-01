<?php
// note the php 5.4 short array syntax :)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// clean any existing new line characters
	$body = str_replace(["\n", "\r"], '', $_POST['body']);
	
	// we get back actual HTML instead of new line characters
	// so we need to replace them with new lines for proper display
	// later on
	$body = trim(preg_replace('~(<br\s*/?>)~im', PHP_EOL, $body));
	
	// content is ready to be updated in the database
	// ...
	
	return print json_encode(['success' => 1]);
}
