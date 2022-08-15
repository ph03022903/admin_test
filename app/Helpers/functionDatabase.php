<?php
namespace App\Helpers;
class functionDatabase {

    public static function SortNested($arrs,$params)
    {
        $result = array();
        $i = 0;
        foreach ($arrs as $j => $element) {
            if ($element[array_keys($params)[0]] == array_values($params)[0]) {
                $result[$i] = $element;
                $sort = new functionDatabase();
                $child = $sort->SortNested($arrs, array('parent' => $element['id']));

                if (empty($element['skip']) && $child) {
                    $result[$i]['child'] = ($result[$i]['child']) ? array_merge($result[$i]['child'], $child) : $child;
                }
                $i++;
                unset($arrs[$j]);
            }
        }
        return $result;
    }

}
