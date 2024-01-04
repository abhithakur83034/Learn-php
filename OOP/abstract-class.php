<?php
abstract class MainCl{

    public $name;

    abstract public function say();
}

class ChildCl extends MainCl{
    public function say(){
        echo "Hello I'm from Abstract function";
        echo "<br>";
    }
}

$A = new ChildCl();
$A->say();
?>

<!-- ******************************************************************************************************************************************* -->

<?php
abstract class Main{
    public $name;

    abstract function intro();
}

class C1 extends Main{
    function intro(){
        echo "Hello I'm from C1";
        echo "<br>";
    }
}
class C2 extends Main{
    function intro(){
        echo "Hello I'm from C2";
        echo "<br>";
    }
}
class C3 extends Main{
    function intro(){
        echo "Hello I'm from C3";
        echo "<br>";
    }
}

$callC1 = new C1();
$callC1->intro();
$callC2 = new C2();
$callC2->intro();
$callC3 = new C3();
$callC3->intro();
?>




<!-- ******************************************************************************************************************************************* -->

<?php
abstract class ParentClass{
    abstract function prefixName($name);
}
class ChildClass extends ParentClass{
    function prefixName($name){
        if($name == "Abhi"){
            $prefix = "Mr";
        }elseif ($name == "Other") {
            $prefix = "Mrs";
        }else {
            $prefix = " ";
        }
        return "{$prefix}-{$name}";
    }
}


$P = new ChildClass;
echo $P->prefixName("Abhi");
echo "<br>";
echo $P->prefixName("Other");
echo "<br>";
echo $P->prefixName(" ");
?>




















