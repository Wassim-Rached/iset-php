
<?php
class MyClass {
    public $data;
	public $id;
	private static $instancesCounter = 0;

    public function __construct($data) {
        $this->data = $data;
		$this->id = self::$instancesCounter++;
    }

    public function __clone() {
        // If you need to customize the cloning process, you can do it here
        // For example, you might want to create a deep copy of nested objects.
    }
}

// Creating an instance of MyClass
$obj1 = new MyClass('Hello');
$obj3 = new MyClass('XD');

// Cloning the object
$obj2 = clone $obj1;

// // Modifying the data property of the cloned object
// $obj2->data = 'World';

// Displaying the data property of both objects
// echo $obj1->data; // Output: Hello
// echo $obj2->data; // Output: World

echo $obj1->id;

echo "<br>";

echo $obj2->id;

echo "<br>";

echo $obj3->id;

?>
