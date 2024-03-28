function validateForm() {
    var username = document.getElementById("input-box-username").value;
    var email = document.getElementById("input-box-email").value;
    var password = document.getElementById("input-box-password").value;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>])[A-Za-z\d!@#$%^&*(),.?":{}|<>]{8,}$/;
    
   
    if (username === "") {
        alert("Username must be filled out");
        return false;
    }
    if (!email || !email.includes('@') || !email.includes('.')) {
        alert("Please enter a valid email address");
        return false;
    }
    if (password.length < 10) {
        alert("Password must be at least 10 characters");
        return false;
    }
    if (!passwordRegex.test(password)) {
        alert("Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character, and must be at least 8 characters long");
        return false;
    }
    return true;
}