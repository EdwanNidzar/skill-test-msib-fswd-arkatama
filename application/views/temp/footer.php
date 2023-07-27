  <!-- Footer -->
  <footer class="bg-dark text-light text-center py-3">
    <p>Hak Cipta © 2023 Muhammad Edwan Nidzar.</p>
  </footer>

  <!-- buat data tables -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

  <!-- Link JS Bootstrap dan jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- for message -->
<script>
  setTimeout(function() {
    document.getElementById("success-alert").style.display = "none";
    document.getElementById("error-alert").style.display = "none";
  }, 5000);
</script>

<script>
    new DataTable('#mytable');
</script>

</body>

</html>