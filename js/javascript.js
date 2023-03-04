

// const singupBtn = document.querySelector(".signupBtn");
// const loginBtn = document.querySelector(".loginBtn");
// const moveBtn = document.querySelector(".moveBtn");
// const singup = document.querySelector(".singup");
// const login = document.querySelector(".login");

// loginBtn.addEventListener("click", () => {
//     moveBtn.classList.add("rightBtn");
//     login.classList.add("loginForm");
//     singup.classList.remove("singupForm");
//     moveBtn.innerHTML = "Login";
// })

// singupBtn.addEventListener("click", () => {
//     moveBtn.classList.remove("rightBtn");
//     login.classList.remove("loginForm");
//     singup.classList.add("singupForm");
//     moveBtn.innerHTML = "Singup";
// })


const loginBtn = document.querySelector(".loginBtn");

const registerBtn = document.querySelector(".registerBtn");

const moveBtn = document.querySelector(".moveBtn");

const login = document.querySelector(".login");

const register = document.querySelector(".register");








loginBtn.addEventListener("click", () => {

    moveBtn.classList.remove("rightBtn");

    register.classList.remove("registerform");

    login.classList.add("loginForm");

    moveBtn.innerHTML = "login";


})


registerBtn.addEventListener("click", () => {

    moveBtn.classList.add("rightBtn");
    register.classList.add("registerform");

    login.classList.remove("loginForm");

    moveBtn.innerHTML = "register";




})