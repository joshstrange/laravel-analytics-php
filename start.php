<?php
require 'analytics-php/lib/Analytics.php';

$config = Config::get('analytics');
Analytics::init($config['segmentio-key']);