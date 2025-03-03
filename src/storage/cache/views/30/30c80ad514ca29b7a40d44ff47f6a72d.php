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

/* quizz/contents_2/bung.html */
class __TwigTemplate_002faaa8aafb04bd0b77d5d79499d0ff extends Template
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
        yield "<div class=\"container my-4\" style=\"max-width:720px;\">
<div class=\"main-test detail-quiz-course-result\" style=\"overflow:hidden;\">
<div class=\"quiz_name text-center\" style=\"margin: 0px;margin-bottom: 20px;\">
<h3> Giải Phẫu Bụng</h3>
</div>
<div class=\"col-md-12 col-sm-12\">
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"0\" data-question-number=\"1\" id=\"div_block_quiz_test_0\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"0\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"1\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 1: Nói về các dây chằng của tử cung, câu nào sau
                                đây SAI?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng rộng là một nếp gồm hai lá phúc mạc.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đáy dây chằng rộng có động mạch tử cung bắt chéo sau niệu quản.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng tròn bám vào gò mu và môi lớn.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng tử cung bám vào mặt trước xương cùng.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/ffa3d006-65ac-4981-807a-09b30889cf1c-3.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"1\" data-question-number=\"2\" id=\"div_block_quiz_test_1\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"1\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"2\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 2: Nói về giới hạn hố buồng trứng, điều nào sau
                                đây SAI?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ở trước dưới là dây chằng rộng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ở trên là động mạch chậu ngoài.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ở sau là động mạch chậu trong.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ở ngoài là niệu quản.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/5cc2f300-5698-44e7-a72a-9ed6d34af7f7.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p><strong>Hố buồng trứng là một hố lõm của phúc mạc được giới hạn:</strong></p>
<ul>
<li>Phía trên là động mạch chậu ngoài.</li>
<li>Phía trước dưới là dây chằng rộng.</li>
<li>Phía sau là động mạch chậu trong và niệu quản.</li>
<li>Đây hố có động mạch rốn, động mạch và thần kinh bịt.</li>
</ul>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"2\" data-question-number=\"3\" id=\"div_block_quiz_test_2\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"2\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"3\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 3: Đầu vòi của buồng trứng là nơi bám
                                của?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng treo buồng trứng.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng riêng buồng trứng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng rộng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mạc treo buồng trứng.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><strong>Buồng trứng được treo lơ lửng trong ổ phúc mạc một hệ thống dây chằng gồm:</strong>
</p>
<ul>
<li><strong>Mạc treo buồng trứng</strong> là một nếp phúc mạc mà một bờ liên tục với phúc
                                mạc của là sau dây chằng rộng và một bờ bám dọc bờ mạc treo buồng trứng.</li>
<li><strong>Dây chằng treo buồng trứng</strong> bám vào đầu vồi buồng trứng, chia giữa 2 là
                                dây chằng rộng đến thành bên chậu hông, tạo chủ yếu bởi thần kinh và các mạch máu buồng
                                trứng. Dây chằng này có thể lan lên tận vùng thật lòng và đôi phúc mạc liên thành mạc
                                nếp.</li>
<li><strong>Dây chằng riêng buồng trứng</strong> là một dây mối liên kết có một sọi cơ tròn,
                                nằm giữa 2 là dây chằng rộng, bám từ đầu tử cung đến buồng trứng đến gốc bên của tử
                                cung.</li>
</ul>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"3\" data-question-number=\"4\" id=\"div_block_quiz_test_3\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"3\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"4\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 4: Đầu tử cung của buồng trứng là nơi bám
                                của?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng treo buồng trứng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng riêng buồng trứng.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng rộng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mạc treo buồng trứng.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><strong>Buồng trứng được treo lơ lửng trong ổ phúc mạc một hệ thống dây chằng gồm:</strong>
</p>
<ul>
<li><strong>Mạc treo buồng trứng</strong> là một nếp phúc mạc mà một bờ liên tục với phúc
                                mạc của là sau dây chằng rộng và một bờ bám dọc bờ mạc treo buồng trứng.</li>
<li><strong>Dây chằng treo buồng trứng</strong> bám vào đầu vồi buồng trứng, chia giữa 2 là
                                dây chằng rộng đến thành bên chậu hông, tạo chủ yếu bởi thần kinh và các mạch máu buồng
                                trứng. Dây chằng này có thể lan lên tận vùng thật lòng và đôi phúc mạc liên thành mạc
                                nếp.</li>
<li><strong>Dây chằng riêng buồng trứng</strong> là một dây mối liên kết có một sọi cơ tròn,
                                nằm giữa 2 là dây chằng rộng, bám từ đầu tử cung đến buồng trứng đến gốc bên của tử
                                cung.</li>
</ul>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"4\" data-question-number=\"5\" id=\"div_block_quiz_test_4\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"4\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"5\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 5: Mạc treo buồng trứng treo buồng trứng
                                vào?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Thành bên chậu hông.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Hoành chậu.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Bờ bên thân tử cung.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng rộng.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><strong>Buồng trứng được treo lơ lửng trong ổ phúc mạc một hệ thống dây chằng gồm:</strong>
</p>
<ul>
<li><strong>Mạc treo buồng trứng</strong> là một nếp phúc mạc mà một bờ liên tục với phúc
                                mạc của là sau dây chằng rộng và một bờ bám dọc bờ mạc treo buồng trứng.</li>
<li><strong>Dây chằng treo buồng trứng</strong> bám vào đầu vồi buồng trứng, chia giữa 2 là
                                dây chằng rộng đến thành bên chậu hông, tạo chủ yếu bởi thần kinh và các mạch máu buồng
                                trứng. Dây chằng này có thể lan lên tận vùng thật lòng và đôi phúc mạc liên thành mạc
                                nếp.</li>
<li><strong>Dây chằng riêng buồng trứng</strong> là một dây mối liên kết có một sọi cơ tròn,
                                nằm giữa 2 là dây chằng rộng, bám từ đầu tử cung đến buồng trứng đến gốc bên của tử
                                cung.</li>
</ul>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"5\" data-question-number=\"6\" id=\"div_block_quiz_test_5\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"5\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"6\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 6: Trong các dây chằng tử cung, dây chằng nào đi
                                vào ống bẹn?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng rộng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng tròn.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng tử cung - cùng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng ngang tử cung.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/7005e9c3-c742-47a0-b299-c02a43c9cf77-2.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"6\" data-question-number=\"7\" id=\"div_block_quiz_test_6\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"6\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"7\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 7: Rốn buồng trứng nằm ở?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Mặt ngoài buồng trứng.
                            </div>
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
                                Mặt trong buồng trứng.
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
                                Bờ tự do buồng trứng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Đầu vòi của buồng trứng.
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"7\" data-question-number=\"8\" id=\"div_block_quiz_test_7\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"7\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"8\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 8: Động mạch buồng trứng?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Là nhánh của động mạch chậu trong.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đi phía trước phúc mạc.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Có đoạn bắt chéo phía sau niệu quản.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đi trong dây chằng riêng buồng trứng.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p>Động mạch buồng trứng là nhánh của động mạch chậu trong. Động mạch này cung cấp máu cho buồng
                            trứng và đi trong dây chằng riêng buồng trứng.</p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"8\" data-question-number=\"9\" id=\"div_block_quiz_test_8\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"8\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"9\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 9: Vòi tử cung?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đi từ buồng trứng đến đáy tử cung.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đoạn eo vòi là đoạn hẹp nhất.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Nằm giữa hai lá của dây chằng rộng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Gồm ba đoạn: phễu vòi, bóng vòi, và eo vòi.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p>Eo vòi là đoạn hẹp nhất, tiếp theo vòi tới dinh vào góc bên tử cung. Trong thai vỡ tử cung,
                            trứng thường tác động và làm tổ ở đoạn này.</p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"9\" data-question-number=\"10\" id=\"div_block_quiz_test_9\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"9\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"10\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 10: Vòi tử cung được cấp máu
                                bởi?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch buồng trứng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tử cung.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch buồng trứng và động mạch tử cung.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vòi tử cung, nhánh của động mạch chậu trong.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><strong>Mạch và thần kinh</strong></p>
