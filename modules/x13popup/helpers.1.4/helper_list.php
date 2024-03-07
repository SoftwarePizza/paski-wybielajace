<?php

class helperList extends Module{
	
	public $fields_list;
	public $fields_values;
	
	public function generateList($fields_values, $fields_list) {
		$this->_list = $fields_values;
		$this->_listTotal = $this->listTotal;
		$this->_pagination = array(5,10,20,50,100);
		$this->view = isset($this->actions) && in_array('view', $this->actions);
		$this->edit = isset($this->actions) && in_array('edit', $this->actions);
		$this->delete = isset($this->actions) && in_array('delete', $this->actions);
		$this->duplicate = isset($this->actions) && in_array('duplicate', $this->actions);
		$this->edit = true;
		$this->fieldsDisplay = $fields_list;
		$this->identifiersDnd = array();
		$this->displayList();
	}
	
	public function displayTop() {
		//do nothing
	}
	
	public function displayList() {
		
		$this->displayTop();
		
		if (isset($this->toolbar_btn)) {
			echo '<br />';
			foreach($this->toolbar_btn as $toolbar_btn) {
				echo '<a href="'.$toolbar_btn['href'].'"><img src="../img/admin/add.gif" border="0" /> '.$toolbar_btn['desc'].'</a>';
			}
			echo '<br /><br />';
		}
		
		/* Append when we get a syntax error in SQL query */
		if ($this->_list === false) {
			$this->displayWarning($this->l('Bad SQL query').'<br />'.htmlspecialchars($this->_list_error));
			return false;
		}
		
		/* Display list header (filtering, pagination and column names) */
		$this->displayListHeader();
		if (!sizeof($this->_list)) {
			echo '<tr><td class="center" colspan="'.(sizeof($this->fieldsDisplay) + 2).'">'.$this->l('No items found').'</td></tr>';
		}
		
		/* Show the content of the table */
		$this->displayListContent();
		
		/* Close list table and submit button */
		$this->displayListFooter();
	}
	
