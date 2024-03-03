// Navbar Dropdown Button
const navItemBerita = document.getElementById("navItemBerita");
const caretLeft = document.getElementById("faCaretLeft");

let rotated = false;
navItemBerita.addEventListener("click", function (event) {
    if (!rotated) {
        caretLeft.style.transition = "transform 0.3s ease-in-out";
        caretLeft.style.transitionDelay = "0.3s";
        caretLeft.style.transform = "rotate(-90deg)";
        rotated = true;
    } else {
        caretLeft.style.transform = "rotate(0deg)";
        rotated = false;
    }

    event.preventDefault();
});

const dropdownMenu = document.getElementById("dropdownMenu");

let isDropdownVisible = false;

function toggleDropdownMenu() {
    if (isDropdownVisible) {
        dropdownMenu.classList.add("dropdownMenu-hidden");
        setTimeout(() => {
            dropdownMenu.style.display = "none";
            dropdownMenu.classList.remove("dropdownMenu-hidden");
        }, 300);
    } else {
        dropdownMenu.style.display = "block";
    }
    isDropdownVisible = !isDropdownVisible;
}

navItemBerita.addEventListener("click", function (event) {
    toggleDropdownMenu();
    event.preventDefault();
});

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
        caretLeft.style.display = "none";
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
        caretLeft.style.display = "block";
        sidebar.style.marginTop = "0";
    }
    sidenavVisible = !sidenavVisible; // Toggle status tampilan sidenav
    event.preventDefault();
});

// modal pop up ubah
function openModalUbah(id, name) {
    document.getElementById('id_kategori').value = id;
    document.getElementById('nama_kategori').value = name;

    document.getElementById('form_ubah_kategori').setAttribute('action', `/assessment_kategori/${id}`);

    const modal = new bootstrap.Modal(document.getElementById('ubahKategori'));
    // const modal = new bootstrap.Modal(document.getElementById('ubahStatusKepemilikan'));
    modal.show();
}

// modal pop up hapus
function openModalHapus(id, name) {
    document.getElementById('id_kategori').value = id;
    document.getElementById('nama_kategori').value = name;

    // const formModalContent = document.getElementById('formModalContent');
    // formModalContent.action = '/assessment/' + id;
    document.getElementById('form_hapus_kategori').setAttribute('action', `/assessment_kategori/${id}`);

    const modal = new bootstrap.Modal(document.getElementById('hapusKategori'));
    modal.show();
}

// modal pop up ubah status kepemilikan
function openModalUbahSK(id, name) {
    
    document.getElementById('id_status_kepemilikan').value = id;
    document.getElementById('nama_status_kepemilikan').value = name;

    document.getElementById('form_ubah_status_kepemilikan').setAttribute('action', `/admin/status_kepemilikan/${id}`);

    const modal = new bootstrap.Modal(document.getElementById('ubahStatusKepemilikan'));
    modal.show();
}

// modal pop up hapus status kepemilikan
function openModalHapusSK(id, name) {
    document.getElementById('id_status_kepemilikan').value = id;
    document.getElementById('nama_status_kepemilikan').value = name;

    // const formModalContent = document.getElementById('formModalContent');
    // formModalContent.action = '/assessment/' + id;
    document.getElementById('form_hapus_status_kepemilikan').setAttribute('action', `/admin/status_kepemilikan/${id}`);

    const modal = new bootstrap.Modal(document.getElementById('hapusStatusKepemilikan'));
    modal.show();
}

// modal pop up ubah assessment subkategori
function openModalUbahASK(id, name) {
    document.getElementById('id_assessment_sub_kategori').value = id;
    document.getElementById('nama_assessment_sub_kategori').value = name;
    
    document.getElementById('form_ubah_assessment_sub_kategori').setAttribute('action', `/assessment_sub_kategori/${id}`);
    const x = $(`opt-kategori[${id}]`).prop('selected',true);
    console.log(x);


    const modal = new bootstrap.Modal(document.getElementById('ubahAssessmentSubKategori'));
    modal.show();
}

// modal pop up hapus assessment subkategori
function openModalHapusASK(id, name) {
    document.getElementById('id_assessment_sub_kategori').value = id;
    document.getElementById('nama_assessment_sub_kategori').value = name;
    

    document.getElementById('form_hapus_assessment_sub_kategori').setAttribute('action', `/assessment_sub_kategori/${id}`);

    const modal = new bootstrap.Modal(document.getElementById('hapusAssessmentSubKategori'));
    modal.show();
}