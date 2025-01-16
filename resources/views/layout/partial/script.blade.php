  <!-- plugin for charts  -->
  <script src="./assets/js/plugins/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
  <script>
function toggleSubmenu(submenuId, arrowId) {
  var submenu = document.getElementById(submenuId);
  var arrowIcon = document.getElementById(arrowId);

  // Toggle submenu visibility
  submenu.classList.toggle('hidden');
  submenu.classList.toggle('max-h-0');
  submenu.classList.toggle('max-h-96'); // Maksimum tinggi submenu (sesuaikan)

  // Rotate arrow icon
  arrowIcon.classList.toggle('rotate-180');
}

  </script>