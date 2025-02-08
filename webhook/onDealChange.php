<?php
include_once './crest/crest.php';
include_once './crest/settings.php';

CRest::call(
    'event.bind',
    [
        'event' => 'onCrmDealAdd',
        'handler' => 'https://ec2-gicrm.ae/agent-dashboard/handlers/update_agent_ranking.php',
    ]
);
CRest::call(
    'event.bind',
    [
        'event' => 'onCrmDealUpdate',
        'handler' => 'https://ec2-gicrm.ae/agent-dashboard/handlers/update_agent_ranking.php',
    ]
);
CRest::call(
    'event.bind',
    [
        'event' => 'onCrmDealDelete',
        'handler' => 'https://ec2-gicrm.ae/agent-dashboard/handlers/update_agent_ranking.php',
    ]
);
CRest::call(
    'event.bind',
    [
        'event' => 'onCrmDealUserFieldUpdate',
        'handler' => 'https://ec2-gicrm.ae/agent-dashboard/handlers/update_agent_ranking.php',
    ]
);