<p>Động mạch và tĩnh mạch là các nhánh vội của mạch tử cung và mạch buồng trứng nối nhau dọc bờ
                            dưới vòi.<br/>
                            Bạch mạch và thần kinh giống như của buồng trứng.</p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"10\" data-question-number=\"11\" id=\"div_block_quiz_test_10\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"10\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"11\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 11: Tử cung?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Nằm trong chậu hông, giữa bàng quang và trực tràng.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cao khoảng 16 cm ở người trưởng thành không có thai.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Thường ở tư thế gấp ra trước 90 độ.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Thường ở tư thế ngả ra trước 120 độ.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 670
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/48515824-fedc-4ae2-8c12-e15de221fe60.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"11\" data-question-number=\"12\" id=\"div_block_quiz_test_11\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"11\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"12\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 12: Dây chằng nào sau đây bám vào mặt sau cổ tử
                                cung?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng rộng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng tử cung-cùng.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng ngang cổ tử cung.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dây chằng riêng buồng trứng.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 727
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/7005e9c3-c742-47a0-b299-c02a43c9cf77-3.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"12\" data-question-number=\"13\" id=\"div_block_quiz_test_12\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"12\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"13\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 13: Tầng cơ rối tử cung có các đặc điểm sau, ngoại
                                trừ?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Nằm giữa tầng cơ dọc ở ngoài và tầng cơ vòng ở trong.
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
                                Dày hơn so với các tầng cơ còn lại.
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
                                Hiện diện ở thân tử cung và cổ tử cung.
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
                                Còn gọi là tầng mạch vì có rất nhiều mạch máu.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"13\" data-question-number=\"14\" id=\"div_block_quiz_test_13\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"13\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"14\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 14: Động mạch tử cung là nhánh
                                của?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch chậu trong.
                            </div>
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
                                Động mạch chậu ngoài.
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
                                Động mạch thẹn trong.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch bàng quang trên.
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"14\" data-question-number=\"15\" id=\"div_block_quiz_test_14\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"14\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"15\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 15: Khi cần chọc dò túi cùng trực tràng-tử cung
                                qua ngã âm đạo, người ta thường dò qua?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Túi bịt trước của vòm âm đạo.
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
                                Túi bịt bên phải của vòm âm đạo.
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
                                Túi bịt bên trái của vòm âm đạo.
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
                                Túi bịt sau của vòm âm đạo.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"15\" data-question-number=\"16\" id=\"div_block_quiz_test_15\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"15\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"16\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 16: Tiền đình âm đạo được giới hạn phía trước
                                bởi?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Âm vật.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Lỗ niệu đạo.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Môi lớn.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Môi bé.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 946
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/793cf474-5b47-49ea-aa2f-e3ee71d68f79-1.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"16\" data-question-number=\"17\" id=\"div_block_quiz_test_16\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"16\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"17\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 17: Tiền đình âm đạo được giới hạn phía sau
                                bởi?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Âm vật.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Lỗ niệu đạo.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Môi lớn.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Môi âm hộ.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 1003
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/793cf474-5b47-49ea-aa2f-e3ee71d68f79-2.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"17\" data-question-number=\"18\" id=\"div_block_quiz_test_17\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"17\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"18\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 18: Nói về tuyến vú ở nữ, câu nào sau đây
                                SAI?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Có nguồn gốc như tuyến mồ hôi.
                            </div>
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
                                Có nguồn gốc như tuyến bã.
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
                                Được cấp máu bởi động mạch ngực trong và động mạch ngực ngoài.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Xoang sữa là nơi phình ra của ống tiết sữa.
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"18\" data-question-number=\"19\" id=\"div_block_quiz_test_18\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"18\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"19\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 19: Thành phần nào sau đây có vai trò cầm máu và
                                co hồi tử cung?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Nội mạc.
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
                                Cơ vòng.
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
                                Cơ dọc.
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
                                Cơ rối.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"19\" data-question-number=\"20\" id=\"div_block_quiz_test_19\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"19\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"20\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 20: Nói về động mạch tử cung, điều nào sau đây
                                đúng?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Bắt chéo phía trước niệu quản cách thân tử cung 1,5 cm.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Bắt chéo phía sau niệu quản, cách thân tử cung 1,5 cm.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Bắt chéo phía trước niệu quản, cách cổ tử cung 1,5 cm.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Bắt chéo phía trước niệu quản, cách đáy tử cung 1,5 cm.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><strong>Đoạn dây chằng rộng</strong>: Động mạch chảy ngang từ thành bên chậu hông đi trong
                            dây chằng rộng tới bờ bên tử cung. Động mạch bắt chéo phía trước niệu quản cách cổ tử cung
                            khoảng 1,5 cm (cần chú ý để không kẹp vào niệu quản khi tháo động mạch tử cung).</p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"20\" data-question-number=\"21\" id=\"div_block_quiz_test_20\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"20\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"21\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 21: Phần nào sau đây của tử cung giãn ra nhiều
                                nhất khi mang thai?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đáy tử cung.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cổ tử cung.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Thân tử cung.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Vòi tử cung.
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"21\" data-question-number=\"22\" id=\"div_block_quiz_test_21\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"21\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"22\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 22: Thành phần nào sau đây không nằm trong tinh
                                hoàn hoặc mào tinh hoàn?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ống sinh tinh xoắn.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ống sinh tinh thẳng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Lưới tinh.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ống phóng tinh.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 1277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/d14f0ec9-73b3-4bf2-aa01-67c1a6e8bd66-3.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"22\" data-question-number=\"23\" id=\"div_block_quiz_test_22\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"22\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"23\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 23: Động mạch tinh hoàn có đặc điểm, ngoại
                                trừ?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Xuất phát từ động mạch chủ bụng, dưới động mạch thận.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Chạy sau phúc mạc.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Chui qua lỗ bẹn sâu.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cho nhánh cung cấp máu cho cơ bìu.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><strong>Động mạch tinh hoàn</strong></p>
