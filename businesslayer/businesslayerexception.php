<?php

/**
 * ownCloud - Music app
 *
 * @author Alessandro Cosentino
 * @author Bernhard Posselt
 * @author Morris Jobke
 * @copyright 2012 Alessandro Cosentino <cosenal@gmail.com>
 * @copyright 2012 Bernhard Posselt <nukeawhale@gmail.com>
 * @copyright 2013 Morris Jobke <morris.jobke@gmail.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Music\BusinessLayer;


class BusinessLayerException extends \Exception {

	/**
	 * Constructor
	 * @param string $msg the error message
	 */
	public function __construct($msg){
		parent::__construct($msg);
	}

}