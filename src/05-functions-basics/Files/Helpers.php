<?php
function formateDate(string $date): string
{
    return date("d/m/Y", strtotime($date));
}
