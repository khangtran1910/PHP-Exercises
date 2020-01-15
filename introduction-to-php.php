<?php
/*
+---+
| 1 | 
+---+
Print the sentence: Welcome to PHP!
*/
print "Welcome to PHP!";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 2 | 
+---+
Print the sentence: PHP stands for "Hypertext Preprocessor"!
*/
$type = '"Hypertext Preprocessor"!';
print "PHP stands for ".$type;


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
*/
$sentence .= " PHP stands for ";
$sentence .= $type;
print "<p>$sentence</p>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/
print "HTML - Stands for Hypertext Markup Language";
echo "<br>";
print "CSS - Stands for Cascading Stylesheet";
echo "<br>";
print "JS - Stands for JavaScript";
echo "<br>";
print "PHP - Stands for Hypertext Preprocessor";
echo "<br>";
print "SQL - Stands for Structural Query Language";

      
// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - <ul> ... </ul>:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/
print "<ul>
HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
</ul>";

?>