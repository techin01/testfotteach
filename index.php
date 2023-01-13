<?php
include("server.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">



</head>

<body>

    <h1>This is a Heading</h1><br>
    <h2>This is a Heading</h2>
    <p>This is a paragraph.</p>
    <a href="https://www.google.com/webhp?hl=en&sa=X&ved=0ahUKEwjN-P_k46z8AhWRTXwKHZW1CosQPAgI">Supanut</a><br>
    <!-- <img src="https://www.thedrive.com/content/archive-images/lamborghini-egoista-electric-supercar-hero.jpg?auto=webp&optimize=high&quality=70&width=1920"> -->

    <input type="text" id="input01"><br>

    <!-- <button>submit</button><br> -->

    <input type="text" id="input02"><br>

    <button id="button01" onclick="checkinput()">Click!</button>

    <form action="userinsert_db.php" method="post">

        <div style="display: grid; grid-template-columns: 1fr;width: 50%;margin: auto;">

            <label for="">First Name</label>
            <input required type="text" style="height : 20px" name="firstname">

            <label for="" style="margin-top: 5px;">Last Name</label>
            <input required type="text" style="height: 20px;" name="lastname">

            <label for="" style="margin-top: 5px;">Email</label>
            <input required type="text" style="height: 20px;" name="email">

            <button type="submit" style="width: 100px;height: 50;margin: auto;margin-top: 10px;">submit</button>
        </div>

    </form>

    <table style="margin-top: 50px;">
        <tr>
            <th>Company</th>
            <th>Contact</th>
            <th colspan="2">Country</th>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td rowspan="2">Germany</td>
        </tr>
        <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
        </tr>
    </table>

</body>


<script>
    function checkinput() {
        var name = document.getElementById("input01").value
        console.log('Hi Supanut')
        if (name == "") {
            alert('Error input')
        } else {
            // alert('Hello world' + name)

            document.getElementById("input02").value = name
        }


        // name == "" ? alert('Error input') : alert('Hello world' + name)
    }
</script>

</html>