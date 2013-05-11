<?php
/**
 * @package     Flickr
 * @subpackage  mod_flickr
 * @copyright   Copyright (C) 2013 AtomTech, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Initialise variables.
$user            = htmlspecialchars($params->get('user', '52617155@N08'));
$count           = htmlspecialchars($params->get('count', '8'));
$display         = htmlspecialchars($params->get('display', 'latest'));
$layout_style    = htmlspecialchars($params->get('layout_style', 'x'));
$source          = htmlspecialchars($params->get('source', 'user'));
$size            = htmlspecialchars($params->get('size', 's'));
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

// Render the module.
require JModuleHelper::getLayoutPath('mod_flickr', $params->get('layout', 'default'));
