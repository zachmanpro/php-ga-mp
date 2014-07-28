<?php
/**
* A Google Analytics Measurement Protocol PHP Library
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU Lesser General Public
* License (LGPL) as published by the Free Software Foundation; either
* version 3 of the License, or (at your option) any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
* Lesser General Public License for more details.
*
* You should have received a copy of the GNU Lesser General Public
* License along with this library; if not, write to the Free Software
* Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA.
*
* Google Analytics is a registered trademark of Google Inc.
*
* PHP version 5.3.10
*
* @category Analytics-Library
* @package  PHP-GA-MP
* @author   Zachie du Bruyn <zachie@webunite.co.za>
* @license  http://www.gnu.org/licenses/lgpl.html GNU LESSER GENERAL PUBLIC LICENSE
* @link     https://github.com/zachmanpro/php-ga-mp
*/

namespace Webunite\Analytics;

/**
 * Tracker Interface
 *
 * @category   Analytics-Library
 * @package    PHP-GA-MP
 * @subpackage Interface
 * @author     Zachie du Bruyn <zachie@webunite.co.za>
 * @license    http://www.gnu.org/licenses/lgpl.html GNU LESSER GENERAL PUBLIC LICENSE
 * @link       https://github.com/zachmanpro/php-ga-mp
 */
interface TrackerInterface
{
    /**
     * Track action
     * 
     * @param HitTypeInterface $hitType Hit Type
     * 
     * @return void
     */
    public function track(HitTypeInterface $hitType);
}