<p>Động mạch tinh hoàn xuất phát từ động mạch chủ bụng, ngang mức đốt sống thắt lưng 2-thắt lưng
                            3, đi xuống ở thành bung bên, sau phúc mạc. Khi đến lỗ bẹn sâu, động mạch chui vào thừng
                            tinh và cùng với thừng tinh qua ống bẹn đến bìu và khi đến đầu trên tinh hoàn thì chia làm
                            hai nhánh là nhánh mao tinh và nhánh tinh hoàn.</p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"23\" data-question-number=\"24\" id=\"div_block_quiz_test_23\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"23\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"24\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 24: Tinh dịch được sản xuất từ các cơ quan sau
                                đây, ngoại trừ?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Tuyến tiền liệt.
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
                                Túi tinh.
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
                                Tuyến hành niệu đạo.
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
                                Ống dẫn tinh.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"24\" data-question-number=\"25\" id=\"div_block_quiz_test_24\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"24\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"25\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 25: Thành phần nào sau đây không có trong thừng
                                tinh?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ống dẫn tinh.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tinh hoàn.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Thần kinh thẹn.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Di tích ống phúc tinh mạc.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 1449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/2347b52a-4238-410b-8e24-b110c5a7b830.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"25\" data-question-number=\"26\" id=\"div_block_quiz_test_25\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"25\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"26\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 26: Tuyến tiền liệt được cấp máu
                                bởi?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch bàng quang trên.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch bàng quang dưới.
                            </div>
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
                                Động mạch trực tràng trên.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch trực tràng dưới.
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"26\" data-question-number=\"27\" id=\"div_block_quiz_test_26\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"26\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"27\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 27: Thành phần nào sau đây có chức năng sản xuất
                                tinh trùng?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ống sinh tinh thẳng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ống sinh tinh xoắn.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Lưới tinh.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Túi tinh.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 1560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/d14f0ec9-73b3-4bf2-aa01-67c1a6e8bd66-4.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"27\" data-question-number=\"28\" id=\"div_block_quiz_test_27\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"27\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"28\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 28: Thành phần nào sau đây không đi trong thừng
                                tinh?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Đám rối tĩnh mạch tinh hoàn.
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
                                Ống dẫn tinh.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch thẹn trong.
                            </div>
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
                                Động mạch ống dẫn tinh.
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"28\" data-question-number=\"29\" id=\"div_block_quiz_test_28\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"28\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"29\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 29: Hiện tượng cương dương vật là
                                do?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Máu ứ đầy trong vật hang và vật xốp.
                            </div>
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
                                Dịch ứ đầy trong mô liên kết ở dương vật.
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
                                Máu ứ giữa lớp mạc nông và lớp mạc sâu dương vật.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Máu ứ ở các tĩnh mạch nông của dương vật.
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"29\" data-question-number=\"30\" id=\"div_block_quiz_test_29\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"29\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"30\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 30: Cơ nào sau đây không thuộc hoành chậu
                                hông?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ mu - trực tràng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ mũ - cụt.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ chậu - cụt.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ ngang sâu đáy chậu.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><strong>Hoành chậu được tạo thành bởi cơ nâng hạ môn, cơ cục.</strong> Hai cơ này cùng với
                            các cơ-bên đối diện tạo thành một tấm cơ vòng lót mặt trên thành dưới ổ bụng và cùng giới
                            hạn lỗ niệu-đục. Hoành chậu có chức năng nâng đỡ các tạng trong ổ bụng và chậu, làm tăng áp
                            ổ bụng, giúp phân kiểm soát tiểu tiện và đại tiện, ngoài ra, cơ phụ nó còn có tác dụng hướng
                            dẫn đầu thai nhi lúc sanh.</p>
<p><strong>Cơ nâng hạ môn thường được chia thành 3 phần: cơ mu cột (phần mu cột), cơ chậu cột
                                (phần chậu cột), cơ mù trực tràng (phần mù trực tràng).</strong></p>
<ul>
<li>
<p><strong>Cơ mu cột</strong>, bám nguyên ủy từ mặt sau thân xương mu và cung gan của cơ
                                    nâng hạ môn, các thớ cơ chạy ra sau và bám tận ở nhiều nơi: bám vào niệu đạo và âm
                                    đạo ở nữ tạo thành cơ mu âm đạo, bám vào tuyến tiến liệt ở nam tạo thành cơ nâng
                                    tuyến tiến liệt, cơ này còn bám vào trung tâm gân đáy chậu và vào dây chằng hậu
                                    môn-cột.</p>
</li>
<li>
<p><strong>Cơ chậu cột</strong> bám nguyên ủy từ gai ngồi và cung gan của cơ nâng hạ
                                    môn, bám tận vào xương cột và dây chằng hậu môn-cột.</p>
