<?php defined('SYSPATH') or die('No direct script access.');

class Mod {
    public static function render($systemname, $name = NULL) {
        $mod = ORM::factory('Module')
            ->where('systemname', '=', $systemname)
            ->and_where('status', '=', 1)
            ->find();

        if ($name) echo "<h3 class='modname'>{$mod->name}</h3>";

        return $mod->content;
    }
}