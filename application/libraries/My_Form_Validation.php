<?php

class My_Form_Validation extends CI_Form_validation {
    public function __construct($rules = array()) {
        parent::__construct($rules);
    }

    public function valid_date($date) {
        if(!preg_match('/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/', $date))
            return false;
        $day = (int) substr($date, 0, 2);
        $month = (int) substr($date, 3, 2);
        $year = (int) substr($date, 6, 4);
        return checkdate($month, $day, $year);
    }
}
