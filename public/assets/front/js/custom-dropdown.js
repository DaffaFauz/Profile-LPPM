document.addEventListener("DOMContentLoaded", function () {
  // Mencegah menu dropdown menutup saat mengklik di dalamnya
  document.querySelectorAll(".dropdown-menu").forEach(function (element) {
    element.addEventListener("click", function (e) {
      e.stopPropagation();
    });
  });

  // Logika untuk mengatur posisi submenu secara dinamis
  var dropdownToggles = document.querySelectorAll(".dropdown-toggle");

  dropdownToggles.forEach(function (toggle) {
    toggle.addEventListener("show.bs.dropdown", function (event) {
      let dropdownMenu = this.nextElementSibling;
      if (!dropdownMenu) return;

      let parentLi = this.closest(".nav-item.dropdown");
      if (!parentLi) return;

      // Cek apakah parent dari parent (kakek) adalah menu yang sudah dropstart
      const grandparentMenu = parentLi.closest(".dropdown-menu");
      const isParentDropstart = grandparentMenu
        ? grandparentMenu.parentElement.classList.contains("dropstart")
        : false;

      // Jika kakeknya sudah dropstart, paksa anak ini untuk dropend (buka ke kanan)
      if (isParentDropstart) {
        parentLi.classList.add("dropend");
        parentLi.classList.remove("dropstart");
        return; // Hentikan eksekusi lebih lanjut
      }

      // Logika default: cek posisi kanan layar
      const rect = dropdownMenu.getBoundingClientRect();
      const isOffscreenRight = rect.right > window.innerWidth;

      // Jika akan keluar layar di kanan, buat jadi dropstart (buka ke kiri)
      if (isOffscreenRight) {
        parentLi.classList.add("dropstart");
        parentLi.classList.remove("dropend");
      }
    });
  });
});
