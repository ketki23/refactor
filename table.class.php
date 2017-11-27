<?php
class HtmlTable// printing the output in html table
    {
            static  function displayTable($output)
            {
                echo '<table>';
                echo "<table cellpadding='10px' border='5px' style='border-solid black'>";
                foreach($output as $align)
                {
                    echo '<tr>';
                    foreach($align as $row)
                       {
                         echo '<td>';
                         echo $row;
                         echo '</td>';
                       }
                    echo '</tr>';
                }
                echo '</table>';
                echo '<br>';
                echo '<hr>';
            }
    }

             
?>
