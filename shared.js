let button = document.querySelector('#send-mail__button');
let email = document.getElementsByName("email")[0].value;

console.log (button);
function sendEmail() {
    let email = document.getElementsByName("email")[0].value;
    let subject = "Кто-то ждет сайт";
    let body = "Кто-то ждет сайт";
    body += "Email: " + email;
    window.open("mailto:seryonse@gmail.com?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body));
}
button.addEventListener ('click', sendEmail);









