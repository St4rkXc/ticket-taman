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

function navbar() {
   const menu = document.querySelector(".menu");
   const mobile = document.querySelector('.mobilenav');
   function updateMenu() {
      const width = window.innerWidth;
      if (width > 768) {
         mobile.classList.add('hidden');
         mobile.classList.remove('block', 'opacity-100', 'opacity-0');
      } else {
         mobile.classList.add('hidden');
         mobile.classList.remove('block');
      }
   }
   menu.addEventListener('click', () => {
      mobile.classList.toggle('opacity-0');
      mobile.classList.toggle('opacity-100');
      mobile.classList.toggle('hidden');
      mobile.classList.toggle('block');
   });
   updateMenu();
   window.addEventListener('resize', updateMenu);
}

document.addEventListener("DOMContentLoaded", navbar)
document.addEventListener("DOMContentLoaded", userScroll);
