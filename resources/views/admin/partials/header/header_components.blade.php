<?php
    $cssList = [
        "admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css",
        "admin/assets/plugins/global/plugins.bundle.css",
        "admin/assets/plugins/custom/prismjs/prismjs.bundle.css",
        "admin/assets/css/style.bundle.css",
        "admin/assets/css/themes/layout/header/base/light.css",
        "admin/assets/css/themes/layout/header/menu/light.css",
        "admin/assets/css/themes/layout/brand/dark.css",
        "admin/assets/css/themes/layout/aside/dark.css",
    ];
?>

{{-- begin::Global Theme Styles(used by all pages) --}}
<?php foreach ($cssList as $key => $item): ?>
    <link href="{{url($item)}}" rel="stylesheet" type="text/css"/>
<?php endforeach; ?>
{{-- End::Global Theme Styles(used by all pages) --}}


