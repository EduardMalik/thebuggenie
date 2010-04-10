<table style="width: 680px; margin-bottom: 15px;" class="padded_table" cellpadding=0 cellspacing=0>
	<tr>
		<td style="border-bottom: 1px solid #CCC; font-size: 12px; font-weight: bold;"><?php echo __('General'); ?></td>
		<td style="width: 150px; text-align: center; border-bottom: 1px solid #CCC;"><?php echo image_tag('notification_settings.png', array(), false, 'mailing'); ?></td>
	</tr>
	<?php foreach ($general_settings as $setting => $description): ?>
		<tr>
			<td style="width: auto; padding: 5px; border-bottom: 1px solid #DDD;"><label for="<?php echo $setting; ?>_yes" style="font-weight: normal;"><?php echo $description; ?></label></td>
			<td style="width: 150px; padding: 5px; text-align: center; border-bottom: 1px solid #DDD;" valign="middle">
				<input type="radio" name="<?php echo $setting; ?>" value="1" id="<?php echo $setting; ?>_yes"<?php if ($module->getSetting($setting, $uid) == 1): ?> checked<?php endif; ?>>&nbsp;<label for="<?php echo $setting; ?>_yes"><?php echo __('Yes'); ?></label>&nbsp;
				<input type="radio" name="<?php echo $setting; ?>" value="0" id="<?php echo $setting; ?>_no"<?php if ($module->getSetting($setting, $uid) == 0): ?> checked<?php endif; ?>>&nbsp;<label for="<?php echo $setting; ?>_no"><?php echo __('No'); ?></label>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
<table style="width: 680px; margin-bottom: 15px;" class="padded_table" cellpadding=0 cellspacing=0>
	<tr>
		<td style="border-bottom: 1px solid #CCC; font-size: 12px; font-weight: bold;"><?php echo __('Issues'); ?></td>
		<td style="width: 150px; text-align: center; border-bottom: 1px solid #CCC;"><?php echo image_tag('notification_settings.png', array(), false, 'mailing'); ?></td>
	</tr>
	<?php foreach ($issues_settings as $setting => $description): ?>
		<tr>
			<td style="width: auto; padding: 5px; border-bottom: 1px solid #DDD;"><label for="<?php echo $setting; ?>_yes" style="font-weight: normal;"><?php echo $description; ?></label></td>
			<td style="width: 150px; padding: 5px; text-align: center; border-bottom: 1px solid #DDD;" valign="middle">
				<input type="radio" name="<?php echo $setting; ?>" value="1" id="<?php echo $setting; ?>_yes"<?php if ($module->getSetting($setting, $uid) == 1): ?> checked<?php endif; ?>>&nbsp;<label for="<?php echo $setting; ?>_yes"><?php echo __('Yes'); ?></label>&nbsp;
				<input type="radio" name="<?php echo $setting; ?>" value="0" id="<?php echo $setting; ?>_no"<?php if ($module->getSetting($setting, $uid) == 0): ?> checked<?php endif; ?>>&nbsp;<label for="<?php echo $setting; ?>_no"><?php echo __('No'); ?></label>
			</td>
		</tr>
	<?php endforeach; ?>
</table>