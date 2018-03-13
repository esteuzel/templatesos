<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');

// Create some shortcuts.
$params    = &$this->item->params;
$n         = count($this->items);
$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn  = $this->escape($this->state->get('list.direction'));

// Check for at least one editable article
$isEditable = false;

if (!empty($this->items))
{
	foreach ($this->items as $article)
	{
		if ($article->params->get('access-edit'))
		{
			$isEditable = true;
			break;
		}
	}
}

// For B/C we also add the css classes inline. This will be removed in 4.0.
JFactory::getDocument()->addStyleDeclaration('
.datos-utiles {padding: 20px 40px;}
.datos-utiles a{ width: 100%; color:#c00022; font-size: 24px;  }
');

$tableClass = $this->params->get('show_headings') != 1 ? ' table-noheader' : '';
?>







<div class="row">
	<div class="col col-xs-12">

	<?php if (!empty($this->items)) : ?>
	<?php foreach ($this->items as $i => $article) : ?>
	<div class="datos-utiles">
	<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($article->slug, $article->catid, $article->language)); ?>">
		<?php echo $this->escape($article->title); ?>
	</a>
	</div>
	<?php endforeach; ?>
	<?php endif; ?>

	</div>
</div>