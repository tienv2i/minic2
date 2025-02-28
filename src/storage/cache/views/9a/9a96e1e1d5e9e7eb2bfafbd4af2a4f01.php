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

/* quizz/contents/chitren.html */
class __TwigTemplate_edf418ffa877c052db0b7e511d9764f4 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"container my-4\" style=\"max-width:720px\">
\t<div class=\"main-test detail-quiz-course-result\" style=\"overflow:hidden;\">
\t\t<div class=\"quiz_name text-center\" style=\"margin: 0px;margin-bottom: 20px;\">
\t\t\t<h3>Giải Phẫu Chi Trên</h3>
\t\t</div>
\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_0\" data-page=\"0\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"0\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[0][id]\" value=\"673558bae275cbd05d8e2ce0\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[0][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 1: Tm nào sau đây không phải là tm nông ở chi trên?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTm nền
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTm đầu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTm giữa nền
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTm nách
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/7bc024c4-0a4e-4cc6-9e2c-6f40b0ed19d9.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_1\" data-page=\"1\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"1\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[1][id]\" value=\"673558b9e275cbd05d8e2cc4\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[1][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 2: Ở vùng khuỷu</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk trụ đi ở rãnh nhị đầu trong cùng đm trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNhánh sâu tk quay đi ở rãnh nhị đầu ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên quay nối với đm quặt ngược quay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên giữa nối với đm bên trụ trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/f464e39d-8201-424b-b9bd-e729b7643c6c.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_2\" data-page=\"2\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"2\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[2][id]\" value=\"673558b9e275cbd05d8e2cc5\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[2][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 3: Về mạch và tk vùng khuỷu, câu nào sau đây ĐÚNG?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cánh tay đi ở rãnh nhị đầu ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk trụ đi ở phía sau mỏm trên lồi cầu ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk giữa nằm phía trong đm cánh tay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNhánh nông tk quay đi ở rãnh nhị đầu trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/322dabd7-fc5f-4515-b642-907c6a982c66.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_3\" data-page=\"3\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"3\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[3][id]\" value=\"673558b9e275cbd05d8e2cc6\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[3][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 4: Chọn câu ĐÚNG?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm gian cốt chung là nhánh của đm quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tùy hành của đm trụ là cơ duỗi cổ tay trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm trụ bắt được dễ dàng ở cổ tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk gian cốt trước là nhánh của tk giữa
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_4\" data-page=\"4\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"4\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[4][id]\" value=\"673558b9e275cbd05d8e2cc7\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[4][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 5: Mô tả mạch máu và tk ở vùng cẳng tay trước, câu nào sau đây
\t\t\t\t\t\t\t\tSAI?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk giữa đi phía sau cơ gấp các ngón nông
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk trụ đi phía trong đm trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNhánh nông tk quay đi phía ngoài đm quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ gấp cổ tay quay là cơ tùy hành của đm quay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/322dabd7-fc5f-4515-b642-907c6a982c66-1.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_5\" data-page=\"5\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"5\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[5][id]\" value=\"673558b9e275cbd05d8e2cc8\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[5][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 6: Đm bên trụ dưới là nhánh bên của</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên trụ trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cánh tay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/f464e39d-8201-424b-b9bd-e729b7643c6c-1.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_6\" data-page=\"6\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"6\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[6][id]\" value=\"673558b9e275cbd05d8e2cc9\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[6][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 7: Thành phần nào sau đây không nằm trong ống cổ tay</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk trụ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGân gấp ngón cái dài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGân gấp các ngón nông
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>Mạc giữ gân gấp hợp với các xương cổ tay thành một ống gọi là ống cổ tay (carpal tunnel).
\t\t\t\t\t\t\tTrong ống cổ tay có các gân gấp, thần kinh giữa đi từ cẳng tay xuống bàn tay. Mạc giữ gân
\t\t\t\t\t\t\tgấp có tác dụng giữ các gân gấp không bật ra ngoài khi cổ tay gấp.</p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_7\" data-page=\"7\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"7\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[7][id]\" value=\"673558b9e275cbd05d8e2cca\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[7][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 8: Chọn câu ĐÚNG?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cánh tay sâu chui qua lỗ tam giác vai tam đầu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk cơ bì vận động tất cả các cơ vùng cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk giữa vận động tất cả các cơ vùng cẳng tay trước
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk quay cho nhánh tk gian cốt sau
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_8\" data-page=\"8\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"8\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[8][id]\" value=\"673558b9e275cbd05d8e2ccb\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[8][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 9: Về tk giữa, điểm nào sau đây SAI?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông cho nhánh ở vùng cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhi đến khuỷu, đi phía ngoài đm cánh tay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTham gia vận động các cơ vùng cẳng tay trước
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhi xuống bàn tay, đi phía sau mạc giữ gân gấp
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 716
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/322dabd7-fc5f-4515-b642-907c6a982c66-2.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_9\" data-page=\"9\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"9\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[9][id]\" value=\"673558b9e275cbd05d8e2ccc\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[9][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 10: Đm trụ có các đặc điểm nào sau đây, ngoại trừ</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLà một trong hai nhánh cùng của đm cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tỞ cẳng tay, đi phía trong tk trụ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐến bàn tay, đi phía trước mạc giữ gân gấp
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLà đm chính tạo nên cung gan tay nông
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 798
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/322dabd7-fc5f-4515-b642-907c6a982c66-3.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_10\" data-page=\"10\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"10\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[10][id]\" value=\"673558b9e275cbd05d8e2ccd\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[10][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 11: Cảm giác vùng cẳng tay sau được chi phối bởi</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk bì cẳng tay trong, tk quay, tk cơ bì
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk bì cẳng tay trong, tk quay, tk trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk quay, tk trụ, tk cơ bì
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk quay, tk trụ, tk giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_11\" data-page=\"11\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"11\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[11][id]\" value=\"673558b9e275cbd05d8e2cce\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[11][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 12: Các cơ vùng cẳng tay trước được vận động bởi</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk quay và tk trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk quay và tk giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk giữa và tk trụ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk giữa và tk cơ bì
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_12\" data-page=\"12\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"12\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[12][id]\" value=\"673558b9e275cbd05d8e2ccf\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[12][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 13: Nói về đm quay ở vùng bàn tay, điều nào sau đây SAI?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLà nhánh chính tạo nên cung gan tay nông
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐi vào gan tay giữa hai xương đốt bàn I và II
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChui qua giữa hai đầu của cơ khép ngón cái : Cho nhánh đm quay ngón trỏ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 1008
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/b01a8321-7f57-4160-8bb0-84f69c879bb0.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_13\" data-page=\"13\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"13\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[13][id]\" value=\"673558b9e275cbd05d8e2cd0\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[13][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 14: Cung đm gan tay nông được tạo bởi</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm trụ và đm quay ngón trỏ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm trụ và nhánh gan tay nông của đm quay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quay và nhánh gan cổ tay của đm trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm trụ và nhánh gan cổ tay của đm quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 1090
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/b01a8321-7f57-4160-8bb0-84f69c879bb0-1.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_14\" data-page=\"14\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"14\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[14][id]\" value=\"673558b9e275cbd05d8e2cd1\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[14][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 15: Cung đm gan tay sâu được tạo bời</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm trụ và đm gian cốt trước
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm trụ và đm quay ngón trỏ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quay và đm gian cốt trước
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quay và nhánh gan tay sâu của đm trụ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 1172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/b01a8321-7f57-4160-8bb0-84f69c879bb0-2.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_15\" data-page=\"15\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"15\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[15][id]\" value=\"673558b9e275cbd05d8e2cd2\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[15][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 16: Ở bàn tay, động mạch ngón cái chính là nhánh của</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm gian cốt trước
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm gian cốt sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCung gan tay nông
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 1254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/b01a8321-7f57-4160-8bb0-84f69c879bb0-3.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_16\" data-page=\"16\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"16\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[16][id]\" value=\"673558b9e275cbd05d8e2cd3\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[16][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 17: Tk giữa</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVận động cho các cơ vùng cánh tay trước
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLúc đầu đi phía ngoài đm cánh tay, sau đó bắt chéo vào trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông có chức năng vận động cơ vùng cẳng tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tA và B đúng
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 1336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/322dabd7-fc5f-4515-b642-907c6a982c66-5.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_17\" data-page=\"17\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"17\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[17][id]\" value=\"673558b9e275cbd05d8e2cd4\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[17][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 18: Vùng khuỷu, thành phần nào sau đây đi ở rãnh nhị đầu
\t\t\t\t\t\t\t\ttrong?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cánh tay và tk trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cánh tay và tk bì cánh tay trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cánh tay và tk giữa
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cánh tay, tk trụ, đm bên trụ trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 1419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/322dabd7-fc5f-4515-b642-907c6a982c66-6.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_18\" data-page=\"18\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"18\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[18][id]\" value=\"673558b9e275cbd05d8e2cd5\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[18][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 19: Đm gian cốt chung là nhánh của</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm trụ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quặt ngược trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 1501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/f464e39d-8201-424b-b9bd-e729b7643c6c-2.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_19\" data-page=\"19\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"19\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[19][id]\" value=\"673558b9e275cbd05d8e2cd6\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[19][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 20: Thành phần nào sau đây đi trong hõm lào?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm ngón cái chính
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quay ngón trỏ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 1583
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/b01a8321-7f57-4160-8bb0-84f69c879bb0-4.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_20\" data-page=\"20\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"20\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[20][id]\" value=\"673558b9e275cbd05d8e2cd7\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[20][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 21: Đm quay cho các nhánh bên sau đây, ngoại trừ</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quặt ngược quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNhánh gan cổ tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNhánh mu cổ tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm gian cốt chung
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_21\" data-page=\"21\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"21\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[21][id]\" value=\"673558b9e275cbd05d8e2cd8\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[21][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 22: Đm cánh tay có đặc điểm</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTiếp nối với đm dưới đòn ở điểm giữa xương đòn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChui qua lỗ tam giác cánh tay tam đầu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tỞ cánh tay bắt chéo tk giữa từ ngoài vào trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhi đến vùng khuỷu, đi ở rãnh nhị đầu trong
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 1736
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/322dabd7-fc5f-4515-b642-907c6a982c66-7.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_22\" data-page=\"22\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"22\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[22][id]\" value=\"673558b9e275cbd05d8e2cd9\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[22][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 23: Vùng delta được cáp máu bởi</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm mũ cánh tay trước
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm mũ cánh tay sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cùng vai ngực
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tA và B
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_23\" data-page=\"23\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"23\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[23][id]\" value=\"673558b9e275cbd05d8e2cda\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[23][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 24: Trong mạng mạch quanh khuỷu, đm quặt ngược gian cốt sẽ nối
\t\t\t\t\t\t\t\tvới</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cánh tay sâu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên giữa
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên trụ trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_24\" data-page=\"24\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"24\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[24][id]\" value=\"673558b9e275cbd05d8e2cdb\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[24][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 25: Tk trụ</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTách ra từ bó ngoài đám rối tk cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông chi phối vận động các cơ vùng cánh tay trước
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tỞ 1/3 giữa cánh tay chui qua vách gian cơ ngoài cùng với đm bên trụ trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông tham gia vận động cho cơ vùng cẳng tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 1961
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/brachial-plexus-2-visvg.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_25\" data-page=\"25\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"25\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[25][id]\" value=\"673558b9e275cbd05d8e2cdc\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[25][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 26: Tk nào sau đây không phải là ngành cùng của đám rối tk cánh
\t\t\t\t\t\t\t\ttay</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk nách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk cơ bì
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk bì cẳng tay sau
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 2044
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/brachial-plexus-2-visvg-1.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_26\" data-page=\"26\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"26\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[26][id]\" value=\"673558b9e275cbd05d8e2cdd\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[26][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 27: Cấu trúc nào sau đây luôn đi phía trong đm mạch nách</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTm nách
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk nách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_27\" data-page=\"27\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"27\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[27][id]\" value=\"673558b9e275cbd05d8e2cde\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[27][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 28: Vị trí nào sau đây trên đm nách bị tắc sẽ gây nguy hiểm
\t\t\t\t\t\t\t\tnhất</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgay dưới đm mũ cánh tay trước
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgay dưới đm mũ cánh tay sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhía trên đm dưới vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGiữa đm dưới vai và đm mũ cánh tay sau
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 2198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/94f8344f-6384-43a4-afb9-dde36bf89745.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_28\" data-page=\"28\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"28\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[28][id]\" value=\"673558b9e275cbd05d8e2cdf\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[28][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 29: Ở 1/3 dưới cánh tay, đm cánh tay đi ở</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhía trong tk giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhía ngoài tk giữa
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhía trước tk giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhía sau tk giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_29\" data-page=\"29\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"29\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[29][id]\" value=\"6728be97e275cb91b98e2cf4\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[29][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 30: Ở vùng nách lỗ tam giác vai tam đầu được giới hạn bởi ?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn bé, cơ tròn lớn, bờ ngoài xương vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn bé, cơ tròn lớn, đầu dài cơ tam đầu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn lớn, cơ lưng rộng, xương cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn lớn, cơ lưng rộng, đầu dài cơ tam đầu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 2351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/6be402bd-89e2-4489-9b88-488539b00786-3.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_30\" data-page=\"30\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"30\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[30][id]\" value=\"6728be97e275cb91b98e2cf5\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[30][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 31: Câu nào sau đây về ĐM trụ là sai ?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tỞ cẳng tay đi sâu hơn ĐM quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCho nhánh gian cốt chung
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNằm phía trong TK trụ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớn hơn động mạch quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 2433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/322dabd7-fc5f-4515-b642-907c6a982c66-8.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_31\" data-page=\"31\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"31\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[31][id]\" value=\"6728be97e275cb91b98e2cf6\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[31][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 32: Thành phần đi qua tam giác cánh tay tam đầu?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK quay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM mũ cánh tay trước
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM mũ cánh tay sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM mũ vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_32\" data-page=\"32\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"32\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[32][id]\" value=\"6728be97e275cb91b98e2cf7\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[32][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 33: Thành của nách, chọn câu sai?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐỉnh hố nách nằm giữa xương đòn và xương sườn 1
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNền nách không có cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThành trước của nách được tạo bởi cơ răng trước
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThành trong của nách có các xương sườn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_33\" data-page=\"33\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"33\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[33][id]\" value=\"6728be97e275cb91b98e2cf8\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[33][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 34: Thân dưới đám rối cánh tay được tạo từ rễ?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNhánh trước của TK gai sống 4, 5
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNhánh trước của 5, 6
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNhánh trước của 7, 8
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNhánh trước của 8, N1
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_34\" data-page=\"34\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"34\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[34][id]\" value=\"6728be97e275cb91b98e2cf9\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[34][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 35: Thần kinh cơ bì vận động cho?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ vùng cẳng tay trước
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ vùng cẳng tay sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ ngực lớn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ delta
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_35\" data-page=\"35\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"35\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[35][id]\" value=\"6728be97e275cb91b98e2cfa\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[35][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 36: Thần kinh gian cốt sau là nhánh thần kinh?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK quay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK cơ bì
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_36\" data-page=\"36\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"36\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[36][id]\" value=\"6728be97e275cb91b98e2cfb\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[36][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 37: Thành phần nào không đi trong ống cánh tay?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cánh tay sâu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTM cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_37\" data-page=\"37\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"37\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[37][id]\" value=\"6728be97e275cb91b98e2cfc\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[37][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 38: Cơ tạo nên thành trong của hố nách?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ ngực lớn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ răng trước
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ quạ cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn bé
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_38\" data-page=\"38\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"38\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[38][id]\" value=\"6728be97e275cb91b98e2cfd\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[38][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 39: Ở vùng nách, thành phần nào đi qua lỗ tam giác cánh tay tam
\t\t\t\t\t\t\t\tđầu?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK quay và ĐM cánh tay sâu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK nách và ĐM cánh tay sâu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK nách và ĐM mũ cánh tay sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK quay và ĐM mũ vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_39\" data-page=\"39\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"39\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[39][id]\" value=\"6728be97e275cb91b98e2cfe\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[39][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 40: Lỗ tam giác vai tam đầu được giới hạn bởi?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn bé, cơ tròn lớn, bờ ngoài xương vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn bé, cơ tròn lớn, đầu dài cơ tam đầu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn bé, cơ tròn lớn, xương cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn lớn, cơ lưng rộng, xương cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 3084
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/6be402bd-89e2-4489-9b88-488539b00786-2.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_40\" data-page=\"40\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"40\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[40][id]\" value=\"6728be97e275cb91b98e2cff\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[40][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 41: Thân trên của đám rối thần kinh cánh tay được tạo bởi?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC4,5,6
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC5,6,7
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC7,8, T1
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC6,7,8
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_41\" data-page=\"41\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"41\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[41][id]\" value=\"6728be97e275cb91b98e2d00\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[41][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 42: Ở đoạn sau cơ ngực bé, động mạch nách cho nhánh bên nào?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM ngực trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cùng vai ngực
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM ngực ngoài
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM dưới vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 3237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/94f8344f-6384-43a4-afb9-dde36bf89745-1.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_42\" data-page=\"42\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"42\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[42][id]\" value=\"6728be97e275cb91b98e2d01\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[42][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 43: Thành phần nào không đi trong ống cánh tay?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cánh tay sâu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 3319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/322dabd7-fc5f-4515-b642-907c6a982c66-9.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_43\" data-page=\"43\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"43\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[43][id]\" value=\"6728be97e275cb91b98e2d02\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[43][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 44: Nền nách chứa thành phần nào?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông, da
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ trên gai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ ngực lớn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn lớn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_44\" data-page=\"44\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"44\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[44][id]\" value=\"6728be97e275cb91b98e2d03\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[44][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 45: Lớp giữa ở cẳng tay là cơ nào?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ gấp cổ tay quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ sấp tròn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ gấp ngón cái dài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ gấp các ngón nông
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_45\" data-page=\"45\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"45\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[45][id]\" value=\"6728be97e275cb91b98e2d04\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[45][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 46: Ranh giới giữa trung thất trên và trung thất dưới là một mặt phẳng
\t\t\t\t\t\t\t\tngang. Mặt phẳng này đi qua góc ức và khoảng giữa 2 đốt sống?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC6,7
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC7,T1
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tN2,3
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tN4,5
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_46\" data-page=\"46\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"46\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[46][id]\" value=\"6728be97e275cb91b98e2d05\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[46][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 47: Thành phần nào không nằm trong trung thất sau:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCung ĐM chủ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTM đơn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThực quản
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChuỗi hạch giao cảm
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_47\" data-page=\"47\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"47\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[47][id]\" value=\"6728be97e275cb91b98e2d06\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[47][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 48: Thành phần không đi qua rốn phổi:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPQ chính
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM phổi
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTM phổi
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDây chằng phổi
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 3686
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/549aa543-d30c-42b4-a305-e802eab75655.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_48\" data-page=\"48\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"48\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[48][id]\" value=\"6728be97e275cb91b98e2d07\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[48][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 49: Thùy giữa phổi phải thường có:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t2 phân thùy
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t3 phân thùy
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t4 phân thùy
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t6 phân thùy
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_49\" data-page=\"49\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"49\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[49][id]\" value=\"6728be97e275cb91b98e2d08\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[49][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 50: Chọn câu đúng</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch phế quản tách ra từ động mạch dưới đòn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTĩnh mạch phế quản đổ vào tĩnh mạch dưới đòn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐám rối thần kinh phổi được tạo bởi thần kinh giao cảm và các nhánh thần kinh hoành
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDây chằng phổi tạo bởi hai lá màng phổi sát vào nhau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_50\" data-page=\"50\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"50\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[50][id]\" value=\"6728be97e275cb91b98e2d09\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[50][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 51: Đi trong rãnh gian thất sau là:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTM tim lớn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTM tim giữa
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTM tim trước
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTM tim chếch
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_51\" data-page=\"51\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"51\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[51][id]\" value=\"6728be97e275cb91b98e2d0a\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[51][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 52: So với rốn phổi, động mạch phổi phải nằm ở:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrước PQ chính
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrên PQ chính
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDưới PQ chính
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSau PQ chính
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_52\" data-page=\"52\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"52\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[52][id]\" value=\"6728be97e275cb91b98e2d0b\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[52][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 53: Thành phần nào đi qua lỗ tứ giác:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM mũ vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK nách và ĐM mũ cánh tay sau
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK quay và ĐM cánh tay sâu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_53\" data-page=\"53\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"53\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[53][id]\" value=\"6728be97e275cb91b98e2d0c\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[53][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 54: Thành phần đi qua tam giác cánh tay tam đầu:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM mũ vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK nách và ĐM mũ cánh tay sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK quay và ĐM cánh tay sâu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_54\" data-page=\"54\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"54\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[54][id]\" value=\"6728be97e275cb91b98e2d0d\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[54][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 55: Cơ nào không thuộc thành sau hố nách?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ bậc thang sau
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn lớn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ lưng rộng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ dưới vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_55\" data-page=\"55\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"55\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[55][id]\" value=\"6728be97e275cb91b98e2d0e\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[55][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 56: Động mạch ngực lưng xuất phát từ?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM dưới vai
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM mũ vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM ngực ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM nách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 4265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/94f8344f-6384-43a4-afb9-dde36bf89745-2.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_56\" data-page=\"56\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"56\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[56][id]\" value=\"6728be97e275cb91b98e2d0f\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[56][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 57: Thân dưới của đám rối thần kinh cánh tay được tạo từ?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC5-C6
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC6-C7
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC7-C8
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC8-T1
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_57\" data-page=\"57\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"57\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[57][id]\" value=\"6728be97e275cb91b98e2d10\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[57][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 58: Nhánh của động mạch cánh tay?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cánh tay sâu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM bên quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM bên giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM quặt ngược gian cốt
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 4418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/f464e39d-8201-424b-b9bd-e729b7643c6c-3.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_58\" data-page=\"58\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"58\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[58][id]\" value=\"6728be97e275cb91b98e2d11\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[58][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 59: Thần kinh gian cốt trước vận động cho cơ nào?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ sấp tròn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ sấp vuông
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ gấp cổ tay quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ gấp các ngón nông
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_59\" data-page=\"59\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"59\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[59][id]\" value=\"6728be97e275cb91b98e2d12\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[59][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 60: Đường đi của thần kinh giữa và động mạch cánh tay?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạch bạch huyết thận phải đổ về theo trục tĩnh mạch chủ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạch bạch huyết thận trái đồ về theo trục động mạch chủ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHạch bạch huyết rãi rác khắp thận và rốn thận
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tỞ thận không có hệ thống bạch huyết
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_60\" data-page=\"60\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"60\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[60][id]\" value=\"6728be97e275cb91b98e2d13\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[60][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 61: Thành phần nào không tham gia tạo nên ống cánh tay?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông, da
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVách gian cơ trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVách gian cơ ngoài
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_61\" data-page=\"61\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"61\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[61][id]\" value=\"6728be97e275cb91b98e2d14\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[61][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 62: Thần kinh gian cốt sau xuất phát từ?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK cơ bì
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK quay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_62\" data-page=\"62\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"62\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[62][id]\" value=\"6728be97e275cb91b98e2d15\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[62][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 63: Ở cẳng tay tương quan giữa động mạch trụ và thần kinh trụ?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgoài
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrước
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 4784
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/322dabd7-fc5f-4515-b642-907c6a982c66-10.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_63\" data-page=\"63\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"63\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[63][id]\" value=\"6728be97e275cb91b98e2d16\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[63][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 64: Đám rối thần kinh cánh tay gồm 3 thân trên, thân giữa, thân dưới.
\t\t\t\t\t\t\t\tBó trong được tạo bởi nhánh của thân nào?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgành trước của thân trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgành trước của thân dưới
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgành sau của thân trên, giữa, dưới
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgành trước của thân trên, giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 4867
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/brachial-plexus-2-visvg-2.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_64\" data-page=\"64\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"64\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[64][id]\" value=\"6728be97e275cb91b98e2d17\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[64][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 65: Đám rối thần kinh cánh tay gồm 3 thân trên, thân giữa, thân dưới.
\t\t\t\t\t\t\t\tThân trên cho nhánh tạo thành bó nào?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBó ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBó trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBó ngoài và sau
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBó trong và sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 4950
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/brachial-plexus-2-visvg-3.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_65\" data-page=\"65\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"65\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[65][id]\" value=\"6728be97e275cb91b98e2d18\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[65][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 66: Thành trong của ống cánh tay?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVách gian cơ trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông, da
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVách gian cơ ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ vùng cẳng tay trước
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_66\" data-page=\"66\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"66\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[66][id]\" value=\"6728be97e275cb91b98e2d19\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[66][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 67: Thành sau ống cánh tay tạo bởi?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVách gian cơ trong
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVách gian cơ ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_67\" data-page=\"67\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"67\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[67][id]\" value=\"6728be97e275cb91b98e2d1a\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[67][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 68: Thành trong hố nách có phần trên cơ liên sườn và:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ răng trước
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ dưới gai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ dưới vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ dưới dòn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_68\" data-page=\"68\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"68\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[68][id]\" value=\"6728be97e275cb91b98e2d1b\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[68][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 69: Lỗ tứ giác tạo bởi những thành phần nào?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn lớn, cơ tròn bé, đầu dài cơ tam đầu và xương cánh tay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐầu ngoài cơ tam đầu, cơ tròn lớn, cơ tròn bé, xương cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ quạ cánh tay, xương cánh tay, cơ tròn lớn, đầu dài cơ tam đầu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn lớn, cơ tròn bé, xương cánh tay, đầu ngắn cơ tam đầu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_69\" data-page=\"69\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"69\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[69][id]\" value=\"6728be97e275cb91b98e2d1c\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[69][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 70: Động mạch nách chia 3 đoạn bởi cơ ngực bé. Đoạn dưới cơ ngực bé ĐM
\t\t\t\t\t\t\t\tnách chia những nhánh nào?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch ngực ngoài và động mạch dưới vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch mũ vai, động mạch mũ cánh tay trước, động mạch mũ cánh tay sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch ngực ngoài, động mạch mũ vai, động mạch mũ cánh tay trước, động mạch mũ cánh
\t\t\t\t\t\t\t\ttay sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch mũ cánh tay trước, động mạch mũ cánh tay sau
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 5318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/94f8344f-6384-43a4-afb9-dde36bf89745-3.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_70\" data-page=\"70\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"70\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[70][id]\" value=\"6728be97e275cb91b98e2d1d\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[70][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 71: Thành phần nào ban đầu nằm trong ống cánh tay, sau đó chọc qua vách
\t\t\t\t\t\t\t\tgian cơ trong để đi ra sau?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM bên trụ trên
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM bên trụ dưới
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_71\" data-page=\"71\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"71\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[71][id]\" value=\"6728be97e275cb91b98e2d1e\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[71][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 72: Câu nào sau đây đúng?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm trụ đi sau cơ sấp tròn và được TK giữa bắt chéo phía trước
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm trụ đi trước cơ gấp các ngón nông
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm trụ đi song song và ở phía trong so với thần kinh trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm trụ xuống cổ tay đi sau mạc giữ gân gấp cổ tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 5472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/322dabd7-fc5f-4515-b642-907c6a982c66-11.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_72\" data-page=\"72\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"72\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[72][id]\" value=\"6728be97e275cb91b98e2d1f\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[72][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 73: Cơ nào thuộc nhóm sau lớp nông vùng cẳng tay sau</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ duỗi cổ tay quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ duỗi cổ tay trụ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ dạng ngón cái ngắn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ duỗi ngón trỏ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_73\" data-page=\"73\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"73\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[73][id]\" value=\"6728be97e275cb91b98e2d20\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[73][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 74: Đi trong rãnh thần kinh quay của xương cánh tay có thần kinh quay
\t\t\t\t\t\t\t\tvà?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cánh tay sâu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên trụ trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_74\" data-page=\"74\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"74\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[74][id]\" value=\"6728be97e275cb91b98e2d21\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[74][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 75: Khi gãy thân xương cánh tay, thần kinh dễ bị tổn thương là</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk cơ bì
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk quay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_75\" data-page=\"75\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"75\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[75][id]\" value=\"6728be97e275cb91b98e2d22\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[75][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 76: Thành phần nào sau đây đi qua tam giác cánh tay tam đầu</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk quay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk nách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm mũ cánh tay sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_76\" data-page=\"76\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"76\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[76][id]\" value=\"6728be97e275cb91b98e2d23\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[76][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 77: Ở vùng nách, khi mới hình thành, thần kinh giữa ở phía</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrong đm nách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgoài đm nách
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSau đm nách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrong tm nách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_77\" data-page=\"77\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"77\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[77][id]\" value=\"6728be97e275cb91b98e2d24\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[77][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 78: Không nên thắt động mạch nách ở khoảng giữa</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch ngực trên và động mạch cùng vai ngực
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch ngực trên và động mạch ngực ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch dưới vai và các động mạch mũ cánh tay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch ngực ngoài và động mạch dưới vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 5910
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/94f8344f-6384-43a4-afb9-dde36bf89745-4.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_78\" data-page=\"78\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"78\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[78][id]\" value=\"6728be97e275cb91b98e2d25\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[78][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 79: Thành phần nào sau đây đi qua lỗ tam giác vai tam đầu</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cánh tay sâu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM mũ cánh tay sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm mũ vai
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_79\" data-page=\"79\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"79\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[79][id]\" value=\"6728be97e275cb91b98e2d26\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[79][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 80: Ở vùng nách, thành phần nào sau đây đi qua lỗ tứ giác</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK nách và ĐM cánh tay sâu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK nách và ĐM mũ cánh tay trước
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK nách và ĐM mũ cánh tay sau
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK quay và ĐM mũ vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_80\" data-page=\"80\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"80\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[80][id]\" value=\"6728be97e275cb91b98e2d27\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[80][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 81: Thần kinh nào sau đây xuất phát từ bó trong đám rối cánh
\t\t\t\t\t\t\t\ttay?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk trụ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk nách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk cơ bì
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 6135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/brachial-plexus-2-visvg-5.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_81\" data-page=\"81\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"81\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[81][id]\" value=\"6728be97e275cb91b98e2d28\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[81][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 82: Khi mô tả, động mạch nách được chia thành ba đoạn dựa vào</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tam đầu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ ngực lớn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ ngực bé
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tròn lớn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_82\" data-page=\"82\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"82\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[82][id]\" value=\"6728be97e275cb91b98e2d29\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[82][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 83: Động mạch nào sau đây không phải là nhánh của động mạch
\t\t\t\t\t\t\t\tnách?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM ngực trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cùng vai ngực
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm ngực trong
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM dưới vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 6289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/94f8344f-6384-43a4-afb9-dde36bf89745-5.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_83\" data-page=\"83\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"83\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[83][id]\" value=\"6728be97e275cb91b98e2d2a\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[83][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 84: Thân trên đám rối thần kinh cánh tay được tạo bởi các thần kinh gai
\t\t\t\t\t\t\t\tsống</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC4,5,6
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC5,6,7
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC6,7,8
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC7,8, T1
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_84\" data-page=\"84\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"84\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[84][id]\" value=\"6728be97e275cb91b98e2d2b\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[84][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 85: Thân giữa đám rối thần kinh cánh tay được tạo bởi</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC6
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC7
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC8
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC6,7
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_85\" data-page=\"85\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"85\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[85][id]\" value=\"6728be97e275cb91b98e2d2c\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[85][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 86: Thân dưới đám rối thần kinh cánh tay được tạo bởi các thần kinh gai
\t\t\t\t\t\t\t\tsống</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC4,5
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC5,6
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC6,7
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC8,T1
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_86\" data-page=\"86\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"86\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[86][id]\" value=\"6728be97e275cb91b98e2d2d\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[86][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 87: Bó ngoài của đám rối thần kinh cánh tay cho các ngành cùng
\t\t\t\t\t\t\t\tlà</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk quay, tk nách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk cơ bì, tk trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tRễ ngoài tk giữa, tk quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tRễ ngoài tk giữa, tk cơ bì
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_87\" data-page=\"87\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"87\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[87][id]\" value=\"6728be97e275cb91b98e2d2e\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[87][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 88: Ở đoạn dưới cơ ngực bé, động mạch nách liên quan phía ngoài
\t\t\t\t\t\t\t\tvới</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk giữa
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk nách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 6659
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/322dabd7-fc5f-4515-b642-907c6a982c66-12.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_88\" data-page=\"88\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"88\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[88][id]\" value=\"6728be97e275cb91b98e2d2f\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[88][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 89: Ở đoạn trên cơ ngực bé, động mạch nách cho nhánh bên là</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm ngực ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cùng vai ngực
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm ngực trên
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM dưới vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_89\" data-page=\"89\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"89\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[89][id]\" value=\"6728be97e275cb91b98e2d30\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[89][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 90: Ở vòng nối quanh vai, nhánh nào sau đây của động mạch nách nối với
\t\t\t\t\t\t\t\tnhánh của động mạch dưới đòn</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm ngực trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm ngực ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cùng vai ngực
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm dưới vai
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 6813
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/94f8344f-6384-43a4-afb9-dde36bf89745-6.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_90\" data-page=\"90\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"90\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[90][id]\" value=\"6728be97e275cb91b98e2d31\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[90][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 91: Cơ đen-ta được vận động bởi</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK nách
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk dưới vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk ngực lưng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác nhánh ngang cổ của đám rối cổ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_91\" data-page=\"91\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"91\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[91][id]\" value=\"6728be97e275cb91b98e2d32\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[91][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 92: Thần kinh nào sau đây xuất phát từ bó ngoài đám rối cánh
\t\t\t\t\t\t\t\ttay?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk nách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk cơ bì
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk ngực lưng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_92\" data-page=\"92\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"92\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[92][id]\" value=\"6728be97e275cb91b98e2d33\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[92][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 93: Thần kinh nào sau đây tách từ bó sau đám rối cánh tay?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk nách
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk bì cẳng tay sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk bì cẳng tay trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 7038
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/brachial-plexus-2-visvg-6.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_93\" data-page=\"93\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"93\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[93][id]\" value=\"6728be97e275cb91b98e2d34\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[93][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 94: Động mạch nào sau đây không tham gia vào vòng nối quanh mỏm trên
\t\t\t\t\t\t\t\tlồi cầu ngoài xương cánh tay?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quặt ngược trụ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM quặt ngược gian cốt
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_94\" data-page=\"94\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"94\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[94][id]\" value=\"6728be97e275cb91b98e2d35\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[94][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 95: Động mạch nào sau đây không tham gia vào vòng nối quanh
\t\t\t\t\t\t\t\tngực?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm ngực ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cùng vai ngực
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm ngực lưng
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm gian sườn trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_95\" data-page=\"95\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"95\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[95][id]\" value=\"6728be97e275cb91b98e2d36\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[95][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 96: Vị trí nào sau đây trên động mạch nách được khuyến khích không nên
\t\t\t\t\t\t\t\tthắt để đảm bảo kín mạch phụ thuộc?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐoạn từ bờ dưới xương đòn đến nơi xuất phát của động mạch cùng vai ngực
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐoạn từ nơi xuất phát động mạch cùng vai ngực đến nơi xuất phát động mạch ngực ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐoạn từ nơi xuất phát động mạch ngực ngoài đến nơi xuất phát động mạch dưới vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐoạn từ nơi xuất phát động mạch dưới vai đến nơi xuất phát động mạch mũ cánh tay trước
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_96\" data-page=\"96\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"96\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[96][id]\" value=\"6728be97e275cb91b98e2d37\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[96][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 97: Động mạch cánh tay sâu có các đặc điểm sau đây, ngoại trừ:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLà một nhánh của động mạch cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChui qua lỗ tam giác vai tam đầu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐi trong rãnh thần kinh quay cùng với thần kinh quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó hai nhánh tận là động mạch bên giữa và động mạch bên quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_97\" data-page=\"97\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"97\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[97][id]\" value=\"6728be97e275cb91b98e2d38\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[97][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 98: Thành phần nào sau đây không đi trong ống cánh tay?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch cánh tay sâu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThần kinh giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThần kinh trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_98\" data-page=\"98\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"98\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[98][id]\" value=\"6728be97e275cb91b98e2d39\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[98][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 99: Động mạch nách đổi tên thành động mạch cánh tay khi:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐi qua khối khe sườn đòn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐến ngang củ dưới ổ chảo xương vai
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐến ngang mức cổ phẫu thuật xương cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐến bờ dưới cơ ngực lớn
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 7478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/94f8344f-6384-43a4-afb9-dde36bf89745-7.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_99\" data-page=\"99\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"99\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[99][id]\" value=\"6728be97e275cb91b98e2d3a\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[99][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 100: Thành phần nào sau đây luôn đi phía trong động mạch nách?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThần kinh giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThần kinh nách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBó trong đám rối thần kinh cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTĩnh mạch nách
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_100\" data-page=\"100\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"100\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[100][id]\" value=\"6728be97e275cb91b98e2d3b\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[100][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 101: Động mạch nách cho các nhánh bên sau đây, ngoại trừ:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm ngực trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM cùng vai ngực
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm ngực ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm vai xuống
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 7631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/94f8344f-6384-43a4-afb9-dde36bf89745-8.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_101\" data-page=\"101\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"101\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[101][id]\" value=\"6728be97e275cb91b98e2d3c\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[101][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 102: Đám rối thần kinh cánh tay được tạo bởi:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC4-T1
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC4-C8
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC5-T2
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tC4-T3
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_102\" data-page=\"102\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"102\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[102][id]\" value=\"6728be97e275cb91b98e2d3d\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[102][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 103: Động mạch nách có đặc điểm sau đây, ngoại trừ:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLà động mạch dưới đòn đổi tên sau khi đi qua khe sườn đòn.
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia làm ba đoạn dựa vào cơ ngực bé.
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐổi tên khi đến bờ dưới cơ ngực lớn.
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCho một trong những nhánh bên là động mạch ngực trong.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_103\" data-page=\"103\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"103\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[103][id]\" value=\"6728be97e275cb91b98e2d3e\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[103][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 104: Ở cánh tay, thần kinh nào sau đây bắt chéo động mạch cánh tay từ
\t\t\t\t\t\t\t\tngoài vào trong?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk bì cẳng tay trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk bì cánh tay trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTK nách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk giữa
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 7856
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/322dabd7-fc5f-4515-b642-907c6a982c66-13.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_104\" data-page=\"104\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"104\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[104][id]\" value=\"6728be97e275cb91b98e2d3f\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[104][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 105: Động mạch nào sau đây là nhánh bên của động mạch cánh
\t\t\t\t\t\t\t\ttay?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cánh tay sâu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_105\" data-page=\"105\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"105\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[105][id]\" value=\"6728be97e275cb91b98e2d40\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[105][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 106: Ở vòng nối quanh khuỷu, động mạch bên giữa nối với:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên trụ trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quặt ngược gian cốt
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quặt ngược quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 8010
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/f464e39d-8201-424b-b9bd-e729b7643c6c-4.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_106\" data-page=\"106\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"106\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[106][id]\" value=\"6728be97e275cb91b98e2d41\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[106][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 107: Ở vòng nối quanh khuỷu, động mạch bên quay nối với:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quặt ngược trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quặt ngược quay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM bên trụ trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên trụ dưới
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_107\" data-page=\"107\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"107\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[107][id]\" value=\"6728be97e275cb91b98e2d42\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[107][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 108: Ở vòng nối quanh khuỷu, động mạch bên trụ dưới nối với:</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm quặt ngược trụ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm bên quay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐM quặt ngược gian cốt
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><img style=\"width:100%;\"
\t\t\t\t\t\t\t\tsrc=\" ";
        // line 8163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/f464e39d-8201-424b-b9bd-e729b7643c6c-5.png"), "html", null, true);
        yield " \"
