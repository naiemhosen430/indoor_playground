const onHoverSubNavShow = document.getElementById("on-hover-hide-sub-m");
const onHoverSubNavHide = document.getElementById("on-hover-show");

document.getElementById("sub-menu").addEventListener("mouseenter", () => {
    onHoverSubNavShow.style.display = "none";
    onHoverSubNavHide.style.display = "inline-block";
});

document.getElementById("sub-menu").addEventListener("mouseleave", () => {
    onHoverSubNavShow.style.display = "inline-block";
    onHoverSubNavHide.style.display = "none";
});

// mobile menu

const mobileMenu = document.getElementById("mobile-menu");

const MenuToggler = document
    .getElementById("menu-toggler")
    .addEventListener("click", () => {
        if (mobileMenu.style.display === "none") {
            mobileMenu.style.display = "block";
        } else {
            mobileMenu.style.display = "none";
        }
    });
