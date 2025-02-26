<?php 
    use Minic2\Core\Config;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?=static_url("js/jquery-ui.min.js")?>"></script>
    <script src="<?=static_url("js/popper.min.js")?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
    .block-quiz-test label.text-border-success {
        border-color: green !important;
    }
    </style>
    <title><?=$page_title ?? Config::get('app.app_name')?></title>
    <script>
            $(document).ready(function () {
                window.show_answer = false;
                $('div.quiz_note').hide();
                $('label.text-border-success').addClass('text-border-success-bak').removeClass('text-border-success');
            });
    </script>
</head>
<body>

    <?=$content ?? "Blank page"?>
    <div class="position-fixed fixed-bottom bg-white py-2 border-top">
        <div class="container text-center" style="max-width: 720px;">
            <button type="button" class="btn btn-primary mx-auto" id="toggle_answer">Show answer</button>
        </div>
        <script>
            $ ('#toggle_answer').click(function () {
                if (window.show_answer === true) {
                    $ ('#toggle_answer').text('Show answers');
                    $ ('#toggle_answer').addClass('btn-primary').removeClass('btn-danger');
                    $('div.quiz_note').hide();
                    $('label.text-border-success').addClass('text-border-success-bak').removeClass('text-border-success');
                    window.show_answer = false
                } else {
                    $ ('#toggle_answer').text('Hide answers');
                    $ ('#toggle_answer').addClass('btn-danger').removeClass('btn-primary');
                    $('div.quiz_note').show();
                    $('label.text-border-success-bak').addClass('text-border-success').removeClass('text-border-success-bak');
                    window.show_answer = true
                }
            });
        </script>
    </div>
    <?=$js_script ?? ""?>
</body>
</html>