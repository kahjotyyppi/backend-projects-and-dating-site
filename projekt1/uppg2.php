<article>
    <h2>Tid och datum - Uppg 2</h2>

    <?php
    $tid = date("l.d.M.Y");
    print("idag är det ".$tid);


    $veckodagar = array("Söndag", "Måndag", "Tisdag", "Onsdag", "Torsdag","Fredag","Lördag");
    $Months = array("Januari", "Februari", "Mars", "April", "Maj","Juni","Juli", "Augusti", "October", "September", "November","December");
    $dag = date("l");
    $manad = date("M");

    if ($dag=="Sunday")
    {
        echo "idag är det ".$veckodag[0];
    }
    if ($dag=="Monday")
    {
        echo "idag är det ".$veckodag[1];
    }
    if ($dag=="Tuesday")
    {
        echo "idag är det ".$veckodag[2];
    }
    if ($dag=="Wednesday")
    {
        echo "idag är det ".$veckodag[3];
    }
    if ($dag=="Thursday")
    {
        echo "idag är det ".$veckodag[4];
    }
    if ($dag=="Friday")
    {
        echo "idag är det ".$veckodag[5];
    }
    if ($dag=="Saturday")
    {
        echo "idag är det ".$veckodag[6];
    }
    


    ?>


</article>

<div class="separator"></div>