</li>
</ul>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"30\" data-question-number=\"31\" id=\"div_block_quiz_test_30\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"30\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"31\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 31: Thành phần nào sau đây không có trong khoang
                                đáy chậu nông ở nam?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Gốc của các tạng cương.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ ngang nông đáy chậu.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ thắt niệu đạo.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ ngồi hang.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 1801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/download-20.jpg"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"31\" data-question-number=\"32\" id=\"div_block_quiz_test_31\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"31\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"32\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 32: Khoang đáy chậu sâu là phần giới hạn
                                giữa?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mạc đáy chậu nông và lá mạc hoành niệu dục dưới.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mạc hoành niệu dục trên và mạc hoành niệu dục dưới.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mạc đáy chậu nông và mạc hoành niệu dục trên.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mạc đáy chậu nông và mạc đáy chậu sâu.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 1858
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/b838568a-2408-4191-b776-5a5ac44b68ef.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"32\" data-question-number=\"33\" id=\"div_block_quiz_test_32\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"32\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"33\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 33: Ranh giới giữa khoang đáy chậu nông và khoang
                                đáy chậu sâu là?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mạc đáy chậu nông.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mạc hoành niệu dục trên.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mạc hoành niệu dục dưới.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Hoành niệu dục.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 1915
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/b838568a-2408-4191-b776-5a5ac44b68ef-1.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"33\" data-question-number=\"34\" id=\"div_block_quiz_test_33\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"33\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"34\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 34: Trên thiết đồ đứng ngang, hố ngồi trực tràng
                                được giới hạn?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ở trên bởi hoành chậu.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ở dưới bởi hoành niệu dục.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ở ngoài bởi ụ ngồi.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ở trong bởi bóng trực tràng.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 1972
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/b838568a-2408-4191-b776-5a5ac44b68ef-2.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"34\" data-question-number=\"35\" id=\"div_block_quiz_test_34\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"34\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"35\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 35: Hoành chậu hông có các cơ
                                sau?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Cơ nâng hậu môn và cơ thắt ngoài hậu môn.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Cơ nâng hậu môn và cơ cụt.
                            </div>
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
                                Cơ nâng hậu môn và cơ bịt trong.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Cơ nâng hậu môn, cơ cụt, và cơ bịt trong.
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"35\" data-question-number=\"36\" id=\"div_block_quiz_test_35\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"35\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"36\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 36: Cơ nào sau đây không bám vào trung tâm gân đáy
                                chậu?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ ngồi hang.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ hành xốp.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ ngang sâu đáy chậu.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ nâng hậu môn.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 2083
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/296bf046-d9cf-403e-b27e-88949eaab058.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"36\" data-question-number=\"37\" id=\"div_block_quiz_test_36\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"36\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"37\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 37: Ở vùng niệu - dục, các cơ trong khoang đáy
                                chậu nông được vận động bởi?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Thần kinh đáy chậu nông.
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
                                Thần kinh đáy chậu sâu.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Nhánh đáy chậu của thần kinh thẹn.
                            </div>
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
                                Một nhánh của thần kinh ngồi.
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"37\" data-question-number=\"38\" id=\"div_block_quiz_test_37\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"37\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"38\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 38: Về đáy chậu, câu nào sau đây
                                SAI?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ranh giới giữa chậu trước và đáy chậu sau là đường ngang qua phía trước hai ụ ngồi.
                                
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Giới hạn trước là khớp mu.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đáy chậu sau giống nhau giữa nam và nữ.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Giới hạn sau là đỉnh xương cùng.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 2195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/08098b8e-a682-489f-acff-9baea4546255.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"38\" data-question-number=\"39\" id=\"div_block_quiz_test_38\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"38\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"39\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 39: Ở những người đẻ con so, để cho thai dễ sổ ra,
                                người ta chủ động cắt âm hộ ở các điểm 4 giờ hoặc 8 giờ, để?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Tránh rách về phía sau để tránh rách trung tâm gân đáy chậu và trực tràng.
                            </div>
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
                                Tránh rách niệu đạo.
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
                                Tránh rách hố ngồi trực tràng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Tránh rách cơ ngang đáy chậu nông.
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"39\" data-question-number=\"40\" id=\"div_block_quiz_test_39\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"39\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"40\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 40: Cơ nào sau đây không thuộc đáy chậu
                                trước?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Cơ thắt hậu môn ngoài.
                            </div>
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
                                Cơ ngang đáy chậu nông.
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
                                Cơ hành xốp.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Cơ ngang đáy chậu sâu.
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"40\" data-question-number=\"41\" id=\"div_block_quiz_test_40\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"40\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"41\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 41: Cơ nào sau đây thuộc khoang đáy chậu
                                sâu?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ hành xốp.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ thắt niệu đạo.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ ngồi hang.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ chậu cụt.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 2360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/5cfd4aa1-3ebc-4d62-8453-b6c3b1597f6f.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"41\" data-question-number=\"42\" id=\"div_block_quiz_test_41\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"41\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"42\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 42: Động mạch mạc treo tràng
                                trên?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Xuất phát từ động mạch thân tạng và đi ở bờ cong nhỏ dạ dày.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch kết tràng phải.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch vị phải.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch trực tràng bên.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 2417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/80eb05b1-752c-4eab-a299-50365dddf9b9.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"42\" data-question-number=\"43\" id=\"div_block_quiz_test_42\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"42\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"43\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 43: Động mạch vị trái?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Xuất phát từ động mạch thân tạng và đi ở bờ cong nhỏ dạ dày.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch kết tràng phải.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch vị phải.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch trực tràng trên.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 2473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489-1.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"43\" data-question-number=\"44\" id=\"div_block_quiz_test_43\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"43\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"44\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 44: Động mạch gan riêng?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Xuất phát từ động mạch thân tạng và đi ở bờ cong nhỏ dạ dày.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch kết tràng phải.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch vị phải.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch trực tràng trên.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 2529
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489-2.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"44\" data-question-number=\"45\" id=\"div_block_quiz_test_44\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"44\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"45\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 45: Động mạch mạc treo tràng
                                dưới?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Xuất phát từ động mạch thân tạng và đi ở bờ cong nhỏ dạ dày.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch kết tràng phải.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch vị phải.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch trực tràng trên.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 2586
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/d0ebb02f-5305-41d1-acd7-3c20ef619604.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"45\" data-question-number=\"46\" id=\"div_block_quiz_test_45\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"45\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"46\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 46: Động mạch cơ hoành?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch chủ bụng.
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
                                Động mạch thân tạng.
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
                                Động mạch lách.
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
                                Động mạch ngực trong.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"46\" data-question-number=\"47\" id=\"div_block_quiz_test_46\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"46\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"47\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 47: Động mạch hoành dưới?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch chủ bụng.
                            </div>
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
                                Động mạch thân tạng.
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
                                Động mạch lách.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch ngực trong.
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"47\" data-question-number=\"48\" id=\"div_block_quiz_test_47\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"47\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"48\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 48: Động mạch vị trái?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch chủ bụng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch thân tạng.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch lách.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch ngực trong.
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 2748
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"48\" data-question-number=\"49\" id=\"div_block_quiz_test_48\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"48\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"49\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 49: Động mạch vị mạc nối trái?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch chủ bụng.
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
                                Động mạch thân tạng.
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch lách.
                            </div>
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
                                Động mạch ngực trong.
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"49\" data-question-number=\"50\" id=\"div_block_quiz_test_49\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"49\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"50\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 50: Đại tràng?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Về vị trí trong ổ bụng, phần lớn đại tràng nằm ở tầng dưới mạc treo kết tràng ngang.
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
                                Đại tràng được chia thành hai nửa là đại tràng phải và đại tràng trái dựa vào mốc là đại
                                tràng góc gan.
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
                                Toàn bộ đại tràng cố định do dính vào thành bụng sau.
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
                                Đại tràng được cấp máu bởi động mạch mạc treo tràng trên và động mạch mạc treo tràng
                                dưới.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"50\" data-question-number=\"51\" id=\"div_block_quiz_test_50\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"50\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"51\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 51: Ruột thừa?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Ruột thừa được xem là tạng ngoài phúc mạc.
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
                                Ruột thừa được treo vào manh tràng bởi mạc treo ruột thừa.
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
                                Ở người Việt Nam, vị trí ruột thừa thường gặp nhất là sau manh tràng.
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
                                Ruột thừa được cấp máu bằng động mạch riêng xuất phát từ động mạch hồi - kết tràng.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"51\" data-question-number=\"52\" id=\"div_block_quiz_test_51\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"51\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"52\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 52: (I): Lách rất khó vỡ khi chấn thương, vì:
                                (II): Lách nằm sâu dưới vòm hoành trái.</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Nếu (I) đúng, (II) đúng, (I) và (II) có liên quan nhân quả.
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
                                Nếu (I) đúng, (II) đúng, (I) và (II) không có liên quan nhân quả.
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
                                Nếu (I) đúng, (II) sai.
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
                                Nếu (I) sai, (II) đúng.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"52\" data-question-number=\"53\" id=\"div_block_quiz_test_52\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"52\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"53\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 53: (I): Trong chấn thương bụng, nếu có tổn thương
                                tá tràng thì đoạn dễ bị tổn thương nhất là đoạn ngang (D3), vì: (II): D3 nằm ngay phía
                                sau bó mạch mạc treo tràng trên.</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Nếu (I) đúng, (II) đúng, (I) và (II) có liên quan nhân quả
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
                                Nếu (I) đúng, (II) đúng, (I) và (II) không có liên quan nhân quả.
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
                                Nếu (I) đúng, (II) sai.
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
                                Nếu (I) sai, (II) đúng.
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"53\" data-question-number=\"54\" id=\"div_block_quiz_test_53\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"53\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"54\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 54: động mạch nào sau đây không xuất phát từ động
                                mạch chủ bụng?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch hoành dưới
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
                                Động mạch mạc treo tràng trên
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
                                Động mạch mạc treo tràng dưới
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
                                Động mạch tử cung
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"54\" data-question-number=\"55\" id=\"div_block_quiz_test_54\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"54\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"55\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 55: Trong tư thế đứng, phần nào của dạ dày ở vị
                                trí cao nhất?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Tâm vị
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Hang môn vị
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đáy vị
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ống môn vị
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 3129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/e386119e-82d5-4d11-b8d4-4ee2ddbe5eec.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"55\" data-question-number=\"56\" id=\"div_block_quiz_test_55\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"55\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"56\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 56: Mặt sau dạ dày không liên quan
                                với?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Cơ hoành
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Thận trái
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Túi mạc nối
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Gan
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 3186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/8252302e-8609-4b11-aa00-3bdfb1384e8f.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"56\" data-question-number=\"57\" id=\"div_block_quiz_test_56\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"56\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"57\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 57: Động mạch vị phải tách ra
                                từ?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch thân tạng
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
                                Động mạch lách
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
                                Động mạch gan chung
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
                                Động mạch gan riêng
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"57\" data-question-number=\"58\" id=\"div_block_quiz_test_57\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"57\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"58\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 58: Chọn câu đúng về dạ dày.</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Đáy vị là phần thấp nhất của dạ dày
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
                                Lỗ tâm vị có van ngăn dịch vị từ dạ dày lên thực quản
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
                                Lỗ môn vị có van để thức ăn chỉ đi từ dạ dày qua tá tràng
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
                                Lớp cơ vòng của dạ dày dày nhất ở môn vị
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"58\" data-question-number=\"59\" id=\"div_block_quiz_test_58\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"58\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"59\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 59: Mô tả mạch máu cung cấp cho dạ dày, câu nào
                                sau đây sai?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị phải xuất phát từ động mạch gan riêng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị trái xuất phát từ động mạch thân tạng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị mạc nối phải xuất phát từ động mạch lách
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị ngắn xuất phát từ động mạch lách
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 3350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489-3.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"59\" data-question-number=\"60\" id=\"div_block_quiz_test_59\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"59\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"60\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 60: Đáy vị của dạ dày là?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Phần thấp nhất của dạ dày
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Phần nối thân vị với hang vị
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Phần nối thân vị với ống môn vị
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Phía trên mặt phẳng ngang qua khuyết tâm vị
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 3406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/e386119e-82d5-4d11-b8d4-4ee2ddbe5eec-1.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"60\" data-question-number=\"61\" id=\"div_block_quiz_test_60\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"60\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"61\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 61: Câu nào sau đây đúng khi mô tả về dạ
                                dày?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Dạ dày là một tạng rỗng nằm ở tầng trên và tầng dưới mạc treo kết tràng ngang
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Khuyết góc nằm ở giữa phần đứng và phần ngang của bờ cong nhỏ
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Tâm vị nằm về bên phải cột sống
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Khuyết tâm vị nằm bên phải tâm vị
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 3463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/e386119e-82d5-4d11-b8d4-4ee2ddbe5eec-2.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"61\" data-question-number=\"62\" id=\"div_block_quiz_test_61\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"61\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"62\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 62: Đối chiếu lên cột sống, tâm vị và môn vị lần
                                lượt tương ứng với mức của đốt sống nào?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ngực 10 và thắt lưng 1
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đốt sống ngực 11 và thắt lưng 1
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đốt sống ngực 11 và thắt lưng 2
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đốt sống ngực 12 và thắt lưng 2
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p>Vùng tâm vị</p>
<p>Tâm vị (<em>cardia</em>) là một vùng rộng khoảng 3 cm liên tiếp với thực quản và thông với
                            thực quản qua lỗ tâm vị (<em>cardiac orifice</em>). Lỗ tâm vị không có van thực sự nên đôi
                            khi dịch và thức ăn từ dạ dày có thể đi ngược lên thực quản. Lỗ tâm vị nằm ngay sau sụn sườn
                            7 bên trái, trước thân đốt sống ngực 10 và lệch về bên trái so với đường giữa khoảng 2,5 cm.
                        </p>
