<html>
    <body>
        <form action="" method="post">
            <center>
                <table border=0>
                    <tr>
                        <td>
                            Student Name
                        </td>
                        <td>
                            <input type=text name="t1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for Physics
                        </td>
                        <td>
                            <input type=text name="t2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for Chemistry
                        </td>
                        <td>
                            <input type=text name="t3">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for Math
                        </td>
                        <td>
                            <input type=text name="t4">
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <input type=submit name="s" value="Result">
            </center>
            <?php
if(isset($_POST['s']))////checking whether the input element is set or not
{
    $a=$_POST['t1']; //accessing value from 1st text box
    $a1=$_POST['t2']; //accessing value from 2nd text field
    $a2=$_POST['t3']; //accessing value from 3rd text field
    $a3=$_POST['t4']; //accessing value from 4th text field
    $sum=$a1+$a2+$a3; //total marks
    $avg=$sum/3;
    if($avg>=0&&$avg<=50)
        $grade="Fail";
    if($avg>50&&$avg<=70)
        $grade="C";
    if($avg>70&&$avg<=80)
        $grade="B";
    if($avg>80&&$avg<=90)
        $grade="A";
    if($avg>90)
        $grade="E";
    echo "<br>";
    echo "<font size=4><center>Student is:-".$a."</center><br>"; 
    echo "<font size=4><center>Total marks:-".$sum."</center><br>"; 
    echo "<font size=4><center>Grade is:-".$grade."</center>"; 
}
            ?>
        </form>
    </body>
</html>
