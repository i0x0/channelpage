<?php
function errorMessage($type)
{
    if ($type = "message") {
        return ("Error! Cause of error is:");
    } elseif ($type = "id") {
        return ("Error! Error id ");
    }
}

function error($JSONField)
{
    $errorBase = errorMessage("message");
    if ($JSONField = "location") {
        return ("{$errorBase} location field in JSON file.");
    }

    if ($JSONField = "") { }
}
