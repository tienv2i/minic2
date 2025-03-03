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
class __TwigTemplate_444791b6516fcb7c063b9f9830ba8fa4 extends Template
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
        }
        div.quiz-note img{
            width: 100%;
        }
    </style>
    <title>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("page_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["page_title"] ?? null), "Minic 2")) : ("Minic 2")), "html", null, true);
        yield "</title>
    ";
        // line 34
        yield from $this->unwrap()->yieldBlock('link_tags', $context, $blocks);
        // line 35
        yield "    <script>
        var toggle_answer = function () {
            if (window.show_answer === true) {
                \$ ('#toggle_answer').text('Show answers').removeClass('btn-danger').addClass('btn-primary');
                \$ ('i.text-success').addClass('hidden');
                \$ ('div.quiz_note').addClass('hidden');
                \$ ('label.right-answer').removeClass('text-border-success');
                window.show_answer = false
            } else {
                \$ ('#toggle_answer').text('Hide answers').removeClass('btn-primary').addClass('btn-danger');
                \$ ('i.text-success').removeClass('hidden');
                \$ ('div.quiz_note').removeClass('hidden');
                \$ ('label.right-answer').addClass('text-border-success');
                window.show_answer = true
            }
        }

        \$(document).keydown(function(event) {
            if (event.which === 32) { 
                event.preventDefault();
                toggle_answer();
            }
        });

        \$(document).ready(function () {
            window.show_answer = false;
            \$ ('#toggle_answer').click(function () {
                toggle_answer();
            });

        });

            
    </script>
</head>
<body>

    ";
        // line 72
        yield from $this->loadTemplate((("quizz/contents/" . ($context["content_file"] ?? null)) . ".html"), "quizz/quizz.html", 72)->unwrap()->yield($context);
        // line 73
        yield "
    <div class=\"position-fixed fixed-bottom bg-white py-2 border-top no-print\">
        <div class=\"container text-center\" style=\"max-width: 720px;\">
            <a href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("quizz"), "html", null, true);
        yield "\" class=\"btn btn-primary text-white\"><i class=\"fa fa-home\"> </i></a>
            <button type=\"button\" class=\"btn btn-primary\" id=\"toggle_answer\">Show answer</button>
            <buttton class=\"btn btn-success\" onclick=\"window.scrollTo({ top: 0, behavior: 'smooth' });\" alt=\"Scroll to top\"><i class=\"fa fa-arrow-up\"> </i></buttton>
            <buttton class=\"btn btn-success\" onclick=\"window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });\" alt=\"Scroll to top\"><i class=\"fa fa-arrow-down\"> </i></buttton>
        </div>
    </div>
    ";
        // line 82
        yield from $this->unwrap()->yieldBlock('script_tags', $context, $blocks);
        // line 83
        yield "</body>
</html>";
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link_tags(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 82
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
        return array (  166 => 82,  156 => 34,  150 => 83,  148 => 82,  139 => 76,  134 => 73,  132 => 72,  93 => 35,  91 => 34,  87 => 33,  61 => 10,  57 => 9,  52 => 7,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "quizz/quizz.html", "D:\\Projects\\minic2\\src\\app\\Views\\quizz\\quizz.html");
    }
}
