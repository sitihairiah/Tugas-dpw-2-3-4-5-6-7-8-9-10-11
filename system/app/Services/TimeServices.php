<?php

namespace APP\Services;

class TimeServices{

    public function showTimeNow(){
        return date("H:i:s");
    }
}