<?php
function groupPages($pages)
{
    $result = [];
    foreach ($pages as $item->title) {
        $result[$item->title[0]][] = $item;
    }
    ksort($result);
    return $result;
}