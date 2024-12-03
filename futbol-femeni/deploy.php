<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/cipfpbatoi/projectes-laravel-DaniCortesMoreno.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('52.206.252.156')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/futbol-femeni');

// Hooks

after('deploy:failed', 'deploy:unlock');
