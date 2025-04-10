document.getElementById("registerForm").addEventListener("submit", function (e) {
    const password = document.querySelector("[name=txtpassword]").value
    const confirmpassword = document.querySelector("[name=txtconfirmpassword]").value
    const allSelect = document.querySelectorAll("select")

    for (let i = 0; i < allSelect.length; i++) {
        if (allSelect[i].selectedIndex == 0) {
            alert("Please add data to all inputs");
            e.preventDefault()
            return
        }
    }

    if (password.length < 8) {
        alert("Password must be at least 8 characters");
        e.preventDefault();
        return;
    }

    if (password !== confirmpassword) {
        alert("Password mismatched")
        e.preventDefault();
    }
})