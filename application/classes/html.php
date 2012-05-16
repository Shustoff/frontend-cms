<?php defined('SYSPATH') or die('No direct script access.');

class HTML extends Kohana_HTML {
    /**
         * Creates a link element.
         *
         *     echo HTML::link('media/img/favicon.ico', array('rel'=>'ico', 'type'=>'image/x-icon'));
         *
         * @param   string   file name
         * @param   array    default attributes
         * @param   mixed    protocol to pass to URL::base()
         * @param   boolean  include the index page
         * @return  string
         * @uses    URL::base
         * @uses    HTML::attributes
         */

    public static function link($file, array $attributes = NULL, $protocol = NULL, $index = FALSE)
    {
        if (strpos($file, '://') === FALSE)
        {
            // Add the base URL
            $file = URL::base($protocol, $index).$file;
        }

        // Set the stylesheet link
        $attributes['href'] = $file;

        return '<link'. HTML::attributes($attributes) . ' >';
    }
}