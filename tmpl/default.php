<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_video
 *
 * @copyright   Copyright (C) NPEU 2019.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;

$youtube_id = $params->get('youtube_id');
?>
<div class="embed-container">
    <iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>?rel=0" width="560"></iframe>
</div>
