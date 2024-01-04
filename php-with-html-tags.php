<?php
$h2_color = "red";  # change the color of all h2 tags
echo "first php tag";
echo " <h1 style='color:green' >PHP With Html Tags</h1> ";
echo "===========================================================================";
echo "<br>";
?>


<?php
echo "second php tag";
$name= "abhi"; 
echo " <h1 style='color:red' >My Name Is : ".$name."</h1> ";
echo "===========================================================================";
echo "<br>";
?>


<h1  style='color:orange'>   
    <?php echo $name ?> from out of php tag. 
</h1>
<h2  style='color:<?php echo $h2_color ?>'>
    <?php echo $name ?> from out of php tag.
</h2>
<h2  style='color:<?php echo $h2_color ?>'>
    <?php echo $name ?> from out of php tag.
</h2>
<h2  style='color:<?php echo $h2_color ?>'>
    <?php echo $name ?> from out of php tag.
</h2>


