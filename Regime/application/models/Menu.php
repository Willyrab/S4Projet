<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends BDDObject
{
    protected $table = 'menu';

    public function getMenu($moment)
    {
        if ($moment == 1) {
            return 1;
        } else if ($moment == 11) {
            return 2;
        } else {
            return 3;
        }
    }
}
