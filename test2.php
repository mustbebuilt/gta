<?php
echo "hello";
echo getenv('MAIL_HOST');
echo 'DB_HOST: ' . (getenv('DB_HOST') ? 'SET' : 'NOT SET') . '<br>';
echo "world";
