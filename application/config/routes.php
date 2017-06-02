<?php
$route['login'] = 'login';
$route['imap'] = 'imap';
$route['newmail'] = 'newmail';
$route['outbox'] = 'outbox';
$route['register'] = 'register';
$route['(:any)'] = 'login';
$route['default_controller'] = 'login';