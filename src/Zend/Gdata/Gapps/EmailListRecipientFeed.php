<?php

/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage Gapps
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: EmailListRecipientFeed.php 24593 2012-01-05 20:35:02Z matthew $
 */

/**
 * @see Zend_Gdata_Feed
 */
//require_once 'Zend/Gdata/Feed.php';

/**
 * @see Zend_Gdata_Gapps_EmailListRecipientEntry
 */
//require_once 'Zend/Gdata/Gapps/EmailListRecipientEntry.php';

/**
 * Data model for a collection of Google Apps email list recipient entries,
 * usually provided by the Google Apps servers.
 *
 * For information on requesting this feed from a server, see the Google
 * Apps service class, Zend_Gdata_Gapps.
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage Gapps
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Gdata_Gapps_EmailListRecipientFeed extends Zend_Gdata_Feed
{

    protected $_entryClassName = 'Zend_Gdata_Gapps_EmailListRecipientEntry';
    protected $_feedClassName = 'Zend_Gdata_Gapps_EmailListRecipientFeed';

}
