<!DOCTYPE html>
<html>

<body>

    <p>Choose your Color:</p>
    <select id="Color" onchange="run()">
        <!--Call run() function-->
        <option value=""></option>
        <option value="red">Red</option>
        <option value="green">Green</option>
        <option value="blue">Blue</option>
        <option value="yellow">Yellow</option>
    </select>

    <p>Your color is: </p>
    <p id="resultColorValue"></p>

    <script>
        function run() {
            document.getElementById("resultColorValue").innerHTML = document.getElementById("Color").value;
        }
    </script>
</body>

</html>