<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Notes 04, PHP Arrays</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <div class="main">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php 
        /* Write your PHP here */

        /* PHP arrays are largely the same as Javascropt arrays. However, they must be created using the array() object. And you cannot mix and match data types. */

        $phpMyArray = array('Buick', 'Dodge', 'Toyota', 'Mazda');
        echo $phpMyArray[2];

        /* A for loop is very common type of programming loop that is used on arrays to display all the elements at once. */
        for ($i = 0; $i < 4; $i++) {
            echo '<br>' . $phpMyArray[$i];
        }
        
        /* PHP Associative Arrays are special kinds of arrays that use a key value pair system. This means, that each element in an array has a 'key' and a value */
        $friendAges = array(
            'Peter' => 56,
            'Martha' => 76,
            'Joe' => 31,
            'Hentry' => 21,
            'George' => 27,
            'Ethel' => 82
        );
        echo '<br>' . $friendAges['Joe'];

        /* When you are looping through an asssociate array, you must use a foreach loop. the foreach loop states that for each key in the associative array, it will output the value associated or tied to that key. Below, $x represents the key and $x_value represents the value associated with the key. */

        foreach($friendAges as $x => $x_value){
            echo '<br>' . $x . '-' . $x_value;
        }

        /* PHP also has support for mutidimentional arrays. They are declared using multiple array objects. */

        $cats = array (
                array('Persian' , 34, 16),
                array('Raggamuffin' , 12, 18),
                array('Siamese' , 18, 17)
            );

        echo '<br>' . $cats[1][0];

        /* to iterate or loop through multidimentional array, you may have to nest a for loop inside of another for loop in order to access the appropriate index values. */

        for ($row = 0; $row < 3; $row++) {
            echo '<br>Row: ' . $cats[$row]; 
                for ($col = 0; $col < 3; $col++) {
                    echo '<br>' . $cats[$row][$col];
                }
        }

        ?> 

           

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        </div>
    </body>
</html>
