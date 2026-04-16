const btn = document.getElementById("menu-btn");
const menu = document.getElementById("menu");

btn.addEventListener("click", () => {
    btn.classList.toggle("open");
    if (btn.classList.contains("open")) {
        // open
        menu.classList.remove("h-0", "opacity-100");
        menu.classList.add("h-45", "opacity-100", "pt-2");
    } else {
        // close
        menu.classList.add("h-0", "opacity-100");
        menu.classList.remove("h-45", "opacity-100", "pt-2");
    }
});