	public function displayListHeader($token = null) {
		global $context;
		$isCms = false;
		if (preg_match('/cms/Ui', $this->identifier))
			$isCms = true;
		$id_cat = Tools::getValue('id_'.($isCms ? 'cms_' : '').'category');
		
		if (!isset($token) OR empty($token))
			$token = $this->token;
		
		/* Determine total page number */
		//$totalPages = ceil($this->_listTotal / Tools::getValue('pagination', (isset($context->cookie->{$this->table.'_pagination'}) ? $context->cookie->{$this->table.'_pagination'} : $this->_pagination[0])));
		//if (!$totalPages) $totalPages = 1;
		$totalPages = 1;
		
		echo '<a name="'.$this->table.'">&nbsp;</a>';
		echo '<form method="post" action="'.$this->currentIndex;
		if (Tools::getIsset($this->identifier))
			echo '&'.$this->identifier.'='.(int)(Tools::getValue($this->identifier));
		echo '&token='.$token;
		if (Tools::getIsset($this->table.'Orderby'))
			echo '&'.$this->table.'Orderby='.urlencode($this->_orderBy).'&'.$this->table.'Orderway='.urlencode(strtolower($this->_orderWay));
		echo '#'.$this->table.'" class="form">
		<input type="hidden" id="submitFilter'.$this->table.'" name="submitFilter'.$this->table.'" value="0">
		<table>
			<tr>
				<td style="vertical-align: bottom;">
					<span style="float: left;">';
		if ($this->table != 'order_return_state') {
			/* Determine current page number */
			$page = (int)(Tools::getValue('submitFilter'.$this->table));
			if (!$page) $page = 1;
			if ($page > 1) {
				echo '
					<input type="image" src="../img/admin/list-prev2.gif" onclick="getE(\'submitFilter'.$this->table.'\').value=1"/>
					&nbsp;
					<input type="image" src="../img/admin/list-prev.gif" onclick="getE(\'submitFilter'.$this->table.'\').value='.($page - 1).'"/>
				';
			}
			echo $this->l('Page').' <b>'.$page.'</b> / '.$totalPages;
			if ($page < $totalPages) {
				echo '
					<input type="image" src="../img/admin/list-next.gif" onclick="getE(\'submitFilter'.$this->table.'\').value='.($page + 1).'"/>
					&nbsp;
					<input type="image" src="../img/admin/list-next2.gif" onclick="getE(\'submitFilter'.$this->table.'\').value='.$totalPages.'"/>
				';
			}
			echo '
				| '.$this->l('Display').'
				<select name="pagination">
			';
			/* Choose number of results per page */
			$selectedPagination = Tools::getValue('pagination', (isset($context->cookie->{$this->table.'_pagination'}) ? $context->cookie->{$this->table.'_pagination'} : null));
			foreach ($this->_pagination as $value) {
				echo '<option value="'.(int)($value).'"'.($selectedPagination == $value ? ' selected="selected"' : (($selectedPagination == null && $value == $this->_pagination[1]) ? ' selected="selected2"' : '')).'>'.(int)($value).'</option>';
			}
			echo '
				</select>
				/ '.(int)($this->_listTotal).' '.$this->l('result(s)').'
				</span>
			';
		}
		echo'
				<span style="float: right;">
					<input type="submit" name="submitReset'.$this->table.'" value="'.$this->l('Reset').'" class="button" />
					<input type="submit" id="submitFilterButton_'.$this->table.'" name="submitFilter" value="'.$this->l('Filter').'" class="button" />
				</span>
				<span class="clear"></span>
				</td>
			</tr>
			<tr>
				<td>';
		/* Display column names and arrows for ordering (ASC, DESC) */
		if (array_key_exists($this->identifier,$this->identifiersDnd) AND $this->_orderBy == 'position') {
			echo '
			<script type="text/javascript" src="../js/jquery/jquery.tablednd_0_5.js"></script>
			<script type="text/javascript">
				var token = \''.($token != null ? $token : $this->token).'\';
				var come_from = \''.$this->table.'\';
				var alternate = \''.($this->_orderWay == 'DESC' ? '1' : '0' ).'\';
			</script>
			<script type="text/javascript" src="../js/admin-dnd.js"></script>
			';
		}
		echo '<table'.(array_key_exists($this->identifier,$this->identifiersDnd) ? ' id="'.(((int)(Tools::getValue($this->identifiersDnd[$this->identifier], 1))) ? substr($this->identifier,3,strlen($this->identifier)) : '').'"' : '' ).' class="table'.((array_key_exists($this->identifier,$this->identifiersDnd) AND ($this->_listTotal >= 2 && $this->_orderBy != 'position 'AND $this->_orderWay != 'DESC')) ? ' tableDnD'  : '' ).'" cellpadding="0" cellspacing="0">
			<thead>
				<tr class="nodrag nodrop">
					<th>';
		if ($this->delete)
			echo '<input type="checkbox" name="checkme" class="noborder" onclick="checkDelBoxes(this.form, \''.$this->table.'Box[]\', this.checked)" />';
		echo '</th>';
		foreach ($this->fieldsDisplay as $key => $params) {
			echo '	<th '.(isset($params['widthColumn']) ? 'style="width: '.$params['widthColumn'].'px"' : '').'>'.$params['title'];
			if (!isset($params['orderby']) OR $params['orderby']) {
				// Cleaning links
				if (Tools::getValue($this->table.'Orderby') && Tools::getValue($this->table.'Orderway'))
					$this->currentIndex = preg_replace('/&'.$this->table.'Orderby=([a-z _]*)&'.$this->table.'Orderway=([a-z]*)/i', '', $this->currentIndex);
				if ($this->_listTotal >= 2) {
					echo '
						<br />
						<a href="'.$this->currentIndex.'&'.$this->identifier.'='.(int)$id_cat.'&'.$this->table.'Orderby='.urlencode($key).'&'.$this->table.'Orderway=desc&token='.$token.'"><img border="0" src="../img/admin/down'.((isset($this->_orderBy) && ($key == $this->_orderBy) && ($this->_orderWay == 'DESC')) ? '_d' : '').'.gif" /></a>
						<a href="'.$this->currentIndex.'&'.$this->identifier.'='.(int)$id_cat.'&'.$this->table.'Orderby='.urlencode($key).'&'.$this->table.'Orderway=asc&token='.$token.'"><img border="0" src="../img/admin/up'.((isset($this->_orderBy) && ($key == $this->_orderBy) && ($this->_orderWay == 'ASC')) ? '_d' : '').'.gif" /></a>
					';
				}
			}
			echo '</th>';
		}
		/* Check if object can be modified, deleted or detailed */
		if ($this->edit OR $this->delete OR ($this->view AND $this->view !== 'noActionColumn'))
			echo '<th style="width: 52px">'.$this->l('Actions').'</th>';
		echo '</tr>
				<tr class="nodrag nodrop" style="height: 35px;">
					<td class="center">';
		if ($this->delete)
			echo '--';
		echo '</td>';
		/* Javascript hack in order to catch ENTER keypress event */
		$keyPress = 'onkeypress="formSubmit(event, \'submitFilterButton_'.$this->table.'\');"';
		/* Filters (input, select, date or bool) */
		foreach ($this->fieldsDisplay as $key => $params) {
			$width = (isset($params['width']) ? ' style="width: '.(int)($params['width']).'px;"' : '');
			echo '<td'.(isset($params['align']) ? ' class="'.$params['align'].'"' : '').'>';
			if (!isset($params['type']))
				$params['type'] = 'text';
			$value = Tools::getValue($this->table.'Filter_'.(array_key_exists('filter_key', $params) ? $params['filter_key'] : $key));
			if (isset($params['search']) AND !$params['search'])
			{
				echo '--</td>';
				continue;
			}
			switch ($params['type'])
			{
				case 'bool':
					echo '
					<select name="'.$this->table.'Filter_'.$key.'">
						<option value="">--</option>
						<option value="1"'.($value == 1 ? ' selected="selected"' : '').'>'.$this->l('Yes').'</option>
						<option value="0"'.(($value == 0 AND $value != '') ? ' selected="selected"' : '').'>'.$this->l('No').'</option>
					</select>';
					break;
				case 'date':
				case 'datetime':
					if (is_string($value))
						$value = unserialize($value);
					if (!Validate::isCleanHtml($value[0]) OR !Validate::isCleanHtml($value[1]))
						$value = '';
					$name = $this->table.'Filter_'.(isset($params['filter_key']) ? $params['filter_key'] : $key);
					$nameId = str_replace('!', '__', $name);
					includeDatepicker(array($nameId.'_0', $nameId.'_1'));
					echo $this->l('From').' <input style="width:90%;" type="text" id="'.$nameId.'_0" name="'.$name.'[0]" value="'.(isset($value[0]) ? $value[0] : '').'"'.$width.' '.$keyPress.' /><br />
					'.$this->l('To').' <input style="width:90%;" type="text" id="'.$nameId.'_1" name="'.$name.'[1]" value="'.(isset($value[1]) ? $value[1] : '').'"'.$width.' '.$keyPress.' />';
					break;
				case 'select':
					if (isset($params['filter_key']))
					{
						echo '<select onchange="$(\'#submitFilter'.$this->table.'\').focus();$(\'#submitFilter'.$this->table.'\').click();" name="'.$this->table.'Filter_'.$params['filter_key'].'" '.(isset($params['width']) ? 'style="width: '.$params['width'].'px"' : '').'>
								<option value=""'.(($value == 0 AND $value != '') ? ' selected="selected"' : '').'>--</option>';
						if (isset($params['select']) AND is_array($params['select']))
							foreach ($params['select'] as $optionValue => $optionDisplay)
								echo '<option value="'.$optionValue.'"'.((isset($_POST[$this->table.'Filter_'.$params['filter_key']]) AND Tools::getValue($this->table.'Filter_'.$params['filter_key']) == $optionValue AND Tools::getValue($this->table.'Filter_'.$params['filter_key']) != '') ? ' selected="selected"' : '').'>'.$optionDisplay.'</option>';
						echo '</select>';
						break;
					}
				case 'text':
				default:
					if (!Validate::isCleanHtml($value))
							$value = '';
					echo '<input style="width:90%;" type="text" name="'.$this->table.'Filter_'.(isset($params['filter_key']) ? $params['filter_key'] : $key).'" value="'.htmlentities($value, ENT_COMPAT, 'UTF-8').'"'.$width.' '.$keyPress.' />';
			}
			echo '</td>';
		}
		if ($this->edit OR $this->delete OR ($this->view AND $this->view !== 'noActionColumn'))
			echo '<td class="center">--</td>';
		echo '</tr>
			</thead>';
	}
	
