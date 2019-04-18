<?php
defined('BASEPATH') or exit('No direct script access allowed');


$active_group = 'default';
$query_builder = true;

$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'ec2-54-83-205-27.compute-1.amazonaws.com',
    'username' => 'lkrdvyozqdyjgl',
    'password' => 'c3aaa1e82a177c69c19286e1c706d26d7c879f9126606898da626d5501f4d4f2',
    'database' => 'dqocd3l0ds04d',
    'dbdriver' => 'postgre',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => array(),
    'save_queries' => true
);

