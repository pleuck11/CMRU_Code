<?php
        if (isset($_POST['submit1']))
        {
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];

            echo "ผลรวมของ $n1 + $n2 = ".($n1 + $n2)."<br>";

        }

        elseif (isset($_POST['submit2']))
        {
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];

            echo "ผลรวมของ $n1 - $n2 = ".($n1 - $n2)."<br>";

        }

        elseif (isset($_POST['submit3']))
        {
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];

            echo "ผลรวมของ $n1 * $n2 = ".($n1 * $n2)."<br>";

        }

        elseif (isset($_POST['submit4']))
        {
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];

            echo "ผลรวมของ $n1 / $n2 = ".($n1 / $n2)."<br>";

        }

    ?>