document.getElementById("sendButton").addEventListener("click", function(event) {
    event.preventDefault(); 
    
    var formData = new FormData(document.getElementById("contactForm"));

    fetch("process_form.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById("form-messages").innerText = "Messaggio inviato";
            document.getElementById("contactForm").reset(); 
            document.getElementById("contactForm").style.display = "none"; 
        } else {
            for (const [key, value] of Object.entries(data.errors)) {
                document.getElementById(key + "_error").innerText = value;
            }
        }
    })
    .catch(error => {
        console.error("Error:", error);
    });
});
