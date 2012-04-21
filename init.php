<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * @author  arie
 */

if (! function_exists('Markdown'))
    require_once Kohana::find_file('vendor', 'markdown/markdown');
