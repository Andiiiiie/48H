<?php

class My_form_validation extends CI_Form_validation {
    public function __construct($rules = array()) {
        parent::__construct($rules);
    }

    public function valid_date($date) {
        if(strlen($date) != 10)
            return false;
        $year = (int) substr($date, 0, 4);
        $month = (int) substr($date, 5, 2);
        $day = (int) substr($date, 8, 2);
        return checkdate($month, $day, $year);
    }
}
