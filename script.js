document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("contactForm").addEventListener("submit", function (event) {
        event.preventDefault();

        var form = event.target;
        var formData = new FormData(form);

        var xhr = new XMLHttpRequest();
        xhr.open(form.method, form.action);
        xhr.setRequestHeader("Accept", "application/json");
        xhr.onreadystatechange = function () {
            if (xhr.readyState !== XMLHttpRequest.DONE) return;
            if (xhr.status === 200) {
                form.reset();
                document.getElementById("form-messages").innerHTML = xhr.responseText;
            } else {
                document.getElementById("form-messages").innerHTML = xhr.responseText;
            }
        };
        xhr.send(formData);
});
});