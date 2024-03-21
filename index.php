<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="contact-form">
            <h1>Fill the form below</h1>
            <p>Complete the form to get instant access</p>
            <form action="process_form.php" method="post" id="contactForm">
                <input type="text" name="company_name" id="company_name" placeholder="🏢Company name">
                <span class="error-message" id="company_name_error"></span>
                <input type="text" name="full_name" id="full_name" placeholder="👤Full name">
                <span class="error-message" id="full_name_error"></span>
                <input type="email" name="email" id="email" placeholder="📧Email">
                <span class="error-message" id="email_error"></span>
                <input type="tel" name="phone" id="phone" placeholder="📞Phone">
                <span class="error-message" id="phone_error"></span>
                <select name="choose_service" id="chooseService">
                    <option value="" disabled selected>Choose Service</option>
                    <option value="Assunzioni">Assunzioni</option>
                    <option value="Ferie">Ferie</option>
                    <option value="Malattia">Malattia</option>
                    <option value="Licenziamento">Licenziamento</option>
                </select>
                <span class="error-message" id="choose_service_error"></span>
                <br><br><br>
                <button type="submit" id="sendButton">Send Message</button>
            </form>
            <div id="form-messages"></div>
        </div>
        <div>
            <img src="img ex 20-marz.jpg" alt="Example Image">
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
