<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "fp_newsletter"
 *
 * Auto generated by Extension Builder 2018-06-15
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Newsletter subscriber management',
    'description' => 'Plugin for newsletter subscription and unsubscription with double opt in (and double opt out). For: direct_mail or luxletter / tt_address or fe_users. A log is written.',
    'category' => 'plugin',
    'author' => 'Kurt Gusbeth',
    'author_company' => 'fixpunkt werbeagentur gmbh',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '3.2.2',
    'constraints' => [
        'depends' => [
        	'typo3' => '10.4.6-11.5.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
