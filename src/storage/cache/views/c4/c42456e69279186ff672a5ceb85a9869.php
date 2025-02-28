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

/* quizz/contents/daicuong.html */
class __TwigTemplate_05f7516c963f0a4b5342c3105642a333 extends Template
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
\t\t\t<h3>Moldule giải phẫu đại cương</h3>
\t\t</div>
\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_0\" data-page=\"0\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"0\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[0][id]\" value=\"67204868e275cb189b8e2dad\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[0][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 1: Xương nào sau đây có vai trò làm giảm lực ma sát của các gân cơ?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương bàn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương đốt ngón
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương vừng
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương phụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_1\" data-page=\"1\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"1\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[1][id]\" value=\"67204868e275cb189b8e2dae\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[1][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 2: Vị trí nào sau đây là nơi tập trung nhiều mô xương đặc?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBờ các xương dẹt
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrung tâm các xương dẹt
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐầu các xương dài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThân các xương dài
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Cấu tạo của xương dài: gồm một thân xương
\t\t\t\t\t\t\t<br>hình ống và hai đầu phình to gọi là đầu xương. Thân xương
\t\t\t\t\t\t\t<br>cấu tạo bởi chất xương đặc và được bọc trong màng xương.
\t\t\t\t\t\t\t<br>Ớ giừa thân xương có buồng tủy. Đầu xương được cấu tạo
\t\t\t\t\t\t\t<br>bởi chất xương xốp ở trung tâm, xương cốt mạc ở chung
\t\t\t\t\t\t\t<br>quanh và sụn khớp ở diện khớp.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_2\" data-page=\"2\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"2\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[2][id]\" value=\"67204868e275cb189b8e2daf\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[2][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 3: Đặc tính nào sau đây không thuộc về xương xốp?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTập trung ở xương dẹt, đầu xương dài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTủy của xương xốp là loại tủy đỏ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông hiện diện ở thân xương dài
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó vai trò hấp thu lực tác động lên xương
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Ở thân xương dài vẫn có xương xốp, tạo thành lớp mỏng ở mặt trong vỏ xương
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_3\" data-page=\"3\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"3\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[3][id]\" value=\"67204868e275cb189b8e2db0\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[3][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 4: Nhìn chung, vị trí nào sau đây thường là nơi bám của các gân cơ?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChỏm
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLồi cầu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMào
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMỏm trên lồi cầu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_4\" data-page=\"4\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"4\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[4][id]\" value=\"67204868e275cb189b8e2db1\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[4][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 5: Hình dạng của diện khớp phù hợp với</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCấu tạo của khớp
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCử động của khớp
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVị trí của khớp
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKích thước của khớp
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_5\" data-page=\"5\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"5\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[5][id]\" value=\"67204868e275cb189b8e2db2\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[5][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 6: Đặc tính nào sau đây đúng với sụn?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông có màng sụn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông có mạch máu riêng
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDễ lành sau chấn thương
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThành phần chủ yếu là sợi collagen
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Sụn không có mạch máu riêng và khó lành sau khi chấn thương
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_6\" data-page=\"6\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"6\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[6][id]\" value=\"67204868e275cb189b8e2db3\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[6][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 7: Sụn chun hiện diện ở cấu trúc nào sau đây?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhí quản
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLoa tai
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐĩa gian đốt sống
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChỏm xương đùi
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Sụn có ba loại chính:<br><br>Sụn trong (Hyaline cartilage):<br>Đặc điểm: Sụn trong có cấu trúc mịn, trong suốt và là loại sụn phổ biến nhất trong cơ thể.<br>Vị trí:<br>Đầu xương dài (nơi nối khớp).<br>Vách mũi.<br>Thành khí quản, phế quản.<br>Sụn sườn (nối giữa xương sườn và xương ức).<br>Sụn xơ (Fibrocartilage):<br><br>Đặc điểm: Sụn xơ có độ chắc chắn cao do chứa nhiều sợi collagen, giúp chịu lực nén và kéo căng tốt.<br>Vị trí:<br>Đĩa đệm cột sống.<br>Khớp mu.<br>Sụn giữa các khớp gối và khớp hông.<br>Sụn chun (Elastic cartilage):<br><br>Đặc điểm: Loại sụn này chứa nhiều sợi đàn hồi, giúp sụn có tính co giãn và duy trì hình dạng.<br>Vị trí:<br>Tai ngoài.<br>Nắp thanh quản (epiglottis).<br>Một số cấu trúc trong ống tai.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_7\" data-page=\"7\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"7\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[7][id]\" value=\"67204868e275cb189b8e2db4\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[7][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 8: Ở thân xương dài, thành phần chính của vỏ xương là?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô xương đặc
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô xương xốp
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMàng xương
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTổ chức sợi
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_8\" data-page=\"8\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"8\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[8][id]\" value=\"67204868e275cb189b8e2db5\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[8][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 9: Trên xương dài, hành xương là vùng ở vị trí nào sau đây?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrên bề mặt đầu xương
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGiữa đầu xương và sụn khớp
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt trong ống tủy
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGiữa đầu xương và thân xương
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Hành xương, còn gọi là đầu thân xương, nơi tiếp giáp giữa đầu xương và thân xương dài
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_9\" data-page=\"9\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"9\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[9][id]\" value=\"67204868e275cb189b8e2db6\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[9][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 10: Sẹo sụn tiếp hợp hình thành do</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSự liền chỗ gãy ở đầu xương
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSự liền chỗ gãy ở sụn khớp
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSự hóa xương của sụn tiếp hợp
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSự hóa xương của sụn khớp
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Khi đến tuổi trường thành, sụn tiếp hợp được cốt hóa hoàn toàn và để lại sẹo sụn tiếp hợp. A không đúng vì màng xương không có ở đầu xương
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_10\" data-page=\"10\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"10\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[10][id]\" value=\"67204868e275cb189b8e2db7\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[10][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 11: Sẹo sụn tiếp hợp xuất hiện thời điểm nào?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSau gãy xương đã lành
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSau bong sụn khớp đã lành
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhi đến tuổi dậy thì
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhi đến tuổi trưởng thành
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Khi đến tuổi trường thành, sụn tiếp hợp được cốt hóa hoàn toàn và để lại sẹo sụn tiếp hợp
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_11\" data-page=\"11\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"11\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[11][id]\" value=\"67204868e275cb189b8e2db8\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[11][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 12: Sụn khớp là loại sụn nào?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSụn trong
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSụn chun
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSụn xơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSụn tiếp hợp
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_12\" data-page=\"12\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"12\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[12][id]\" value=\"67204868e275cb189b8e2db9\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[12][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 13: Ở người trưởng thành, thành phần chủ yếu của tủy xương trong ống tủy là gì?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTế bào máu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChất khoáng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMỡ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTế bào tạo xương
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_13\" data-page=\"13\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"13\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[13][id]\" value=\"67204868e275cb189b8e2dba\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[13][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 14: Đặc tính nào sau đây không đúng với màng xương ngoài của xương dài?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhủ hầu hết trên bề mặt xương
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông có mạch máu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó chức năng giúp xương gãy mau lành
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCòn là nơi bám của gân cơ, dây chằng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Màng xương ngoài rất dồi dào mạch máu, có vai trò mang chất dinh dường đến nuôi xương và giúp xương mau lành khi bị gãy
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_14\" data-page=\"14\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"14\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[14][id]\" value=\"67204868e275cb189b8e2dbb\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[14][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 15: Hiện tượng nào sau đây xảy ra trước nhất trong quá trình liền xương?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình thành các bè xương xốp
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình thành các sợi collagen
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChảy máu và hình thành khối máu tụ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHấp thụ các tế bào chết vùng xương gãy
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_15\" data-page=\"15\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"15\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[15][id]\" value=\"67204868e275cb189b8e2dbc\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[15][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 16: Phần ngoài của vỏ xương được cấp máu bởi động mạch nào?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch màng xương ngoài
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch nuôi xương
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch hành xương
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch đầu xương
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_16\" data-page=\"16\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"16\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[16][id]\" value=\"67204868e275cb189b8e2dbd\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[16][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 17: Sụn tiếp hợp là lớp sụn trong nằm ở đâu?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐầu các xương dài, nơi khớp với các xương khác
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHành xương dài, nơi tiếp giáp giữa đầu xương và thân xương
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDưới màng ngoài xương của thân xương dài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrên bề mặt của ống tủy của thân xương dài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_17\" data-page=\"17\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"17\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[17][id]\" value=\"67204868e275cb189b8e2dbe\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[17][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 18: Loại khớp nào sau đây hiện diện nhiều nhất trong cơ thể?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp hoạt dịch
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp dây chằng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp màng gian cốt
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_18\" data-page=\"18\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"18\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[18][id]\" value=\"67204868e275cb189b8e2dbf\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[18][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 19: Khớp nào sau đây không có khả năng cử động?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp dây chằng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp đường ráp
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp hoạt dịch
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Khớp đường ráp có ở các khớp ở sọ, các bờ xương có hình răng cưa khớp với nhau, là loại khớp bất động
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_19\" data-page=\"19\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"19\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[19][id]\" value=\"67204868e275cb189b8e2dc0\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[19][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 20: Chọn lựa nào sau đây phù hợp nhất đối với khớp giữa các xương cổ tay?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp động
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp yên ngựa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_20\" data-page=\"20\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"20\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[20][id]\" value=\"67204868e275cb189b8e2dc1\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[20][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 21: Chọn lựa nào sau đây phù hợp nhất đối với khớp giữa xương thuyền và đầu dưới xương quay?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sợi
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp lồi cầu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Ở khớp lồi cầu, phần lồi cầu của một xương khớp với phần lõm của xương khác. Lồi cầu là phần xương lồi ra ở đầu xương và thường có hình bầu dục. Khớp lồi cầu có hai trục vì khớp chuyển động quanh hai trục (gấp - duỗi và dạng - khép). Khớp giữa xương cổ tay và đầu dưới xương quay, khớp giữa xương bàn và xương ngón 2, 3, 4, 5 là các khớp lồi cầu.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_21\" data-page=\"21\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"21\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[21][id]\" value=\"67204868e275cb189b8e2dc2\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[21][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 22: Chọn lựa nào sau đây phù hợp nhất đối với khớp giữa xương thang và xương bàn I ở bàn tay?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp phẳng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp yên ngựa
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp bán động
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Ở khớp yên ngựa, bề mặt khớp của một xương có hình yên ngựa, bề mặt khớp của xương còn lại khớp với “yên ngựa” như hình ảnh người cưỡi ngựa. Khớp yên ngựa có ba trục, cho phép các chuyển động quanh ba trục (gấp - duỗi, dạng - khép và xoay). Khớp yên ngựa có thể được xem như là một dạng đặc biệt của khớp lồi cầu nhưng có cử động tự do hơn (thêm cử động xoay). Ví dụ khớp giữa xương thang với xương bàn I là khớp yên ngựa.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_22\" data-page=\"22\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"22\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[22][id]\" value=\"67204868e275cb189b8e2dc3\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[22][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 23: Chọn lựa nào sau đây phù hợp nhất đối với khớp mu?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp động
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn sợi
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sợi
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_23\" data-page=\"23\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"23\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[23][id]\" value=\"67204868e275cb189b8e2dc4\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[23][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 24: Chọn lựa nào sau đây phù hợp nhất đối với khớp chày mác dưới?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp bất động
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp dạng dây chằng
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Khớp dây chằng cũng là một loại khớp sợi nhưng khoảng cách giữa các bề mặt sụn khớp lớn hơn và mô liên kết dày đặc hơn so với khớp đường ráp. Các mô liên kết đặc ở đây thường được sắp xếp thành bó gọi là dây chằng.<br><br>Ví dụ khớp giữa đầu dưới xương chày và đầu dưới xương mác (khớp chày mác dưới) thuộc loại khớp dây chằng. Các sợi liên kết ở đây sắp xếp thành dây chằng chày mác trước liên kết giữa hai xương.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_24\" data-page=\"24\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"24\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[24][id]\" value=\"67204868e275cb189b8e2dc5\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[24][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 25: Chọn lựa nào sau đây phù hợp nhất đối với khớp giữa thân của các đốt sống?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp động
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn sợi
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sợi
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_25\" data-page=\"25\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"25\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[25][id]\" value=\"67204868e275cb189b8e2dc6\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[25][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 26: Chọn lựa nào sau đây phù hợp nhất đối với khớp giữa xương trụ và xương cánh tay?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn sợi
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp bản lề
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp lồi cầu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Ở khớp bản lề, mặt lồi của một xương khớp với mặt lõm của xương còn lại. Khớp bản lề tạo ra một góc khi đóng và mở giống như một cánh cửa. Khớp bản lề là một khớp đơn trục vì chúng hầu như chỉ cử động quanh một trục duy nhất. Trong cử động khớp, một xương cố định trong khi xương còn lại di chuyển quanh một trục. Khớp gối, khớp khuỷu, các khớp gian ngón là những khớp bản lề và chỉ có cử động gấp - duỗi.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_26\" data-page=\"26\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"26\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[26][id]\" value=\"67204868e275cb189b8e2dc7\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[26][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 27: Nơi nào sau đây là vị trí có nhiều cơ trơn?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThành bụng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGan tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tỐng tiêu hóa
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMôi và lưỡi
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_27\" data-page=\"27\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"27\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[27][id]\" value=\"67204868e275cb189b8e2dc8\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[27][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 28: Cơ ở vùng nào sau đây thường được chi phối bởi nhiều dây thần kinh?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ ở mặt
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ chi trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ chi dưới
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ thành bụng
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_28\" data-page=\"28\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"28\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[28][id]\" value=\"67204868e275cb189b8e2dc9\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[28][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 29: Mạc treo gân có bản chất là gì?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc sâu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBao sợi của gân
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBao hoạt dịch của gân
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Bao hoạt dịch của gân là các bao thanh mạc bọc xung quanh gân. Bao hoạt dịch của gân gồm hai lá, lá trong bọc sát gân và lá ngoài dính sát vào bao sợi. Hai lá liên tục với nhau tạo thành một khoang chứa hoạt dịch, giúp gân cử động dễ dàng, không bị cọ sát vào xương. Dọc theo hai cạnh của gân, hai lá liên tiếp nhau tạo thành mạc treo gân.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_29\" data-page=\"29\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"29\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[29][id]\" value=\"67204868e275cb189b8e2dca\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[29][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 30: Vách gian cơ là một cấu trúc thuộc?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc bọc cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc sâu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc hoạt dịch
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_30\" data-page=\"30\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"30\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[30][id]\" value=\"67204868e275cb189b8e2dcb\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[30][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 31: Tên gọi cơ răng trước dựa vào đâu?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVị trí của cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng của cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình dạng của cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình dạng và vị trí
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_31\" data-page=\"31\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"31\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[31][id]\" value=\"67204868e275cb189b8e2dcc\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[31][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 32: Cơ nào sau đây được đặt tên dựa theo hình dạng và chức năng?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ nhị đầu cánh tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ răng sau trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ duỗi ngón trỏ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ gấp ngón cái ngắn
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_32\" data-page=\"32\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"32\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[32][id]\" value=\"67204868e275cb189b8e2dcd\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[32][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 33: Dựa vào sự phân bố mạch máu, cơ vân xếp thành mấy dạng?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t3 dạng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t4 dạng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t5 dạng
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t6 dạng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Kiểu sắp xếp của bó sợi cơ ảnh hưởng rất lớn đến động tác của cơ. Dựa vào sự sắp xếp của các bó sợi cơ khi chúng gắn vào gân, chúng ta chia thành năm dạng chính. Đó là dạng song song, dạng hình thoi, dạng hình vòng, dạng hình tam giác và dạng lông vũ.<br><br>Ở dạng song song, các bó cơ chạy song song với trục của cơ và bám vào gân ở hai đầu của cơ. Ở dạng hình thoi, các bó cơ chạy gần như song song với trục dọc của cơ, bám vào gân ở hai đầu cơ nhưng bụng cơ nhỏ dần về phía hai đầu. Dạng hình vòng, các bó cơ xếp thành hình vòng tròn quanh một lỗ tự nhiên nào đó của cơ thể. Trong dạng hình tam giác, các sợi cơ hội tụ về phía một gân cơ. Các sợi cơ ở dạng lông vũ bám dọc trên một gân cơ, gân cơ này trải dài theo chiều dài của cơ. Khi các sợi cơ chỉ bám dọc theo một bên của gân thì tạo thành dạng lông vũ đơn, khi các sợi cơ bám dọc cả hai bên thì tạo thành dạng lông vũ kép.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_33\" data-page=\"33\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"33\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[33][id]\" value=\"67204868e275cb189b8e2dce\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[33][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 34: Thông thường, bó mạch thần kinh cho cơ gồm những thành phần nào?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t1 động mạch, 1 tĩnh mạch, 2 thần kinh
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t1 động mạch, 2 tĩnh mạch, 1 thần kinh
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t2 động mạch, 1 tĩnh mạch, 2 thần kinh
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t2 động mạch, 2 tĩnh mạch, 1 thần kinh
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_34\" data-page=\"34\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"34\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[34][id]\" value=\"67204868e275cb189b8e2dcf\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[34][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 35: Sự phân bố thần kinh cho cơ phụ thuộc vào</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVị trí của cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình dạng của cơ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng của cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCấu trúc của cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_35\" data-page=\"35\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"35\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[35][id]\" value=\"67204868e275cb189b8e2dd0\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[35][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 36: Cấu trúc nào sau đây nằm giữa cơ và lớp mỡ dưới da</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc sâu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVách gian cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc bọc cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_36\" data-page=\"36\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"36\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[36][id]\" value=\"67204868e275cb189b8e2dd1\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[36][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 37: Một vết thương gây rách da và cơ, cấu trúc còn nguyên vẹn nếu có sẽ là</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMỡ dưới da
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVách gian cơ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc bọc cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Một vết thương rách đến lớp cơ thì sẽ rách lớp mạc nông, mỡ dưới da, lớp mạc của cơ. Do đó, nếu có cấu trúc nào còn nguyên vẹn thì chỉ là vách gian cơ khi vết thương thương chưa làm rách hoàn một cơ để đến một cơ khác<br>chi là vách gian cơ khi vết thương chưa làm rách hoàn toàn một cơ để đến cơ khác
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_37\" data-page=\"37\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"37\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[37][id]\" value=\"67204868e275cb189b8e2dd2\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[37][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 38: Sự khác biệt giữa thành động mạch và thành tĩnh mạch chủ yếu là</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCấu trúc của lớp ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCấu trúc của lớp giữa
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCấu trúc của lớp trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCấu trúc của lớp ngoài và lớp trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_38\" data-page=\"38\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"38\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[38][id]\" value=\"67204868e275cb189b8e2dd3\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[38][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 39: Lớp mô liên kết hiện diện ở lớp nào của động mạch?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp ngoài và lớp trong
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Cấu tạo của tĩnh mạch cũng gồm ba lớp là lớp mô liên kết, lớp cơ trơn, lớp nội mạc. Tuy nhiên, lớp cơ trơn của tĩnh mạch ít hơn so với động mạch nên thành sẽ mỏng và kém đàn hồi hơn. Ở cùng một vị trí thì đường kính của tĩnh mạch thường lớn hơn đường kính của động mạch tương ứng.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_39\" data-page=\"39\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"39\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[39][id]\" value=\"67204868e275cb189b8e2dd4\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[39][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 40: Lớp cơ trơn hiện diện ở lớp nào của động mạch?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp giữa
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp ngoài và lớp trong
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_40\" data-page=\"40\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"40\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[40][id]\" value=\"67204868e275cb189b8e2dd5\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[40][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 41: Khi ở tư thế đứng, yếu tố nào sau đây giúp máu tĩnh mạch từ chi dưới đổ về tim?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrương lực cơ chi dưới
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrọng lực của cơ thể
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSức hút của tim
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tÁp lực âm của ổ bụng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Không giống như các động mạch, lòng tĩnh mạch không có áp lực từ các đợt co bóp của tim để giữ cho máu di chuyển qua chúng. Vì vậy, để duy trì cho máu chảy về tim, các tĩnh mạch dựa trên sự chuyển động và co bóp của cơ xương quanh tĩnh mạch, cùng như sự đóng mở của các van trong lòng tĩnh mạch. Rõ ràng, sự khác biệt về cấu trúc giữa tĩnh mạch và động mạch là động mạch không có van và động mạch dẫn máu nhờ áp lực bơm của tim.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_41\" data-page=\"41\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"41\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[41][id]\" value=\"67204868e275cb189b8e2dd6\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[41][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 42: Khi lấy máu xét nghiệm, nơi nào sau đây có nồng độ CO₂ trong máu thấp nhất?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTĩnh mạch
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTiểu tĩnh mạch
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMao mạch
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạch bạch huyết
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_42\" data-page=\"42\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"42\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[42][id]\" value=\"67204868e275cb189b8e2dd7\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[42][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 43: Cơ quan nào sau đây chứa mao mạch dạng xoang, có các hốc chứa máu?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tRuột
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTim
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNão
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGan
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Dựa vào chức năng, có thể chia mao mạch thành ba dạng chính:<br><br>Dạng liên tục: là dạng mao mạch ở mô cơ, da, ...<br>Dạng xuyên thấu: là dạng mao mạch ở ruột, tuyến nội tiết.<br>Dạng xoang: là các hồ chứa máu, có ở gan, lách, …
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_43\" data-page=\"43\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"43\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[43][id]\" value=\"67204868e275cb189b8e2dd8\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[43][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 44: Mạch nào sau đây đổ vào giường mao mạch?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch đàn hồi
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch vào cơ quan
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTiểu động mạch nhỏ nhất
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTiểu tĩnh mạch nhỏ nhất
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_44\" data-page=\"44\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"44\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[44][id]\" value=\"67204868e275cb189b8e2dd9\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[44][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 45: Mao mạch dạng xuyên thấu được tìm thấy nhiều nhất ở</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGan
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tRuột non
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDạ dày
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Dựa vào chức năng, có thể chia mao mạch thành ba dạng chính:<br><br>Dạng liên tục: là dạng mao mạch ở mô cơ, da, ...<br>Dạng xuyên thấu: là dạng mao mạch ở ruột, tuyến nội tiết.<br>Dạng xoang: là các hồ chứa máu, có ở gan, lách, …
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_45\" data-page=\"45\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"45\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[45][id]\" value=\"67204868e275cb189b8e2dda\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[45][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 46: Tiểu động mạch được hình thành là do</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác động mạch hợp nhất lại
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác mao mạch hợp nhất lại
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác tĩnh mạch hợp nhất lại
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác động mạch phân chia nhỏ ra
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_46\" data-page=\"46\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"46\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[46][id]\" value=\"67204868e275cb189b8e2ddb\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[46][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 47: Shunt động mạch tồn tại ở vị trí nào sau đây?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMao mạch gan
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMao mạch lách
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMao mạch ruột
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMao mạch cầu thận
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Trong hệ thống mao mạch của thận, có một sự sắp xếp đặc biệt giúp điều hòa dòng máu để lọc và tái hấp thu, và có thể coi là nơi xảy ra sự lưu thông máu đặc biệt.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_47\" data-page=\"47\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"47\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[47][id]\" value=\"67204868e275cb189b8e2ddc\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[47][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 48: Khi bị viêm, nhiễm trùng tại mô, cơ thể sẽ đáp ứng bằng cách</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTiểu cầu tập trung ở mao mạch
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTiểu cầu tập trung ở tiểu tĩnh mạch
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBạch cầu tập trung ở tiểu tĩnh mạch
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBạch cầu tập trung ở tiểu động mạch
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_48\" data-page=\"48\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"48\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[48][id]\" value=\"67204868e275cb189b8e2ddd\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[48][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 49: Một cấu trúc có bản chất là mô liên kết đặc, tổ chức sợi sắp xếp theo từng lớp chạy theo các hướng khác nhau, đó là</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBao
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc sâu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTổ chức dưới da
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Mạc sâu là lớp mô liên kết đặc, không có mỡ, nằm dưới da và mạc nông. Tổ chức sợi ở mạc sâu sắp xếp theo từng lớp. Các sợi ở mỗi lớp chạy theo cùng một hướng nhưng giữa các lớp khác nhau, các sợi lại sắp xếp theo các hướng khác nhau. Sự thay đổi này giúp tăng sức mạnh của mạc sâu theo nhiều hướng.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_49\" data-page=\"49\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"49\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[49][id]\" value=\"67204868e275cb189b8e2dde\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[49][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 50: Lớp biểu mô lót mặt trong của ống tiêu hóa, đường hô hấp được gọi là</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp niêm mạc
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp thanh mạc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp dưới thanh mạc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp bao xơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_50\" data-page=\"50\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"50\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[50][id]\" value=\"67204868e275cb189b8e2ddf\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[50][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 51: Nam thanh niên 21 tuổi có một vết rách ở một dải xơ bao quanh cơ cánh tay phải. Cấu trúc nào sau đây bị tổn thương trong trường hợp này?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBao gân
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCân mạc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDây chằng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_51\" data-page=\"51\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"51\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[51][id]\" value=\"67204868e275cb189b8e2de0\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[51][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 52: Các màng được cấu tạo bởi</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp tế bào biểu mô
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác mô liên kết
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTấm dưới da
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTế bào biểu mô và mô liên kết
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Lớp tế bào biểu mô và các mô liên kết kết hợp nhau tạo nên các màng (membranes). Mỗi màng gồm một tấm biểu mô và một lớp mô liên kết bên dưới có chức năng bao bọc và bảo vệ các cấu trúc và các mô khác trong cơ thể. Trong cơ thể có bốn loại màng, đó là màng niêm mạc, màng thanh mạc, màng da (da) và màng bao khớp.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_52\" data-page=\"52\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"52\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[52][id]\" value=\"67204868e275cb189b8e2de1\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[52][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 53: Niêm mạc có đặc điểm sau đây, ngoại trừ</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông lót các đường thông với bên ngoài
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgăn cản các tác nhân gây bệnh
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThực hiện chức năng hấp thu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó chức năng bài tiết
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Màng niêm mạc (thường gọi là niêm mạc) lót các đường thông với bên ngoài, bao gồm đường tiêu hóa, đường hô hấp, đường sinh dục và đường tiết niệu. Màng niêm mạc tạo nên một hàng rào ngăn cản sự xâm nhập của các tác nhân gây bệnh. Bề mặt niêm mạc luôn được giữ ẩm, có thể được bôi trơn bằng dịch nhầy, chất tiết từ các tuyến. Niêm mạc tiếp xúc với các tuyến hoặc tiếp xúc với dịch như nước tiểu, tinh dịch.<br><br>Đôi khi niêm mạc chỉ là một lớp tế bào, thực hiện chức năng hấp thu hoặc bài tiết, ví dụ như biểu mô trụ đơn của ống tiêu hóa. Niêm mạc ở những vị trí khác nhau có những loại tế bào biểu mô khác nhau. Niêm mạc miệng có biểu mô vảy tầng, niêm mạc hầu hết đường tiết niệu là thượng bì chuyển tiếp (gồm nhiều lớp tế bào biểu mô, có chức năng chuyển tiếp trong các mức độ căng dãn).
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_53\" data-page=\"53\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"53\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[53][id]\" value=\"67204868e275cb189b8e2de2\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[53][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 54: Cầu mô liên kết lỏng lẻo của niêm mạc, nối biểu mô với các cấu trúc bên dưới, nâng đỡ các mạch máu và thần kinh được gọi là:</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp riêng
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLá riêng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ riêng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc riêng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Lớp mô liên kết lỏng lẻo của niêm mạc gọi là lá riêng (lamina propria). Lá riêng tạo thành một cầu nối biểu mô với các cấu trúc bên dưới, nâng đỡ các mạch máu và thần kinh cung cấp cho thượng bì.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_54\" data-page=\"54\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"54\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[54][id]\" value=\"67204868e275cb189b8e2de3\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[54][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 55: Bệnh nhân nam được chẩn đoán bướu phổi phải, trên phim chụp cắt lớp của ngực, hình ảnh khối bướu nằm ở</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBên trên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBên dưới
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBên phải
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBên trái
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_55\" data-page=\"55\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"55\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[55][id]\" value=\"67204868e275cb189b8e2de4\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[55][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 56: Mạc nối lớn không có đặc điểm nào sau đây?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDự trữ năng lượng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCách nhiệt
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBảo vệ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó thể bị xoắn
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Mạc nối lớn (greater omentum) là một lớp mô mỡ lớn treo từ dạ dày và đại tràng ngang, bao phủ các cơ quan trong khoang bụng. Nó có những đặc điểm chính sau:<br>Dự trữ năng lượng: Mạc nối lớn chứa nhiều mô mỡ, giúp dự trữ năng lượng cho cơ thể.<br>Cách nhiệt: Lớp mỡ trong mạc nối lớn có tác dụng cách nhiệt, giúp duy trì nhiệt độ của các cơ quan nội tạng.<br>Bảo vệ: Mạc nối lớn giúp bảo vệ các cơ quan trong ổ bụng, có vai trò như một “cái khiên” che chắn.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_56\" data-page=\"56\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"56\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[56][id]\" value=\"67204868e275cb189b8e2de5\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[56][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 57: Mặt ngoài của dạ dày được bao bọc bởi</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNiêm mạc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThanh mạc
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhúc mạc thành
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLá riêng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_57\" data-page=\"57\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"57\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[57][id]\" value=\"67204868e275cb189b8e2de6\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[57][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 58: Bên trong đường hô hấp được lót bởi</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThanh mạc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrung bì
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNiêm mạc
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNội bì
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_58\" data-page=\"58\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"58\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[58][id]\" value=\"67204868e275cb189b8e2de7\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[58][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 59: Màng nào sau đây không là màng thanh mạc?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhúc mạc thành
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMàng ngoài tim
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMàng trong tim
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMàng phổi thành
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_59\" data-page=\"59\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"59\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[59][id]\" value=\"67204868e275cb189b8e2de8\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[59][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 60: Mạc phát triển từ</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrung mô
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgoại mô
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNội mô
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác khoang cơ thể
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_60\" data-page=\"60\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"60\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[60][id]\" value=\"67204868e275cb189b8e2de9\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[60][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 61: Các mô liên kết phát triển từ</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgoại bì
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrung bì
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNội bì
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgoại bì và trung bì
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_61\" data-page=\"61\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"61\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[61][id]\" value=\"67204868e275cb189b8e2dea\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[61][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 62: Điều nào sau đây không đúng với thượng bì?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó thần kinh chi phối
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó nhiều mạch máu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLót ở hầu hết ống tiêu hóa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó thể biệt hóa thành thượng bì tuyến
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Thượng bì (epithelium) là lớp tế bào ở bề mặt ngoài của da và nhiều màng lót của các cơ quan, nhưng bản thân thượng bì không có mạch máu. Thay vào đó, nó nhận dưỡng chất và oxy thông qua khuếch tán từ lớp mô liên kết bên dưới, chẳng hạn như lớp hạ bì trong da.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_62\" data-page=\"62\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"62\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[62][id]\" value=\"67204868e275cb189b8e2deb\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[62][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 63: Cấu trúc nào sau đây thuộc mô liên kết?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô lỏng lẻo
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô mỡ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô lưới
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCả ba loại trên
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_63\" data-page=\"63\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"63\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[63][id]\" value=\"67204868e275cb189b8e2dec\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[63][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 64: Màng thanh mạc nào sau đây không có lớp thượng bì</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t<p>Màng phổi</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t<p>Màng tim</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t<p>Phúc mạc</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t<p>Màng hoạt mạc</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_64\" data-page=\"64\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"64\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[64][id]\" value=\"67204868e275cb189b8e2ded\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[64][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 65: Mô bạch huyết liên kết niêm mạc (MALT) của ống tiêu hóa liên kết với</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp niêm mạc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLá riêng của niêm mạc
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp dưới niêm mạc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp thanh mạc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Mô bạch huyết liên kết niêm mạc (MALT - Mucosa-Associated Lymphoid Tissue) nằm trong lá riêng của niêm mạc. Đây là một phần của hệ thống miễn dịch, giúp bảo vệ cơ thể khỏi các tác nhân gây bệnh xâm nhập qua đường tiêu hóa.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_65\" data-page=\"65\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"65\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[65][id]\" value=\"67204868e275cb189b8e2dee\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[65][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 66: Lớp mô tìm thấy ở bề mặt một cơ quan là</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBiểu mô
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô liên kết
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô thần kinh
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_66\" data-page=\"66\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"66\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[66][id]\" value=\"67204868e275cb189b8e2def\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[66][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 67: Mô làm dạ dày co thắt để tiêu hóa thức ăn là</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô biểu mô
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô liên kết
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô cơ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô thần kinh
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_67\" data-page=\"67\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"67\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[67][id]\" value=\"67204868e275cb189b8e2df0\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[67][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 68: Mô có chức năng nâng đỡ hoặc vận chuyển trong cơ thể là</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô biểu mô
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô liên kết
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô thần kinh
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_68\" data-page=\"68\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"68\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[68][id]\" value=\"67204868e275cb189b8e2df1\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[68][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 69: Hai hệ cơ quan điều tiết chức năng của cơ thể bằng xung động thần kinh và kích thích tố (hormone) là:</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ xương và hệ cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ tiêu hóa và hệ tiết niệu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ thần kinh và hệ nội tiết
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ tuần hoàn và hệ tiết niệu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_69\" data-page=\"69\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"69\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[69][id]\" value=\"67204868e275cb189b8e2df2\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[69][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 70: Hai hệ cơ quan bảo vệ cơ thể chống tác nhân gây bệnh là</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDa và hệ bạch huyết
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ xương và hệ tuần hoàn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ tiêu hóa và hệ tiết niệu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ cơ và hệ nội tiết
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_70\" data-page=\"70\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"70\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[70][id]\" value=\"67204868e275cb189b8e2df3\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[70][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 71: Cấu trúc nào sau đây không phải là tổ chức cơ quan?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGan
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMáu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThận
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_71\" data-page=\"71\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"71\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[71][id]\" value=\"67204868e275cb189b8e2df4\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[71][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 72: Tuyến nào sau đây là tuyến ngoại tiết?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTuyến nước bọt
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTuyến giáp
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTuyến yên
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTuyến thượng thận
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_72\" data-page=\"72\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"72\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[72][id]\" value=\"67204868e275cb189b8e2df5\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[72][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 73: Loại biểu mô bề mặt có thể thay đổi hình dạng từ tròn đến dẹt là</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBiểu mô vuông
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBiểu mô trụ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBiểu mô lát tầng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBiểu mô chuyển tiếp
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_73\" data-page=\"73\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"73\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[73][id]\" value=\"67204868e275cb189b8e2df6\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[73][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 74: Loại cơ vận động tự ý là</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tim
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ trơn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ nội tạng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ vân
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_74\" data-page=\"74\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"74\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[74][id]\" value=\"67204868e275cb189b8e2df7\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[74][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 75: Màng thanh mạc bao bọc xoang ngực là</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMàng phổi tạng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhúc mạc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMàng phổi thành
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc treo
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_75\" data-page=\"75\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"75\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[75][id]\" value=\"67204868e275cb189b8e2df8\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[75][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 76: Lớp mô vững chắc tạo nên gân và dây chằng là</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô cơ vân
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô liên kết xơ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô xương
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô liên kết chun
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_76\" data-page=\"76\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"76\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[76][id]\" value=\"67204868e275cb189b8e2df9\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[76][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 77: Cơ tạo ra nhu động ruột là</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ bám xương
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ vận động tự ý
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ vân
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ trơn
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_77\" data-page=\"77\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"77\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[77][id]\" value=\"67204868e275cb189b8e2dfa\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[77][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 78: Câu nào nào sau sai khi nói về tuyến?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTuyến nội tiết không có ống tuyến
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChất tiết của tuyến nội tiết là kích thích tố (hormone)
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKích thích tố của tuyến nội tiết đi vào mao mạch
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTuyến giáp là một tuyến ngoại tiết
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_78\" data-page=\"78\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"78\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[78][id]\" value=\"67204867e275cb189b8e2d95\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[78][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 79: Giải phẫu học là môn học nghiên cứu về các vấn đề sau, ngoại trừ:</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t<p>Cấu tạo của cơ thể</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t<p>Liên quan giữa các cơ quan trong cơ thể</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t<p>Liên quan giữa cơ thể với môi trường</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t<p>Sự biến đổi của cơ thể khi bị bệnh</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_79\" data-page=\"79\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"79\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[79][id]\" value=\"67204867e275cb189b8e2d96\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[79][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 80: Ngày nay, phương tiện tốt nhất để học Giải phẫu là:</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXác
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhần mềm vi tính
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhim video
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô hình
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_80\" data-page=\"80\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"80\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[80][id]\" value=\"67204867e275cb189b8e2d97\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[80][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 81: Mặt phẳng đứng dọc giữa</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSong song với mặt phẳng trán
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai phần trước và sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai phần phải và trái
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai nửa phải và trái tương đương
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>C không đúng, chia cơ thể thành hai phần phải và trái chỉ là mặt phẳng đứng dọc
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_81\" data-page=\"81\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"81\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[81][id]\" value=\"67204867e275cb189b8e2d98\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[81][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 82: Trong giải phẫu, để xác định vị trí '‘trong - ngoài” ta căn cứ vào</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng ngang
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc giữa
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_82\" data-page=\"82\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"82\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[82][id]\" value=\"67204867e275cb189b8e2d99\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[82][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 83: Mặt phẳng đứng ngang là mặt phẳng</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai phần trước và sau
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai phần trên và dưới
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSong song với mặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSong song với mặt phẳng ngang
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_83\" data-page=\"83\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"83\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[83][id]\" value=\"67204867e275cb189b8e2d9a\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[83][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 84: Đặc điểm nào sau đây không đúng với mặt phẳng ngang?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVuông góc với mặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSong song với mặt đất
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSong song với mặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai phần trên và dưới
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Mặt phẳng ngang vuông góc với mặt phẳng đứng ngang
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_84\" data-page=\"84\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"84\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[84][id]\" value=\"67204867e275cb189b8e2d9b\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[84][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 85: Đặc điểm nào sau đây không đúng với mặt phẳng đứng dọc giữa?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐi qua đường giữa cơ thể
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThẳng góc với mặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai nửa phải và trái
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó nhiều mặt phẳng đứng dọc giữa song song nhau
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Có nhiều mặt phẳng đứng dọc nhưng chỉ có một mặt phẳng đứng dọc giữa duy nhất
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_85\" data-page=\"85\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"85\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[85][id]\" value=\"67204867e275cb189b8e2d9c\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[85][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 86: Động tác nào sau đây đưa một chi ra xa đường giữa cơ thể?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSắp
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgửa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDạng
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhép
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_86\" data-page=\"86\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"86\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[86][id]\" value=\"67204867e275cb189b8e2d9d\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[86][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 87: Người đưa ra quan điểm học Giải phẫu cần phải mổ xác người là ai?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHippocrates
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tAndreas Vesalius
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHenry Gray
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tFrank Netter
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_87\" data-page=\"87\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"87\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[87][id]\" value=\"67204867e275cb189b8e2d9e\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[87][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 88: Trong một bài Giải phẫu, người ta mô tả các lớp cơ từ nông vào sâu và mô tả mạch máu, thần kinh đi trong các lớp cơ này. Đây là cách mô tả của?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGiải phẫu học hệ thống
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGiải phẫu học định khu
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGiải phẫu học cắt ngang
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGiải phẫu học lâm sàng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Giải phẫu định khu mô tả tất cả các cấu trúc và liên quan giữa các cấu trúc tại một vùng trên cơ thể
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_88\" data-page=\"88\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"88\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[88][id]\" value=\"67204867e275cb189b8e2d9f\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[88][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 89: Tên gọi “hàm trên, hàm dưới” trong giải phẫu là dựa vào?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng ngang
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_89\" data-page=\"89\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"89\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[89][id]\" value=\"67204867e275cb189b8e2da0\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[89][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 90: Mặt phẳng trán là cách gọi khác của mặt phẳng nào?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng ngang
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_90\" data-page=\"90\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"90\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[90][id]\" value=\"67204867e275cb189b8e2da1\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[90][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 91: Khi mô tả vị trí của hai xương cẳng tay, người ta nói rằng xương trụ ở trong xương quay. Điều này dựa vào mặt phẳng nào?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng ngang
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc giữa
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_91\" data-page=\"91\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"91\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[91][id]\" value=\"67204867e275cb189b8e2da2\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[91][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 92: Trên một hình về giải phẫu cho thấy tim ở giữa, hai bên là phổi phải và phổi trái. Vậy hình vẽ này dựa trên mặt cắt nào sau đây?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt cắt ngang hoặc mặt cắt đứng dọc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt cắt ngang hoặc mặt cắt đứng dọc giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt cắt ngang hoặc mặt cắt đứng ngang
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt cắt đứng ngang hoặc mặt cắt đứng dọc giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Trên mặt cắt ngang hoặc mặt cắt đứng ngang đều cho thấy liên quan trong/ngoài giữa các cấu trúc
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_92\" data-page=\"92\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"92\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[92][id]\" value=\"67204867e275cb189b8e2da3\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[92][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 93: Mặt gan tay còn được gọi là mặt trước của bàn tay. Người ta gọi như vậy là dựa vào mặt phẳng nào?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng ngang
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc giữa
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_93\" data-page=\"93\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"93\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[93][id]\" value=\"67204867e275cb189b8e2da4\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[93][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 94: Trong các mức độ tổ chức của cơ thể, cá thể là mức độ tổ chức cao nhất. Điểm đặc trưng của cá thể là gì?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTự trao đổi chất
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTự hô hấp được
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHoạt động độc lập với cá thể khác
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐược hình thành từ nhiều hệ cơ quan
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_94\" data-page=\"94\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"94\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[94][id]\" value=\"67204867e275cb189b8e2da5\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[94][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 95: Đơn vị sống nhỏ nhất của cơ thể là gì?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCá thể
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTế bào
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhân tử
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBào quan
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_95\" data-page=\"95\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"95\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[95][id]\" value=\"67204867e275cb189b8e2da6\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[95][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 96: Tên gọi “cơ gấp ngón cái dài” được đặt dựa vào</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng của cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình dạng của cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng và vị trí của cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng và hình dạng của cơ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_96\" data-page=\"96\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"96\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[96][id]\" value=\"67204867e275cb189b8e2da7\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[96][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 97: Tên gọi “cơ răng sau trên” là dựa vào?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng của cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình dạng của cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình dạng và vị trí của cơ
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng và vị trí của cơ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_97\" data-page=\"97\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"97\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[97][id]\" value=\"67204867e275cb189b8e2da8\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[97][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 98: Trên thiết đồ cắt ngang, ta có thể xác định mối liên quan nào sau đây giữa hai cấu trúc?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrước - sau và trong - ngoài
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrên - dưới và trước - sau
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrên - dưới
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrong - ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_98\" data-page=\"98\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"98\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[98][id]\" value=\"67204867e275cb189b8e2da9\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[98][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 99: Trên thiết đồ cắt đứng ngang, ta có thể xác định mối liên quan nào sau đây giữa hai cấu trúc?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrước - sau và trong - ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrên - dưới và trong - ngoài
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrên - dưới
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrong - ngoài
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_99\" data-page=\"99\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"99\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[99][id]\" value=\"67204867e275cb189b8e2daa\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[99][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 100: Chức năng nào sau đây không phải là chức năng của xương?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBảo vệ
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDự trữ khoáng chất
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐiều hòa huyết áp
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTạo máu
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Bộ xương có bốn chức năng chính:<br><br>Nâng đỡ: Bộ xương tạo nên một khung cứng để nâng đỡ và tạo chỗ bám cho các cấu trúc mềm của cơ thể; các xương chi dưới nâng đỡ thân mình, lồng ngực nâng đỡ thành ngực.<br><br>Bảo vệ: Các xương đầu-mặt tạo thành hộp sọ che chở cho não; lồng ngực bảo vệ tim, phổi; khung chậu chứa đựng bàng quang, tử cung...<br><br>Vận động: Các cơ bám vào xương nên khi co cơ sẽ tạo cử động quanh các khớp.<br><br>Tạo máu và trao đổi các chất: Tủy xương tạo ra hồng cầu, bạch cầu hạt và tiểu cầu. Đồng thời xương cũng là nơi dự trữ và trao đổi mỡ, can-xi, phốt-pho...
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_100\" data-page=\"100\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"100\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[100][id]\" value=\"67204867e275cb189b8e2dab\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[100][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 101: Xương nào sau đây thuộc nhóm xương phụ?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương vai
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương ức
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương sườn
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương móng
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Các xương trục bao gồm: các xương đầu-mặt, cột sống, các xương sườn và xương ức.
\t\t\t\t\t\t\t<br>Các xương phụ gồm các xương chi trên
\t\t\t\t\t\t\t<br>và các xương chi dưới.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"block-quiz-test\" id=\"div_block_quiz_test_101\" data-page=\"101\">
\t\t\t\t<div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"101\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[101][id]\" value=\"67204867e275cb189b8e2dac\">
\t\t\t\t\t<input type=\"hidden\" name=\"Quiz[101][sort]\" value=\"\">
\t\t\t\t\t<div class=\"w3-large\">
\t\t\t\t\t\t<span class=\"quiz-title\">
\t\t\t\t\t\t\t<strong>Câu 102: Về hình dạng, xương nào sau đây thuộc nhóm xương dẹt?</strong>
\t\t\t\t\t\t</span><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác xương ở cổ tay
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương sườn
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương bàn chân
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
\t\t\t\t\t\t\t<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương ngón chân
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"quiz_note hidden\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Theo hình thể: Có các loại sau:<br>
\t\t\t\t\t\t\tXương dài: xương cánh tay, xương đùi...<br>
\t\t\t\t\t\t\tXương ngắn: các xương cổ tay, các xương cổ chân...<br>
\t\t\t\t\t\t\tXương dẹt: các xương ở vòm sọ, xương ức...<br>
\t\t\t\t\t\t\tXương bất định hình: xương thái dương, xương hàm trên...
\t\t\t\t\t\t\t<br>Xương vừng: xương bánh chè...
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "quizz/contents/daicuong.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "quizz/contents/daicuong.html", "D:\\Projects\\minic2\\src\\app\\Views\\quizz\\contents\\daicuong.html");
    }
}
