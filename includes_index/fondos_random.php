<?php
$allowedExtensions = ['webp', 'jpg', 'jpeg', 'gif'];
$directory = 'https://hastalatumba.zona8.cl/assets/img/fondos/';
$files = array_diff(scandir($directory), array('..', '.'));

$randomImage = '';
foreach ($files as $file) {
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    if (in_array($extension, $allowedExtensions)) {
        $randomImage = $directory . $file;
        break;
    }
}

if ($randomImage !== '') {
    echo '<div class="cs-hero cs-style1 cs-bg cs-fixed_bg cs-shape_wrap_1" data-src="' . $randomImage . '"
          style="background-image: url(&quot;' . $randomImage . '&quot;);">';
} else {
    echo '<div class="cs-hero cs-style1 cs-bg cs-fixed_bg cs-shape_wrap_1">';
}
?>
<!-- Contenido de tu sitio web aquí -->
</div>