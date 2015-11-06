--TEST--
ReflectionClass::getConstant() - bad params
--FILE--
<?php require 'vendor/autoload.php';
class C {
	const myConst = 1;
}

$rc = \BetterReflection\Reflection\ReflectionClass::createFromName("C");
echo "Check invalid params:\n";
var_dump($rc->getConstant());
var_dump($rc->getConstant("myConst", "myConst"));
var_dump($rc->getConstant(null));
var_dump($rc->getConstant(1));
var_dump($rc->getConstant(1.5));
var_dump($rc->getConstant(true));
var_dump($rc->getConstant(array(1,2,3)));
var_dump($rc->getConstant(new C));
?>
--EXPECTF--
Check invalid params:

Warning: ReflectionClass::getConstant() expects exactly 1 parameter, 0 given in %s on line 8
NULL

Warning: ReflectionClass::getConstant() expects exactly 1 parameter, 2 given in %s on line 9
NULL
bool(false)
bool(false)
bool(false)
bool(false)

Warning: ReflectionClass::getConstant() expects parameter 1 to be string, array given in %s on line 14
NULL

Warning: ReflectionClass::getConstant() expects parameter 1 to be string, object given in %s on line 15
NULL