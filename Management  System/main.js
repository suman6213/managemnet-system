const password = document.getElementById("password"),
    showBtn = document.getElementById("toggle"),
    nextBtn = document.querySelectorAll(".box .btn"),
    closeBtn = document.getElementById('close');

nextBtn.forEach(function (button) {
    button.addEventListener('click', () => {
        setTimeout(function(){
            window.location.href = "login.php";
        }, 100);
    })
});

closeBtn.addEventListener('click',()=>{
    setTimeout(function(){
        window.location.href = "index.php";
    }, 100)
})

showBtn.addEventListener('click', () => {
    showBtn.classList.toggle("fa-eye");
    showBtn.classList.toggle("fa-eye-slash");
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
})

const Student = document.getElementById("student"),
    Teacher = document.getElementById("teacher"),
    Staff = document.getElementById("staff"),
    Admin = document.getElementById("admin"),
    Form = document.getElementById("form");

    Student.addEventListener('click',()=>{
        Form.action = "dbcon.php";
    })
    Teacher.addEventListener('click',()=>{
        Form.action = "dbcon.php";
    })
    Admin.addEventListener('click',()=>{
        Form.action = "dbcon.php";
    })
    Staff.addEventListener('click',()=>{
        Form.action = "dbcon.php";
    })





