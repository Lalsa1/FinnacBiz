<!DOCTYPE html>
<html lang="en">

<?php
if (isset($_GET['action']) && $_GET['action'] != "") {
    $action = $_GET['action'];
} else {
    $action = "dashboard";
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <title>FinnacBiz</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="assets/select2/css/select2.min.css">
    <script src="assets/select2/js/select2.min.js"></script>
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <?php
    include("production/navBar.php");
    ?>

    <?php
    include("production/" . $action . ".php");
    ?>

    <section class="footerPart" style="margin-top:35vh;">
        <?php
        include("production/footer.php");
        ?>
    </section>

    <script>
        // Initialize Select2
        $(document).ready(function() {
            $('.select2').select2({
                theme: 'bootstrap'
            });
            let pageTitle = "<?= (isset($pageTitle) && $pageTitle != "") ? $pageTitle : "Home"; ?>";
            document.title = makeCamelCase(pageTitle) + " - FinnacBiz";
        });

        function makeCamelCase(mySentence) {
            const words = mySentence.toLowerCase().split(" ");
            for (let i = 0; i < words.length; i++) {
                words[i] = words[i][0].toUpperCase() + words[i].substr(1);
            }
            return words.join(" ");
        }
    </script>
</body>

</html>