<?php
    $source = "../test.jpg"; //Change to outputfile of createimage.py

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
        $colours[0] = 0;
        $colours[16777215] = 0; //deletes white & black
        arsort($colours);

    $colourkeys = array_keys($colours);
    var_dump($max = array_slice($colourkeys, 0, 5));

    $r = ($rgb >> 16) & 0xFF;
    $g = ($rgb >> 8) & 0xFF;            
    $b = $rgb & 0xFF;

    $hex = sprintf("#%02x%02x%02x", $r, $g, $b);
    echo $hex; //Output most used colour
?>