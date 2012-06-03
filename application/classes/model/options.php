<?php defined('SYSPATH') or die('No direct script access.');

class Model_Options extends Model {

    protected $_tableOptions;

    public function get_all() {
        $db = DB::query(DB::select(), "SELECT * FROM options");
        $db->execute();
    }



}
