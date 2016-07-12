<?php

$config['db']['driver'] = 'sqlite';
$config['db']['database'] = APPPATH.'storage/database';

file_exists($config['db']['database']) OR
    new PDO('sqlite:'.$config['db']['database']);