<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Response</title>
</head>
<body>

    <button onclick="send()">Send</button>

    <script>

        const send = () => {
            // Your JSON data
            const jsonData = {
            key1: "value1",
            key2: "value2",
            // Add more data as needed
            };

            // Convert JSON object to a JSON string
            const jsonString = JSON.stringify(jsonData);

            // Create a new XMLHttpRequest object
            const xhr = new XMLHttpRequest();

            // Configure the request
            const url = "process.php";
            xhr.open("POST", url, true); // Replace 'POST' with 'GET' if you want to use GET method

            // Set the request headers
            xhr.setRequestHeader("Content-Type", "application/json");

            // Set up a callback function to handle the response
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Access the response text using xhr.responseText
                        const responseText = xhr.responseText;

                        // Assuming the server returned a JSON response, parse it into a JavaScript object
                        const responseObject = JSON.parse(responseText);

                        console.log(responseObject)
                    } else {
                        // Request failed, handle the error
                        console.error("Request failed:", xhr.status);
                    }
                }   
            };

            // Send the JSON data
            xhr.send(jsonString);

        }

    </script>
</body>
</html>