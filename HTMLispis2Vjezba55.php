<?php
    function selectIspis($id, $name, $options, $selected, $style){
        echo "<select style='{$style}' id='{$id}' name='{$name}'>";
            foreach($options as $key=>$value){
                if($selected == $key){
                    echo "<option value='{$key}' selected>". $value . "</option>";
                }
                else{
                    echo "<option value='{$key}'>". $value . "</option>";
                }
            }
        echo "</select>";
    }

    $opcije = array("1"=>"prva", "2"=>"druga","3"=>"treća","4"=>"četvrta");
    $style= "width:200px;font-weight:bold;color:blue";
    selectIspis("option","option",$opcije,"3",$style);
?>