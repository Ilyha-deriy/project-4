<?php
class A{
    private function _getA(){
        echo "text ";
    }
    protected function _getB(){
        echo " text 2";
    }
    public function test(){
        return $this->_getA() & $this->_getB();
}
}
$right= new A();
$right->test();
class B extends A{
    public function test()
    {
        return $this->_getB();
    }
}
$right= new B();
$right->test();
?>