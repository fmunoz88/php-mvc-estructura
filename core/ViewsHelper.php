<?php

    class ViewsHelper
    {
        public function url($controller = CONTROLLER_DEFAULT, $action = ACTION_DEFAULT, $array = "")
        {
            $urlString = "index.php?controller=".$controller.'&action='.$action;
            return $urlString;
        }
    }
