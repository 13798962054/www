<?php
/**
 * The product module en file of RanZhi.
 *
 * @copyright   Copyright 2009-2018 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     product
 * @version     $Id$
 * @link        http://www.zdoo.org
 */
if(!isset($lang->product)) $lang->product = new stdclass();
$lang->product->common      = 'Product';
$lang->product->id          = 'ID';
$lang->product->name        = 'Name';
$lang->product->code        = 'Alias';
$lang->product->type        = 'Type';
$lang->product->status      = 'Status';
$lang->product->category    = 'Product Category';
$lang->product->subject     = 'Income Category';
$lang->product->desc        = 'Introduction';
$lang->product->order       = 'Order';
$lang->product->roles       = 'Roles';
$lang->product->createdBy   = 'Created By';
$lang->product->createdDate = 'Created';
$lang->product->editedBy    = 'Edited by';
$lang->product->editedDate  = 'Edited';

$lang->product->index       = 'Product';
$lang->product->delete      = 'Delete';
$lang->product->list        = 'List';
$lang->product->browse      = 'View';
$lang->product->create      = 'Add Product';
$lang->product->edit        = 'Edit';
$lang->product->view        = 'View';
$lang->product->basicInfo   = 'Basic Information';
$lang->product->setCategory = 'Manage Category';

$lang->product->typeList['real']    = 'Physical';
$lang->product->typeList['service'] = 'Service';
$lang->product->typeList['virtual'] = 'Virtual';

$lang->product->statusList['developing'] = 'Developing';
$lang->product->statusList['normal']     = 'Normal';
$lang->product->statusList['offline']    = 'Offline';

$lang->product->lineList[''] = '';

$lang->product->placeholder = new stdclass();
$lang->product->placeholder->code = 'Product alias should be letters or digits.';

/* Width settings for different languages, in pixels. */
$lang->product->actionWidth  = 280;
$lang->product->subjectWidth = 120;
