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

        ///// COMBINED OVERALL FUNCTION ////////
        function multipleWords($word1, $words)
        {
            $characters1 = str_split($word1);
            sort($characters1);
            $wordsArray = explode(" ", $words);
            $matchingWords = array();
            foreach ($wordsArray as $word) {
                if ($this->compareWords($word1, $word)){
                    array_push($matchingWords, $word);
                } elseif ($this->partialWords($word1, $word)){
                    array_push($matchingWords, $word);
                } else {
                }
            }
            return $matchingWords;
        }
        //// END OF COMBINED OVERALL FUNCTION //////

        
            //$equals = 0;
            // } ($i=0; $i < sizeof($wordsArray) ; $i++) {
            //     $compare = str_split($wordsArray[$i]);
            //     sort($compare);
            //     if ($characters1 == $compare) {
            //         $equals += 1;
            //     } else {
            //         $equals += 0;
            //     }
            // }
            // if ($equals == sizeof($wordsArray)) {
            //     return true;
            // } else {
            //     return false;
            // }


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

        // function anagramTest($word1, $input) {
        //     $matchingWords = array();
        //     if ($this->compareWords($word1, $input)) {
        //         array_push($matchingWords, $input);
        //     }
        //
        // }

    }
?>
