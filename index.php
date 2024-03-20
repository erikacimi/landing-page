<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div id="contact-form">
            <h1>Fill the form below</h1>
            <p>Complete the form to get instant access</p>
            <form action="process_form.php" method="post" id="contactForm">
                <input type="text" name="company_name" placeholder="🏢Company name" required>
                <input type="text" name="full_name" placeholder="👤Full name" required>
                <input type="email" name="email" placeholder="📧Email" required>
                <input type="number" name="phone" placeholder="📞Phone" required>
                <select name="choose_service" id="chooseService" required>
                    <option value="" disabled selected>Choose Service</option>
                    <option value="Assunzioni">Assunzioni</option>
                    <option value="Ferie">Ferie</option>
                    <option value="Malattia">Malattia</option>
                    <option value="Licenziamento">Licenziamento</option>
                </select>
                <br><br><br>
                <button type="submit" id="sendButton">Send Message</button>
            </form>
            <div id="form-messages"></div>
        </div>
        <div>
            <img src="img ex 20-marz.jpg">
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

