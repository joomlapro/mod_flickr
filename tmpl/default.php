<?php
/**
 * @package     Flickr
 * @subpackage  mod_flickr
 * @copyright   Copyright (C) 2013 AtomTech, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;
?>
<!-- Flickr Widget -->
<div class="flickr-widget<?php echo $moduleclass_sfx; ?>">
	<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?user=<?php echo $user; ?>&amp;count=<?php echo $count; ?>&amp;display=<?php echo $display; ?>&amp;layout=<?php echo $layout_style; ?>&amp;source=<?php echo $source; ?>&amp;size=<?php echo $size; ?>"></script>
</div>
<!-- End Flickr Widget -->