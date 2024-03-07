<?php

class helperOption {
	
	public function displayOptionsList()
	{
		global $currentIndex, $cookie, $tab;

		if (!isset($this->_fieldsOptions) || !count($this->_fieldsOptions))
			return false;

		$defaultLanguage = (int)_PS_LANG_DEFAULT_;
		$this->_languages = Language::getLanguages(false);
		$tabAdmin = Tab::getTab((int)$cookie->id_lang, Tab::getIdFromClassName($tab));
		echo '<br /><br />';
		echo (isset($this->optionTitle) ? '<h2>'.$this->optionTitle.'</h2>' : '');
		echo '
		<script type="text/javascript">
			id_language = Number('.$defaultLanguage.');
		</script>
		<form action="'.$currentIndex.'" id="'.$tabAdmin['name'].'" name="'.$tabAdmin['name'].'" method="post">
			<fieldset>';
				echo (isset($this->optionTitle) ? '<legend>
					<img src="'.(!empty($tabAdmin['module']) && file_exists($_SERVER['DOCUMENT_ROOT']._MODULE_DIR_.$tabAdmin['module'].'/'.$tabAdmin['class_name'].'.gif') ? _MODULE_DIR_.$tabAdmin['module'].'/' : '../img/t/').$tabAdmin['class_name'].'.gif" />'
					.$this->optionTitle.'</legend>' : '');
		foreach ($this->_fieldsOptions as $key => $field)
		{
			$val = Tools::getValue($key, Configuration::get($key));
			if ($field['type'] != 'textLang')
				if (!Validate::isCleanHtml($val))
					$val = Configuration::get($key);

			echo '<label>'.$field['title'].' </label>
			<div class="margin-form">';
			switch ($field['type'])
			{
				case 'select':
					echo '<select name="'.$key.'">';
					foreach ($field['list'] as $value)
						echo '<option
							value="'.(isset($field['cast']) ? $field['cast']($value[$field['identifier']]) : $value[$field['identifier']]).'"'.($val == $value[$field['identifier']] ? ' selected="selected"' : '').'>'.$value['name'].'</option>';
					echo '</select>';
					break;
				case 'bool':
					echo '<label class="t" for="'.$key.'_on"><img src="../img/admin/enabled.gif" alt="'.$this->l('Yes').'" title="'.$this->l('Yes').'" /></label>
					<input type="radio" name="'.$key.'" id="'.$key.'_on" value="1"'.($val ? ' checked="checked"' : '').' />
					<label class="t" for="'.$key.'_on"> '.$this->l('Yes').'</label>
					<label class="t" for="'.$key.'_off"><img src="../img/admin/disabled.gif" alt="'.$this->l('No').'" title="'.$this->l('No').'" style="margin-left: 10px;" /></label>
					<input type="radio" name="'.$key.'" id="'.$key.'_off" value="0" '.(!$val ? 'checked="checked"' : '').'/>
					<label class="t" for="'.$key.'_off"> '.$this->l('No').'</label>';
					break;
				case 'textLang':
					foreach ($this->_languages as $language)
					{
						$val = Tools::getValue($key.'_'.$language['id_lang'], Configuration::get($key, $language['id_lang']));
						if (!Validate::isCleanHtml($val))
							$val = Configuration::get($key);
						echo '
						<div id="'.$key.'_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $defaultLanguage ? 'block' : 'none').'; float: left;">
							<input size="'.$field['size'].'" type="text" name="'.$key.'_'.(int)$language['id_lang'].'" value="'.$val.'" />
						</div>';
					}
					$this->displayFlags($this->_languages, $defaultLanguage, $key, $key);
					echo '<br style="clear:both">';
					break;
				case 'textareaLang':
					foreach ($this->_languages as $language)
					{
						$val = Configuration::get($key, $language['id_lang']);
						echo '
						<div id="'.$key.'_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $defaultLanguage ? 'block' : 'none').'; float: left;">
							<textarea rows="'.(int)($field['rows']).'" cols="'.(int)($field['cols']).'"  name="'.$key.'_'.$language['id_lang'].'">'.str_replace('\r\n', "\n", $val).'</textarea>
						</div>';
					}
					$this->displayFlags($this->_languages, $defaultLanguage, $key, $key);
					echo '<br style="clear:both">';
					break;
				case 'text':
				default:
					echo '<input type="text" name="'.$key.'" value="'.$val.'" size="'.$field['size'].'" />'.(isset($field['suffix']) ? $field['suffix'] : '');
			}

			if (isset($field['required']) AND $field['required'])
				echo ' <sup>*</sup>';

			echo (isset($field['desc']) ? '<p>'.$field['desc'].'</p>' : '');
			echo '</div>';
		}
			echo '<div class="margin-form">
					<input type="submit" value="'.$this->l('   Save   ').'" name="submitOptions'.$this->table.'" class="button" />
				</div>
			</fieldset>
			<input type="hidden" name="token" value="'.$this->token.'" />
		</form>';
	}
	
}

?>
