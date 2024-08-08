<footer id="footer">
  <!-- <h5>© <?php echo date("Y"); ?> My Blog</h5> -->
</footer>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('rsvp-form');
    form.addEventListener('submit', function (event) {
        var recaptcha = document.querySelector('[name="g-recaptcha-response"]');
        if (recaptcha && recaptcha.value === '') {
            event.preventDefault(); // Evitar que el formulario se envíe
            alert('Please complete the reCAPTCHA.');
        }
    });
});

</script>

<!-- wordpress footer includes -->
<?php wp_footer(); ?>