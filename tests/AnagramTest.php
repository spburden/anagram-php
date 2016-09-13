<?php
    require_once __DIR__. "/../src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_compareWords()
        {
            // Assemble
            $test_compareWords = new Anagram;
            $word1 = "bread";
            $word2 = "bearlfalsed";

            // Act
            $result = $test_compareWords->compareWords($word1, $word2);

            // Assert
            $this->assertEquals(false, $result);
        }

        function test_multipleWords()
        {
            // Assemble
            $test_multipleWords = new Anagram;
            $word1 = "beardly";
            $words = "jump beard race";

            // Act
            $result = $test_multipleWords->multipleWords($word1, $words);

            // Assert
            $this->assertEquals(['beard'], $result);
        }

        function test_partialWords()
        {
            // Assemble
            $test_partialWords = new Anagram;
            $word1 = "beardly";
            $word2 = "beard";

            // Act
            $result = $test_partialWords->partialWords($word1, $word2);

            // Assert
            $this->assertEquals(true, $result);
        }
    }
?>
