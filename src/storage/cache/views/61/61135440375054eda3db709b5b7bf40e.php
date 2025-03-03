<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* quizz/quizz.html */
class __TwigTemplate_103590004c2da39f304d25430e6fae0d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'link_tags' => [$this, 'block_link_tags'],
            'script_tags' => [$this, 'block_script_tags'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("css/fontawesome.min.css"), "html", null, true);
        yield "\" />
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("js/jquery-ui.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("js/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <style>
        body {
            padding-bottom: 50px;
        }
        .block-quiz-test label.text-border-success {
            border-color: green !important;
        }
        .hidden {
            display: none !important;
        }
        @media print
        {    
            .no-print, .no-print *
            {
                display: none !important;
            }
            button {
                display: none !important;
            }
        }
        div.quiz-note img{
            width: 100%;
        }
        div.w3-large {
            margin-bottom: 10px;
        }
        button.quiz-button {
            margin-right: 10px;
        }
    </style>
    <title>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("page_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["page_title"] ?? null), "Minic 2")) : ("Minic 2")), "html", null, true);
        yield "</title>
    ";
        // line 43
        yield from $this->unwrap()->yieldBlock('link_tags', $context, $blocks);
        // line 44
        yield "    <script>
        function toggle_all_answer () {
            window.show_answer = !window.show_answer;
            let newStatus = window.show_answer ? \"true\" : \"false\";
            
            \$(\".block-quiz-test\").each(function() {
                \$(this).attr(\"data-show_answers\", newStatus);
                
                if (newStatus === \"true\") {
                    \$(this).find(\"i.text-success\").removeClass(\"hidden\");
                    \$(this).find(\"div.quiz_note\").removeClass(\"hidden\");
                    \$(this).find(\"label.right-answer\").addClass(\"text-border-success\");
                    \$(\".quiz-button\").addClass('btn-danger').removeClass('btn-primary').html('<i class=\"fa fa-times\"></i>');
                } else {
                    \$(this).find(\"i.text-success\").addClass(\"hidden\");
                    \$(this).find(\"div.quiz_note\").addClass(\"hidden\");
                    \$(this).find(\"label.right-answer\").removeClass(\"text-border-success\");
                    \$(\".quiz-button\").addClass('btn-primary').removeClass('btn-danger').html('<i class=\"fa fa-check-circle\"></i>');
                }
            });
            
            \$(\"#toggle_answer\").text(window.show_answer ? \"Hide all answers\" : \"Show all answers\")
                .toggleClass(\"btn-danger btn-primary\");
        }

        \$(document).keydown(function(event) {
            if (event.which === 32) { 
                event.preventDefault();
                toggle_all_answer();
            }
        });

        \$(document).ready(function() {
            
        window.show_answer = false;
        
        \$(\"#toggle_answer\").click(function() {
            toggle_all_answer();
        });
        
        \$(\".quiz-button\").click(function() {
            let questionNumber = \$(this).attr(\"data-question\");
            let quizBlock = \$(\".block-quiz-test[data-question-number='\" + questionNumber + \"']\");
            
            if (quizBlock.length) {
                let currentStatus = quizBlock.attr(\"data-show_answers\");
                let newStatus = currentStatus === \"true\" ? \"false\" : \"true\";
                quizBlock.attr(\"data-show_answers\", newStatus);
                
                if (newStatus === \"true\") {
                    quizBlock.find(\"i.text-success\").removeClass(\"hidden\");
                    quizBlock.find(\"div.quiz_note\").removeClass(\"hidden\");
                    quizBlock.find(\"label.right-answer\").addClass(\"text-border-success\");
                    \$(this).addClass('btn-danger').removeClass('btn-primary').html('<i class=\"fa fa-times\"></i>');
                } else {
                    quizBlock.find(\"i.text-success\").addClass(\"hidden\");
                    quizBlock.find(\"div.quiz_note\").addClass(\"hidden\");
                    quizBlock.find(\"label.right-answer\").removeClass(\"text-border-success\");
                    \$(this).addClass('btn-primary').removeClass('btn-danger').html('<i class=\"fa fa-check-circle\"></i>');
                }
            }
        });
    });
            
    </script>
</head>
<body>

    ";
        // line 112
        yield from $this->loadTemplate((("quizz/contents/" . ($context["content_file"] ?? null)) . ".html"), "quizz/quizz.html", 112)->unwrap()->yield($context);
        // line 113
        yield "
    <div class=\"position-fixed fixed-bottom bg-white py-2 border-top no-print\">
        <div class=\"container text-center\" style=\"max-width: 720px;\">
            <a href=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("quizz"), "html", null, true);
        yield "\" class=\"btn btn-primary text-white\"><i class=\"fa fa-home\"> </i></a>
            <button type=\"button\" class=\"btn btn-primary\" id=\"toggle_answer\">Show all answer</button>
            <buttton class=\"btn btn-success\" onclick=\"window.scrollTo({ top: 0, behavior: 'smooth' });\" alt=\"Scroll to top\"><i class=\"fa fa-arrow-up\"> </i></buttton>
            <buttton class=\"btn btn-success\" onclick=\"window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });\" alt=\"Scroll to top\"><i class=\"fa fa-arrow-down\"> </i></buttton>
        </div>
    </div>
    ";
        // line 122
        yield from $this->unwrap()->yieldBlock('script_tags', $context, $blocks);
        // line 123
        yield "</body>
</html>";
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link_tags(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script_tags(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "quizz/quizz.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  206 => 122,  196 => 43,  190 => 123,  188 => 122,  179 => 116,  174 => 113,  172 => 112,  102 => 44,  100 => 43,  96 => 42,  61 => 10,  57 => 9,  52 => 7,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "quizz/quizz.html", "D:\\Projects\\minic2\\src\\app\\Views\\quizz\\quizz.html");
    }
}
