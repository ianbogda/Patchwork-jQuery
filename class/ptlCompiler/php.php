<?php /***************** vi: set fenc=utf-8 ts=4 sw=4 et: ******************
 *
 *   Copyright : (C) 2012 Nicolas Grekas. All rights reserved.
 *   Email     : p@tchwork.org
 *   License   : http://www.gnu.org/licenses/agpl.txt GNU/AGPL
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU Affero General Public License as
 *   published by the Free Software Foundation, either version 3 of the
 *   License, or (at your option) any later version.
 *
 ***************************************************************************/


class ptlCompiler_php extends self
{
    function __construct($template, $binaryMode)
    {
        if (0 === strpos($template, 'jquery/'))
        {
            $this->Xlvar = '\{\[';
            $this->Xrvar = '\]\}';

            $this->blockSplit = ' ***//*** ';
            $this->Xlblock = '\/\*\*\*\s*';
            $this->Xrblock = '\s*\*\*\*\/\n?';
            $this->Xcomment = '\{\[\*.*?\*\]\}\n?';
        }

        parent::__construct($template, $binaryMode);
    }
}
