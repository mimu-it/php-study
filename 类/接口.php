<?php
interface IHuman{
    public function height();
    public function weight();
}


class Man implements IHuman {
    private $a = "170cm";
    private $b = "68kg";

    public function height() {
        return $this -> a;
    }

    public function weight() {
        return $this -> b;
    }

}


$p = new Man();
echo $p->height()."\n";
echo $p->weight()."\n";
?>