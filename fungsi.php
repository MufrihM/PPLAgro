<?php
function inputFields($header, $type, $name, $value){
    $ele = "<label for='$name' class=\"form-label mx-3 mt-3\">$header</label>
    <div class=\"col-12 mb-1 px-4\">
        <input type='$type' class=\"form-control\" id='$name' name='$name' value='$value'>
    </div>";
    echo $ele;
}
?>