<p>Phần môn vị</p>
<p>Phần môn vị (<em>pyloric part</em>) tiếp theo thân vị, hẹp dần từ trên xuống, chia làm hai
                            phần là hang môn vị (<em>pyloric antrum</em>) và phần còn lại hẹp hơn gọi là ống môn vị
                            (<em>pyloric canal</em>). Ống môn vị đổ vào tá tràng qua lỗ môn vị (<em>pyloric
                                orifice</em>). Lỗ môn vị nằm ở vị trí tương ứng với đốt sống thắt lưng 1 và ở bên phải
                            đường giữa khoảng 1,25 cm. Cơ vòng ở môn vị dày lên tạo thành cơ thắt môn vị (<em>pyloric
                                sphincter</em>), có chức năng điều hòa sự đưa thức ăn từ dạ dày qua lỗ môn vị.</p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"62\" data-question-number=\"63\" id=\"div_block_quiz_test_62\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"62\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"63\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 63: Tĩnh mạch vị phải và tĩnh mạch vị trái đổ
                                về?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch cửa
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch lách
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch mạc treo tràng trên
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch gan chung
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 3589
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/3ecbff96-76a8-4139-9e65-55cabe64d5f8.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"63\" data-question-number=\"64\" id=\"div_block_quiz_test_63\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"63\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"64\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 64: Chọn câu đúng khi nói về môn
                                vị.</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Môn vị nằm bên trái đốt sống thắt lưng 1
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
                                Ta không thể sờ bằng tay để xác định môn vị
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Bên ngoài được đánh dấu bằng tĩnh mạch của môn vị
                            </div>
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
                                Lỗ môn vị có van ngăn dịch và thức ăn đi từ tá tràng về tụy
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"64\" data-question-number=\"65\" id=\"div_block_quiz_test_64\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"64\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"65\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 65: Dọc theo bờ cong lớn của dạ dày có hai động
                                mạch là?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị trái và động mạch vị phải
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị trái và động mạch vị tá tràng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị mạc nối trái và động mạch vị mạc nối phải
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị phải và động mạch vị mạc nối phải
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 3700
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489-4.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"65\" data-question-number=\"66\" id=\"div_block_quiz_test_65\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"65\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"66\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 66: Hai động mạch đi dọc theo bờ cong nhỏ dạ dày
                                là?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị phải, động mạch vị tá tràng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị trái, động mạch vị phải
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị trái, động mạch vị mạc nối trái
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị phải, động mạch vị mạc nối phải
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 3757
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489-5.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"66\" data-question-number=\"67\" id=\"div_block_quiz_test_66\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"66\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"67\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 67: Động mạch vị mạc nối trái xuất phát
                                từ?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch thân tạng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch gan chung
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch lách
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị trái
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 3814
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489-6.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"67\" data-question-number=\"68\" id=\"div_block_quiz_test_67\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"67\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"68\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 68: Chuỗi hạch bạch huyết dọc theo bờ cong nhỏ của
                                dạ dày nhận bạch huyết từ?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Nửa trái thân vị và 1/3 dưới phần ngang bờ cong lớn
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đáy vị và nửa trên thân vị
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đáy vị và nửa trái thân vị
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Nửa phải phần đứng và nửa phần ngang dạ dày
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 3871
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/74521097-9363-48d9-a173-33c2c6e2d202.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"68\" data-question-number=\"69\" id=\"div_block_quiz_test_68\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"68\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"69\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 69: Khi đến dạ dày, thần kinh lang thang trước cho
                                hai nhánh nào?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Nhánh vị trước và nhánh gan
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Nhánh vị sau và nhánh gan
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Nhánh vị trước và nhánh tạng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Nhánh vị trước và nhánh vị sau
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 3928
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/74521097-9363-48d9-a173-33c2c6e2d202-1.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"69\" data-question-number=\"70\" id=\"div_block_quiz_test_69\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"69\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"70\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 70: Khi đến dạ dày, thân thần kinh lang thang sau
                                cho hai nhánh nào?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Nhánh vị trước và nhánh gan
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Nhánh vị sau và nhánh gan
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Nhánh vị trước và nhánh tạng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Nhánh vị sau và nhánh tạng
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 3985
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/74521097-9363-48d9-a173-33c2c6e2d202-2.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"70\" data-question-number=\"71\" id=\"div_block_quiz_test_70\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"70\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"71\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 71: Vị trí của lỗ môn vị ở
                                đâu?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Ngang mức đốt sống thắt lưng 2
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Bên phải đốt sống thắt lưng 1
                            </div>
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
                                Bên trái đốt sống thắt lưng 1
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Bên phải đốt sống thắt lưng 2
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"71\" data-question-number=\"72\" id=\"div_block_quiz_test_71\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"71\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"72\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 72: Thần kinh lang thang trước của dạ dày là
                                gì?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Thần kinh lang thang trái tạo nên do dạ dày quay 90° theo trục dọc
                            </div>
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
                                Thần kinh lang thang phải tạo nên do dạ dày quay 90° theo trục dọc
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
                                Thần kinh lang thang trái tạo nên do dạ dày quay theo trục ngang
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Thần kinh lang thang phải tạo nên do dạ dày quay theo trục ngang
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"72\" data-question-number=\"73\" id=\"div_block_quiz_test_72\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"72\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"73\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 73: Chọn câu đúng nhất về
                                lách.</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Lách là một tuyến tiêu hóa
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Rốn lách nằm ở mặt thận của lách
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Bờ dưới lách có nhiều khía
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Rốn lách nằm ở mặt dạ dày
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 4150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/6fa1533e-3526-475a-952e-f51dde6fb6a0.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"73\" data-question-number=\"74\" id=\"div_block_quiz_test_73\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"73\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"74\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 74: Lách có đặc điểm gì?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Là tạng sau phúc mạc
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
                                Phía trước liên quan với các xương sườn 6, 7, 8
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
                                Dễ nhận biết khi thăm khám vì có bờ răng cưa
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
                                Tựa lên mạc treo kết tràng ngang và góc kết tràng trái
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"74\" data-question-number=\"75\" id=\"div_block_quiz_test_74\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"74\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"75\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 75: Tạng nào sau đây không liên quan tới
                                lách?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Dạ dày
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Thùy trái của gan
                            </div>
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
                                Đuôi tụy
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Thận trái
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"75\" data-question-number=\"76\" id=\"div_block_quiz_test_75\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"75\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"76\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 76: Trục lớn của lách song song và ngang mức
                                với?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Xương sườn 8
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Xương sườn 9
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Xương sườn 10
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Xương sườn 11
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p>Đoạn chiếu lên thành ngực thì trực lớn của lách song song với xương sườn 10, bờ trên ngang
                            mức với bờ dưới xương sườn 8, bờ dưới ngang mức với xương sườn 11, cực trước là chỗ gặp nhau
                            giữa xương sườn 10 với đường thẳng nổi từ khớp ức đòn trái với đầu trước xương sườn 11, đầu
                            sau ở khoảng gian sườn 10 cách đường giữa khoảng 4 cm.</p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"76\" data-question-number=\"77\" id=\"div_block_quiz_test_76\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"76\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"77\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 77: Mạch và thần kinh của lách đi vào lách qua
                                đâu?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mặt thận của lách
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mặt kết tràng của lách
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mặt dạ dày của lách
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Bờ dưới của lách
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><strong><img src=\"";
        // line 4374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/6fa1533e-3526-475a-952e-f51dde6fb6a0-1.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></strong></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"77\" data-question-number=\"78\" id=\"div_block_quiz_test_77\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"77\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"78\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 78: Lách có các đặc điểm sau, ngoại
                                trừ?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Là một tạng đặc ở tầng trên mạc treo kết tràng ngang
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
                                Thông thường ta không sờ thấy lách khi khám bụng
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
                                Bờ trước có nhiều khía rất đặc trưng
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
                                Được treo vào thành bụng sau bởi một mạc treo
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"78\" data-question-number=\"79\" id=\"div_block_quiz_test_78\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"78\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"79\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 79: Mô tả lách, câu nào sau đây
                                sai?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Là một tạng đặc sau phúc mạc
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mặt trước liên quan với dạ dày
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Mặt ngoài liên quan với phổi trái
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Đầu trước liên quan với góc kết tràng trái
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><strong>Lách</strong> được xem như là một tạng thuộc hệ tim mạch vì về nguồn gốc, lách phát
                            sinh từ một nút trên đường đi của động mạch lách, nó có chức năng sản sinh tế bào lympho và
                            là mô chỗ những hồng cầu già. Đường kính lớn nhất của lách là khoảng 12 cm, và nặng khoảng
                            200 g. Lách nằm áp sát dưới vòm hoành bên trái, nằm dưới mạn sườn trái nên thường không thấy
                            được bờ sườn nơi lách không lớn. Tuy vậy, lách là một tạng xốp và vỏ ngoài rất dễ bị chấn
                            thương, nhất là chấn thương mạn sườn trái. Đối với lón lách, tạng này có thể tìm thấy trong
                            mặt nổi vi lách hay mắc nối lách bên dưới những khối mô lách hoàn toàn tách rời hay nối lách
                            bằng những dài nối gọi là lách phụ. Lách cũng có thể có dạng phân thủy nhu trong bao thai.
                        </p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"79\" data-question-number=\"80\" id=\"div_block_quiz_test_79\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"79\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"80\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 80: Cấp máu chủ yếu cho phần thân và đuôi tụy là
                                các động mạch xuất phát từ?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch mạc treo tràng trên
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch lách
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị tá tràng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy dưới
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 4550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/78b832e6-38e6-4fcd-8417-713dbbcefa11.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"80\" data-question-number=\"81\" id=\"div_block_quiz_test_80\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"80\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"81\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 81: Các động mạch của đầu tụy và tá tràng hầu hết
                                xuất phát từ?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch mạc treo tràng trên và động mạch vị tá tràng
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch vị tá tràng và động mạch lách
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch lách và động mạch gan chung
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch mạc treo tràng dưới và động mạch gan riêng
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 4607
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/852b9d02-ecc8-4493-b287-7c9cf48b1a10.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"81\" data-question-number=\"82\" id=\"div_block_quiz_test_81\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"81\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"82\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 82: Chọn câu đúng.</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Tá tràng có một phần di động là phần lên của tá tràng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ống tụy chính đổ vào thành sau phần xuống tá tràng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ống mật chủ có đoạn đi phía sau đầu tụy và đây là đoạn hẹp nhất
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Bóng gan tụy là đoạn chung của ống mật chủ và ống tụy chính
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 4663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/147e1f95-597b-4951-b962-7b56db4eeaf8-1.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"82\" data-question-number=\"83\" id=\"div_block_quiz_test_82\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"82\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"83\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 83: Chọn câu đúng.</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Tá tràng có một phần di động là phần lên của tá tràng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ống tụy chính đổ vào thành sau phần xuống tá tràng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ống mật chủ có đoạn đi phía sau đầu tụy và đây là đoạn hẹp nhất
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Bóng gan tụy là đoạn chung của ống mật chủ và ống tụy chính
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 4719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/147e1f95-597b-4951-b962-7b56db4eeaf8.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"83\" data-question-number=\"84\" id=\"div_block_quiz_test_83\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"83\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"84\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 84: Phần trên tá tràng là gì?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Có dây chằng gan-tá tràng bám
                            </div>
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
                                Liên quan với thùy đuôi của gan
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
                                Có ống mật chủ đi phía trước
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Nằm bên phải đốt sống thắt lưng 3
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"84\" data-question-number=\"85\" id=\"div_block_quiz_test_84\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"84\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"85\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 85: Thành phần nào sau đây đi phía trước phần
                                xuống của tá tràng?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch thận phải
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Kết tràng ngang
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Niệu quản phải
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch cửa
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 4829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/8e68d6b8-ffce-45d3-945e-74259c9ee87f-1.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"85\" data-question-number=\"86\" id=\"div_block_quiz_test_85\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"85\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"86\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 86: Thành phần nào sau đây bắt chéo phần ngang của
                                tá tràng?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch thận phải
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch kết tràng trái
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch mạc treo tràng trên
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch mạc treo tràng dưới
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 4886
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/8e68d6b8-ffce-45d3-945e-74259c9ee87f-2.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"86\" data-question-number=\"87\" id=\"div_block_quiz_test_86\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"86\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"87\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 87: Nhú tá lớn có đặc điểm nào sau
                                đây?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Ở phía trên nhú tá bé
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
                                Ở thành trước phần xuống tá tràng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Liên tục với nếp dọc tá tràng
                            </div>
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
                                Ở đỉnh nhú có lỗ của ống tụy phụ
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"87\" data-question-number=\"88\" id=\"div_block_quiz_test_87\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"87\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"88\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 88: Câu nào sau đây sai?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Tụy nằm vắt ngang cột sống đoạn thắt lưng, sau hậu cung mạc nối
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Bó mạch mạc treo tràng dưới ấn vào tụy tạo nên khuyết tụy
                            </div>
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
                                Sau khuyết tụy có động mạch chủ bụng và tĩnh mạch cửa
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Đuôi tụy là phần có thể di động
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"88\" data-question-number=\"89\" id=\"div_block_quiz_test_88\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"88\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"89\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 89: Về tá tràng, câu nào sau đây
                                sai?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Là đoạn đầu của ruột non
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
                                Có dạng hình chữ C ôm lấy đầu tụy
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Hoàn toàn cố định do dính vào bụng sau
                            </div>
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
                                Có đường kính lớn hơn hỗng tràng và hồi tràng
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"89\" data-question-number=\"90\" id=\"div_block_quiz_test_89\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"89\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"90\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 90: Góc tá hỗng tràng dính vào thành bụng sau
                                bởi?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Rễ mạc treo kết tràng ngang
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Cơ treo tá tràng
                            </div>
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
                                Mạc nối nhỏ
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Mạc nối lớn
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"90\" data-question-number=\"91\" id=\"div_block_quiz_test_90\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"90\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"91\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 91: Tá tràng có đặc điểm nào, ngoại
                                trừ?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Được xem là phần đầu của ruột non
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Hầu hết cố định do dính vào thành bụng sau
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Thành sau của phần xuống (D2) có lỗ đổ vào ống tụy
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Trong chấn thương bụng, đoạn dễ bị tổn thương nhất là đoạn ngang (D3)
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 5158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/be2f31c2-822a-41d5-973c-298eab69686f.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"91\" data-question-number=\"92\" id=\"div_block_quiz_test_91\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"91\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"92\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 92: Phần nào sau đây nối từ tá tràng đến rốn
                                gan?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Rễ mạc treo ruột non
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
                                Cơ treo tá tràng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Mạc nối nhỏ
                            </div>
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
                                Mạc nối lớn
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"92\" data-question-number=\"93\" id=\"div_block_quiz_test_92\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"92\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"93\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 93: Trong dây chằng gan-tá tràng có thành phần
                                nào?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Tĩnh mạch gan
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
                                Ống tụy chính
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
                                Dây chằng tĩnh mạch
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
                                Tĩnh mạch cửa
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"93\" data-question-number=\"94\" id=\"div_block_quiz_test_93\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"93\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"94\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 94: Động mạch nào sau đây đi trong dây chằng
                                vị-kết tràng?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch vị phải
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
                                Động mạch vị trái
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
                                Động mạch đáy vị sau
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
                                Động mạch vị mạc nối phải
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"94\" data-question-number=\"95\" id=\"div_block_quiz_test_94\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"94\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"95\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 95: Phần nào của tá tràng dính chặt vào đầu tụy
                                nhất?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Phần trên
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Phần xuống
                            </div>
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
                                Phần lên
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Phần ngang
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"95\" data-question-number=\"96\" id=\"div_block_quiz_test_95\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"95\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"96\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 96: Phần nào của tá tràng đi phía trước cột sống
                                thắt lưng?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Hành tá tràng
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
                                Phần xuống
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Phần ngang
                            </div>
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
                                Phần lên
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"96\" data-question-number=\"97\" id=\"div_block_quiz_test_96\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"96\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"97\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 97: Mặt sau của khối tá tụy không liên quan với
                                thành phần nào?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Tĩnh mạch chủ dưới
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
                                Ống mật chủ
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
                                Thận phải
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
                                Rễ mạc treo kết tràng ngang
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"97\" data-question-number=\"98\" id=\"div_block_quiz_test_97\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"97\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"98\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 98: Động mạch nào sau đây xuất phát từ động mạch
                                mạc treo tràng trên?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy lưng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy lớn
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy dưới
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tá tụy dưới chung
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 5539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/852b9d02-ecc8-4493-b287-7c9cf48b1a10-1.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"98\" data-question-number=\"99\" id=\"div_block_quiz_test_98\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"98\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"99\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 99: Động mạch nào dưới đây là nhánh của động mạch
                                vị tá tràng?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch đuôi tụy
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy lưng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy dưới
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tá tụy trên sau
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 5596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/852b9d02-ecc8-4493-b287-7c9cf48b1a10-2.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"99\" data-question-number=\"100\" id=\"div_block_quiz_test_99\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"99\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"100\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 100: Nói về tụy và tá tràng, câu nào sau đây
                                đúng?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Tụy và tá tràng nằm hoàn toàn sau phúc mạc
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
                                Hành tá tràng còn gọi là phần trên tá tràng
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
                                Thành sau phần xuống tá tràng có hai nhú tá tràng
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
                                Phần lên tá tràng nằm bên trái cột sống
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"100\" data-question-number=\"101\" id=\"div_block_quiz_test_100\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"100\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"101\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 101: Động mạch tụy lớn xuất phát
                                từ?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tá tụy dưới chung
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch lách
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch gan chung
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch đuôi tụy
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 5707
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/78b832e6-38e6-4fcd-8417-713dbbcefa11-1.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"101\" data-question-number=\"102\" id=\"div_block_quiz_test_101\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"101\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"102\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 102: Động mạch nào dưới đây là nhánh của động mạch
                                lách?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy lưng
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tá tụy trên trước
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tá tụy trên sau
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tá tụy dưới trước
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 5764
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/852b9d02-ecc8-4493-b287-7c9cf48b1a10-3.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"102\" data-question-number=\"103\" id=\"div_block_quiz_test_102\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"102\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"103\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 103: Động mạch vị tá tràng và động mạch mạc treo
                                tràng trên thông nối với nhau qua đâu?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch lưng tụy
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy lớn
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Các động mạch tá tụy
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch sau tá tràng
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 5821
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/852b9d02-ecc8-4493-b287-7c9cf48b1a10-4.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"103\" data-question-number=\"104\" id=\"div_block_quiz_test_103\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"103\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"104\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 104: Về khuyết tụy, câu nào sau đây
                                sai?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Khuyết tụy nằm ở mặt sau tụy
                            </div>
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
                                Trên khuyết tụy có động mạch thân tạng
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
                                Dưới khuyết tụy có động mạch mạc treo tràng trên
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Dưới khuyết tụy có động mạch thận trái
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"104\" data-question-number=\"105\" id=\"div_block_quiz_test_104\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"104\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"105\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 105: Về liên quan của thân tụy, câu nào sau đây
                                sai?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Trước thân tụy liên quan với mặt sau dạ dày
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
                                Sau thân tụy liên quan với thận, tuyến thượng thận trái
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
                                Dưới thân tụy có rễ mạc treo kết tràng ngang
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
                                Trước và trên thân tụy có ống mật chủ
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"105\" data-question-number=\"106\" id=\"div_block_quiz_test_105\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"105\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"106\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 106: Tụy có các đặc điểm sau, ngoại
                                trừ?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Phần lớn tụy nằm ở tầng trên mạc treo kết tràng ngang
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
                                Khuyết tụy (cổ tụy) chính là vết ấn từ phía sau của bó mạch mạc treo tràng trên
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Mặt sau thân tụy liên quan với hậu cung mạc nối
                            </div>
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
                                Đuôi tụy có thể không tiếp xúc trực tiếp với rốn lách
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"106\" data-question-number=\"107\" id=\"div_block_quiz_test_106\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"106\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"107\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 107: Một khối bướu của mỏm móc tụy có thể chèn ép
                                thành phần nào sau đây sớm nhất?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ống mật chủ
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch mạc treo tràng trên
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Ống tụy chính
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch cửa
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 6040
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/147e1f95-597b-4951-b962-7b56db4eeaf8-2.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"107\" data-question-number=\"108\" id=\"div_block_quiz_test_107\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"107\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"108\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 108: Chọn câu đúng về tụy.</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Tụy là một tạng rỗng nằm ở tầng trên mạc treo kết tràng ngang
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
                                Đường kính trước sau ở đuôi tụy lớn hơn ở đầu tụy
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Mỏm móc tụy nằm sau bó mạch mạc treo tràng trên
                            </div>
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
                                Đuôi tụy luôn luôn tiếp xúc trực tiếp với rốn lách
                            </div>
