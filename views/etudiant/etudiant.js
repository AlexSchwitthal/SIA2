function hideAllSubMenus() {
    var subMenus = document.getElementsByClassName("subMenu");
    
    for (var i = 0; i < subMenus.length; i++) {
        subMenus[i].style.display = "none";
    }
}

function showSubMenu(id) {
    hideAllSubMenus();
    document.getElementById(id).nextElementSibling.style.display = "block";
}

