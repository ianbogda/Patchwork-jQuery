<?php // vi: set fenc=utf-8 ts=4 sw=4 et:
/*
 * Copyright (C) 2012 Nicolas Grekas - p@tchwork.com
 *
 * This library is free software; you can redistribute it and/or modify it
 * under the terms of the (at your option):
 * Apache License v2.0 (http://apache.org/licenses/LICENSE-2.0.txt), or
 * GNU General Public License v2.0 (http://gnu.org/licenses/gpl-2.0.txt).
 */


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
