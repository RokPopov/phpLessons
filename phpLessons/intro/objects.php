<!DOCTYPE html>
<html>
<head>
  <title>Introduction to Object-Oriented Programming</title>
</head>
<body>
  <p>
    <?php
    // OBJECT stores data and information on how to process the data (known as method)
    // Create the class -> 1st step of creating an object
    // Class is a set of properties (variables) that are tied to an object
    class Person {
      // 1. create properties - (Variables tied to objects)
      public $firstname;
      public $lastname;
      public $age;

      // 2. assigning values to the property variables
      public function __construct($firstname, $lastname, $age) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
      }
      // 3. create a method (function tied to an object)
      public function hello() {
          return "I am " . $this->firstname . " " . $this->lastname . ", my age is: " . $this->age . "";
      }
    } // output the properties of the object (firstname, lastname, age)

    // 4. creating 2 new objects out of class Person
    // 'new' keyword is used to create an object from a class
    $person1 = new Person('Remy', 'Wayne', 33); // create object $person1
    $person2 = new Person('Zac', 'Wayne', 26); // create object $person2

    // 5. print out what the hello method returns
    echo $person1->hello();
    echo "<br>";
    echo $person2->hello();

/* $this -> a reference to the current object

  $this is a reserved keyword in PHP that refers to the calling object.
  It is usually the object to which the method belongs, but possibly another
  object if the method is called statically from the context of a secondary
  object. This keyword is only applicable to internal methods.
  */

      ?>
  </p>


</body>
</html>
