<?php
    $source = "../test.jpg";
    // createimage.py needs to be ran first, in order to create test.jpg
    // to change the colours of the gradiant.
    // Filenpaths will be changed to DB later on

    $d = 0.69; //$d(ark): Change the darkness of second gradiant:

    $maxheight = 300;
    $barwidth = 2;

    $im = imagecreatefromjpeg($source);

    $imgw = imagesx($im);
    $imgh = imagesy($im);

    $px = $imgw*$imgh;

    $colours = array();

    for ($i=0; $i<$imgw; $i++)
    {
        for ($j=0; $j<$imgh; $j++)
        {
            $rgb = ImageColorAt($im, $i, $j); //RGB of each px

            if(isset($colours[$rgb])) {
                $colours[$rgb]++;
            } else {
                $colours[$rgb] = 1;
            }
        }
    }

    arsort($colours);
        $colours[0] = 0;        // deletes
        $colours[16777215] = 0; // white & black
        arsort($colours);

    $colourkeys = array_keys($colours);

    $r = ($rgb >> 16) & 0xFF;
    $g = ($rgb >> 8) & 0xFF;            
    $b = $rgb & 0xFF;

    $hex1 = sprintf("#%02x%02x%02x", $r, $g, $b);
    $hex2 = sprintf("#%02x%02x%02x", ($d * $r), ($d * $g), ($d * $b));
    // echo $hex; //Output most used colour
?>