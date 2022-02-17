<?php

function showErrors($array)
{
    if (count($array) > 0) {
        echo "<div class='alert alert-danger mt-2' role='alert'>
        ";
        foreach ($array as $error) {
            echo "- $error";
        }
        echo "
        </div>";
    }
}

function inputCustom($data)
{
    return view("panel.shared.inputCustom", compact("data"));
}
