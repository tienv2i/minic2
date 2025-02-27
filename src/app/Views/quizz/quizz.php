<?php 
    use Minic2\Core\Config;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=static_url("css/fontawesome.min.css")?>" />
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
            <a href="<?=base_url("quizz")?>" class="btn btn-primary text-white" alt="Quizz home"><i class="fa fa-home"> </i></a>
            <button type="button" class="btn btn-primary" id="toggle_answer" alt="Toggle answer">Show answer</button>
            <buttton class="btn btn-success" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });" alt="Scroll to top"><i class="fa fa-arrow-up"> </i></buttton>
            <buttton class="btn btn-success" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });" alt="Scroll to top"><i class="fa fa-arrow-down"> </i></buttton>

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