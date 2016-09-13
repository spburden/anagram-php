<?php
    class Anagram
    {
        function compareWords($word1, $word2)
        {
            $characters1 = str_split($word1);
            $characters2 = str_split($word2);
            sort($characters1);
            sort($characters2);
            if ($characters1 == $characters2) {
                return true;
            } else {
                return false;
            }
        }
        function multipleWords($word1, $words)
        {
            $characters1 = str_split($word1);
            sort($characters1);
            $wordsArray = explode(" ", $words);
            $equals = 0;
            for ($i=0; $i < sizeof($wordsArray) ; $i++) {
                $compare = str_split($wordsArray[$i]);
                sort($compare);
                if ($characters1 == $compare) {
                    $equals += 1;
                } else {
                    $equals += 0;
                }
            }
            if ($equals == sizeof($wordsArray)) {
                return true;
            } else {
                return false;
            }
        }

        function partialWords($word1, $word2) {
            $characters1 = str_split($word1);
            $characters2 = str_split($word2);
            $partialTest = array_intersect($characters1, $characters2);
            $partialTest2 = array_intersect($characters2, $characters1);
            if ($partialTest == $characters2 || $partialTest2 == $characters1) {
                return true;
            } else {
                return false;
            }
        }
    }
?>
