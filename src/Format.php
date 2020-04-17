<?php namespace jabarihunt;

    /********************************************************************************
    * Formatter Class
    *
    * This class was developed to hold static formatting helper methods...
    *
    * name(): Method that correctly capitalizes names.  Accounts for prefixes &amp;
    * suffixes, apostrophes, name parts that shouldn't be capitalized, and other
    * scenarios where using something like `ucwords(strtolower($str))` doesn't work.
    *
    * @author Jabari J. Hunt <jabari@jabari.net>
    ********************************************************************************/

        class Format {

            /********************************************************************************
             * NAME METHOD
             *
             * @param string $name
             * @throws Exception Improper input: String expected.
             * @return string
             ********************************************************************************/

                public static function name(string $name): string {

                    // VALIDATE PASSED STRING

                        if (!empty($name)) {

                            // SET INITIAL VARIABLES

                                $name                = str_replace('’', "'", strtolower($name));
                                $wordSplitters       = [' ', '-', "O'", "L'", "D'", 'St.', 'Mc'];
                                $lowercaseExceptions = ['the', 'van', 'den', 'von', 'und', 'der', 'de', 'da', 'of', 'and', "l'", "d'"];
                                $uppercaseExceptions = ['III', 'IV', 'VI', 'VII', 'VIII', 'IX'];

                            // LOOP THROUGH WORD SPLITTERS

                                foreach ($wordSplitters as $delimiter) {

                                    // SET INITIAL LOOP VARIABLES

                                        $words    = explode($delimiter, $name);
                                        $newWords = [];

                                    // LOOP THROUGH WORDS AND DECIDE CASE | DECIDE CASE OF WORD SPLITTER / DELIMITER

                                        foreach ($words as $word) {

                                            if (in_array(strtoupper($word), $uppercaseExceptions)) {
                                                $word = strtoupper($word);
                                            } else if (!in_array($word, $lowercaseExceptions)) {
                                                $word = ucfirst($word);
                                            }

                                            $newWords[] = $word;

                                        }

                                        if (in_array(strtolower($delimiter), $lowercaseExceptions)) {
                                            $delimiter = strtolower($delimiter);
                                        }

                                    //  REBUILD NAME

                                        $name = implode($delimiter, $newWords);

                                }
                        }
                        else {
                            throw new Exception('Improper input: String expected.');
                        }

                    // RETURN STRING

                        return $name;

                }

        }

?>