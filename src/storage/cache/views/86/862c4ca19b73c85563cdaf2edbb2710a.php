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

/* quizz/contents/bung.html */
class __TwigTemplate_4e20a1b6ae0aa186caa7857f546b788e extends Template
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_0\" data-page=\"0\">
                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"0\">
                    <input type=\"hidden\" name=\"Quiz[0][id]\" value=\"6724e8e5e275cbeda28e2cd9\">
                    <input type=\"hidden\" name=\"Quiz[0][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 1: Nói về các dây chằng của tử cung, câu nào sau
                                đây SAI?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Dây chằng rộng là một nếp gồm hai lá phúc mạc.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Dây chằng tròn bám vào gò mu và môi lớn.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/ffa3d006-65ac-4981-807a-09b30889cf1c-3.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_1\" data-page=\"1\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"1\">
                    <input type=\"hidden\" name=\"Quiz[1][id]\" value=\"6724e8e5e275cbeda28e2cda\">
                    <input type=\"hidden\" name=\"Quiz[1][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 2: Nói về giới hạn hố buồng trứng, điều nào sau
                                đây SAI?</strong></span><br>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ở trước dưới là dây chằng rộng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ở trên là động mạch chậu ngoài.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ở sau là động mạch chậu trong.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/5cc2f300-5698-44e7-a72a-9ed6d34af7f7.png"), "html", null, true);
        yield "\"
                                ></p>

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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_2\" data-page=\"2\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"2\">
                    <input type=\"hidden\" name=\"Quiz[2][id]\" value=\"6724e8e5e275cbeda28e2cdb\">
                    <input type=\"hidden\" name=\"Quiz[2][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 3: Đầu vòi của buồng trứng là nơi bám
                                của?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Dây chằng riêng buồng trứng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Dây chằng rộng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_3\" data-page=\"3\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"3\">
                    <input type=\"hidden\" name=\"Quiz[3][id]\" value=\"6724e8e5e275cbeda28e2cdc\">
                    <input type=\"hidden\" name=\"Quiz[3][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 4: Đầu tử cung của buồng trứng là nơi bám
                                của?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Dây chằng treo buồng trứng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Dây chằng rộng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_4\" data-page=\"4\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"4\">
                    <input type=\"hidden\" name=\"Quiz[4][id]\" value=\"6724e8e5e275cbeda28e2cdd\">
                    <input type=\"hidden\" name=\"Quiz[4][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 5: Mạc treo buồng trứng treo buồng trứng
                                vào?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Thành bên chậu hông.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Hoành chậu.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Bờ bên thân tử cung.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_5\" data-page=\"5\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"5\">
                    <input type=\"hidden\" name=\"Quiz[5][id]\" value=\"6724e8e5e275cbeda28e2cde\">
                    <input type=\"hidden\" name=\"Quiz[5][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 6: Trong các dây chằng tử cung, dây chằng nào đi
                                vào ống bẹn?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Dây chằng rộng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Dây chằng tử cung - cùng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/7005e9c3-c742-47a0-b299-c02a43c9cf77-2.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_6\" data-page=\"6\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"6\">
                    <input type=\"hidden\" name=\"Quiz[6][id]\" value=\"6724e8e5e275cbeda28e2cdf\">
                    <input type=\"hidden\" name=\"Quiz[6][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 7: Rốn buồng trứng nằm ở?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_7\" data-page=\"7\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"7\">
                    <input type=\"hidden\" name=\"Quiz[7][id]\" value=\"6724e8e5e275cbeda28e2ce0\">
                    <input type=\"hidden\" name=\"Quiz[7][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 8: Động mạch buồng trứng?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Đi phía trước phúc mạc.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Có đoạn bắt chéo phía sau niệu quản.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_8\" data-page=\"8\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"8\">
                    <input type=\"hidden\" name=\"Quiz[8][id]\" value=\"6724e8e5e275cbeda28e2ce1\">
                    <input type=\"hidden\" name=\"Quiz[8][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 9: Vòi tử cung?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Đi từ buồng trứng đến đáy tử cung.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Nằm giữa hai lá của dây chằng rộng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_9\" data-page=\"9\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"9\">
                    <input type=\"hidden\" name=\"Quiz[9][id]\" value=\"6724e8e5e275cbeda28e2ce2\">
                    <input type=\"hidden\" name=\"Quiz[9][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 10: Vòi tử cung được cấp máu
                                bởi?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch buồng trứng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch tử cung.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                            dưới vòi.<br>
                            Bạch mạch và thần kinh giống như của buồng trứng.</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_10\" data-page=\"10\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"10\">
                    <input type=\"hidden\" name=\"Quiz[10][id]\" value=\"6724e8e5e275cbeda28e2ce3\">
                    <input type=\"hidden\" name=\"Quiz[10][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 11: Tử cung?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cao khoảng 16 cm ở người trưởng thành không có thai.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Thường ở tư thế gấp ra trước 90 độ.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 877
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/48515824-fedc-4ae2-8c12-e15de221fe60.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_11\" data-page=\"11\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"11\">
                    <input type=\"hidden\" name=\"Quiz[11][id]\" value=\"6724e8e5e275cbeda28e2ce4\">
                    <input type=\"hidden\" name=\"Quiz[11][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 12: Dây chằng nào sau đây bám vào mặt sau cổ tử
                                cung?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Dây chằng rộng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Dây chằng ngang cổ tử cung.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 954
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/7005e9c3-c742-47a0-b299-c02a43c9cf77-3.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_12\" data-page=\"12\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"12\">
                    <input type=\"hidden\" name=\"Quiz[12][id]\" value=\"6724e8e5e275cbeda28e2ce5\">
                    <input type=\"hidden\" name=\"Quiz[12][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 13: Tầng cơ rối tử cung có các đặc điểm sau, ngoại
                                trừ?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_13\" data-page=\"13\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"13\">
                    <input type=\"hidden\" name=\"Quiz[13][id]\" value=\"6724e8e5e275cbeda28e2ce6\">
                    <input type=\"hidden\" name=\"Quiz[13][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 14: Động mạch tử cung là nhánh
                                của?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_14\" data-page=\"14\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"14\">
                    <input type=\"hidden\" name=\"Quiz[14][id]\" value=\"6724e8e5e275cbeda28e2ce7\">
                    <input type=\"hidden\" name=\"Quiz[14][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 15: Khi cần chọc dò túi cùng trực tràng-tử cung
                                qua ngã âm đạo, người ta thường dò qua?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_15\" data-page=\"15\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"15\">
                    <input type=\"hidden\" name=\"Quiz[15][id]\" value=\"6724e8e5e275cbeda28e2ce8\">
                    <input type=\"hidden\" name=\"Quiz[15][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 16: Tiền đình âm đạo được giới hạn phía trước
                                bởi?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Lỗ niệu đạo.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Môi lớn.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 1247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/793cf474-5b47-49ea-aa2f-e3ee71d68f79-1.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_16\" data-page=\"16\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"16\">
                    <input type=\"hidden\" name=\"Quiz[16][id]\" value=\"6724e8e5e275cbeda28e2ce9\">
                    <input type=\"hidden\" name=\"Quiz[16][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 17: Tiền đình âm đạo được giới hạn phía sau
                                bởi?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Âm vật.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Lỗ niệu đạo.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Môi lớn.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 1324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/793cf474-5b47-49ea-aa2f-e3ee71d68f79-2.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_17\" data-page=\"17\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"17\">
                    <input type=\"hidden\" name=\"Quiz[17][id]\" value=\"6724e8e5e275cbeda28e2cea\">
                    <input type=\"hidden\" name=\"Quiz[17][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 18: Nói về tuyến vú ở nữ, câu nào sau đây
                                SAI?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_18\" data-page=\"18\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"18\">
                    <input type=\"hidden\" name=\"Quiz[18][id]\" value=\"6724e8e5e275cbeda28e2ceb\">
                    <input type=\"hidden\" name=\"Quiz[18][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 19: Thành phần nào sau đây có vai trò cầm máu và
                                co hồi tử cung?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_19\" data-page=\"19\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"19\">
                    <input type=\"hidden\" name=\"Quiz[19][id]\" value=\"6724e8e5e275cbeda28e2cec\">
                    <input type=\"hidden\" name=\"Quiz[19][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 20: Nói về động mạch tử cung, điều nào sau đây
                                đúng?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Bắt chéo phía trước niệu quản cách thân tử cung 1,5 cm.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Bắt chéo phía sau niệu quản, cách thân tử cung 1,5 cm.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_20\" data-page=\"20\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"20\">
                    <input type=\"hidden\" name=\"Quiz[20][id]\" value=\"6724e8e5e275cbeda28e2ced\">
                    <input type=\"hidden\" name=\"Quiz[20][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 21: Phần nào sau đây của tử cung giãn ra nhiều
                                nhất khi mang thai?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Đáy tử cung.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cổ tử cung.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_21\" data-page=\"21\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"21\">
                    <input type=\"hidden\" name=\"Quiz[21][id]\" value=\"6724e8e5e275cbeda28e2cee\">
                    <input type=\"hidden\" name=\"Quiz[21][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 22: Thành phần nào sau đây không nằm trong tinh
                                hoàn hoặc mào tinh hoàn?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ống sinh tinh xoắn.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ống sinh tinh thẳng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Lưới tinh.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 1690
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/d14f0ec9-73b3-4bf2-aa01-67c1a6e8bd66-3.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_22\" data-page=\"22\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"22\">
                    <input type=\"hidden\" name=\"Quiz[22][id]\" value=\"6724e8e5e275cbeda28e2cef\">
                    <input type=\"hidden\" name=\"Quiz[22][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 23: Động mạch tinh hoàn có đặc điểm, ngoại
                                trừ?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Xuất phát từ động mạch chủ bụng, dưới động mạch thận.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Chạy sau phúc mạc.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Chui qua lỗ bẹn sâu.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_23\" data-page=\"23\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"23\">
                    <input type=\"hidden\" name=\"Quiz[23][id]\" value=\"6724e8e5e275cbeda28e2cf0\">
                    <input type=\"hidden\" name=\"Quiz[23][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 24: Tinh dịch được sản xuất từ các cơ quan sau
                                đây, ngoại trừ?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_24\" data-page=\"24\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"24\">
                    <input type=\"hidden\" name=\"Quiz[24][id]\" value=\"6724e8e5e275cbeda28e2cf1\">
                    <input type=\"hidden\" name=\"Quiz[24][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 25: Thành phần nào sau đây không có trong thừng
                                tinh?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ống dẫn tinh.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch tinh hoàn.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 1919
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/2347b52a-4238-410b-8e24-b110c5a7b830.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_25\" data-page=\"25\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"25\">
                    <input type=\"hidden\" name=\"Quiz[25][id]\" value=\"6724e8e5e275cbeda28e2cf2\">
                    <input type=\"hidden\" name=\"Quiz[25][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 26: Tuyến tiền liệt được cấp máu
                                bởi?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_26\" data-page=\"26\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"26\">
                    <input type=\"hidden\" name=\"Quiz[26][id]\" value=\"6724e8e5e275cbeda28e2cf3\">
                    <input type=\"hidden\" name=\"Quiz[26][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 27: Thành phần nào sau đây có chức năng sản xuất
                                tinh trùng?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ống sinh tinh thẳng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Lưới tinh.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 2068
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/d14f0ec9-73b3-4bf2-aa01-67c1a6e8bd66-4.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_27\" data-page=\"27\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"27\">
                    <input type=\"hidden\" name=\"Quiz[27][id]\" value=\"6724e8e5e275cbeda28e2cf4\">
                    <input type=\"hidden\" name=\"Quiz[27][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 28: Thành phần nào sau đây không đi trong thừng
                                tinh?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_28\" data-page=\"28\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"28\">
                    <input type=\"hidden\" name=\"Quiz[28][id]\" value=\"6724e8e5e275cbeda28e2cf5\">
                    <input type=\"hidden\" name=\"Quiz[28][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 29: Hiện tượng cương dương vật là
                                do?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_29\" data-page=\"29\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"29\">
                    <input type=\"hidden\" name=\"Quiz[29][id]\" value=\"6724e8e5e275cbeda28e2cf6\">
                    <input type=\"hidden\" name=\"Quiz[29][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 30: Cơ nào sau đây không thuộc hoành chậu
                                hông?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cơ mu - trực tràng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cơ mũ - cụt.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cơ chậu - cụt.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_30\" data-page=\"30\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"30\">
                    <input type=\"hidden\" name=\"Quiz[30][id]\" value=\"6724e8e5e275cbeda28e2cf7\">
                    <input type=\"hidden\" name=\"Quiz[30][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 31: Thành phần nào sau đây không có trong khoang
                                đáy chậu nông ở nam?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Gốc của các tạng cương.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cơ ngang nông đáy chậu.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 2385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/download-20.jpg"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_31\" data-page=\"31\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"31\">
                    <input type=\"hidden\" name=\"Quiz[31][id]\" value=\"6724e8e5e275cbeda28e2cf8\">
                    <input type=\"hidden\" name=\"Quiz[31][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 32: Khoang đáy chậu sâu là phần giới hạn
                                giữa?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Mạc đáy chậu nông và lá mạc hoành niệu dục dưới.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Mạc đáy chậu nông và mạc hoành niệu dục trên.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 2462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/b838568a-2408-4191-b776-5a5ac44b68ef.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_32\" data-page=\"32\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"32\">
                    <input type=\"hidden\" name=\"Quiz[32][id]\" value=\"6724e8e5e275cbeda28e2cf9\">
                    <input type=\"hidden\" name=\"Quiz[32][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 33: Ranh giới giữa khoang đáy chậu nông và khoang
                                đáy chậu sâu là?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Mạc đáy chậu nông.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Mạc hoành niệu dục trên.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 2539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/b838568a-2408-4191-b776-5a5ac44b68ef-1.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_33\" data-page=\"33\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"33\">
                    <input type=\"hidden\" name=\"Quiz[33][id]\" value=\"6724e8e5e275cbeda28e2cfa\">
                    <input type=\"hidden\" name=\"Quiz[33][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 34: Trên thiết đồ đứng ngang, hố ngồi trực tràng
                                được giới hạn?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ở dưới bởi hoành niệu dục.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ở ngoài bởi ụ ngồi.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 2616
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/b838568a-2408-4191-b776-5a5ac44b68ef-2.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_34\" data-page=\"34\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"34\">
                    <input type=\"hidden\" name=\"Quiz[34][id]\" value=\"6724e8e5e275cbeda28e2cfb\">
                    <input type=\"hidden\" name=\"Quiz[34][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 35: Hoành chậu hông có các cơ
                                sau?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_35\" data-page=\"35\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"35\">
                    <input type=\"hidden\" name=\"Quiz[35][id]\" value=\"6724e8e5e275cbeda28e2cfc\">
                    <input type=\"hidden\" name=\"Quiz[35][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 36: Cơ nào sau đây không bám vào trung tâm gân đáy
                                chậu?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cơ hành xốp.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cơ ngang sâu đáy chậu.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 2765
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/296bf046-d9cf-403e-b27e-88949eaab058.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_36\" data-page=\"36\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"36\">
                    <input type=\"hidden\" name=\"Quiz[36][id]\" value=\"6724e8e5e275cbeda28e2cfd\">
                    <input type=\"hidden\" name=\"Quiz[36][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 37: Ở vùng niệu - dục, các cơ trong khoang đáy
                                chậu nông được vận động bởi?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_37\" data-page=\"37\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"37\">
                    <input type=\"hidden\" name=\"Quiz[37][id]\" value=\"6724e8e5e275cbeda28e2cfe\">
                    <input type=\"hidden\" name=\"Quiz[37][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 38: Về đáy chậu, câu nào sau đây
                                SAI?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ranh giới giữa chậu trước và đáy chậu sau là đường ngang qua phía trước hai ụ ngồi.
                                
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Giới hạn trước là khớp mu.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Đáy chậu sau giống nhau giữa nam và nữ.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 2915
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/08098b8e-a682-489f-acff-9baea4546255.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_38\" data-page=\"38\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"38\">
                    <input type=\"hidden\" name=\"Quiz[38][id]\" value=\"6724e8e5e275cbeda28e2cff\">
                    <input type=\"hidden\" name=\"Quiz[38][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 39: Ở những người đẻ con so, để cho thai dễ sổ ra,
                                người ta chủ động cắt âm hộ ở các điểm 4 giờ hoặc 8 giờ, để?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_39\" data-page=\"39\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"39\">
                    <input type=\"hidden\" name=\"Quiz[39][id]\" value=\"6724e8e5e275cbeda28e2d00\">
                    <input type=\"hidden\" name=\"Quiz[39][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 40: Cơ nào sau đây không thuộc đáy chậu
                                trước?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_40\" data-page=\"40\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"40\">
                    <input type=\"hidden\" name=\"Quiz[40][id]\" value=\"6724e8e5e275cbeda28e2d01\">
                    <input type=\"hidden\" name=\"Quiz[40][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 41: Cơ nào sau đây thuộc khoang đáy chậu
                                sâu?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cơ hành xốp.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cơ ngồi hang.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 3136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/5cfd4aa1-3ebc-4d62-8453-b6c3b1597f6f.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_41\" data-page=\"41\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"41\">
                    <input type=\"hidden\" name=\"Quiz[41][id]\" value=\"6724e8e5e275cbeda28e2d02\">
                    <input type=\"hidden\" name=\"Quiz[41][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 42: Động mạch mạc treo tràng
                                trên?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Xuất phát từ động mạch thân tạng và đi ở bờ cong nhỏ dạ dày.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch vị phải.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 3213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/80eb05b1-752c-4eab-a299-50365dddf9b9.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_42\" data-page=\"42\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"42\">
                    <input type=\"hidden\" name=\"Quiz[42][id]\" value=\"6724e8e5e275cbeda28e2d03\">
                    <input type=\"hidden\" name=\"Quiz[42][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 43: Động mạch vị trái?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch kết tràng phải.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch vị phải.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 3289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489-1.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_43\" data-page=\"43\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"43\">
                    <input type=\"hidden\" name=\"Quiz[43][id]\" value=\"6724e8e5e275cbeda28e2d04\">
                    <input type=\"hidden\" name=\"Quiz[43][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 44: Động mạch gan riêng?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Xuất phát từ động mạch thân tạng và đi ở bờ cong nhỏ dạ dày.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch kết tràng phải.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 3365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489-2.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_44\" data-page=\"44\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"44\">
                    <input type=\"hidden\" name=\"Quiz[44][id]\" value=\"6724e8e5e275cbeda28e2d05\">
                    <input type=\"hidden\" name=\"Quiz[44][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 45: Động mạch mạc treo tràng
                                dưới?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Xuất phát từ động mạch thân tạng và đi ở bờ cong nhỏ dạ dày.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch kết tràng phải.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cho nhánh động mạch vị phải.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 3442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/d0ebb02f-5305-41d1-acd7-3c20ef619604.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_45\" data-page=\"45\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"45\">
                    <input type=\"hidden\" name=\"Quiz[45][id]\" value=\"6724e8e5e275cbeda28e2d06\">
                    <input type=\"hidden\" name=\"Quiz[45][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 46: Động mạch cơ hoành?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_46\" data-page=\"46\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"46\">
                    <input type=\"hidden\" name=\"Quiz[46][id]\" value=\"6724e8e5e275cbeda28e2d07\">
                    <input type=\"hidden\" name=\"Quiz[46][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 47: Động mạch hoành dưới?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_47\" data-page=\"47\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"47\">
                    <input type=\"hidden\" name=\"Quiz[47][id]\" value=\"6724e8e5e275cbeda28e2d08\">
                    <input type=\"hidden\" name=\"Quiz[47][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 48: Động mạch vị trái?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch chủ bụng.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch lách.
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 3660
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_48\" data-page=\"48\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"48\">
                    <input type=\"hidden\" name=\"Quiz[48][id]\" value=\"6724e8e5e275cbeda28e2d09\">
                    <input type=\"hidden\" name=\"Quiz[48][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 49: Động mạch vị mạc nối trái?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_49\" data-page=\"49\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"49\">
                    <input type=\"hidden\" name=\"Quiz[49][id]\" value=\"6724e8e5e275cbeda28e2d0a\">
                    <input type=\"hidden\" name=\"Quiz[49][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 50: Đại tràng?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_50\" data-page=\"50\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"50\">
                    <input type=\"hidden\" name=\"Quiz[50][id]\" value=\"6724e8e5e275cbeda28e2d0b\">
                    <input type=\"hidden\" name=\"Quiz[50][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 51: Ruột thừa?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_51\" data-page=\"51\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"51\">
                    <input type=\"hidden\" name=\"Quiz[51][id]\" value=\"6724e8e5e275cbeda28e2d0c\">
                    <input type=\"hidden\" name=\"Quiz[51][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 52: (I): Lách rất khó vỡ khi chấn thương, vì:
                                (II): Lách nằm sâu dưới vòm hoành trái.</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_52\" data-page=\"52\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"52\">
                    <input type=\"hidden\" name=\"Quiz[52][id]\" value=\"6724e8e5e275cbeda28e2d0d\">
                    <input type=\"hidden\" name=\"Quiz[52][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 53: (I): Trong chấn thương bụng, nếu có tổn thương
                                tá tràng thì đoạn dễ bị tổn thương nhất là đoạn ngang (D3), vì: (II): D3 nằm ngay phía
                                sau bó mạch mạc treo tràng trên.</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_53\" data-page=\"53\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"53\">
                    <input type=\"hidden\" name=\"Quiz[53][id]\" value=\"6724e64ae275cbdba28e2cd8\">
                    <input type=\"hidden\" name=\"Quiz[53][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 54: động mạch nào sau đây không xuất phát từ động
                                mạch chủ bụng?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_54\" data-page=\"54\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"54\">
                    <input type=\"hidden\" name=\"Quiz[54][id]\" value=\"6724e64ae275cbdba28e2cd9\">
                    <input type=\"hidden\" name=\"Quiz[54][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 55: Trong tư thế đứng, phần nào của dạ dày ở vị
                                trí cao nhất?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Tâm vị
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Hang môn vị
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 4169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/e386119e-82d5-4d11-b8d4-4ee2ddbe5eec.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_55\" data-page=\"55\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"55\">
                    <input type=\"hidden\" name=\"Quiz[55][id]\" value=\"6724e64ae275cbdba28e2cda\">
                    <input type=\"hidden\" name=\"Quiz[55][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 56: Mặt sau dạ dày không liên quan
                                với?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Cơ hoành
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Thận trái
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Túi mạc nối
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 4246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/8252302e-8609-4b11-aa00-3bdfb1384e8f.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_56\" data-page=\"56\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"56\">
                    <input type=\"hidden\" name=\"Quiz[56][id]\" value=\"6724e64ae275cbdba28e2cdb\">
                    <input type=\"hidden\" name=\"Quiz[56][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 57: Động mạch vị phải tách ra
                                từ?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_57\" data-page=\"57\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"57\">
                    <input type=\"hidden\" name=\"Quiz[57][id]\" value=\"6724e64ae275cbdba28e2cdc\">
                    <input type=\"hidden\" name=\"Quiz[57][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 58: Chọn câu đúng về dạ dày.</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_58\" data-page=\"58\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"58\">
                    <input type=\"hidden\" name=\"Quiz[58][id]\" value=\"6724e64ae275cbdba28e2cdd\">
                    <input type=\"hidden\" name=\"Quiz[58][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 59: Mô tả mạch máu cung cấp cho dạ dày, câu nào
                                sau đây sai?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch vị phải xuất phát từ động mạch gan riêng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch vị trái xuất phát từ động mạch thân tạng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 4466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489-3.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_59\" data-page=\"59\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"59\">
                    <input type=\"hidden\" name=\"Quiz[59][id]\" value=\"6724e64ae275cbdba28e2cde\">
                    <input type=\"hidden\" name=\"Quiz[59][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 60: Đáy vị của dạ dày là?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Phần thấp nhất của dạ dày
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Phần nối thân vị với hang vị
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Phần nối thân vị với ống môn vị
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 4542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/e386119e-82d5-4d11-b8d4-4ee2ddbe5eec-1.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_60\" data-page=\"60\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"60\">
                    <input type=\"hidden\" name=\"Quiz[60][id]\" value=\"6724e64ae275cbdba28e2cdf\">
                    <input type=\"hidden\" name=\"Quiz[60][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 61: Câu nào sau đây đúng khi mô tả về dạ
                                dày?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Dạ dày là một tạng rỗng nằm ở tầng trên và tầng dưới mạc treo kết tràng ngang
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Tâm vị nằm về bên phải cột sống
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 4619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/e386119e-82d5-4d11-b8d4-4ee2ddbe5eec-2.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_61\" data-page=\"61\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"61\">
                    <input type=\"hidden\" name=\"Quiz[61][id]\" value=\"6724e64ae275cbdba28e2ce0\">
                    <input type=\"hidden\" name=\"Quiz[61][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 62: Đối chiếu lên cột sống, tâm vị và môn vị lần
                                lượt tương ứng với mức của đốt sống nào?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Đốt sống ngực 11 và thắt lưng 1
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Đốt sống ngực 11 và thắt lưng 2
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_62\" data-page=\"62\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"62\">
                    <input type=\"hidden\" name=\"Quiz[62][id]\" value=\"6724e64ae275cbdba28e2ce1\">
                    <input type=\"hidden\" name=\"Quiz[62][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 63: Tĩnh mạch vị phải và tĩnh mạch vị trái đổ
                                về?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch lách
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch mạc treo tràng trên
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 4786
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/3ecbff96-76a8-4139-9e65-55cabe64d5f8.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_63\" data-page=\"63\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"63\">
                    <input type=\"hidden\" name=\"Quiz[63][id]\" value=\"6724e64ae275cbdba28e2ce2\">
                    <input type=\"hidden\" name=\"Quiz[63][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 64: Chọn câu đúng khi nói về môn
                                vị.</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_64\" data-page=\"64\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"64\">
                    <input type=\"hidden\" name=\"Quiz[64][id]\" value=\"6724e64ae275cbdba28e2ce3\">
                    <input type=\"hidden\" name=\"Quiz[64][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 65: Dọc theo bờ cong lớn của dạ dày có hai động
                                mạch là?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch vị trái và động mạch vị phải
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch vị trái và động mạch vị tá tràng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 4935
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489-4.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_65\" data-page=\"65\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"65\">
                    <input type=\"hidden\" name=\"Quiz[65][id]\" value=\"6724e64ae275cbdba28e2ce4\">
                    <input type=\"hidden\" name=\"Quiz[65][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 66: Hai động mạch đi dọc theo bờ cong nhỏ dạ dày
                                là?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch vị phải, động mạch vị tá tràng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch vị trái, động mạch vị mạc nối trái
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 5012
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489-5.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_66\" data-page=\"66\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"66\">
                    <input type=\"hidden\" name=\"Quiz[66][id]\" value=\"6724e64ae275cbdba28e2ce5\">
                    <input type=\"hidden\" name=\"Quiz[66][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 67: Động mạch vị mạc nối trái xuất phát
                                từ?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch thân tạng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch gan chung
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 5089
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/43ffadf3-01ee-4840-9364-1e1046510489-6.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_67\" data-page=\"67\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"67\">
                    <input type=\"hidden\" name=\"Quiz[67][id]\" value=\"6724e64ae275cbdba28e2ce6\">
                    <input type=\"hidden\" name=\"Quiz[67][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 68: Chuỗi hạch bạch huyết dọc theo bờ cong nhỏ của
                                dạ dày nhận bạch huyết từ?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Nửa trái thân vị và 1/3 dưới phần ngang bờ cong lớn
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Đáy vị và nửa trên thân vị
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Đáy vị và nửa trái thân vị
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 5166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/74521097-9363-48d9-a173-33c2c6e2d202.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_68\" data-page=\"68\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"68\">
                    <input type=\"hidden\" name=\"Quiz[68][id]\" value=\"6724e64ae275cbdba28e2ce7\">
                    <input type=\"hidden\" name=\"Quiz[68][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 69: Khi đến dạ dày, thần kinh lang thang trước cho
                                hai nhánh nào?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Nhánh vị sau và nhánh gan
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Nhánh vị trước và nhánh tạng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 5243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/74521097-9363-48d9-a173-33c2c6e2d202-1.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_69\" data-page=\"69\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"69\">
                    <input type=\"hidden\" name=\"Quiz[69][id]\" value=\"6724e64ae275cbdba28e2ce8\">
                    <input type=\"hidden\" name=\"Quiz[69][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 70: Khi đến dạ dày, thân thần kinh lang thang sau
                                cho hai nhánh nào?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Nhánh vị trước và nhánh gan
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Nhánh vị sau và nhánh gan
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Nhánh vị trước và nhánh tạng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 5320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/74521097-9363-48d9-a173-33c2c6e2d202-2.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_70\" data-page=\"70\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"70\">
                    <input type=\"hidden\" name=\"Quiz[70][id]\" value=\"6724e64ae275cbdba28e2ce9\">
                    <input type=\"hidden\" name=\"Quiz[70][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 71: Vị trí của lỗ môn vị ở
                                đâu?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_71\" data-page=\"71\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"71\">
                    <input type=\"hidden\" name=\"Quiz[71][id]\" value=\"6724e64ae275cbdba28e2cea\">
                    <input type=\"hidden\" name=\"Quiz[71][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 72: Thần kinh lang thang trước của dạ dày là
                                gì?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_72\" data-page=\"72\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"72\">
                    <input type=\"hidden\" name=\"Quiz[72][id]\" value=\"6724e64ae275cbdba28e2ceb\">
                    <input type=\"hidden\" name=\"Quiz[72][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 73: Chọn câu đúng nhất về
                                lách.</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Lách là một tuyến tiêu hóa
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Rốn lách nằm ở mặt thận của lách
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Bờ dưới lách có nhiều khía
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 5541
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/6fa1533e-3526-475a-952e-f51dde6fb6a0.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_73\" data-page=\"73\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"73\">
                    <input type=\"hidden\" name=\"Quiz[73][id]\" value=\"6724e64ae275cbdba28e2cec\">
                    <input type=\"hidden\" name=\"Quiz[73][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 74: Lách có đặc điểm gì?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_74\" data-page=\"74\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"74\">
                    <input type=\"hidden\" name=\"Quiz[74][id]\" value=\"6724e64ae275cbdba28e2ced\">
                    <input type=\"hidden\" name=\"Quiz[74][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 75: Tạng nào sau đây không liên quan tới
                                lách?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_75\" data-page=\"75\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"75\">
                    <input type=\"hidden\" name=\"Quiz[75][id]\" value=\"6724e64ae275cbdba28e2cee\">
                    <input type=\"hidden\" name=\"Quiz[75][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 76: Trục lớn của lách song song và ngang mức
                                với?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Xương sườn 8
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Xương sườn 9
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_76\" data-page=\"76\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"76\">
                    <input type=\"hidden\" name=\"Quiz[76][id]\" value=\"6724e64ae275cbdba28e2cef\">
                    <input type=\"hidden\" name=\"Quiz[76][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 77: Mạch và thần kinh của lách đi vào lách qua
                                đâu?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Mặt thận của lách
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Mặt kết tràng của lách
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><strong><img style=\"width:100%;\"
                                    src=\"";
        // line 5839
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/6fa1533e-3526-475a-952e-f51dde6fb6a0-1.png"), "html", null, true);
        yield "\"
                                    ></strong></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_77\" data-page=\"77\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"77\">
                    <input type=\"hidden\" name=\"Quiz[77][id]\" value=\"6724e64ae275cbdba28e2cf0\">
                    <input type=\"hidden\" name=\"Quiz[77][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 78: Lách có các đặc điểm sau, ngoại
                                trừ?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_78\" data-page=\"78\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"78\">
                    <input type=\"hidden\" name=\"Quiz[78][id]\" value=\"6724e64ae275cbdba28e2cf1\">
                    <input type=\"hidden\" name=\"Quiz[78][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 79: Mô tả lách, câu nào sau đây
                                sai?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Mặt trước liên quan với dạ dày
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Mặt ngoài liên quan với phổi trái
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_79\" data-page=\"79\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"79\">
                    <input type=\"hidden\" name=\"Quiz[79][id]\" value=\"6724e64ae275cbdba28e2cf2\">
                    <input type=\"hidden\" name=\"Quiz[79][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 80: Cấp máu chủ yếu cho phần thân và đuôi tụy là
                                các động mạch xuất phát từ?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch mạc treo tràng trên
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch vị tá tràng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 6071
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/78b832e6-38e6-4fcd-8417-713dbbcefa11.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_80\" data-page=\"80\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"80\">
                    <input type=\"hidden\" name=\"Quiz[80][id]\" value=\"6724e64ae275cbdba28e2cf3\">
                    <input type=\"hidden\" name=\"Quiz[80][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 81: Các động mạch của đầu tụy và tá tràng hầu hết
                                xuất phát từ?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch vị tá tràng và động mạch lách
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch lách và động mạch gan chung
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 6148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/852b9d02-ecc8-4493-b287-7c9cf48b1a10.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_81\" data-page=\"81\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"81\">
                    <input type=\"hidden\" name=\"Quiz[81][id]\" value=\"6724e64ae275cbdba28e2cf4\">
                    <input type=\"hidden\" name=\"Quiz[81][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 82: Chọn câu đúng.</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Tá tràng có một phần di động là phần lên của tá tràng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ống tụy chính đổ vào thành sau phần xuống tá tràng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ống mật chủ có đoạn đi phía sau đầu tụy và đây là đoạn hẹp nhất
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 6224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/147e1f95-597b-4951-b962-7b56db4eeaf8-1.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_82\" data-page=\"82\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"82\">
                    <input type=\"hidden\" name=\"Quiz[82][id]\" value=\"6724e64ae275cbdba28e2cf5\">
                    <input type=\"hidden\" name=\"Quiz[82][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 83: Chọn câu đúng.</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Tá tràng có một phần di động là phần lên của tá tràng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ống tụy chính đổ vào thành sau phần xuống tá tràng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ống mật chủ có đoạn đi phía sau đầu tụy và đây là đoạn hẹp nhất
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 6300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/147e1f95-597b-4951-b962-7b56db4eeaf8.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_83\" data-page=\"83\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"83\">
                    <input type=\"hidden\" name=\"Quiz[83][id]\" value=\"6724e64ae275cbdba28e2cf6\">
                    <input type=\"hidden\" name=\"Quiz[83][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 84: Phần trên tá tràng là gì?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_84\" data-page=\"84\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"84\">
                    <input type=\"hidden\" name=\"Quiz[84][id]\" value=\"6724e64ae275cbdba28e2cf7\">
                    <input type=\"hidden\" name=\"Quiz[84][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 85: Thành phần nào sau đây đi phía trước phần
                                xuống của tá tràng?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch thận phải
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Niệu quản phải
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 6448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/8e68d6b8-ffce-45d3-945e-74259c9ee87f-1.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_85\" data-page=\"85\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"85\">
                    <input type=\"hidden\" name=\"Quiz[85][id]\" value=\"6724e64ae275cbdba28e2cf8\">
                    <input type=\"hidden\" name=\"Quiz[85][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 86: Thành phần nào sau đây bắt chéo phần ngang của
                                tá tràng?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch thận phải
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch kết tràng trái
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 6525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/8e68d6b8-ffce-45d3-945e-74259c9ee87f-2.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_86\" data-page=\"86\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"86\">
                    <input type=\"hidden\" name=\"Quiz[86][id]\" value=\"6724e64ae275cbdba28e2cf9\">
                    <input type=\"hidden\" name=\"Quiz[86][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 87: Nhú tá lớn có đặc điểm nào sau
                                đây?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_87\" data-page=\"87\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"87\">
                    <input type=\"hidden\" name=\"Quiz[87][id]\" value=\"6724e64ae275cbdba28e2cfa\">
                    <input type=\"hidden\" name=\"Quiz[87][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 88: Câu nào sau đây sai?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_88\" data-page=\"88\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"88\">
                    <input type=\"hidden\" name=\"Quiz[88][id]\" value=\"6724e64ae275cbdba28e2cfb\">
                    <input type=\"hidden\" name=\"Quiz[88][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 89: Về tá tràng, câu nào sau đây
                                sai?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_89\" data-page=\"89\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"89\">
                    <input type=\"hidden\" name=\"Quiz[89][id]\" value=\"6724e64ae275cbdba28e2cfc\">
                    <input type=\"hidden\" name=\"Quiz[89][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 90: Góc tá hỗng tràng dính vào thành bụng sau
                                bởi?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_90\" data-page=\"90\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"90\">
                    <input type=\"hidden\" name=\"Quiz[90][id]\" value=\"6724e64ae275cbdba28e2cfd\">
                    <input type=\"hidden\" name=\"Quiz[90][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 91: Tá tràng có đặc điểm nào, ngoại
                                trừ?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Được xem là phần đầu của ruột non
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Hầu hết cố định do dính vào thành bụng sau
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 6889
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/be2f31c2-822a-41d5-973c-298eab69686f.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_91\" data-page=\"91\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"91\">
                    <input type=\"hidden\" name=\"Quiz[91][id]\" value=\"6724e64ae275cbdba28e2cfe\">
                    <input type=\"hidden\" name=\"Quiz[91][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 92: Phần nào sau đây nối từ tá tràng đến rốn
                                gan?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_92\" data-page=\"92\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"92\">
                    <input type=\"hidden\" name=\"Quiz[92][id]\" value=\"6724e64ae275cbdba28e2cff\">
                    <input type=\"hidden\" name=\"Quiz[92][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 93: Trong dây chằng gan-tá tràng có thành phần
                                nào?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_93\" data-page=\"93\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"93\">
                    <input type=\"hidden\" name=\"Quiz[93][id]\" value=\"6724e64ae275cbdba28e2d00\">
                    <input type=\"hidden\" name=\"Quiz[93][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 94: Động mạch nào sau đây đi trong dây chằng
                                vị-kết tràng?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_94\" data-page=\"94\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"94\">
                    <input type=\"hidden\" name=\"Quiz[94][id]\" value=\"6724e64ae275cbdba28e2d01\">
                    <input type=\"hidden\" name=\"Quiz[94][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 95: Phần nào của tá tràng dính chặt vào đầu tụy
                                nhất?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_95\" data-page=\"95\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"95\">
                    <input type=\"hidden\" name=\"Quiz[95][id]\" value=\"6724e64ae275cbdba28e2d02\">
                    <input type=\"hidden\" name=\"Quiz[95][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 96: Phần nào của tá tràng đi phía trước cột sống
                                thắt lưng?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_96\" data-page=\"96\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"96\">
                    <input type=\"hidden\" name=\"Quiz[96][id]\" value=\"6724e64ae275cbdba28e2d03\">
                    <input type=\"hidden\" name=\"Quiz[96][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 97: Mặt sau của khối tá tụy không liên quan với
                                thành phần nào?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_97\" data-page=\"97\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"97\">
                    <input type=\"hidden\" name=\"Quiz[97][id]\" value=\"6724e64ae275cbdba28e2d04\">
                    <input type=\"hidden\" name=\"Quiz[97][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 98: Động mạch nào sau đây xuất phát từ động mạch
                                mạc treo tràng trên?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy lưng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy lớn
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy dưới
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 7398
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/852b9d02-ecc8-4493-b287-7c9cf48b1a10-1.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_98\" data-page=\"98\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"98\">
                    <input type=\"hidden\" name=\"Quiz[98][id]\" value=\"6724e64ae275cbdba28e2d05\">
                    <input type=\"hidden\" name=\"Quiz[98][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 99: Động mạch nào dưới đây là nhánh của động mạch
                                vị tá tràng?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch đuôi tụy
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy lưng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy dưới
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 7475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/852b9d02-ecc8-4493-b287-7c9cf48b1a10-2.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_99\" data-page=\"99\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"99\">
                    <input type=\"hidden\" name=\"Quiz[99][id]\" value=\"6724e64ae275cbdba28e2d06\">
                    <input type=\"hidden\" name=\"Quiz[99][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 100: Nói về tụy và tá tràng, câu nào sau đây
                                đúng?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_100\" data-page=\"100\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"100\">
                    <input type=\"hidden\" name=\"Quiz[100][id]\" value=\"6724e64ae275cbdba28e2d07\">
                    <input type=\"hidden\" name=\"Quiz[100][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 101: Động mạch tụy lớn xuất phát
                                từ?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch tá tụy dưới chung
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch gan chung
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 7624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/78b832e6-38e6-4fcd-8417-713dbbcefa11-1.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_101\" data-page=\"101\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"101\">
                    <input type=\"hidden\" name=\"Quiz[101][id]\" value=\"6724e64ae275cbdba28e2d08\">
                    <input type=\"hidden\" name=\"Quiz[101][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 102: Động mạch nào dưới đây là nhánh của động mạch
                                lách?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch tá tụy trên trước
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch tá tụy trên sau
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 7701
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/852b9d02-ecc8-4493-b287-7c9cf48b1a10-3.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_102\" data-page=\"102\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"102\">
                    <input type=\"hidden\" name=\"Quiz[102][id]\" value=\"6724e64ae275cbdba28e2d09\">
                    <input type=\"hidden\" name=\"Quiz[102][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 103: Động mạch vị tá tràng và động mạch mạc treo
                                tràng trên thông nối với nhau qua đâu?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch lưng tụy
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch tụy lớn
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 7778
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/852b9d02-ecc8-4493-b287-7c9cf48b1a10-4.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_103\" data-page=\"103\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"103\">
                    <input type=\"hidden\" name=\"Quiz[103][id]\" value=\"6724e64ae275cbdba28e2d0a\">
                    <input type=\"hidden\" name=\"Quiz[103][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 104: Về khuyết tụy, câu nào sau đây
                                sai?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_104\" data-page=\"104\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"104\">
                    <input type=\"hidden\" name=\"Quiz[104][id]\" value=\"6724e64ae275cbdba28e2d0b\">
                    <input type=\"hidden\" name=\"Quiz[104][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 105: Về liên quan của thân tụy, câu nào sau đây
                                sai?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_105\" data-page=\"105\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"105\">
                    <input type=\"hidden\" name=\"Quiz[105][id]\" value=\"6724e64ae275cbdba28e2d0c\">
                    <input type=\"hidden\" name=\"Quiz[105][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 106: Tụy có các đặc điểm sau, ngoại
                                trừ?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_106\" data-page=\"106\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"106\">
                    <input type=\"hidden\" name=\"Quiz[106][id]\" value=\"6724e64ae275cbdba28e2d0d\">
                    <input type=\"hidden\" name=\"Quiz[106][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 107: Một khối bướu của mỏm móc tụy có thể chèn ép
                                thành phần nào sau đây sớm nhất?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Ống mật chủ
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch mạc treo tràng trên
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 8071
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/147e1f95-597b-4951-b962-7b56db4eeaf8-2.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_107\" data-page=\"107\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"107\">
                    <input type=\"hidden\" name=\"Quiz[107][id]\" value=\"6724e64ae275cbdba28e2d0e\">
                    <input type=\"hidden\" name=\"Quiz[107][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 108: Chọn câu đúng về tụy.</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_108\" data-page=\"108\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"108\">
                    <input type=\"hidden\" name=\"Quiz[108][id]\" value=\"6724e64ae275cbdba28e2d0f\">
                    <input type=\"hidden\" name=\"Quiz[108][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 109: Cơ treo tá tràng đi từ trụ phải cơ hoành đến
                                đâu?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Hành tá tràng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Góc trên tá tràng
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_109\" data-page=\"109\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"109\">
                    <input type=\"hidden\" name=\"Quiz[109][id]\" value=\"6724e64ae275cbdba28e2d10\">
                    <input type=\"hidden\" name=\"Quiz[109][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 110: Thành phần nào sau đây đi phía trước phần
                                xuống của tá tràng?</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Động mạch thân tạng phải
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch cửa
                            </div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <p><img style=\"width:100%;\"
                                src=\"";
        // line 8299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/8e68d6b8-ffce-45d3-945e-74259c9ee87f.png"), "html", null, true);
        yield "\"
                                ></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_110\" data-page=\"110\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"110\">
                    <input type=\"hidden\" name=\"Quiz[110][id]\" value=\"6724e64ae275cbdba28e2cd7\">
                    <input type=\"hidden\" name=\"Quiz[110][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 111: Động mạch thân tạng chia thành ba nhánh là
                                động mạch lách và</strong></span><br>

                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
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
        return "quizz/contents/bung.html";
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
        return array (  8489 => 8299,  8258 => 8071,  7962 => 7778,  7882 => 7701,  7802 => 7624,  7650 => 7475,  7570 => 7398,  7058 => 6889,  6691 => 6525,  6611 => 6448,  6460 => 6300,  6381 => 6224,  6302 => 6148,  6222 => 6071,  5987 => 5839,  5686 => 5541,  5462 => 5320,  5382 => 5243,  5302 => 5166,  5222 => 5089,  5142 => 5012,  5062 => 4935,  4910 => 4786,  4740 => 4619,  4660 => 4542,  4581 => 4466,  4358 => 4246,  4278 => 4169,  3766 => 3660,  3545 => 3442,  3465 => 3365,  3386 => 3289,  3307 => 3213,  3227 => 3136,  3003 => 2915,  2850 => 2765,  2698 => 2616,  2618 => 2539,  2538 => 2462,  2458 => 2385,  2138 => 2068,  1986 => 1919,  1754 => 1690,  1385 => 1324,  1305 => 1247,  1009 => 954,  929 => 877,  550 => 501,  197 => 151,  118 => 75,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "quizz/contents/bung.html", "D:\\Projects\\minic2\\src\\app\\Views\\quizz\\contents\\bung.html");
    }
}
