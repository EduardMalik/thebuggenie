<tr id="show_component_<?php print $component->getID(); ?>" class="hover_highlight">
	<td style="width: 20px; padding: 2px;"><?php echo image_tag('icon_components.png'); ?>
		<div style="display: none; border: 1px solid #DDD; padding: 5px; text-align: center; width: 300px; position: absolute; background-color: #FFF;" id="del_component_<?php print $component->getID(); ?>">
			<?php echo __('Are you sure you want to delete this component?'); ?><br>
			<a href="javascript:void(0);" onclick="deleteComponent(<?php print $component->getID(); ?>);"><?php echo __('Yes'); ?></a> | <a href="javascript:void(0);" onclick="Effect.Fade('del_component_<?php print $component->getID(); ?>', { duration: 0.5 });"><b><?php echo __('No'); ?></b></a>
		</div>
	</td>
	<td style="width: auto; padding: 2px;" id="component_<?php echo $component->getID(); ?>_name"><?php print $component->getName(); ?></td>
	<td style="width: 40px; text-align: right;">
		<a href="javascript:void(0);" class="image" onclick="$('show_component_<?php print $component->getID(); ?>').hide();$('edit_component_<?php print $component->getID(); ?>').show();$('c_name_<?php echo $component->getID(); ?>').focus();" style="font-size: 9px;"><?php echo image_tag('icon_edit.png'); ?></a>
		<a href="javascript:void(0);" class="image" onclick="$('del_component_<?php print $component->getID(); ?>').toggle();" style="font-size: 9px;"><?php echo image_tag('action_cancel_small.png'); ?></a>
	</td>
</tr>
<tr id="edit_component_<?php print $component->getID(); ?>" style="display: none;">
	<td style="width: 20px; padding: 2px;">
		<?php echo image_tag('spinning_20.gif', array('id' => 'component_'.$component->getID().'_indicator', 'style' => 'display: none;')); ?>
		<?php echo image_tag('icon_components.png', array('id' => 'component_'.$component->getID().'_icon')); ?>
	</td>
	<td style="width: auto; padding: 0px; position: relative;" colspan="2">
		<form accept-charset="<?php echo TBGContext::getI18n()->getCharset(); ?>" action="<?php echo make_url('configure_update_component', array('component_id' => $component->getID())); ?>" method="post" id="edit_component_<?php echo $component->getID(); ?>_form" onsubmit="updateComponent('<?php echo make_url('configure_update_component', array('component_id' => $component->getID())); ?>', <?php echo $component->getID(); ?>);return false;">
			<input type="submit" value="<?php echo __('Save'); ?>" style="float: right;">
			<input type="text" name="c_name" id="c_name_<?php echo $component->getID(); ?>" value="<?php print $component->getName(); ?>" style="width: 260px;">
		</form>
	</td>
</tr>