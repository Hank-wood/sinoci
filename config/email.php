<?php

// 配置 Email 默认选项
// 参考 user_guide/libraries/email.html
$config['useragent'] = 'CodeIgniter';
$config['protocol'] = 'mail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['smtp_host'] = '';
$config['smtp_user'] = '';
$config['smtp_pass'] = '';
$config['smtp_port'] = 25;
$config['smtp_timeout'] = 5;
$config['smtp_keepalive'] = false;
$config['smtp_crypto'] = '';
$config['wordwrap'] = true;
$config['wrapchars'] = 76;
$config['mailtype'] = 'text';
$config['charset'] = $config['charset'];
$config['validate'] = false;
$config['priority'] = 3;
$config['crlf'] = '\n';
$config['newline'] = '\n';
$config['bcc_batch_mode'] = false;
$config['bcc_batch_size'] = 200;
$config['dsn'] = false;