</label>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"108\" data-question-number=\"109\" id=\"div_block_quiz_test_108\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"108\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"109\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 109: Cơ treo tá tràng đi từ trụ phải cơ hoành đến
                                đâu?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Hành tá tràng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Góc trên tá tràng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Góc tá-hỗng tràng
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Góc dưới tá tràng
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p>Phần lên của tá tràng dài khoảng 2,5 cm, chạy lên dọc bờ trái của động mạch chủ bụng đến
                            ngang mức bờ trên đốt sống thắt lưng thứ II, nơi nó nối tiếp với hỗng tràng tạo nên góc
                            tá-hỗng tràng.</p>
<p>Phần lên nằm trước cơ thắt lưng lớn và các thành phần của cuống thận trái. Cơ treo tá tràng
                            nối tiếp từ trụ phải cơ hoành đến bám vào góc tá-hỗng tràng.</p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"109\" data-question-number=\"110\" id=\"div_block_quiz_test_109\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"109\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"110\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 110: Thành phần nào sau đây đi phía trước phần
                                xuống của tá tràng?</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Động mạch thân tạng phải
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch cửa
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Kết tràng ngang
                            </div>
<i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch mạc treo tràng trên
                            </div>
</label>
</div>
<div class=\"quiz_note hidden\">
<p>
<strong>Gợi ý: </strong>
</p>
<p><img src=\"";
        // line 6211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/8e68d6b8-ffce-45d3-945e-74259c9ee87f.png"), "html", null, true);
        yield "\" style=\"width:100%;\"/></p>
