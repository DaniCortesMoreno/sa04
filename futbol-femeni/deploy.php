<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/DaniCortesMoreno/sa04.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('52.206.252.156')
    ->set('remote_user', 'sa04-deployer')
    ->set('deploy_path', '/var/www/es-cipfpbatoi-deployer/html');

// Hooks

after('deploy:failed', 'deploy:unlock');