\t\t\t\t\t\t\t\t></p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_108\" data-page=\"108\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"108\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[108][id]\" value=\"6728be97e275cb91b98e2d43\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[108][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 109: Mô tả về mạch máu và thần kinh vùng khuỷu, câu nào sau đây
\t\t\t\t\t\t\t\tSAI?</strong>
\t\t\t\t\t\t</span><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNhánh nông tk quay đi ở rãnh nhị đầu ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk giữa đi ở rãnh nhị đầu trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐm cánh tay đi ở rãnh nhị đầu trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">

\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTk giữa đi phía ngoài đm cánh tay
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "quizz/contents/chitren.html";
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
        return array (  8332 => 8163,  8176 => 8010,  8019 => 7856,  7791 => 7631,  7635 => 7478,  7192 => 7038,  6964 => 6813,  6807 => 6659,  6434 => 6289,  6277 => 6135,  6049 => 5910,  5608 => 5472,  5451 => 5318,  5080 => 4950,  4994 => 4867,  4908 => 4784,  4539 => 4418,  4383 => 4265,  3801 => 3686,  3431 => 3319,  3346 => 3237,  3190 => 3084,  2536 => 2433,  2451 => 2351,  2295 => 2198,  2138 => 2044,  2052 => 1961,  1824 => 1736,  1668 => 1583,  1583 => 1501,  1498 => 1419,  1412 => 1336,  1327 => 1254,  1242 => 1172,  1157 => 1090,  1072 => 1008,  859 => 798,  774 => 716,  536 => 481,  451 => 399,  294 => 245,  209 => 163,  124 => 81,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "quizz/contents/chitren.html", "D:\\Projects\\minic2\\src\\app\\Views\\quizz\\contents\\chitren.html");
    }
}
