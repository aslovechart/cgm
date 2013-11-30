<?php
/**
* @package   Air
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

if ($params['dropdown']) {
    echo $oldoutput;
} else {

	// add links css class
	$dom  = $this->getHelper('dom');

	if ($ul = $dom->create($oldoutput)->first('ul:first')) {
	    echo $ul->attr('class', 'links')->html();
	} else {
		echo $oldoutput;
	}
}