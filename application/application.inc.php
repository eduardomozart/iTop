<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Includes all the classes to have the application up and running
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

require_once(APPROOT.'/application/applicationcontext.class.inc.php');
require_once(APPROOT.'/application/cmdbabstract.class.inc.php');
require_once(APPROOT.'/application/displayblock.class.inc.php');
require_once(APPROOT.'/application/sqlblock.class.inc.php');
require_once(APPROOT.'/application/audit.category.class.inc.php');
require_once(APPROOT.'/application/audit.rule.class.inc.php');
require_once(APPROOT.'/application/query.class.inc.php');
//require_once(APPROOT.'/application/menunode.class.inc.php');
require_once(APPROOT.'/application/utils.inc.php');

class ApplicationException extends CoreException
{
}
?>
