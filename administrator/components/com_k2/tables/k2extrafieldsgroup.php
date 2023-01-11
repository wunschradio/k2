<?php
/**
 * @version    2.11.x
 * @package    K2
 * @author     JoomlaWorks https://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2023 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license: https://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

require_once JPATH_ADMINISTRATOR.'/components/com_k2/tables/table.php';

class TableK2ExtraFieldsGroup extends K2Table
{

    var $id = null;
    var $name = null;

    function __construct(&$db)
    {
        parent::__construct('#__k2_extra_fields_groups', 'id', $db);
    }

    function check()
    {
    	$this->name = JString::trim($this->name);
        if ($this->name == '')
        {
            $this->setError(JText::_('K2_GROUP_MUST_HAVE_A_NAME'));
            return false;
        }
        return true;
    }

}
