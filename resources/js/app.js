import "./bootstrap";
function userScroll() {
    const navbar = document.querySelector(".my-navbar");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            navbar.classList.remove("bg-transparent");
            navbar.classList.add("bg-text");
        } else {
            navbar.classList.remove("bg-text");
            navbar.classList.add("bg-transparent");
        }
    });
}

document.addEventListener("DOMContentLoaded", userScroll);
