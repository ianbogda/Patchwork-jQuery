<?php /*********************************************************************
 *
 *   Copyright : (C) 2010 Nicolas Grekas. All rights reserved.
 *   Email     : p@tchwork.org
 *   License   : http://www.gnu.org/licenses/agpl.txt GNU/AGPL
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU Affero General Public License as
 *   published by the Free Software Foundation, either version 3 of the
 *   License, or (at your option) any later version.
 *
 ***************************************************************************/


class agent_jquery_jquery__x2Dui__x2Ecss extends agentTemplate
{
	const contentType = 'text/css';

	protected $watch = array('public/css');

	function compose($o)
	{
		$o = jquery::compose($o);

		return parent::compose($o);
	}
}
