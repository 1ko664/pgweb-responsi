<html>
<body>
    <h2> Input Your Insight of Ecotourism Places Here!</h2>

    <form action="input-pgweb8.php" onsubmit="return validateForm()" method="post">
        <label for="Location"> Location:</label><br>
        <input type="text" id="Location" name="Location" value=""><br>

        <label for="City">City:</label><br>
        <input type="text" id="City" name="City" value=""><br>

        <label for="Description">Description:</label><br>
        <input type="text" id="Description" name="Description" value=""><br>

        <input type="submit" value="Submit"/>
    </form>

    <p id="ecowisata_jkt"> </p>

    <script>
        function validateForm() {
            let text = "Your Data has been uploaded";
            document.getElementById("ecowisata_jkt").innerHTML = text;
            return false; // Prevent the form from submitting
        }
    </script>
</body>
</html>
