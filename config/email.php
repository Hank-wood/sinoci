<?php

// 邮件发送设置
$config['useragent'] = 'CodIgniter';
$config['protocol'] = 'mail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['smtp_host'] = null;
$config['smtp_user'] = null;
$config['smtp_pass'] = null;
$config['smtp_port'] = 25;
$config['smtp_timeout'] = 5;
$config['smtp_keepalive'] = false;
$config['smtp_crypto'] = null;
$config['wordwrap'] = true;
$config['wrapchars'] = 76;
$config['mailtype'] = 'text';
$config['charset'] = 'UTF-8';
$config['validate'] = false;
$config['priority'] = 3;
$config['crlf'] = '\n';
$config['newline'] = '\n';
$config['bcc_batch_mode'] = false;
$config['bcc_batch_size'] = 200;
$config['dsn'] = false;