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

/* quizz/contents_2/daicuong.html */
class __TwigTemplate_1b8e6608a45636c6decaea8d99beedee extends Template
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
<div class=\"main-test detail-quiz-course-result\" style=\"overflow:hidden;\">
<div class=\"quiz_name text-center\" style=\"margin: 0px;margin-bottom: 20px;\">
<h3>Moldule giải phẫu đại cương</h3>
</div>
<div class=\"col-md-12 col-sm-12\">
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"0\" data-question-number=\"464\" id=\"div_block_quiz_test_0\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"0\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"464\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 1: Xương nào sau đây có vai trò làm giảm lực ma sát của các gân cơ?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương bàn
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương đốt ngón
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương vừng
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương phụ
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"1\" data-question-number=\"465\" id=\"div_block_quiz_test_1\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"1\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"465\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 2: Vị trí nào sau đây là nơi tập trung nhiều mô xương đặc?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBờ các xương dẹt
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrung tâm các xương dẹt
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐầu các xương dài
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThân các xương dài
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Cấu tạo của xương dài: gồm một thân xương
\t\t\t\t\t\t\t<br/>hình ống và hai đầu phình to gọi là đầu xương. Thân xương
\t\t\t\t\t\t\t<br/>cấu tạo bởi chất xương đặc và được bọc trong màng xương.
\t\t\t\t\t\t\t<br/>Ớ giừa thân xương có buồng tủy. Đầu xương được cấu tạo
\t\t\t\t\t\t\t<br/>bởi chất xương xốp ở trung tâm, xương cốt mạc ở chung
\t\t\t\t\t\t\t<br/>quanh và sụn khớp ở diện khớp.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"2\" data-question-number=\"466\" id=\"div_block_quiz_test_2\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"2\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"466\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 3: Đặc tính nào sau đây không thuộc về xương xốp?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTập trung ở xương dẹt, đầu xương dài
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTủy của xương xốp là loại tủy đỏ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông hiện diện ở thân xương dài
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó vai trò hấp thu lực tác động lên xương
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Ở thân xương dài vẫn có xương xốp, tạo thành lớp mỏng ở mặt trong vỏ xương
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"3\" data-question-number=\"467\" id=\"div_block_quiz_test_3\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"3\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"467\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 4: Nhìn chung, vị trí nào sau đây thường là nơi bám của các gân cơ?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChỏm
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLồi cầu
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMào
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMỏm trên lồi cầu
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"4\" data-question-number=\"468\" id=\"div_block_quiz_test_4\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"4\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"468\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 5: Hình dạng của diện khớp phù hợp với</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCấu tạo của khớp
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCử động của khớp
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVị trí của khớp
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKích thước của khớp
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"5\" data-question-number=\"469\" id=\"div_block_quiz_test_5\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"5\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"469\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 6: Đặc tính nào sau đây đúng với sụn?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông có màng sụn
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông có mạch máu riêng
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDễ lành sau chấn thương
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThành phần chủ yếu là sợi collagen
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Sụn không có mạch máu riêng và khó lành sau khi chấn thương
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"6\" data-question-number=\"470\" id=\"div_block_quiz_test_6\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"6\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"470\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 7: Sụn chun hiện diện ở cấu trúc nào sau đây?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhí quản
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLoa tai
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐĩa gian đốt sống
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChỏm xương đùi
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Sụn có ba loại chính:<br/><br/>Sụn trong (Hyaline cartilage):<br/>Đặc điểm: Sụn trong có cấu trúc mịn, trong suốt và là loại sụn phổ biến nhất trong cơ thể.<br/>Vị trí:<br/>Đầu xương dài (nơi nối khớp).<br/>Vách mũi.<br/>Thành khí quản, phế quản.<br/>Sụn sườn (nối giữa xương sườn và xương ức).<br/>Sụn xơ (Fibrocartilage):<br/><br/>Đặc điểm: Sụn xơ có độ chắc chắn cao do chứa nhiều sợi collagen, giúp chịu lực nén và kéo căng tốt.<br/>Vị trí:<br/>Đĩa đệm cột sống.<br/>Khớp mu.<br/>Sụn giữa các khớp gối và khớp hông.<br/>Sụn chun (Elastic cartilage):<br/><br/>Đặc điểm: Loại sụn này chứa nhiều sợi đàn hồi, giúp sụn có tính co giãn và duy trì hình dạng.<br/>Vị trí:<br/>Tai ngoài.<br/>Nắp thanh quản (epiglottis).<br/>Một số cấu trúc trong ống tai.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"7\" data-question-number=\"471\" id=\"div_block_quiz_test_7\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"7\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"471\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 8: Ở thân xương dài, thành phần chính của vỏ xương là?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô xương đặc
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô xương xốp
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMàng xương
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTổ chức sợi
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"8\" data-question-number=\"472\" id=\"div_block_quiz_test_8\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"8\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"472\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 9: Trên xương dài, hành xương là vùng ở vị trí nào sau đây?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrên bề mặt đầu xương
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGiữa đầu xương và sụn khớp
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt trong ống tủy
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGiữa đầu xương và thân xương
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Hành xương, còn gọi là đầu thân xương, nơi tiếp giáp giữa đầu xương và thân xương dài
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"9\" data-question-number=\"473\" id=\"div_block_quiz_test_9\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"9\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"473\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 10: Sẹo sụn tiếp hợp hình thành do</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSự liền chỗ gãy ở đầu xương
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSự liền chỗ gãy ở sụn khớp
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSự hóa xương của sụn tiếp hợp
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSự hóa xương của sụn khớp
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Khi đến tuổi trường thành, sụn tiếp hợp được cốt hóa hoàn toàn và để lại sẹo sụn tiếp hợp. A không đúng vì màng xương không có ở đầu xương
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"10\" data-question-number=\"474\" id=\"div_block_quiz_test_10\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"10\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"474\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 11: Sẹo sụn tiếp hợp xuất hiện thời điểm nào?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSau gãy xương đã lành
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSau bong sụn khớp đã lành
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhi đến tuổi dậy thì
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhi đến tuổi trưởng thành
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Khi đến tuổi trường thành, sụn tiếp hợp được cốt hóa hoàn toàn và để lại sẹo sụn tiếp hợp
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"11\" data-question-number=\"475\" id=\"div_block_quiz_test_11\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"11\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"475\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 12: Sụn khớp là loại sụn nào?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSụn trong
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSụn chun
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSụn xơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSụn tiếp hợp
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"12\" data-question-number=\"476\" id=\"div_block_quiz_test_12\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"12\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"476\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 13: Ở người trưởng thành, thành phần chủ yếu của tủy xương trong ống tủy là gì?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTế bào máu
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChất khoáng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMỡ
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTế bào tạo xương
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"13\" data-question-number=\"477\" id=\"div_block_quiz_test_13\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"13\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"477\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 14: Đặc tính nào sau đây không đúng với màng xương ngoài của xương dài?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhủ hầu hết trên bề mặt xương
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông có mạch máu
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó chức năng giúp xương gãy mau lành
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCòn là nơi bám của gân cơ, dây chằng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Màng xương ngoài rất dồi dào mạch máu, có vai trò mang chất dinh dường đến nuôi xương và giúp xương mau lành khi bị gãy
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"14\" data-question-number=\"478\" id=\"div_block_quiz_test_14\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"14\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"478\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 15: Hiện tượng nào sau đây xảy ra trước nhất trong quá trình liền xương?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình thành các bè xương xốp
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình thành các sợi collagen
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChảy máu và hình thành khối máu tụ
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHấp thụ các tế bào chết vùng xương gãy
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"15\" data-question-number=\"479\" id=\"div_block_quiz_test_15\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"15\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"479\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 16: Phần ngoài của vỏ xương được cấp máu bởi động mạch nào?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch màng xương ngoài
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch nuôi xương
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch hành xương
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch đầu xương
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"16\" data-question-number=\"480\" id=\"div_block_quiz_test_16\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"16\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"480\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 17: Sụn tiếp hợp là lớp sụn trong nằm ở đâu?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐầu các xương dài, nơi khớp với các xương khác
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHành xương dài, nơi tiếp giáp giữa đầu xương và thân xương
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDưới màng ngoài xương của thân xương dài
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrên bề mặt của ống tủy của thân xương dài
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"17\" data-question-number=\"481\" id=\"div_block_quiz_test_17\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"17\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"481\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 18: Loại khớp nào sau đây hiện diện nhiều nhất trong cơ thể?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp hoạt dịch
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp dây chằng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp màng gian cốt
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"18\" data-question-number=\"482\" id=\"div_block_quiz_test_18\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"18\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"482\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 19: Khớp nào sau đây không có khả năng cử động?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp dây chằng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp đường ráp
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp hoạt dịch
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Khớp đường ráp có ở các khớp ở sọ, các bờ xương có hình răng cưa khớp với nhau, là loại khớp bất động
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"19\" data-question-number=\"483\" id=\"div_block_quiz_test_19\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"19\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"483\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 20: Chọn lựa nào sau đây phù hợp nhất đối với khớp giữa các xương cổ tay?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp động
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp yên ngựa
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"20\" data-question-number=\"484\" id=\"div_block_quiz_test_20\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"20\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"484\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 21: Chọn lựa nào sau đây phù hợp nhất đối với khớp giữa xương thuyền và đầu dưới xương quay?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sợi
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp lồi cầu
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Ở khớp lồi cầu, phần lồi cầu của một xương khớp với phần lõm của xương khác. Lồi cầu là phần xương lồi ra ở đầu xương và thường có hình bầu dục. Khớp lồi cầu có hai trục vì khớp chuyển động quanh hai trục (gấp - duỗi và dạng - khép). Khớp giữa xương cổ tay và đầu dưới xương quay, khớp giữa xương bàn và xương ngón 2, 3, 4, 5 là các khớp lồi cầu.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"21\" data-question-number=\"485\" id=\"div_block_quiz_test_21\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"21\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"485\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 22: Chọn lựa nào sau đây phù hợp nhất đối với khớp giữa xương thang và xương bàn I ở bàn tay?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp phẳng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp yên ngựa
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp bán động
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Ở khớp yên ngựa, bề mặt khớp của một xương có hình yên ngựa, bề mặt khớp của xương còn lại khớp với “yên ngựa” như hình ảnh người cưỡi ngựa. Khớp yên ngựa có ba trục, cho phép các chuyển động quanh ba trục (gấp - duỗi, dạng - khép và xoay). Khớp yên ngựa có thể được xem như là một dạng đặc biệt của khớp lồi cầu nhưng có cử động tự do hơn (thêm cử động xoay). Ví dụ khớp giữa xương thang với xương bàn I là khớp yên ngựa.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"22\" data-question-number=\"486\" id=\"div_block_quiz_test_22\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"22\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"486\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 23: Chọn lựa nào sau đây phù hợp nhất đối với khớp mu?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp động
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn sợi
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sợi
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"23\" data-question-number=\"487\" id=\"div_block_quiz_test_23\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"23\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"487\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 24: Chọn lựa nào sau đây phù hợp nhất đối với khớp chày mác dưới?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp bất động
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp dạng dây chằng
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Khớp dây chằng cũng là một loại khớp sợi nhưng khoảng cách giữa các bề mặt sụn khớp lớn hơn và mô liên kết dày đặc hơn so với khớp đường ráp. Các mô liên kết đặc ở đây thường được sắp xếp thành bó gọi là dây chằng.<br/><br/>Ví dụ khớp giữa đầu dưới xương chày và đầu dưới xương mác (khớp chày mác dưới) thuộc loại khớp dây chằng. Các sợi liên kết ở đây sắp xếp thành dây chằng chày mác trước liên kết giữa hai xương.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"24\" data-question-number=\"488\" id=\"div_block_quiz_test_24\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"24\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"488\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 25: Chọn lựa nào sau đây phù hợp nhất đối với khớp giữa thân của các đốt sống?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp động
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn sợi
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sợi
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"25\" data-question-number=\"489\" id=\"div_block_quiz_test_25\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"25\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"489\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 26: Chọn lựa nào sau đây phù hợp nhất đối với khớp giữa xương trụ và xương cánh tay?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp xoay
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp sụn sợi
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp bản lề
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhớp lồi cầu
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Ở khớp bản lề, mặt lồi của một xương khớp với mặt lõm của xương còn lại. Khớp bản lề tạo ra một góc khi đóng và mở giống như một cánh cửa. Khớp bản lề là một khớp đơn trục vì chúng hầu như chỉ cử động quanh một trục duy nhất. Trong cử động khớp, một xương cố định trong khi xương còn lại di chuyển quanh một trục. Khớp gối, khớp khuỷu, các khớp gian ngón là những khớp bản lề và chỉ có cử động gấp - duỗi.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"26\" data-question-number=\"490\" id=\"div_block_quiz_test_26\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"26\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"490\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 27: Nơi nào sau đây là vị trí có nhiều cơ trơn?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThành bụng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGan tay
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tỐng tiêu hóa
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMôi và lưỡi
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"27\" data-question-number=\"491\" id=\"div_block_quiz_test_27\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"27\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"491\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 28: Cơ ở vùng nào sau đây thường được chi phối bởi nhiều dây thần kinh?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ ở mặt
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ chi trên
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ chi dưới
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ thành bụng
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"28\" data-question-number=\"492\" id=\"div_block_quiz_test_28\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"28\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"492\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 29: Mạc treo gân có bản chất là gì?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc sâu
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBao sợi của gân
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBao hoạt dịch của gân
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Bao hoạt dịch của gân là các bao thanh mạc bọc xung quanh gân. Bao hoạt dịch của gân gồm hai lá, lá trong bọc sát gân và lá ngoài dính sát vào bao sợi. Hai lá liên tục với nhau tạo thành một khoang chứa hoạt dịch, giúp gân cử động dễ dàng, không bị cọ sát vào xương. Dọc theo hai cạnh của gân, hai lá liên tiếp nhau tạo thành mạc treo gân.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"29\" data-question-number=\"493\" id=\"div_block_quiz_test_29\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"29\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"493\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 30: Vách gian cơ là một cấu trúc thuộc?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc bọc cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc sâu
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc hoạt dịch
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"30\" data-question-number=\"494\" id=\"div_block_quiz_test_30\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"30\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"494\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 31: Tên gọi cơ răng trước dựa vào đâu?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVị trí của cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng của cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình dạng của cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình dạng và vị trí
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"31\" data-question-number=\"495\" id=\"div_block_quiz_test_31\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"31\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"495\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 32: Cơ nào sau đây được đặt tên dựa theo hình dạng và chức năng?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ nhị đầu cánh tay
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ răng sau trên
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ duỗi ngón trỏ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ gấp ngón cái ngắn
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"32\" data-question-number=\"496\" id=\"div_block_quiz_test_32\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"32\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"496\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 33: Dựa vào sự phân bố mạch máu, cơ vân xếp thành mấy dạng?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t3 dạng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t4 dạng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t5 dạng
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t6 dạng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Kiểu sắp xếp của bó sợi cơ ảnh hưởng rất lớn đến động tác của cơ. Dựa vào sự sắp xếp của các bó sợi cơ khi chúng gắn vào gân, chúng ta chia thành năm dạng chính. Đó là dạng song song, dạng hình thoi, dạng hình vòng, dạng hình tam giác và dạng lông vũ.<br/><br/>Ở dạng song song, các bó cơ chạy song song với trục của cơ và bám vào gân ở hai đầu của cơ. Ở dạng hình thoi, các bó cơ chạy gần như song song với trục dọc của cơ, bám vào gân ở hai đầu cơ nhưng bụng cơ nhỏ dần về phía hai đầu. Dạng hình vòng, các bó cơ xếp thành hình vòng tròn quanh một lỗ tự nhiên nào đó của cơ thể. Trong dạng hình tam giác, các sợi cơ hội tụ về phía một gân cơ. Các sợi cơ ở dạng lông vũ bám dọc trên một gân cơ, gân cơ này trải dài theo chiều dài của cơ. Khi các sợi cơ chỉ bám dọc theo một bên của gân thì tạo thành dạng lông vũ đơn, khi các sợi cơ bám dọc cả hai bên thì tạo thành dạng lông vũ kép.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"33\" data-question-number=\"497\" id=\"div_block_quiz_test_33\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"33\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"497\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 34: Thông thường, bó mạch thần kinh cho cơ gồm những thành phần nào?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t1 động mạch, 1 tĩnh mạch, 2 thần kinh
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t1 động mạch, 2 tĩnh mạch, 1 thần kinh
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t2 động mạch, 1 tĩnh mạch, 2 thần kinh
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\t2 động mạch, 2 tĩnh mạch, 1 thần kinh
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"34\" data-question-number=\"498\" id=\"div_block_quiz_test_34\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"34\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"498\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 35: Sự phân bố thần kinh cho cơ phụ thuộc vào</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVị trí của cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình dạng của cơ
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng của cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCấu trúc của cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"35\" data-question-number=\"499\" id=\"div_block_quiz_test_35\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"35\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"499\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 36: Cấu trúc nào sau đây nằm giữa cơ và lớp mỡ dưới da</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc sâu
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVách gian cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc bọc cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"36\" data-question-number=\"500\" id=\"div_block_quiz_test_36\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"36\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"500\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 37: Một vết thương gây rách da và cơ, cấu trúc còn nguyên vẹn nếu có sẽ là</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMỡ dưới da
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVách gian cơ
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc bọc cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Một vết thương rách đến lớp cơ thì sẽ rách lớp mạc nông, mỡ dưới da, lớp mạc của cơ. Do đó, nếu có cấu trúc nào còn nguyên vẹn thì chỉ là vách gian cơ khi vết thương thương chưa làm rách hoàn một cơ để đến một cơ khác<br/>chi là vách gian cơ khi vết thương chưa làm rách hoàn toàn một cơ để đến cơ khác
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"37\" data-question-number=\"501\" id=\"div_block_quiz_test_37\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"37\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"501\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 38: Sự khác biệt giữa thành động mạch và thành tĩnh mạch chủ yếu là</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCấu trúc của lớp ngoài
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCấu trúc của lớp giữa
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCấu trúc của lớp trong
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCấu trúc của lớp ngoài và lớp trong
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"38\" data-question-number=\"502\" id=\"div_block_quiz_test_38\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"38\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"502\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 39: Lớp mô liên kết hiện diện ở lớp nào của động mạch?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp ngoài
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp giữa
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp trong
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp ngoài và lớp trong
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Cấu tạo của tĩnh mạch cũng gồm ba lớp là lớp mô liên kết, lớp cơ trơn, lớp nội mạc. Tuy nhiên, lớp cơ trơn của tĩnh mạch ít hơn so với động mạch nên thành sẽ mỏng và kém đàn hồi hơn. Ở cùng một vị trí thì đường kính của tĩnh mạch thường lớn hơn đường kính của động mạch tương ứng.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"39\" data-question-number=\"503\" id=\"div_block_quiz_test_39\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"39\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"503\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 40: Lớp cơ trơn hiện diện ở lớp nào của động mạch?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp ngoài
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp giữa
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp trong
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp ngoài và lớp trong
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"40\" data-question-number=\"504\" id=\"div_block_quiz_test_40\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"40\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"504\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 41: Khi ở tư thế đứng, yếu tố nào sau đây giúp máu tĩnh mạch từ chi dưới đổ về tim?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrương lực cơ chi dưới
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrọng lực của cơ thể
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSức hút của tim
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tÁp lực âm của ổ bụng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Không giống như các động mạch, lòng tĩnh mạch không có áp lực từ các đợt co bóp của tim để giữ cho máu di chuyển qua chúng. Vì vậy, để duy trì cho máu chảy về tim, các tĩnh mạch dựa trên sự chuyển động và co bóp của cơ xương quanh tĩnh mạch, cùng như sự đóng mở của các van trong lòng tĩnh mạch. Rõ ràng, sự khác biệt về cấu trúc giữa tĩnh mạch và động mạch là động mạch không có van và động mạch dẫn máu nhờ áp lực bơm của tim.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"41\" data-question-number=\"505\" id=\"div_block_quiz_test_41\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"41\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"505\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 42: Khi lấy máu xét nghiệm, nơi nào sau đây có nồng độ CO₂ trong máu thấp nhất?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTĩnh mạch
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTiểu tĩnh mạch
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMao mạch
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạch bạch huyết
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"42\" data-question-number=\"506\" id=\"div_block_quiz_test_42\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"42\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"506\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 43: Cơ quan nào sau đây chứa mao mạch dạng xoang, có các hốc chứa máu?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tRuột
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTim
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNão
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGan
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Dựa vào chức năng, có thể chia mao mạch thành ba dạng chính:<br/><br/>Dạng liên tục: là dạng mao mạch ở mô cơ, da, ...<br/>Dạng xuyên thấu: là dạng mao mạch ở ruột, tuyến nội tiết.<br/>Dạng xoang: là các hồ chứa máu, có ở gan, lách, …
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"43\" data-question-number=\"507\" id=\"div_block_quiz_test_43\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"43\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"507\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 44: Mạch nào sau đây đổ vào giường mao mạch?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch đàn hồi
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch vào cơ quan
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTiểu động mạch nhỏ nhất
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTiểu tĩnh mạch nhỏ nhất
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"44\" data-question-number=\"508\" id=\"div_block_quiz_test_44\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"44\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"508\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 45: Mao mạch dạng xuyên thấu được tìm thấy nhiều nhất ở</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGan
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tRuột non
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDạ dày
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Dựa vào chức năng, có thể chia mao mạch thành ba dạng chính:<br/><br/>Dạng liên tục: là dạng mao mạch ở mô cơ, da, ...<br/>Dạng xuyên thấu: là dạng mao mạch ở ruột, tuyến nội tiết.<br/>Dạng xoang: là các hồ chứa máu, có ở gan, lách, …
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"45\" data-question-number=\"509\" id=\"div_block_quiz_test_45\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"45\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"509\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 46: Tiểu động mạch được hình thành là do</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác động mạch hợp nhất lại
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác mao mạch hợp nhất lại
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác tĩnh mạch hợp nhất lại
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác động mạch phân chia nhỏ ra
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"46\" data-question-number=\"510\" id=\"div_block_quiz_test_46\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"46\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"510\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 47: Shunt động mạch tồn tại ở vị trí nào sau đây?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMao mạch gan
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMao mạch lách
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMao mạch ruột
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMao mạch cầu thận
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Trong hệ thống mao mạch của thận, có một sự sắp xếp đặc biệt giúp điều hòa dòng máu để lọc và tái hấp thu, và có thể coi là nơi xảy ra sự lưu thông máu đặc biệt.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"47\" data-question-number=\"511\" id=\"div_block_quiz_test_47\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"47\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"511\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 48: Khi bị viêm, nhiễm trùng tại mô, cơ thể sẽ đáp ứng bằng cách</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTiểu cầu tập trung ở mao mạch
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTiểu cầu tập trung ở tiểu tĩnh mạch
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBạch cầu tập trung ở tiểu tĩnh mạch
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBạch cầu tập trung ở tiểu động mạch
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"48\" data-question-number=\"512\" id=\"div_block_quiz_test_48\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"48\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"512\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 49: Một cấu trúc có bản chất là mô liên kết đặc, tổ chức sợi sắp xếp theo từng lớp chạy theo các hướng khác nhau, đó là</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc nông
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBao
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc sâu
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTổ chức dưới da
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Mạc sâu là lớp mô liên kết đặc, không có mỡ, nằm dưới da và mạc nông. Tổ chức sợi ở mạc sâu sắp xếp theo từng lớp. Các sợi ở mỗi lớp chạy theo cùng một hướng nhưng giữa các lớp khác nhau, các sợi lại sắp xếp theo các hướng khác nhau. Sự thay đổi này giúp tăng sức mạnh của mạc sâu theo nhiều hướng.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"49\" data-question-number=\"513\" id=\"div_block_quiz_test_49\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"49\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"513\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 50: Lớp biểu mô lót mặt trong của ống tiêu hóa, đường hô hấp được gọi là</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp niêm mạc
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp thanh mạc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp dưới thanh mạc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp bao xơ
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"50\" data-question-number=\"514\" id=\"div_block_quiz_test_50\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"50\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"514\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 51: Nam thanh niên 21 tuổi có một vết rách ở một dải xơ bao quanh cơ cánh tay phải. Cấu trúc nào sau đây bị tổn thương trong trường hợp này?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBao gân
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCân mạc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDây chằng
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"51\" data-question-number=\"515\" id=\"div_block_quiz_test_51\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"51\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"515\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 52: Các màng được cấu tạo bởi</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp tế bào biểu mô
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác mô liên kết
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTấm dưới da
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTế bào biểu mô và mô liên kết
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Lớp tế bào biểu mô và các mô liên kết kết hợp nhau tạo nên các màng (membranes). Mỗi màng gồm một tấm biểu mô và một lớp mô liên kết bên dưới có chức năng bao bọc và bảo vệ các cấu trúc và các mô khác trong cơ thể. Trong cơ thể có bốn loại màng, đó là màng niêm mạc, màng thanh mạc, màng da (da) và màng bao khớp.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"52\" data-question-number=\"516\" id=\"div_block_quiz_test_52\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"52\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"516\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 53: Niêm mạc có đặc điểm sau đây, ngoại trừ</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhông lót các đường thông với bên ngoài
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgăn cản các tác nhân gây bệnh
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThực hiện chức năng hấp thu
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó chức năng bài tiết
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Màng niêm mạc (thường gọi là niêm mạc) lót các đường thông với bên ngoài, bao gồm đường tiêu hóa, đường hô hấp, đường sinh dục và đường tiết niệu. Màng niêm mạc tạo nên một hàng rào ngăn cản sự xâm nhập của các tác nhân gây bệnh. Bề mặt niêm mạc luôn được giữ ẩm, có thể được bôi trơn bằng dịch nhầy, chất tiết từ các tuyến. Niêm mạc tiếp xúc với các tuyến hoặc tiếp xúc với dịch như nước tiểu, tinh dịch.<br/><br/>Đôi khi niêm mạc chỉ là một lớp tế bào, thực hiện chức năng hấp thu hoặc bài tiết, ví dụ như biểu mô trụ đơn của ống tiêu hóa. Niêm mạc ở những vị trí khác nhau có những loại tế bào biểu mô khác nhau. Niêm mạc miệng có biểu mô vảy tầng, niêm mạc hầu hết đường tiết niệu là thượng bì chuyển tiếp (gồm nhiều lớp tế bào biểu mô, có chức năng chuyển tiếp trong các mức độ căng dãn).
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"53\" data-question-number=\"517\" id=\"div_block_quiz_test_53\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"53\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"517\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 54: Cầu mô liên kết lỏng lẻo của niêm mạc, nối biểu mô với các cấu trúc bên dưới, nâng đỡ các mạch máu và thần kinh được gọi là:</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp riêng
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLá riêng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ riêng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc riêng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Lớp mô liên kết lỏng lẻo của niêm mạc gọi là lá riêng (lamina propria). Lá riêng tạo thành một cầu nối biểu mô với các cấu trúc bên dưới, nâng đỡ các mạch máu và thần kinh cung cấp cho thượng bì.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"54\" data-question-number=\"518\" id=\"div_block_quiz_test_54\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"54\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"518\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 55: Bệnh nhân nam được chẩn đoán bướu phổi phải, trên phim chụp cắt lớp của ngực, hình ảnh khối bướu nằm ở</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBên trên
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBên dưới
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBên phải
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBên trái
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"55\" data-question-number=\"519\" id=\"div_block_quiz_test_55\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"55\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"519\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 56: Mạc nối lớn không có đặc điểm nào sau đây?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDự trữ năng lượng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCách nhiệt
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBảo vệ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó thể bị xoắn
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Mạc nối lớn (greater omentum) là một lớp mô mỡ lớn treo từ dạ dày và đại tràng ngang, bao phủ các cơ quan trong khoang bụng. Nó có những đặc điểm chính sau:<br/>Dự trữ năng lượng: Mạc nối lớn chứa nhiều mô mỡ, giúp dự trữ năng lượng cho cơ thể.<br/>Cách nhiệt: Lớp mỡ trong mạc nối lớn có tác dụng cách nhiệt, giúp duy trì nhiệt độ của các cơ quan nội tạng.<br/>Bảo vệ: Mạc nối lớn giúp bảo vệ các cơ quan trong ổ bụng, có vai trò như một “cái khiên” che chắn.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"56\" data-question-number=\"520\" id=\"div_block_quiz_test_56\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"56\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"520\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 57: Mặt ngoài của dạ dày được bao bọc bởi</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNiêm mạc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThanh mạc
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhúc mạc thành
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLá riêng
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"57\" data-question-number=\"521\" id=\"div_block_quiz_test_57\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"57\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"521\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 58: Bên trong đường hô hấp được lót bởi</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThanh mạc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrung bì
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNiêm mạc
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNội bì
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"58\" data-question-number=\"522\" id=\"div_block_quiz_test_58\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"58\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"522\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 59: Màng nào sau đây không là màng thanh mạc?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhúc mạc thành
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMàng ngoài tim
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMàng trong tim
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMàng phổi thành
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"59\" data-question-number=\"523\" id=\"div_block_quiz_test_59\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"59\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"523\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 60: Mạc phát triển từ</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrung mô
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgoại mô
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNội mô
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác khoang cơ thể
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"60\" data-question-number=\"524\" id=\"div_block_quiz_test_60\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"60\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"524\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 61: Các mô liên kết phát triển từ</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgoại bì
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrung bì
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNội bì
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgoại bì và trung bì
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"61\" data-question-number=\"525\" id=\"div_block_quiz_test_61\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"61\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"525\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 62: Điều nào sau đây không đúng với thượng bì?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó thần kinh chi phối
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó nhiều mạch máu
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLót ở hầu hết ống tiêu hóa
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó thể biệt hóa thành thượng bì tuyến
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Thượng bì (epithelium) là lớp tế bào ở bề mặt ngoài của da và nhiều màng lót của các cơ quan, nhưng bản thân thượng bì không có mạch máu. Thay vào đó, nó nhận dưỡng chất và oxy thông qua khuếch tán từ lớp mô liên kết bên dưới, chẳng hạn như lớp hạ bì trong da.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"62\" data-question-number=\"526\" id=\"div_block_quiz_test_62\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"62\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"526\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 63: Cấu trúc nào sau đây thuộc mô liên kết?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô lỏng lẻo
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô mỡ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô lưới
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCả ba loại trên
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"63\" data-question-number=\"527\" id=\"div_block_quiz_test_63\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"63\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"527\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 64: Màng thanh mạc nào sau đây không có lớp thượng bì</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
<p>Màng phổi</p>
</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
<p>Màng tim</p>
</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
<p>Phúc mạc</p>
</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
<p>Màng hoạt mạc</p>
</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"64\" data-question-number=\"528\" id=\"div_block_quiz_test_64\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"64\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"528\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 65: Mô bạch huyết liên kết niêm mạc (MALT) của ống tiêu hóa liên kết với</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp niêm mạc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLá riêng của niêm mạc
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp dưới niêm mạc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tLớp thanh mạc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Mô bạch huyết liên kết niêm mạc (MALT - Mucosa-Associated Lymphoid Tissue) nằm trong lá riêng của niêm mạc. Đây là một phần của hệ thống miễn dịch, giúp bảo vệ cơ thể khỏi các tác nhân gây bệnh xâm nhập qua đường tiêu hóa.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"65\" data-question-number=\"529\" id=\"div_block_quiz_test_65\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"65\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"529\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 66: Lớp mô tìm thấy ở bề mặt một cơ quan là</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBiểu mô
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô liên kết
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô thần kinh
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"66\" data-question-number=\"530\" id=\"div_block_quiz_test_66\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"66\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"530\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 67: Mô làm dạ dày co thắt để tiêu hóa thức ăn là</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô biểu mô
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô liên kết
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô cơ
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô thần kinh
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"67\" data-question-number=\"531\" id=\"div_block_quiz_test_67\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"67\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"531\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 68: Mô có chức năng nâng đỡ hoặc vận chuyển trong cơ thể là</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô biểu mô
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô liên kết
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô thần kinh
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"68\" data-question-number=\"532\" id=\"div_block_quiz_test_68\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"68\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"532\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 69: Hai hệ cơ quan điều tiết chức năng của cơ thể bằng xung động thần kinh và kích thích tố (hormone) là:</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ xương và hệ cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ tiêu hóa và hệ tiết niệu
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ thần kinh và hệ nội tiết
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ tuần hoàn và hệ tiết niệu
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"69\" data-question-number=\"533\" id=\"div_block_quiz_test_69\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"69\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"533\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 70: Hai hệ cơ quan bảo vệ cơ thể chống tác nhân gây bệnh là</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDa và hệ bạch huyết
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ xương và hệ tuần hoàn
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ tiêu hóa và hệ tiết niệu
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHệ cơ và hệ nội tiết
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"70\" data-question-number=\"534\" id=\"div_block_quiz_test_70\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"70\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"534\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 71: Cấu trúc nào sau đây không phải là tổ chức cơ quan?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐộng mạch
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGan
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMáu
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThận
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"71\" data-question-number=\"535\" id=\"div_block_quiz_test_71\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"71\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"535\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 72: Tuyến nào sau đây là tuyến ngoại tiết?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTuyến nước bọt
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTuyến giáp
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTuyến yên
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTuyến thượng thận
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"72\" data-question-number=\"536\" id=\"div_block_quiz_test_72\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"72\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"536\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 73: Loại biểu mô bề mặt có thể thay đổi hình dạng từ tròn đến dẹt là</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBiểu mô vuông
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBiểu mô trụ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBiểu mô lát tầng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBiểu mô chuyển tiếp
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"73\" data-question-number=\"537\" id=\"div_block_quiz_test_73\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"73\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"537\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 74: Loại cơ vận động tự ý là</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ tim
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ trơn
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ nội tạng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ vân
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"74\" data-question-number=\"538\" id=\"div_block_quiz_test_74\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"74\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"538\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 75: Màng thanh mạc bao bọc xoang ngực là</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMàng phổi tạng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhúc mạc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMàng phổi thành
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMạc treo
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"75\" data-question-number=\"539\" id=\"div_block_quiz_test_75\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"75\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"539\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 76: Lớp mô vững chắc tạo nên gân và dây chằng là</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô cơ vân
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô liên kết xơ
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô xương
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô liên kết chun
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"76\" data-question-number=\"540\" id=\"div_block_quiz_test_76\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"76\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"540\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 77: Cơ tạo ra nhu động ruột là</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ bám xương
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ vận động tự ý
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ vân
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCơ trơn
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"77\" data-question-number=\"541\" id=\"div_block_quiz_test_77\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"77\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"541\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 78: Câu nào nào sau sai khi nói về tuyến?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTuyến nội tiết không có ống tuyến
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChất tiết của tuyến nội tiết là kích thích tố (hormone)
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKích thích tố của tuyến nội tiết đi vào mao mạch
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTuyến giáp là một tuyến ngoại tiết
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"78\" data-question-number=\"542\" id=\"div_block_quiz_test_78\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"78\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"542\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 79: Giải phẫu học là môn học nghiên cứu về các vấn đề sau, ngoại trừ:</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
<p>Cấu tạo của cơ thể</p>
</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
<p>Liên quan giữa các cơ quan trong cơ thể</p>
</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
<p>Liên quan giữa cơ thể với môi trường</p>
</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
<p>Sự biến đổi của cơ thể khi bị bệnh</p>
</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"79\" data-question-number=\"543\" id=\"div_block_quiz_test_79\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"79\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"543\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 80: Ngày nay, phương tiện tốt nhất để học Giải phẫu là:</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXác
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhần mềm vi tính
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhim video
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMô hình
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"80\" data-question-number=\"544\" id=\"div_block_quiz_test_80\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"80\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"544\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 81: Mặt phẳng đứng dọc giữa</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSong song với mặt phẳng trán
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai phần trước và sau
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai phần phải và trái
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai nửa phải và trái tương đương
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>C không đúng, chia cơ thể thành hai phần phải và trái chỉ là mặt phẳng đứng dọc
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"81\" data-question-number=\"545\" id=\"div_block_quiz_test_81\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"81\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"545\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 82: Trong giải phẫu, để xác định vị trí '‘trong - ngoài” ta căn cứ vào</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng ngang
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc giữa
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"82\" data-question-number=\"546\" id=\"div_block_quiz_test_82\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"82\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"546\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 83: Mặt phẳng đứng ngang là mặt phẳng</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai phần trước và sau
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai phần trên và dưới
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSong song với mặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSong song với mặt phẳng ngang
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"83\" data-question-number=\"547\" id=\"div_block_quiz_test_83\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"83\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"547\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 84: Đặc điểm nào sau đây không đúng với mặt phẳng ngang?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tVuông góc với mặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSong song với mặt đất
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSong song với mặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai phần trên và dưới
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Mặt phẳng ngang vuông góc với mặt phẳng đứng ngang
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"84\" data-question-number=\"548\" id=\"div_block_quiz_test_84\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"84\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"548\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 85: Đặc điểm nào sau đây không đúng với mặt phẳng đứng dọc giữa?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐi qua đường giữa cơ thể
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tThẳng góc với mặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChia cơ thể thành hai nửa phải và trái
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCó nhiều mặt phẳng đứng dọc giữa song song nhau
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Có nhiều mặt phẳng đứng dọc nhưng chỉ có một mặt phẳng đứng dọc giữa duy nhất
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"85\" data-question-number=\"549\" id=\"div_block_quiz_test_85\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"85\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"549\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 86: Động tác nào sau đây đưa một chi ra xa đường giữa cơ thể?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tSắp
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tNgửa
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDạng
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tKhép
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"86\" data-question-number=\"550\" id=\"div_block_quiz_test_86\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"86\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"550\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 87: Người đưa ra quan điểm học Giải phẫu cần phải mổ xác người là ai?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHippocrates
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tAndreas Vesalius
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHenry Gray
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tFrank Netter
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"87\" data-question-number=\"551\" id=\"div_block_quiz_test_87\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"87\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"551\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 88: Trong một bài Giải phẫu, người ta mô tả các lớp cơ từ nông vào sâu và mô tả mạch máu, thần kinh đi trong các lớp cơ này. Đây là cách mô tả của?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGiải phẫu học hệ thống
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGiải phẫu học định khu
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGiải phẫu học cắt ngang
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tGiải phẫu học lâm sàng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Giải phẫu định khu mô tả tất cả các cấu trúc và liên quan giữa các cấu trúc tại một vùng trên cơ thể
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"88\" data-question-number=\"552\" id=\"div_block_quiz_test_88\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"88\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"552\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 89: Tên gọi “hàm trên, hàm dưới” trong giải phẫu là dựa vào?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng ngang
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc giữa
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"89\" data-question-number=\"553\" id=\"div_block_quiz_test_89\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"89\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"553\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 90: Mặt phẳng trán là cách gọi khác của mặt phẳng nào?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng ngang
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc giữa
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"90\" data-question-number=\"554\" id=\"div_block_quiz_test_90\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"90\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"554\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 91: Khi mô tả vị trí của hai xương cẳng tay, người ta nói rằng xương trụ ở trong xương quay. Điều này dựa vào mặt phẳng nào?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng ngang
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc giữa
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"91\" data-question-number=\"555\" id=\"div_block_quiz_test_91\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"91\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"555\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 92: Trên một hình về giải phẫu cho thấy tim ở giữa, hai bên là phổi phải và phổi trái. Vậy hình vẽ này dựa trên mặt cắt nào sau đây?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt cắt ngang hoặc mặt cắt đứng dọc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt cắt ngang hoặc mặt cắt đứng dọc giữa
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt cắt ngang hoặc mặt cắt đứng ngang
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt cắt đứng ngang hoặc mặt cắt đứng dọc giữa
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Trên mặt cắt ngang hoặc mặt cắt đứng ngang đều cho thấy liên quan trong/ngoài giữa các cấu trúc
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"92\" data-question-number=\"556\" id=\"div_block_quiz_test_92\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"92\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"556\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 93: Mặt gan tay còn được gọi là mặt trước của bàn tay. Người ta gọi như vậy là dựa vào mặt phẳng nào?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng ngang
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng ngang
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tMặt phẳng đứng dọc giữa
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"93\" data-question-number=\"557\" id=\"div_block_quiz_test_93\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"93\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"557\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 94: Trong các mức độ tổ chức của cơ thể, cá thể là mức độ tổ chức cao nhất. Điểm đặc trưng của cá thể là gì?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTự trao đổi chất
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTự hô hấp được
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHoạt động độc lập với cá thể khác
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐược hình thành từ nhiều hệ cơ quan
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"94\" data-question-number=\"558\" id=\"div_block_quiz_test_94\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"94\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"558\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 95: Đơn vị sống nhỏ nhất của cơ thể là gì?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCá thể
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTế bào
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tPhân tử
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBào quan
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"95\" data-question-number=\"559\" id=\"div_block_quiz_test_95\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"95\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"559\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 96: Tên gọi “cơ gấp ngón cái dài” được đặt dựa vào</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng của cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình dạng của cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng và vị trí của cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng và hình dạng của cơ
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"96\" data-question-number=\"560\" id=\"div_block_quiz_test_96\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"96\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"560\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 97: Tên gọi “cơ răng sau trên” là dựa vào?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng của cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình dạng của cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tHình dạng và vị trí của cơ
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tChức năng và vị trí của cơ
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"97\" data-question-number=\"561\" id=\"div_block_quiz_test_97\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"97\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"561\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 98: Trên thiết đồ cắt ngang, ta có thể xác định mối liên quan nào sau đây giữa hai cấu trúc?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrước - sau và trong - ngoài
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrên - dưới và trước - sau
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrên - dưới
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrong - ngoài
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"98\" data-question-number=\"562\" id=\"div_block_quiz_test_98\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"98\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"562\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 99: Trên thiết đồ cắt đứng ngang, ta có thể xác định mối liên quan nào sau đây giữa hai cấu trúc?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrước - sau và trong - ngoài
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrên - dưới và trong - ngoài
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrên - dưới
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTrong - ngoài
\t\t\t\t\t\t\t</div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"99\" data-question-number=\"563\" id=\"div_block_quiz_test_99\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"99\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"563\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 100: Chức năng nào sau đây không phải là chức năng của xương?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tBảo vệ
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tDự trữ khoáng chất
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tĐiều hòa huyết áp
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tTạo máu
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Bộ xương có bốn chức năng chính:<br/><br/>Nâng đỡ: Bộ xương tạo nên một khung cứng để nâng đỡ và tạo chỗ bám cho các cấu trúc mềm của cơ thể; các xương chi dưới nâng đỡ thân mình, lồng ngực nâng đỡ thành ngực.<br/><br/>Bảo vệ: Các xương đầu-mặt tạo thành hộp sọ che chở cho não; lồng ngực bảo vệ tim, phổi; khung chậu chứa đựng bàng quang, tử cung...<br/><br/>Vận động: Các cơ bám vào xương nên khi co cơ sẽ tạo cử động quanh các khớp.<br/><br/>Tạo máu và trao đổi các chất: Tủy xương tạo ra hồng cầu, bạch cầu hạt và tiểu cầu. Đồng thời xương cũng là nơi dự trữ và trao đổi mỡ, can-xi, phốt-pho...
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"100\" data-question-number=\"564\" id=\"div_block_quiz_test_100\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"100\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"564\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 101: Xương nào sau đây thuộc nhóm xương phụ?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương vai
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương ức
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương sườn
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương móng
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Các xương trục bao gồm: các xương đầu-mặt, cột sống, các xương sườn và xương ức.
\t\t\t\t\t\t\t<br/>Các xương phụ gồm các xương chi trên
\t\t\t\t\t\t\t<br/>và các xương chi dưới.
\t\t\t\t\t\t</p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"101\" data-question-number=\"565\" id=\"div_block_quiz_test_101\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"101\" style=\"background:#fff;\">
<div class=\"w3-large\">
<button class=\"quiz-button\" data-question=\"565\">Chọn câu này</button><span class=\"quiz-title\">
<strong>Câu 102: Về hình dạng, xương nào sau đây thuộc nhóm xương dẹt?</strong>
</span><br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tCác xương ở cổ tay
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương sườn
\t\t\t\t\t\t\t</div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương bàn chân
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
\t\t\t\t\t\t\t\tXương ngón chân
\t\t\t\t\t\t\t</div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý:
\t\t\t\t\t\t\t</strong>Theo hình thể: Có các loại sau:<br/>
\t\t\t\t\t\t\tXương dài: xương cánh tay, xương đùi...<br/>
\t\t\t\t\t\t\tXương ngắn: các xương cổ tay, các xương cổ chân...<br/>
\t\t\t\t\t\t\tXương dẹt: các xương ở vòm sọ, xương ức...<br/>
\t\t\t\t\t\t\tXương bất định hình: xương thái dương, xương hàm trên...
\t\t\t\t\t\t\t<br/>Xương vừng: xương bánh chè...
\t\t\t\t\t\t</p>
</div>
</div>
</div>
</div>
</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "quizz/contents_2/daicuong.html";
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
        return new Source("", "quizz/contents_2/daicuong.html", "D:\\Projects\\minic2\\src\\app\\Views\\quizz\\contents_2\\daicuong.html");
    }
}
