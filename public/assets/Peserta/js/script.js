// Toggle Sidenav
const barsMenu = document.getElementById("barsMenu");
const sidenavMain = document.getElementById("sidenavMain");
const mainContent = document.getElementById("mainContent");
const navLinks = document.querySelectorAll("#navLink");
const navLinkText = document.querySelectorAll("#navLinkText");
const navbarBrand = document.getElementById("navbarBrand");
const sidebar = document.getElementById("sidebar");

let sidenavVisible = true;

barsMenu.addEventListener("click", function (event) {
    if (sidenavVisible) {
        sidenavMain.style.width = "4%";
        mainContent.style.marginLeft = "3.625rem";
        // Iterasi melalui setiap elemen dalam NodeList
        navLinks.forEach(function (element) {
            element.style.marginLeft = "0";
        });
        navLinkText.forEach(function (element) {
            element.style.display = "none";
        });
        navbarBrand.style.display = "none";
        sidebar.style.marginTop = "4rem";
    } else {
        sidenavMain.style.width = "100%";
        mainContent.style.marginLeft = "17.125rem"; // Atur kembali margin ke nilai semula jika ingin menampilkan sidenav
        navLinks.forEach(function (element) {
            element.style.marginLeft = "1rem";
        });
        // Iterasi melalui setiap elemen dalam NodeList
        navLinkText.forEach(function (element) {
            element.style.display = "block"; // Atur kembali display ke nilai semula
        });
        navbarBrand.style.display = "block";
        sidebar.style.marginTop = "0";
    }
    sidenavVisible = !sidenavVisible; // Toggle status tampilan sidenav
    event.preventDefault();
});

// // Initialization for ES Users
// import { Tab, initMDB } from "mdb-ui-kit";

// initMDB({ Tab });

// Ubah teks 'Choose File' menjadi 'Unggah' saat input file dipilih
// document
//     .querySelector('input[type="file"]')
//     .addEventListener("change", function (e) {
//         var fileName = e.target.files[0].name;
//         var siblingInput = e.target.nextElementSibling;
//         if (fileName) {
//             siblingInput.value = fileName;
//         } else {
//             siblingInput.value = "";
//         }
//     });

$(function () {
    rome(inputCalendar, { time: false, inputFormat: "DD-MM-YYYY" });
});

const fileInput = document.getElementById("inputGroupFile1");

const fileInputLabel = document.getElementById("file-input-label");

fileInput.addEventListener("change", () => {
    if (fileInput.value === "") {
        fileInputLabel.innerHTML = "Select a file";
    } else {
        const realPathArray = fileInput.value.split("\\");

        fileInputLabel.innerHTML = realPathArray[realPathArray.length - 1];
    }
});
