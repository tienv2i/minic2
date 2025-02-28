<?php 
ob_start(); 
?>

<div class="container my-4" style="max-width:720px;">
    <h3 class="mb-4 text-center">Trắc nghiệm ôn thi giải phẫu YDS</h3>
    <ul class="list-group">
        <?php foreach ($links as $link => $title): ?>
            <li class="list-group-item">
                <a href="<?=base_url($link)?>"><?=$title?></a>
            </li>
        <?php
        endforeach;
        ?>
    </div>
</div>




<?php $content = ob_get_clean();

$page_title = "Trắc nghiệm giải phẫu";

$link_style = <<< EOL
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="/public/static/js/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
.block-quiz-test label.text-border-success {
    border-color: green !important;
}
</style>
EOL;

$js_script = <<< EOL
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-AMS-MML_CHTML" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-AMS-MML_CHTML" async></script>
EOL;
include_once __DIR__."/../layout.php";


