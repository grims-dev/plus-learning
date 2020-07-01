//get menu and sidebar elements
var toggle = document.getElementById('js-toggle');
var closeBtn = document.getElementById('js-close');
var sidebar = document.getElementById('js-sidebar');

//add toggle event listeners
toggle.addEventListener("click", toggleSidebar);
closeBtn.addEventListener("click", toggleSidebar);

//initial moved state check
var isMoved = false;

//on click, toggle the movement of the menu and main page depending on current moved state
function toggleSidebar() {
    if (isMoved === false) {
        //sidebar.style.transform = "translateX(0px)";
        sidebar.classList.add('menu-nav--toggled');
        isMoved = true;
    } else {
        //sidebar.style.transform = "translateX(250px)";
        sidebar.classList.remove('menu-nav--toggled');
        isMoved = false;
    }
}