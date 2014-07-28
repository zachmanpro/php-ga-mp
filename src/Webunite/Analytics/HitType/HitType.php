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

namespace Webunite\Analytics\HitType;

use Webunite\Analytics\HitTypeInterface;
use Exception;

/**
 * Abstract Hit Type Class
 *
 * @category   Analytics-Library
 * @package    PHP-GA-MP
 * @subpackage Abstract
 * @author     Zachie du Bruyn <zachie@webunite.co.za>
 * @license    http://www.gnu.org/licenses/lgpl.html GNU LESSER GENERAL PUBLIC LICENSE
 * @link       https://github.com/zachmanpro/php-ga-mp
 */
abstract class HitType implements HitTypeInterface
{
    /**
     * Hit Type data Container
     * @var array
     */
    private $_data = array();
    
    /**
     * Required Fields 
     * @var array
     */
    private $_requiredFields = array();

    /**
     * Validate data for Hit Type
     * 
     * @return bool
     */
    public function validate()
    {
        $data_keys = array_keys($this->getData());
        foreach ($this->getRequiredFields() as $key) {
            if (!in_array($key, $data_keys) || empty($this->getDataField($key))) {
                throw new Exception("Required field '$key' missing or empty.");
            }
        }
        return true;
    }

    /**
     * Get Hit Type Data
     * 
     * @return array
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * Get a list of Required Fields for Hit Type
     * 
     * @return array
     */
    public function getRequiredFields()
    {
        return $this->_requiredFields;
    }

    /**
     * Get Data Field
     * 
     * @param string $key Field Name
     * 
     * @return string
     */
    protected function getDataField($key)
    {
        return $data[$key];
    }

    /**
     * Get Data Field
     * 
     * @param string $key   Field Name
     * @param string $value Field Value
     *
     * @return Webunite\Analytics\HitTypeInterface
     */
    protected function setDataField($key, $value)
    {
        $this->_data[$key] = $value;
    }

    /**
     * Set a Required field
     * 
     * @param string $field Field Name
     *
     * @return Webunite\Analytics\HitTypeInterface
     */
    protected function setRequiredField($field)
    {
        $this->_requiredFields[] = $field;
    }

}