<p></p>
</div>
</div>
</div>
<div class=\"clearfix\"></div>
<div class=\"block-quiz-test\" data-page=\"110\" data-question-number=\"111\" id=\"div_block_quiz_test_110\">
<div class=\"w3-padding w3-light-grey block-question\" data-page=\"110\" style=\"background:#fff;\">
<div class=\"w3-large\"><div class=\"x-wrapper\" style=\"display: flex;\"><div><button class=\"quiz-button btn btn-primary\" data-question=\"111\"><i class=\"fa fa-check-circle\"></i></button></div><div><span class=\"quiz-title\"><strong>Câu 111: Động mạch thân tạng chia thành ba nhánh là
                                động mạch lách và</strong></span></div></div>
<br/>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch vị trái, động mạch gan riêng
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch vị trái, động mạch gan chung
                            </div>
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
                                Động mạch vị phải, động mạch gan chung
                            </div>
</label>
</div>
<div class=\"clearfix\"></div>
<div class=\"radio\">
<label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
<div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
<span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
</div>
<div class=\"w-100 border-left p-1 text-answer\">
                                Động mạch vị trái, động mạch vị phải
                            </div>
</label>
</div>
</div>
</div>
</div>
</div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "quizz/contents_2/bung.html";
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
        return array (  6401 => 6211,  6227 => 6040,  6005 => 5821,  5945 => 5764,  5885 => 5707,  5771 => 5596,  5711 => 5539,  5327 => 5158,  5052 => 4886,  4992 => 4829,  4879 => 4719,  4820 => 4663,  4761 => 4607,  4701 => 4550,  4522 => 4374,  4295 => 4150,  4127 => 3985,  4067 => 3928,  4007 => 3871,  3947 => 3814,  3887 => 3757,  3827 => 3700,  3713 => 3589,  3584 => 3463,  3524 => 3406,  3465 => 3350,  3298 => 3186,  3238 => 3129,  2854 => 2748,  2689 => 2586,  2629 => 2529,  2570 => 2473,  2511 => 2417,  2451 => 2360,  2283 => 2195,  2168 => 2083,  2054 => 1972,  1994 => 1915,  1934 => 1858,  1874 => 1801,  1630 => 1560,  1516 => 1449,  1341 => 1277,  1064 => 1003,  1004 => 946,  782 => 727,  722 => 670,  436 => 387,  162 => 116,  102 => 59,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "quizz/contents_2/bung.html", "D:\\Projects\\minic2\\src\\app\\Views\\quizz\\contents_2\\bung.html");
    }
}
