function validateEmail() {
    var email = document.getElementById("email").value;
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if(email.match(pattern)){
        document.getElementById('courseForm').submit();
    } else {
        alert("Invalid email address");
    }
}

function makePayment() {
    // Here you could integrate a real payment API
    alert("This would process a payment");
}
