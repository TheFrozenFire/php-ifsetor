<?php
function ifsetor(&$value, $default = null) {
    return isset($value) ? $value : $default;
}
