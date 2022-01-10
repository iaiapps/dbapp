//code untuk sidebar
const sidebar = document.getElementById("sidebar");
const openclose = document.getElementById("openclose");
const page = document.getElementById("page");

const judul = document.querySelector(".judul");
const title = document.querySelectorAll(".title");
const menuitem = document.querySelectorAll(".menuitem");

const foto = document.querySelector(".foto");
const judulalt = document.querySelector(".judulalt");

const bukatutup = function bukatutup() {
  sidebar.classList.toggle("sidebaropen");
  page.classList.toggle("pageopen");

  judul.classList.toggle("closejudul");
  judulalt.classList.toggle("judulalt");
  judulalt.classList.toggle("openjudulalt");

  foto.classList.toggle("fotoalt");

  for (var i = 0; i < title.length; i++) {
    menuitem[i].classList.toggle("menuitem");
    menuitem[i].classList.toggle("menucenter");
    title[i].classList.toggle("titleclose");
  }
};

if (openclose !== null) {
  openclose.addEventListener("click", bukatutup);
}

//code untuk modal
const btnmodal = document.querySelectorAll(".btnmodal");
const modal = document.querySelectorAll(".modal");
const closemodal = document.querySelectorAll(".closemodal");

function open() {
  for (var i = 0; i < modal.length; i++) {
    modal[i].classList.add("active");
  }
}
function close() {
  for (var i = 0; i < modal.length; i++) {
    modal[i].classList.remove("active");
  }
}

for (var i = 0; i < btnmodal.length; i++) {
  btnmodal[i].addEventListener("click", open);
  closemodal[i].addEventListener("click", close);
}

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
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabId).style.display = "block";
  evt.currentTarget.className += " active";
}

//panel logout
const tbllogout = document.getElementById("tbllogout");
const panellogout = document.getElementById("panellogout");
function bukalogout() {
  panellogout.classList.toggle("d-none");
}

if (tbllogout !== null) {
  tbllogout.addEventListener("click", bukalogout);
}

//login toast
const toast = document.getElementById("toast");
const closetoast = document.getElementById("closetoast");

function tutuptoast() {
  toast.classList.toggle("d-none");
}

if (closetoast !== null) {
  closetoast.addEventListener("click", tutuptoast);
}

//pemberitahuan toast
const pemberitahuantoast = document.getElementById("pemberitahuantoast");
const closepemberitahuantoast = document.getElementById(
  "closepemberitahuantoast"
);

function tutuppemberitahuantoast() {
  pemberitahuantoast.classList.toggle("d-none");
}

if (closepemberitahuantoast !== null) {
  closepemberitahuantoast.addEventListener("click", tutuppemberitahuantoast);
}
