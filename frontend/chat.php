 <?php
        
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Emotion ChatBot</title>
    </head>

    <ul>
        <li><a href=index.php>Home</a></li>
        <li><a href=signup.php>Sign Up</a></li>
        <li><a href=login.php>Login</a></li>
    
    </ul>

<body>
    <h1>Welcome!</h1>
    <p> If you don't have an account to chat, sign up below!</p>
    <div class="hero-buttons">
        <button type="button"><a href="signup.php" class="btn-secondary">Sign Up!</a></button>
    </div>


    <div class="Chat-Container">
        <div class="Chat-History">
          <h2>Chat History</h2>  
        </div>
    </div>

    <div class="User-Input-Container">
        <div class="User-Input">
            <textarea   
                name="message"
                placeholder="type your message!"
            ></textarea>
            <button type="button">Send</button>
        </div>
    </div>
</body>
</html>