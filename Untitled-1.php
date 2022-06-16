<?php

function plusGrand($abc, $def)
{
    if ($abc > $def) return $abc;
    return $def;
}

?>





<!-- Retourner la plus petite variable : -->
<?php
function plusPetit($abc, $def)
{
    if ($abc < $def) return $abc;
    return $def;
}
?>

<?php
function plusPetit($int1, $int2)
{
    return min([$int1, $int2]);
}
?>