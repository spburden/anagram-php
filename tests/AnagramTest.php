<?php
    require_once __DIR__. "/../src/FileName.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_methodName_objectiveHere()
        {
            // Assemble
            $test_Variable = new AnagramTest("Argument Here");
            $input = "Input Test Text Here";

            // Act
            $result = $test_Variable->methodName($input);

            // Assert
            $this->assertEquals(true, $result);
        }
    }



?>
