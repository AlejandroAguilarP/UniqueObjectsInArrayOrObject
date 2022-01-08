<?php

// $details = array(
//     0 => array("id"=>"1", "name"=>"Mike",    "num"=>"9876543210"),
//     1 => array("id"=>"2", "name"=>"Carissa", "num"=>"08548596258"),
//     2 => array("id"=>"1", "name"=>"Mathew",  "num"=>"784581254"),

// );
$details = array(
    (object)["id"=>"1", "name"=>"Mike",    "num"=>"9876543210"],
    (object)["id"=>"2", "name"=>"Carissa", "num"=>"08548596258"],
    (object)["id"=>"1", "name"=>"Mathew",  "num"=>"784581254"],
);
$prop = 'id';

function remove_duplicate_keys( $details, $prop = 'id') {
        $models = array_map( function( $detail ) use ($prop) {
            if(is_array($detail)){
                $detail = (object)$detail;
            }
            return $detail->{$prop};
        }, $details);
    
    $unique_models = array_unique( $models );
    return array_intersect_key( $details, $unique_models );
}
print_r(remove_duplicate_keys( $details, $prop ));

?>