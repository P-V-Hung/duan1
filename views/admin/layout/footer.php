</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
<script>
    function chooseFile(fileInput, idImg) {
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById(idImg).setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(fileInput.files[0]);

        }
    }
</script>
</body>

</html>