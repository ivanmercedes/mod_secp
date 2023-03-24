<?php

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\Secp\Site\Helper\SecpHelper;

$doc = $app->getDocument();

// Include assets
$doc->addStyleSheet(JURI::root() . "modules/mod_secp/assets/css/app.css");
$doc->addScript(JURI::root() . "modules/mod_secp/assets/js/app.js");

$helper = new SecpHelper;
$data = $helper->getData($params->get('ucode', null));
$btnColor = $params->get('btncolor', null);

require ModuleHelper::getLayoutPath('mod_secp', $params->get('layout', 'default'));
