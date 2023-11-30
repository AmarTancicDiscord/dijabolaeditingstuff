<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIJABOLA Server Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }

        header {
            text-align: center;
            background-color: #3498db;
            color: #fff;
            padding: 10px;
        }

        h1 {
            color: #2c3e50;
        }

        .post {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
        }

        .post h2 {
            color: #3498db;
        }

        .post p {
            color: #34495e;
        }

        #chat {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 20px;
            height: 200px;
            overflow-y: scroll;
        }

        #messageInput {
            width: 70%;
            padding: 5px;
        }

        #sendButton {
            padding: 5px;
        }

        .clickable {
            color: #3498db;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>DIJABOLA Server Blog</h1>
        <p>Welcome to our community blog!</p>
    </header>

    <div class="post">
        <h2>First Post Title</h2>
        <p>Published on: <time>November 30, 2023</time></p>
        <p>This is the content of the first blog post. Feel free to share your thoughts and comments below.</p>
    </div>

    <div class="post">
        <h2>Second Post Title</h2>
        <p>Published on: <time>December 5, 2023</time></p>
        <p>This is the content of the second blog post. We hope you enjoy reading it!</p>
    </div>

    <!-- Chat Section -->
    <div id="chat">
        <div><strong>Admin:</strong> Hey! Welcome to the Dijabola Blog. <span class="clickable" onclick="chatWithOwner()">Do you want to chat with an owner?</span> <span class="clickable" onclick="getPurchaseURL()">Do you want to get the purchase URL?</span></div>
    </div>
    <input type="text" id="messageInput" placeholder="Type your message...">
    <button id="sendButton" onclick="sendMessage()">Send</button>

    <?php
    function sendMessage() {
        // Your PHP logic for sending messages (if needed)
    }

    function checkUserMessage($message) {
        // Your PHP logic for checking user messages (if needed)
    }

    function sendAdminMessage($adminMessage) {
        echo "<script>
            const chat = document.getElementById('chat');
            const message = document.createElement('div');
            message.innerHTML = `<strong>Admin:</strong> ${adminMessage}`;
            chat.appendChild(message);
        </script>";
    }

    function chatWithOwner() {
        sendAdminMessage("Please wait, an owner will come soon to chat.");
    }

    function getPurchaseURL() {
        sendAdminMessage("This is the URL to buy our editing stuff: <a href='https://payhip.com/DijaEditingStuff' target='_blank'>https://payhip.com/DijaEditingStuff</a>");
    }
    ?>
    
    <!-- Footer Section -->
    <footer>
        <p>&copy; 2023 DIJABOLA Server. All rights reserved.</p>
    </footer>
</body>
</html>
