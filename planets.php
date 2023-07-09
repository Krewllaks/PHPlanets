<?php
$planetdizi = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function myFunction($array, $value) {
    $filterArray = array_filter($array);
    $randArray = array_rand($filterArray, $value);
    $sonuc = array_map(function ($item) use ($filterArray) {
        return $filterArray[$item];
    }, $randArray);
    return $sonuc;
}

echo '<pre>';
print_r(myFunction($planetdizi, 2));
print_r(myFunction($planetdizi, 3));
print_r(myFunction($planetdizi, 2));
print_r(myFunction($planetdizi, 4));
print_r(myFunction($planetdizi, 5));

?>