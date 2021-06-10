<!doctype html>
<html lang="en" class="h-100">

<?= $this->include('layout/header'); ?>

<!-- My CSS -->
<link rel="stylesheet" href="/css/style.css">

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <?= $this->include('layout/nav_homepage'); ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <?= $this->renderSection('content'); ?>
    </main>
    <?= $this->include('layout/footer'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function previewImg(){
    const gedung = document.querySelector('#gedung');
    const gedungLabel = document.querySelector('.custom-file-label');
    const imgPreview = document.querySelector('.img-preview');

    gedungLabel.textContent = gedung.files[0].name;

    const fileGedung = new FileReader();
    fileGedung.readAsDataURL(gedung.files[0]);

    fileGedung.onload = function(e){
        imgPreview.src = e.target.result;
    }
    }
    
    </script>
</body>

</html>