	public function displayListContent($token = null) {

		global $cookie;
		$currency = new Currency((int)Configuration::get('PS_CURRENCY_DEFAULT'));

		$id_category = 1; // default categ

		$irow = 0;
		if ($this->_list AND isset($this->fieldsDisplay['position']))
		{
			$positions = array_map(create_function('$elem', 'return (int)($elem[\'position\']);'), $this->_list);
			sort($positions);
		}
		if ($this->_list)
		{
			$isCms = false;
			if (preg_match('/cms/Ui', $this->identifier))
				$isCms = true;
			$keyToGet = 'id_'.($isCms ? 'cms_' : '').'category'.(in_array($this->identifier, array('id_category', 'id_cms_category')) ? '_parent' : '');
			foreach ($this->_list as $tr)
			{
				$id = $tr[$this->identifier];
				echo '<tr'.(array_key_exists($this->identifier,$this->identifiersDnd) ? ' id="tr_'.(($id_category = (int)(Tools::getValue('id_'.($isCms ? 'cms_' : '').'category', '1'))) ? $id_category : '').'_'.$id.'_'.$tr['position'].'"' : '').($irow++ % 2 ? ' class="alt_row"' : '').' '.((isset($tr['color']) AND $this->colorOnBackground) ? 'style="background-color: '.$tr['color'].'"' : '').'>
							<td class="center">';
				if ($this->delete AND (!isset($this->_listSkipDelete) OR !in_array($id, $this->_listSkipDelete)))
					echo '<input type="checkbox" name="'.$this->table.'Box[]" value="'.$id.'" class="noborder" />';
				echo '</td>';
				foreach ($this->fieldsDisplay as $key => $params)
				{
					$tmp = explode('!', $key);
					$key = isset($tmp[1]) ? $tmp[1] : $tmp[0];
					echo '
					<td '.(isset($params['position']) ? ' id="td_'.(isset($id_category) AND $id_category ? $id_category : 0).'_'.$id.'"' : '').' class="'.((!isset($this->noLink) OR !$this->noLink) ? 'pointer' : '').((isset($params['position']) AND $this->_orderBy == 'position')? ' dragHandle' : ''). (isset($params['align']) ? ' '.$params['align'] : '').'" ';
					if (!isset($params['position']) AND (!isset($this->noLink) OR !$this->noLink))
						echo ' onclick="document.location = \''.$this->currentIndex.'&'.$this->identifier.'='.$id.($this->view? '&view' : '&update').$this->table.'&token='.($token != null ? $token : $this->token).'\'">'.(isset($params['prefix']) ? $params['prefix'] : '');
					else
						echo '>';
					if (isset($params['active']) AND isset($tr[$key]))
						$this->_displayEnableLink($token, $id, $tr[$key], $params['active'], Tools::getValue('id_category'), Tools::getValue('id_product'));
					elseif (isset($params['activeVisu']) AND isset($tr[$key]))
						echo '<img src="../img/admin/'.($tr[$key] ? 'enabled.gif' : 'disabled.gif').'"
						alt="'.($tr[$key] ? $this->l('Enabled') : $this->l('Disabled')).'" title="'.($tr[$key] ? $this->l('Enabled') : $this->l('Disabled')).'" />';
					elseif (isset($params['position']))
					{
						if ($this->_orderBy == 'position' AND $this->_orderWay != 'DESC')
						{
							echo '<a'.(!($tr[$key] != $positions[sizeof($positions) - 1]) ? ' style="display: none;"' : '').' href="'.$this->currentIndex.
									'&'.$keyToGet.'='.(int)($id_category).'&'.$this->identifiersDnd[$this->identifier].'='.$id.'
									&way=1&position='.(int)($tr['position'] + 1).'&token='.($token != null ? $token : $this->token).'">
									<img src="../img/admin/'.($this->_orderWay == 'ASC' ? 'down' : 'up').'.gif"
									alt="'.$this->l('Down').'" title="'.$this->l('Down').'" /></a>';

							echo '<a'.(!($tr[$key] != $positions[0]) ? ' style="display: none;"' : '').' href="'.$this->currentIndex.
									'&'.$keyToGet.'='.(int)($id_category).'&'.$this->identifiersDnd[$this->identifier].'='.$id.'
									&way=0&position='.(int)($tr['position'] - 1).'&token='.($token != null ? $token : $this->token).'">
									<img src="../img/admin/'.($this->_orderWay == 'ASC' ? 'up' : 'down').'.gif"
									alt="'.$this->l('Up').'" title="'.$this->l('Up').'" /></a>';						}
						else
							echo (int)($tr[$key] + 1);
					}
					elseif (isset($params['image']))
					{
						// item_id is the product id in a product image context, else it is the image id.
						$item_id = isset($params['image_id']) ? $tr[$params['image_id']] : $id;
						// If it's a product image
						if (isset($tr['id_image']))
						{
							$image = new Image((int)$tr['id_image']);
							$path_to_image = _PS_IMG_DIR_.$params['image'].'/'.$image->getExistingImgPath().'.'.$this->imageType;
						}else
							$path_to_image = _PS_IMG_DIR_.$params['image'].'/'.$item_id.(isset($tr['id_image']) ? '-'.(int)($tr['id_image']) : '').'.'.$this->imageType;

						echo cacheImage($path_to_image, $this->table.'_mini_'.$item_id.'.'.$this->imageType, 45, $this->imageType);
					}
					elseif (isset($params['icon']) AND (isset($params['icon'][$tr[$key]]) OR isset($params['icon']['default'])))
						echo '<img src="../img/admin/'.(isset($params['icon'][$tr[$key]]) ? $params['icon'][$tr[$key]] : $params['icon']['default'].'" alt="'.$tr[$key]).'" title="'.$tr[$key].'" />';
					elseif (isset($params['price']))
						echo Tools::displayPrice($tr[$key], (isset($params['currency']) ? Currency::getCurrencyInstance((int)($tr['id_currency'])) : $currency), false);
					elseif (isset($params['float']))
						echo rtrim(rtrim($tr[$key], '0'), '.');
					elseif (isset($params['type']) AND $params['type'] == 'date')
						echo $tr[$key];
						//echo Tools::displayDate($tr[$key], (int)$cookie->id_lang);
					elseif (isset($params['type']) AND $params['type'] == 'datetime')
						echo Tools::displayDate($tr[$key], (int)$cookie->id_lang, true);
					elseif (isset($tr[$key]))
					{
						$echo = ($key == 'price' ? round($tr[$key], 2) : isset($params['maxlength']) ? Tools::substr($tr[$key], 0, $params['maxlength']).'...' : $tr[$key]);
						echo isset($params['callback']) ? call_user_func_array(array($this->className, $params['callback']), array($echo, $tr)) : $echo;
					}
					else
						echo '--';

					echo (isset($params['suffix']) ? $params['suffix'] : '').
					'</td>';
				}

				if ($this->edit OR $this->delete OR ($this->view AND $this->view !== 'noActionColumn')) {
					echo '<td class="center" style="white-space: nowrap;">';
					if ($this->view)
						$this->_displayViewLink($token, $id);
					if ($this->edit)
						$this->_displayEditLink($token, $id);
					if ($this->delete)
						$this->_displayDeleteLink($token, $id);
					if ($this->duplicate)
						$this->_displayDuplicate($token, $id);
					echo '</td>';
				}
				echo '</tr>';
			}
		}
	}
	
	public function displayListFooter($token = null) {
		echo '</table>';
		if ($this->delete)
			echo '<p><input type="submit" class="button" name="submitDel'.$this->table.'" value="'.$this->l('Delete selection').'" onclick="return confirm(\''.$this->l('Delete selected items?', __CLASS__, true, false).'\');" /></p>';
		echo '
				</td>
			</tr>
		</table>
		<input type="hidden" name="token" value="'.($token ? $token : $this->token).'" />
		</form>';
		if (isset($this->_includeTab) && count($this->_includeTab))
			echo '<br /><br />';
	}
	
	protected function _displayEnableLink($token, $id, $value, $active, $id_category = null, $id_product = null) {
		echo '
			<a href="'.$this->currentIndex.'&'.$this->identifier.'='.$id.'&'.$active.$this->table.
				(((int)$id_category && (int)$id_product) ? '&id_category='.$id_category : '').'&token='.($token ? $token : $this->token).'">
				<img src="../img/admin/'.($value ? 'enabled.gif' : 'disabled.gif').'" alt="'.($value ? $this->l('Enabled') : $this->l('Disabled')).'" title="'.($value ? $this->l('Enabled') : $this->l('Disabled')).'" />
			</a>
		';
	}

	protected function _displayDuplicate($token = null, $id) {
		$_cacheLang['Duplicate'] = $this->l('Duplicate');
		$duplicate = $this->currentIndex.'&'.$this->identifier.'='.$id.'&duplicate'.$this->table;
		echo '
			<a class="pointer" onclick="document.location = \''.$duplicate.'&token='.($token ? $token : $this->token).'\';">
				<img src="../img/admin/duplicate.png" alt="'.$_cacheLang['Duplicate'].'" title="'.$_cacheLang['Duplicate'].'" />
			</a>
		';
	}

	protected function _displayViewLink($token = null, $id) {
		$_cacheLang['View'] = $this->l('View');
		echo '
			<a href="'.$this->currentIndex.'&'.$this->identifier.'='.$id.'&view'.$this->table.'&token='.($token ? $token : $this->token).'">
				<img src="../img/admin/details.gif" alt="'.$_cacheLang['View'].'" title="'.$_cacheLang['View'].'" />
			</a>
		';
	}

	protected function _displayEditLink($token = null, $id) {
		$_cacheLang['Edit'] = $this->l('Edit');
		echo '
			<a href="'.$this->currentIndex.'&'.$this->identifier.'='.$id.'&update'.$this->table.'&token='.($token ? $token : $this->token).'">
				<img src="../img/admin/edit.gif" alt="" title="'.$_cacheLang['Edit'].'" />
			</a>
		';
	}

	protected function _displayDeleteLink($token = null, $id) {
		$_cacheLang['Delete'] = $this->l('Delete');
		$_cacheLang['DeleteItem'] = $this->l('Delete item #', __CLASS__, true, false);
		echo '
			<a href="'.$this->currentIndex.'&'.$this->identifier.'='.$id.'&delete'.$this->table.'&token='.($token ? $token : $this->token).'" onclick="return confirm(\''.$_cacheLang['DeleteItem'].$id.' ?'.
				(isset($this->specificConfirmDelete) ? '\r'.$this->specificConfirmDelete : '').'\');">
				<img src="../img/admin/delete.gif" alt="'.$_cacheLang['Delete'].'" title="'.$_cacheLang['Delete'].'" />
			</a>
		';
	}
	
	
	
}

?>
