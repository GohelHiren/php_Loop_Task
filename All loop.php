<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Loop</title>
    <style>
        * {
            margin: 0;
            padding: 0;

        }

        div {
            background-color: black;
            height: 50px;
            width: 50px;
            display: inline-block;

        }

        table {
            display: flex;
            justify-content: center;
            padding: 50px;
            background-color: seashell;
        }

        table td {
            border: 1px solid black;
            padding: 10px;

        }

        .center {
            text-align: center;

        }

        .bg {
            background-color: sandybrown;
        }
    </style>
</head>

<body>
    <h1 style="font-size:45px; text-align:center; background-color:skyblue; color:white; padding:20px;">All php Loop
    </h1>
    <table border="0" cellspacing="10">
        <tr>
            <td class="bg">
                <h1>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ($i . "&nbsp;");
                        }
                        echo ("<br>");
                    }
                    ?>
                </h1>
            </td>
            <td class="bg">
                <h1>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ($j . "&nbsp;");
                        }
                        echo ("<br>");
                    }

                    ?>
                </h1>
            </td>
            <td class="bg">
                <h1>
                    <?php
                    for ($i = 5; $i >= 1; $i--) {
                        for ($j = 5; $j >= $i; $j--) {
                            echo ($i . "&nbsp;");
                        }
                        echo ("<br>");
                    }
                    ?>
                </h1>
            </td>
            <td class="bg">
                <h1>

                    <?php
                    for ($a = 0; $a <= 4; $a++) {
                        for ($b = 0; $b <= $a; $b++) {
                            echo ($b % 2) . "&nbsp;";
                        }
                        echo "<br>";
                    }
                    ?>
                </h1>
            </td>
        </tr>
        <tr>
            <td class="bg">
                <h1>
                    <?php
                    $n = 1;
                    for ($a = 1; $a <= 5; $a++) {
                        for ($b = 1; $b <= $a; $b++) {
                            echo $n++ . "&nbsp;";
                        }
                        echo "<br>";
                    }
                    ?>
                </h1>
            </td>
            <td class="bg">
                <h1>
                    <?php
                    for ($i = 5; $i >= 1; $i--) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ($j . "&nbsp;");
                        }
                        echo ("<br>");
                    }
                    ?>
                </h1>
            </td>
            <td class="bg">
                <h1>
                    <?php

                    for ($i = 1; $i <= 5; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ($j . "&nbsp;");
                        }
                        echo ("<br>");
                    }

                    for ($i = 4; $i >= 1; $i--) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ($j . "&nbsp;");
                        }
                        echo ("<br>");
                    }
                    ?>
                </h1>
            </td>
            <td class="bg">
                <h1>
                    <?php
                    for ($a = 5; $a >= 1; $a--) {
                        for ($b = $a; $b >= 1; $b--) {
                            echo $a . "&nbsp;";
                        }
                        echo "<br>";
                    }
                    ?>
                </h1>
            </td>
        </tr>
        <tr>
            <td class="bg" colspan="2">
                <h1 style="text-align:center;">
                    <?php
                    $k = chr(65);
                    for ($i = 65; $i <= 69; $i++) {
                        for ($j = 65; $j <= $i; $j++) {
                            echo $k . "&nbsp;";
                            $k++;
                        }
                        echo ("<br>");
                    }

                    ?>
                </h1>
            </td>
            <td class="bg" colspan="2">
                <h1>
                    <?php
                    for ($i = 65; $i <= 69; $i++) {
                        for ($j = 65; $j <= $i; $j++) {
                            echo chr($j);
                        }
                        echo ("<br>");
                    }
                    ?>
                </h1>
            </td>

        </tr>
        <tr>
            <td class="bg">

                <h1>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ("*" . "&nbsp;");
                        }
                        echo ("<br>");
                    }
                    ?>
                </h1>
            </td>
            <td class="center bg">

                <h1>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        for ($k = 1; $k <= $i; $k++) {
                            echo "*" . "&nbsp; &nbsp";
                        }
                        echo "<br />";
                    } ?>
                </h1>
            </td>
            <td class="bg">
                <h1>
                    <?php
                    for ($i = 5; $i >= 2; $i--) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ("*" . "&nbsp;");
                        }
                        echo ("<br>");
                    }

                    for ($i = 1; $i <= 5; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ("*" . "&nbsp;");
                        }
                        echo ("<br>");
                    }
                    ?>

                </h1>
            </td>

            <td class="bg center">

                <h1>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        for ($k = 1; $k <= $i; $k++) {
                            echo "*" . "&nbsp; &nbsp";
                        }
                        echo "<br />";
                    }

                    for ($i = 5; $i >= 1; $i--) {
                        for ($k = 1; $k <= $i; $k++) {
                            echo "*" . "&nbsp; &nbsp";
                        }
                        echo "<br />";
                    }
                    ?>
                </h1>
            </td>
        </tr>


    </table>

</body>

</html>