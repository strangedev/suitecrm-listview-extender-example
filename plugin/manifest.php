<?php

$manifest = array(
    'acceptable_sugar_versions' => array(
        'exact_matches' => array(
            1 => '6.5.15'
        ),
        'regex_matches' => array(
            1 => '6\.4\.\d',
            2 => '6\.[0-9]\.\d',
            3 => '7\.[0-9]\.\d'
        )
    ),
    'acceptable_sugar_flavors' => array(
        'CE',
        'PRO',
        'ENT',
        'CORP'
    ),
    'readme' => '',
    'key' => '',
    'author' => '',
    'description' => 'This will be a plugin someday!',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'SuiteCRM plugin',
    'published_date' => '2019',
    'type' => 'module',
    'version' => 'v0.0.2',
    'remove_tables' => false
);

$installdefs = array(
    'id' => 'plugin',
    'copy' => array(
        array(
            'from' => '<basepath>/view.list.d/leads.php',
            'to' => 'custom/modules/Leads/views/view.list.d/example.php'
        )
    )
);

$upgrade_manifest = array();
