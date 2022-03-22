// kode utnuk tabs
//untuk simulasi awal klik
const defaultOpen = document.getElementById("defaultOpen");
if (defaultOpen !== null) {
    defaultOpen.click();
}

//untuk klik
function openTab(evt, tabId) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" activetab", "");
    }
    document.getElementById(tabId).style.display = "block";
    evt.currentTarget.className += " activetab";
}
