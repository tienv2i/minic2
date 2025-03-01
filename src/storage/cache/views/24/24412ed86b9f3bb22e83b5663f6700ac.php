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

/* quizz/contents/hohap.html */
class __TwigTemplate_74b0b605da5f87044287ab38155393ac extends Template
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
        yield "<div class=\"container my-4\" style=\"max-width: 720px;\">
    <div class=\"main-test detail-quiz-course-result\" style=\"overflow:hidden;\">
        <div class=\"quiz_name text-center\" style=\"margin: 0px;margin-bottom: 20px;\">
            <h3>Module hô hấp</h3>

        </div>
        <div class=\"col-md-12 col-sm-12\">
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_0\" data-page=\"0\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"0\">
                    <input type=\"hidden\" name=\"Quiz[0][id]\" value=\"6721a919e275cb5d478e2cc8\">
                    <input type=\"hidden\" name=\"Quiz[0][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 1: Đường hô hấp trên gồm thành phần
                                nào?</strong></span><br>
                        
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Mũi và hầu</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Mũi, hầu và thanh quản</div>
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
                               Mũi, hầu, thanh quản và khí quản</div>
                            
                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Mũi, hầu, thanh quản và khí quản gốc</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"131\"
                                ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8305.png"), "html", null, true);
        yield "
                                width=\"573\"></p>

                        <p>Sách YDS cuốn 1 trang 154</p>

                        <p><img height=\"435\"
                                ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8306.png"), "html", null, true);
        yield "
                                width=\"612\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_1\" data-page=\"1\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"1\">
                    <input type=\"hidden\" name=\"Quiz[1][id]\" value=\"6721a919e275cb5d478e2cc9\">
                    <input type=\"hidden\" name=\"Quiz[1][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 2: Một bệnh nhân đến khám vì bị khàn
                                tiếng, nếu nghi ngờ bệnh ở đường hô hấp thì cơ quan nào sau đây được
                                nghĩ đến nhiều nhất?</strong></span><br>
                        
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Hầu</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Phế quản</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Khí quản</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Thanh quản</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"239\"
                                ";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8307.png"), "html", null, true);
        yield "
                                width=\"584\"></p>

                        <p>Sách YDS cuốn 1 trang 166</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_2\" data-page=\"2\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"2\">
                    <input type=\"hidden\" name=\"Quiz[2][id]\" value=\"6721a919e275cb5d478e2ccd\">
                    <input type=\"hidden\" name=\"Quiz[2][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 3: Xương xoăn mũi dưới</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Là phần thấp nhất của xương sàng</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Tạo nên phần dưới của vách mũi</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Góp phần tạo nên thành ngoài ổ mũi</div>
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
                               Tạo nên ngách mũi giữa với thành ngoài ổ mũi</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p>A sai vì xương xoăn mũi dưới không thuộc xương sàng mà là xương riêng. D sai vì xương xoang
                            mũi dưới và thành ngoài ở mũi tạo thành ngách mũi dưới</p>

                        <p><img height=\"556\"
                                ";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8269.png"), "html", null, true);
        yield "
                                width=\"620\"></p>

                        <p>Sách YDS cuốn 1 trang 157</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_3\" data-page=\"3\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"3\">
                    <input type=\"hidden\" name=\"Quiz[3][id]\" value=\"6721a919e275cb5d478e2cce\">
                    <input type=\"hidden\" name=\"Quiz[3][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 4: Các xương sau đây có xoang đổ vào ổ
                                mũi, ngoại trừ?</strong></span><br>
                        
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xương thái dương</div>
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
                               Xương bướm</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xương sàng</div>
                            
                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xương hàm trên</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"155\"
                                ";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8270.png"), "html", null, true);
        yield "
                                width=\"624\"></p>

                        <p>Sách YDS cuốn 1 trang 158</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_4\" data-page=\"4\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"4\">
                    <input type=\"hidden\" name=\"Quiz[4][id]\" value=\"6721a919e275cb5d478e2ccf\">
                    <input type=\"hidden\" name=\"Quiz[4][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 5: Xương nào sau đây không có
                                xoang?</strong></span><br>
                        
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xương trán</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xương mũi</div>
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
                               Xương khẩu cái</div>
                            
                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xương hàm trên</div>

                        </label>
                    </div>



                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_5\" data-page=\"5\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"5\">
                    <input type=\"hidden\" name=\"Quiz[5][id]\" value=\"6721a919e275cb5d478e2cd0\">
                    <input type=\"hidden\" name=\"Quiz[5][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 6: Ngách mũi trên có lỗ đổ
                                của</strong></span><br>
                        
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang trán, xoang bướm</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang bướm, xoang sàng sau</div>
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
                               Xoang sàng sau, xoang hàm</div>
                            
                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang bướm, xoang hàm</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"97\"
                                ";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8271.png"), "html", null, true);
        yield "
                                width=\"624\"></p>

                        <p>Sách YDS cuốn 1 trang 158</p>

                        <p><img height=\"356\"
                                ";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8284.png"), "html", null, true);
        yield "
                                width=\"633\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_6\" data-page=\"6\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"6\">
                    <input type=\"hidden\" name=\"Quiz[6][id]\" value=\"6721a919e275cb5d478e2cd1\">
                    <input type=\"hidden\" name=\"Quiz[6][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 7: Vách mũi được tạo bởi</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xương lá mía, xương sàng, sụn vách mũi, sụn cánh mũi lớn</div>
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
                               Xương khẩu cái, xương bướm, sụn vách mũi, sụn cánh mũi nhỏ</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Mảnh trong mỏm chân bướm, xương sàng, sụn vách mũi</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Mảnh ngoài mỏm chân bướm, xương sàng, sụn vách mũi, sụn cánh mũi lớn</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"201\"
                                ";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8272.png"), "html", null, true);
        yield "
                                width=\"621\"></p>

                        <p>Sách YDS cuốn 1 trang 157</p>

                        <p><img height=\"431\"
                                ";
        // line 556
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8273.png"), "html", null, true);
        yield "
                                width=\"633\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_7\" data-page=\"7\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"7\">
                    <input type=\"hidden\" name=\"Quiz[7][id]\" value=\"6721a919e275cb5d478e2cd2\">
                    <input type=\"hidden\" name=\"Quiz[7][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 8: Ngách mũi giữa có lỗ đổ của xoang sàng
                                trước và</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang hàm trên, xoang trán</div>
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
                               Xoang bướm, xoang sàng sau</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang sàng giữa, xoang sàng sau</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang bướm, xoang hàm trên</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"341\"
                                ";
        // line 633
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8274.png"), "html", null, true);
        yield "
                                width=\"648\"></p>

                        <p><img height=\"356\"
                                ";
        // line 637
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8283.png"), "html", null, true);
        yield "
                                width=\"633\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_8\" data-page=\"8\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"8\">
                    <input type=\"hidden\" name=\"Quiz[8][id]\" value=\"6721a919e275cb5d478e2cd3\">
                    <input type=\"hidden\" name=\"Quiz[8][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 9: Các phát biểu sau về ổ mũi là đúng,
                                ngoại trừ?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Các xương xoăn mũi ở thành ngoài của ổ mũi</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xương sàng góp phần tạo nên trần, thành trong, thành ngoài ổ mũi</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Phần trước nền ổ mũi được tạo bởi xương khẩu cái</div>
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
                               Một phần thành trên được tạo nên bởi xương lá mía</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"206\"
                                ";
        // line 714
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8275.png"), "html", null, true);
        yield "
                                width=\"614\"></p>

                        <p><img height=\"379\"
                                ";
        // line 718
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8276.png"), "html", null, true);
        yield "
                                width=\"626\"></p>

                        <p><img height=\"498\"
                                ";
        // line 722
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8277.png"), "html", null, true);
        yield "
                                width=\"640\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_9\" data-page=\"9\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"9\">
                    <input type=\"hidden\" name=\"Quiz[9][id]\" value=\"6721a919e275cb5d478e2cd4\">
                    <input type=\"hidden\" name=\"Quiz[9][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 10: Điểm mạch (nơi thường hay chảy máu mũi ở một
                                số bệnh nhi) ở vách mũi là nhánh của động mạch nào sau đây?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Nhánh vách của động mạch sàng trước</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch bướm khẩu cái</div>
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
                               Nhánh bên của động mạch sàng trước</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch khẩu cái lớn</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"431\"
                                ";
        // line 799
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8278.png"), "html", null, true);
        yield "
                                width=\"598\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_10\" data-page=\"10\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"10\">
                    <input type=\"hidden\" name=\"Quiz[10][id]\" value=\"6721a919e275cb5d478e2cd5\">
                    <input type=\"hidden\" name=\"Quiz[10][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 11: Điểm mạch (nơi thường hay chảy máu mũi ở một
                                số bệnh nhi) là nhánh của động mạch bướm khẩu cái và nằm ở</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Thành ngoài ổ mũi</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Quanh lỗ mũi sau</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Vách mũi</div>
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
                               Trần ổ mũi</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"431\"
                                ";
        // line 876
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8279.png"), "html", null, true);
        yield "
                                width=\"598\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_11\" data-page=\"11\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"11\">
                    <input type=\"hidden\" name=\"Quiz[11][id]\" value=\"6721a919e275cb5d478e2cd6\">
                    <input type=\"hidden\" name=\"Quiz[11][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 12: Điểm mạch (nơi thường hay chảy máu mũi ở
                                một số bệnh nhi) là nhánh nào của động mạch bướm khẩu
                                cái?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Nhánh ngoài trước</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Nhánh ngoài sau</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Nhánh vách mũi trước</div>
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
                               Nhánh vách mũi sau</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"431\"
                                ";
        // line 954
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8280.png"), "html", null, true);
        yield "
                                width=\"598\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_12\" data-page=\"12\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"12\">
                    <input type=\"hidden\" name=\"Quiz[12][id]\" value=\"6721a919e275cb5d478e2cd7\">
                    <input type=\"hidden\" name=\"Quiz[12][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 13: Xoang nào sau đâ̂y đổ vào ngách mũi trên
                                ở thành ngoài của ổ mũi?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang trán</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang sàng trước</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang hàm trên</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang bướm</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"53\"
                                ";
        // line 1031
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8281.png"), "html", null, true);
        yield "
                                width=\"620\"></p>

                        <p><img height=\"356\"
                                ";
        // line 1035
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8282.png"), "html", null, true);
        yield "
                                width=\"633\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_13\" data-page=\"13\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"13\">
                    <input type=\"hidden\" name=\"Quiz[13][id]\" value=\"6721a919e275cb5d478e2cd8\">
                    <input type=\"hidden\" name=\"Quiz[13][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 14: Xoang cạnh mũi nào sau đây có lỗ đổ vào
                                ngách mũi trên?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang trán</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang chũm</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang hàm</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang sàng sau</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"69\"
                                ";
        // line 1112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8286.png"), "html", null, true);
        yield "
                                width=\"616\"></p>

                        <p>Sách YDS cuốn 1 trang 158</p>

                        <p><img height=\"351\"
                                ";
        // line 1118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8287.png"), "html", null, true);
        yield "
                                width=\"615\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_14\" data-page=\"14\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"14\">
                    <input type=\"hidden\" name=\"Quiz[14][id]\" value=\"6721a919e275cb5d478e2cd9\">
                    <input type=\"hidden\" name=\"Quiz[14][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 15: Xoang nào sau đây không đổ vào ngách mũi
                                giữa?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang trán</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang sàng trước</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang hàm</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Xoang bướm</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"357\"
                                ";
        // line 1195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8289.png"), "html", null, true);
        yield "
                                width=\"623\"></p>

                        <p><img height=\"366\"
                                ";
        // line 1199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8291.png"), "html", null, true);
        yield "
                                width=\"636\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_15\" data-page=\"15\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"15\">
                    <input type=\"hidden\" name=\"Quiz[15][id]\" value=\"6721a919e275cb5d478e2cda\">
                    <input type=\"hidden\" name=\"Quiz[15][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 16: Khí quản chia thành hai phế quản chính
                                trái và phải ở ngang đốt sổng nào?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Đốt sống cổ 6 - cổ 7</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Đốt sống ngực 4 - ngực 5</div>
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
                               Đốt sống ngực 8 - ngực 9</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Đốt sống ngực 10 - ngực 11</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"217\"
                                ";
        // line 1276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8292.png"), "html", null, true);
        yield "
                                width=\"570\"></p>

                        <p>Sách YDS cuốn 1 trang 179</p>

                        <p><img height=\"403\"
                                ";
        // line 1282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8293.png"), "html", null, true);
        yield "
                                width=\"619\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_16\" data-page=\"16\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"16\">
                    <input type=\"hidden\" name=\"Quiz[16][id]\" value=\"6721a919e275cb5d478e2cdb\">
                    <input type=\"hidden\" name=\"Quiz[16][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 17: Câu sau đây là câu liên quan nhân quả, chọn:
                                (I): Khi viêm xoang hàm trên có thể thấy dịch chảy vào ổ mũi, vì: (II) : Lỗ xoang hàm
                                trên thông với ngách mũi giữa</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Nếu (I) đúng, (II) đúng, (I) và (II) có liên quan nhân quả</div>
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
                               Nếu (I) đúng, (II) đúng, (I) và (II) không có liên quan nhân quả</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Nếu (I) đúng, (II) sai</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Nếu (I) sai, (II) đúng</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"337\"
                                ";
        // line 1360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8294.png"), "html", null, true);
        yield "
                                width=\"637\"></p>

                        <p><img height=\"355\"
                                ";
        // line 1364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8295.png"), "html", null, true);
        yield "
                                width=\"618\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_17\" data-page=\"17\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"17\">
                    <input type=\"hidden\" name=\"Quiz[17][id]\" value=\"6721a919e275cb5d478e2cdc\">
                    <input type=\"hidden\" name=\"Quiz[17][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 18: Hố hạnh nhân là một hố nằm giữa hai
                                nếp của khẩu cái mềm trong ổ miệng chính, nếp phía trước
                                là</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Lưỡi gà khẩu cái</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cung khẩu cái - hầu</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cung khẩu cái - lưỡi</div>
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
                               Nếp khẩu cái - hầu</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"310\"
                                ";
        // line 1442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8296.png"), "html", null, true);
        yield "
                                width=\"626\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_18\" data-page=\"18\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"18\">
                    <input type=\"hidden\" name=\"Quiz[18][id]\" value=\"6721a919e275cb5d478e2cdd\">
                    <input type=\"hidden\" name=\"Quiz[18][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 19: Tuyến hạnh nhân khẩu cái nằm trong hố
                                hạnh nhân, hố hạnh nhân nằm ở vị trì nào?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Ngay sau eo họng</div>
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
                               Ngay trước eo họng</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cạnh lỗ hầu vòi tai</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Trong khẩu cái mềm</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"343\"
                                ";
        // line 1519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8297.png"), "html", null, true);
        yield "
                                width=\"704\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_19\" data-page=\"19\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"19\">
                    <input type=\"hidden\" name=\"Quiz[19][id]\" value=\"6721a919e275cb5d478e2cde\">
                    <input type=\"hidden\" name=\"Quiz[19][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 20: Khi mồ tả về hầu, câu nào sau đây
                                sai?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Tỵ hầu nằm ngay phía sau lỗ mũi sau và phía trên khẩu cái mềm</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Khẩu hầu nằm phía sau ổ miệng, phía trên thanh hầu</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Thanh hầu ngay phía sau thanh quản, là cửa ngõ đi vào thực quản</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Khoang sau hầu mở vào lồng ngực qua trung thất sau</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"152\"
                                ";
        // line 1596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8298.png"), "html", null, true);
        yield "
                                width=\"628\"></p>

                        <p><img height=\"267\"
                                ";
        // line 1600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8299.png"), "html", null, true);
        yield "
                                width=\"626\"></p>

                        <p><img height=\"288\"
                                ";
        // line 1604
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8300.png"), "html", null, true);
        yield "
                                width=\"634\"></p>

                        <p><img height=\"511\"
                                ";
        // line 1608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8301.png"), "html", null, true);
        yield "
                                width=\"622\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_20\" data-page=\"20\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"20\">
                    <input type=\"hidden\" name=\"Quiz[20][id]\" value=\"6721a919e275cb5d478e2cdf\">
                    <input type=\"hidden\" name=\"Quiz[20][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 21: Về ngách hình lê, mô tả nào sau đây
                                đúng?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Nằm ở vùng tiền đình thanh quản, cạnh dây thanh âm</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Giới hạn bên ngoài là sụn giáp và màng giáp móng</div>
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
                               Giới hạn bên trong là nếp phễu nắp, sụn giáp và sụn phễu</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Là ổ dưới thanh môn, bên cạnh khe tiền đình</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"296\"
                                ";
        // line 1685
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8302.png"), "html", null, true);
        yield "
                                width=\"630\"></p>

                        <p>Sách YDS cuốn 1 trang 165</p>

                        <p><img height=\"452\"
                                ";
        // line 1691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8303.png"), "html", null, true);
        yield "
                                width=\"521\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_21\" data-page=\"21\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"21\">
                    <input type=\"hidden\" name=\"Quiz[21][id]\" value=\"6721a919e275cb5d478e2ce0\">
                    <input type=\"hidden\" name=\"Quiz[21][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 22: Thành phần nào sau đây đi qua khe giữa cơ
                                khít hầu dưới và cơ khít hầu giữa?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch giáp dưới</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch thanh quản dưới</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Thần kinh thanh quản dưới</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Nhánh trong thần kinh thanh quản trên</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"325\"
                                ";
        // line 1768
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8304.png"), "html", null, true);
        yield "
                                width=\"495\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_22\" data-page=\"22\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"22\">
                    <input type=\"hidden\" name=\"Quiz[22][id]\" value=\"6721a919e275cb5d478e2ce1\">
                    <input type=\"hidden\" name=\"Quiz[22][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 23: Khi mô tả về khoang sau hầu, điểm nào sau
                                đây sai?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Là khoang đóng kín phía trên bởi nền sọ</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Là khoang mở thông vào bên dưới qua trung thất trên</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Có thành trước là lá trước cột sống của mạc cổ</div>
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
                               Mạc má hầu tham gia tạo nên khoang sau hầu</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"251\"
                                ";
        // line 1845
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8224.png"), "html", null, true);
        yield "
                                width=\"636\"></p>

                        <p>Sách YDS cuốn 1 trang 165</p>

                        <p><img height=\"362\"
                                ";
        // line 1851
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8226.png"), "html", null, true);
        yield "
                                width=\"602\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_23\" data-page=\"23\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"23\">
                    <input type=\"hidden\" name=\"Quiz[23][id]\" value=\"6721a919e275cb5d478e2ce2\">
                    <input type=\"hidden\" name=\"Quiz[23][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 24: Về hầu, mô tả nào sau đây là
                                sai?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Các cơ ở hầu thuộc loại cơ vân</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Phía sau hầu có khoang sau hầu mở vào trung thất</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Phần khẩu hầu có lỗ hầu vòi tai thông hầu với hòm nhĩ</div>
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
                               Chỗ nối với thực quản là chỗ hẹp nhất của hầu</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"257\"
                                ";
        // line 1928
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8227.png"), "html", null, true);
        yield "
                                width=\"612\"></p>

                        <p><img height=\"153\"
                                ";
        // line 1932
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8228.png"), "html", null, true);
        yield "
                                width=\"618\"></p>

                        <p><img height=\"134\"
                                ";
        // line 1936
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8229.png"), "html", null, true);
        yield "
                                width=\"636\"></p>

                        <p><img height=\"388\"
                                ";
        // line 1940
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8230.png"), "html", null, true);
        yield "
                                width=\"635\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_24\" data-page=\"24\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"24\">
                    <input type=\"hidden\" name=\"Quiz[24][id]\" value=\"6721a919e275cb5d478e2ce3\">
                    <input type=\"hidden\" name=\"Quiz[24][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 25: Cơ nào sau đây là cơ có nhiệm vụ mở
                                thanh môn?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ nhẫn phễu sau</div>
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
                               Cơ giáp phễu</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ phễu ngang</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ nhẫn giáp</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"152\"
                                ";
        // line 2017
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8232.png"), "html", null, true);
        yield "
                                width=\"631\"></p>

                        <p><img height=\"159\"
                                ";
        // line 2021
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8233.png"), "html", null, true);
        yield "
                                width=\"574\"></p>

                        <p><img height=\"291\"
                                ";
        // line 2025
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8234.png"), "html", null, true);
        yield "
                                width=\"501\"></p>

                        <p><img height=\"377\"
                                ";
        // line 2029
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8235.png"), "html", null, true);
        yield "
                                width=\"533\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_25\" data-page=\"25\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"25\">
                    <input type=\"hidden\" name=\"Quiz[25][id]\" value=\"6721a919e275cb5d478e2ce4\">
                    <input type=\"hidden\" name=\"Quiz[25][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 26: Cơ nào sau đây không có nhiệm vụ đóng
                                thanh môn?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ nhẫn phễu bên</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ giáp phễu</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ phễu chéo</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ giáp nhẫn</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"143\"
                                ";
        // line 2106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8236.png"), "html", null, true);
        yield "
                                width=\"410\"></p>

                        <p><img height=\"151\"
                                ";
        // line 2110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8237.png"), "html", null, true);
        yield "
                                width=\"482\"></p>

                        <p><img height=\"163\"
                                ";
        // line 2114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8238.png"), "html", null, true);
        yield "
                                width=\"492\"></p>

                        <p><img height=\"168\"
                                ";
        // line 2118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8239.png"), "html", null, true);
        yield "
                                width=\"591\"></p>

                        <p><img height=\"332\"
                                ";
        // line 2122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8240.png"), "html", null, true);
        yield "
                                width=\"573\"></p>

                        <p>&nbsp;</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_26\" data-page=\"26\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"26\">
                    <input type=\"hidden\" name=\"Quiz[26][id]\" value=\"6721a919e275cb5d478e2ce5\">
                    <input type=\"hidden\" name=\"Quiz[26][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 27: Tổn thương đoạn tủy cổ nào sau đây có
                                thể gây liệt cơ hoành?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Tủy cổ 5</div>
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
                               Tủy cổ 6</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Tủy cổ 7</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Tủy cổ 8</div>

                        </label>
                    </div>



                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_27\" data-page=\"27\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"27\">
                    <input type=\"hidden\" name=\"Quiz[27][id]\" value=\"6721a919e275cb5d478e2ce6\">
                    <input type=\"hidden\" name=\"Quiz[27][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 28: Cơ nhẫn phễu bên được chi phối bởi
                                thần kinh nào sau đây?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Thần kinh hoành</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Thần kinh thanh quản trên</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Thần kinh thiệt hầu</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Thần kinh thanh quản dưới</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"148\"
                                ";
        // line 2269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8243.png"), "html", null, true);
        yield "
                                width=\"606\"></p>

                        <p>Sách YDS cuốn 1 trang 176</p>

                        <p><img height=\"356\"
                                ";
        // line 2275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8246.png"), "html", null, true);
        yield "
                                width=\"429\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_28\" data-page=\"28\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"28\">
                    <input type=\"hidden\" name=\"Quiz[28][id]\" value=\"6721a919e275cb5d478e2ce7\">
                    <input type=\"hidden\" name=\"Quiz[28][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 29: Về khí quản, câu nào sau đây
                                sai?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Được tạo bởi các vòng sụn hình chữ C</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Đi từ cổ vào trung thất trên</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Ở ngực, đi phía trước cung động mạch chủ</div>
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
                               Chia thành hai phế quản ở khoảng gian đốt sống ngực 4 - ngực 5</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"232\"
                                ";
        // line 2352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8247.png"), "html", null, true);
        yield "
                                width=\"560\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_29\" data-page=\"29\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"29\">
                    <input type=\"hidden\" name=\"Quiz[29][id]\" value=\"6721a919e275cb5d478e2ce8\">
                    <input type=\"hidden\" name=\"Quiz[29][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 30: Nhu mô phổi được cấp máu bởi động mạch
                                nào sau đây?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch phổi</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch phế quản</div>
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
                               Động mạch cảnh trong</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch dưới đòn</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"303\"
                                ";
        // line 2429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8248.png"), "html", null, true);
        yield "
                                width=\"641\"></p>

                        <p>Sách YDS cuốn 1 trang 193</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_30\" data-page=\"30\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"30\">
                    <input type=\"hidden\" name=\"Quiz[30][id]\" value=\"6721a919e275cb5d478e2ce9\">
                    <input type=\"hidden\" name=\"Quiz[30][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 31: Ở đường nách giữa, bờ dưới phổi và
                                màng phổi lần lượt ở ngang mức các xương sườn nào?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               6 và 8</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               7 và 9</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               8 và 10</div>
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
                               9 và 11</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"576\"
                                ";
        // line 2508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8249.png"), "html", null, true);
        yield "
                                width=\"479\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_31\" data-page=\"31\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"31\">
                    <input type=\"hidden\" name=\"Quiz[31][id]\" value=\"6721a919e275cb5d478e2cea\">
                    <input type=\"hidden\" name=\"Quiz[31][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 32: So với lồng ngực, đỉnh phổi nằm ở vị
                                trí nào sau đày?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Ở ngang với mặt dưới xương đòn</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Ở phía trên xương đòn khoảng 3 cm</div>
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
                               Ở phía trên xương sườn 1 khoảng 3 cm</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Ở phía dưới xương sườn 1</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"144\"
                                ";
        // line 2585
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8250.png"), "html", null, true);
        yield "
                                width=\"626\"></p>

                        <p>Sách YDS cuốn 1 trang 181</p>

                        <p><img height=\"554\"
                                ";
        // line 2591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8252.png"), "html", null, true);
        yield "
                                width=\"604\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_32\" data-page=\"32\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"32\">
                    <input type=\"hidden\" name=\"Quiz[32][id]\" value=\"6721a919e275cb5d478e2ceb\">
                    <input type=\"hidden\" name=\"Quiz[32][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 33: Thông thường, thùy giữa phổi phải có
                                bao nhiêu phân thùy?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               1 phân thùy</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               2 phân thùy</div>
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
                               3 phân thùy</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               4 phân thùy</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"467\"
                                ";
        // line 2668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8253.png"), "html", null, true);
        yield "
                                width=\"537\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_33\" data-page=\"33\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"33\">
                    <input type=\"hidden\" name=\"Quiz[33][id]\" value=\"6721a919e275cb5d478e2cec\">
                    <input type=\"hidden\" name=\"Quiz[33][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 34: Về mô tả phổi, câu nào sau đây
                                sai?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Phổi phải có ba thùy, phổi trái có hai thùy</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Rốn phổi nằm ở mặt trong của phổi</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Đỉnh phổi nằm ngay phía dưới xương đòn</div>
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
                               Đáy phổi lõm và liên quan với mặt trên cơ hoành</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"277\"
                                ";
        // line 2745
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8254.png"), "html", null, true);
        yield "
                                width=\"547\"></p>

                        <p>Sách YDS cuốn 1 trang 181</p>

                        <p><img height=\"555\"
                                ";
        // line 2751
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8255.png"), "html", null, true);
        yield "
                                width=\"507\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_34\" data-page=\"34\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"34\">
                    <input type=\"hidden\" name=\"Quiz[34][id]\" value=\"6721a919e275cb5d478e2ced\">
                    <input type=\"hidden\" name=\"Quiz[34][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 35: Thành phần nào sau đây không đi qua rốn
                                phổi?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Phế quản chính</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Tĩnh mạch phổi</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Dây chằng phổi</div>
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
                               Động mạch phế quản</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"175\"
                                ";
        // line 2828
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8256.png"), "html", null, true);
        yield "
                                width=\"632\"></p>

                        <p>Sách YDS cuốn 1 trang 181</p>

                        <p><img height=\"574\"
                                ";
        // line 2834
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8257.png"), "html", null, true);
        yield "
                                width=\"509\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_35\" data-page=\"35\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"35\">
                    <input type=\"hidden\" name=\"Quiz[35][id]\" value=\"6721a919e275cb5d478e2cee\">
                    <input type=\"hidden\" name=\"Quiz[35][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 36: Thùy dưới phổi phải thường có mấy
                                phân thùy?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Hai phân thùy</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Ba phân thùy</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Bốn phân thùy</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Sáu phân thùy</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"546\"
                                ";
        // line 2911
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8258.png"), "html", null, true);
        yield "
                                width=\"626\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_36\" data-page=\"36\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"36\">
                    <input type=\"hidden\" name=\"Quiz[36][id]\" value=\"6721a919e275cb5d478e2cef\">
                    <input type=\"hidden\" name=\"Quiz[36][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 37: Thông thường, thùy dưới phổi trái có
                                mấy phân thùy?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Hai phân thùy</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Ba phân thùy</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Bốn phân thùy</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Sáu phân thùy</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"537\"
                                ";
        // line 2988
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8260.png"), "html", null, true);
        yield "
                                width=\"635\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_37\" data-page=\"37\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"37\">
                    <input type=\"hidden\" name=\"Quiz[37][id]\" value=\"6721a919e275cb5d478e2cf0\">
                    <input type=\"hidden\" name=\"Quiz[37][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 38: Chọn câu đúng:</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch phế quản xuất phát từ động mạch dưới đòn</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Tĩnh mạch phế quản đổ vào tĩnh mạch dưới đòn</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Dây chằng phổi tạo bởi hai lá màng phổi sát vào nhau</div>
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
                               Phế quản chính bên phải dài hơn phế quản chính bên trái</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p>A sai, động mạch phế quản trái xuất phát từ động mạch chủ ngực, động mạch phế quản bên phải
                            có thể từ động mạch gian sườn hoặc từ động mạch phế quản trái. B sai vì các tĩnh mạch phế
                            quản đổ về hệ tĩnh mạch đơn. D sai vì rốn phổi trái ở xa đường giữa hơn nên phế quản chính
                            bên trái dài hơn</p>

                        <p><img height=\"540\"
                                ";
        // line 3069
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8261.png"), "html", null, true);
        yield "
                                width=\"535\"></p>

                        <p><img height=\"576\"
                                ";
        // line 3073
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8262.png"), "html", null, true);
        yield "
                                width=\"606\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_38\" data-page=\"38\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"38\">
                    <input type=\"hidden\" name=\"Quiz[38][id]\" value=\"6721a919e275cb5d478e2cf1\">
                    <input type=\"hidden\" name=\"Quiz[38][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 39: Mô tả về màng phổi thành, chi tiết nào
                                sau đây đúng?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Lách vào các khe gian thùy</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Dính chặt vào nhu mô phổi</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Đỉnh màng phổi luôn thấp hơn xương sườn 1</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Ngách sườn hoành tương ứng mức xương sườn 10 ở đường nách giữa</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"575\"
                                ";
        // line 3150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8263.png"), "html", null, true);
        yield "
                                width=\"520\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_39\" data-page=\"39\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"39\">
                    <input type=\"hidden\" name=\"Quiz[39][id]\" value=\"6721a919e275cb5d478e2cf2\">
                    <input type=\"hidden\" name=\"Quiz[39][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 40: Mô tà về màng phổi tạng, chi tiết nào
                                sau đây sai?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Dính chặt vào nhu mô phổi</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Lách vào các khe gian thùy</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Không liên tục với màng phổi thành</div>
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
                               Tham gia tạo thành dây chằng phổi</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"129\"
                                ";
        // line 3227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8264.png"), "html", null, true);
        yield "
                                width=\"533\"></p>

                        <p>Sách YDS cuốn 1 trang 188</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_40\" data-page=\"40\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"40\">
                    <input type=\"hidden\" name=\"Quiz[40][id]\" value=\"6721a919e275cb5d478e2cf3\">
                    <input type=\"hidden\" name=\"Quiz[40][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 41: Đặc điểm nào sau đây của màng phổi và ổ
                                màng phổi là đúng?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Áp suất trong ổ màng phổi nhỏ hơn áp suất khí trời</div>
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
                               Ổ màng phổi chứa nhiều dịch giúp nuôi dưỡng màng phổi</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Màng phổi thành lách vào khe gian thùy phổi</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Giới hạn dưới của phổi cũng là giới hạn dưới của màng phổi</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"198\"
                                ";
        // line 3306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8265.png"), "html", null, true);
        yield "
                                width=\"644\"></p>

                        <p>Sách YDS cuốn 1 trang 189</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_41\" data-page=\"41\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"41\">
                    <input type=\"hidden\" name=\"Quiz[41][id]\" value=\"6721a919e275cb5d478e2cf4\">
                    <input type=\"hidden\" name=\"Quiz[41][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 42: Mô tả về hình thể ngoài của phổi, chi
                                tiết nào sau đây sai?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Gồm một đỉnh, một đáy, hai mặt và hai bờ</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Phổi phải có khe chếch và khe ngang</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Mặt trong phổi bên phải có rãnh động mạch chủ ngực</div>
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
                               Đáy phổi liên quan với cơ hoành</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"467\"
                                ";
        // line 3385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8266.png"), "html", null, true);
        yield "
                                width=\"646\"></p>

                        <p><img height=\"561\"
                                ";
        // line 3389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8267.png"), "html", null, true);
        yield "
                                width=\"471\"></p>

                        <p><img height=\"217\"
                                ";
        // line 3393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8268.png"), "html", null, true);
        yield "
                                width=\"583\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_42\" data-page=\"42\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"42\">
                    <input type=\"hidden\" name=\"Quiz[42][id]\" value=\"6721a919e275cb5d478e2cf5\">
                    <input type=\"hidden\" name=\"Quiz[42][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 43: Ở đường cạnh cột sống, bờ dưới phổi
                                và màng phổi lần lượt ở ngang mức các xương sườn</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               6 và 8</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               7 và 9</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               8 và 10</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               10 và 12</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"475\"
                                ";
        // line 3470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8223.png"), "html", null, true);
        yield "
                                width=\"563\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_43\" data-page=\"43\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"43\">
                    <input type=\"hidden\" name=\"Quiz[43][id]\" value=\"6721a919e275cb5d478e2cf6\">
                    <input type=\"hidden\" name=\"Quiz[43][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 44: Câu nào sau đây mô tả đúng về liên
                                quan giữa động mạch phổi và phế quản chính bên trái?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch phổi ở trên phế quản chính</div>
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
                               Động mạch phổi ở dưới phế quản chính</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch phổi ở trước phế quản chính</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch phổi ở sau phế quản chính</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"240\"
                                ";
        // line 3547
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8222.png"), "html", null, true);
        yield "
                                width=\"637\"></p>

                        <p>Sách YDS cuốn 1 trang 187</p>

                        <p><img height=\"483\"
                                ";
        // line 3553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8221.png"), "html", null, true);
        yield "
                                width=\"636\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_44\" data-page=\"44\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"44\">
                    <input type=\"hidden\" name=\"Quiz[44][id]\" value=\"6721a919e275cb5d478e2cf7\">
                    <input type=\"hidden\" name=\"Quiz[44][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 45: Câu nào sau đây mô tả đúng về liên
                                quan giữa động mạch phổi và phế quản chính ở bên phải?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch phổi ở trên phế quản chính</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch phổi ở dưới phế quản chính</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch phổi ở trước phế quản chính</div>
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
                               Động mạch phổi ở sau phế quản chính</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"329\"
                                ";
        // line 3630
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8218.png"), "html", null, true);
        yield "
                                width=\"645\"></p>

                        <p>Sách YDS cuốn 1 trang 186</p>

                        <p><img height=\"464\"
                                ";
        // line 3636
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8220.png"), "html", null, true);
        yield "
                                width=\"634\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_45\" data-page=\"45\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"45\">
                    <input type=\"hidden\" name=\"Quiz[45][id]\" value=\"6721a919e275cb5d478e2cf8\">
                    <input type=\"hidden\" name=\"Quiz[45][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 46: Chi tiết nào sau đây không có ở mặt
                                trong phổi trái?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Rãnh động mạch dưới đòn</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Rãnh động mạch chủ ngực</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Rãnh tĩnh mạch đơn</div>
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
                               Rãnh thực quản</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"573\"
                                ";
        // line 3713
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8217.png"), "html", null, true);
        yield "
                                width=\"477\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_46\" data-page=\"46\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"46\">
                    <input type=\"hidden\" name=\"Quiz[46][id]\" value=\"6721a919e275cb5d478e2cf9\">
                    <input type=\"hidden\" name=\"Quiz[46][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 47: Chi tiết nào sau đây không có ở mặt
                                trong phổi phải?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Rãnh động mạch dưới đòn</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Rãnh thực quản</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Rãnh tĩnh mạch tay đầu</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Rãnh động mạch chủ ngực</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"573\"
                                ";
        // line 3790
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8216.png"), "html", null, true);
        yield "
                                width=\"477\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_47\" data-page=\"47\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"47\">
                    <input type=\"hidden\" name=\"Quiz[47][id]\" value=\"6721a919e275cb5d478e2cfa\">
                    <input type=\"hidden\" name=\"Quiz[47][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 48: Trước khi vào rốn phổi, động mạch phổi
                                bên phải đi</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Phía trước tĩnh mạch chủ trên</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Phía sau tĩnh mạch chủ trên</div>
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
                               Phía trên tĩnh mạch chủ trên</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Phía dưới tĩnh mạch chủ trên</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"203\"
                                ";
        // line 3867
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8214.png"), "html", null, true);
        yield "
                                width=\"625\"></p>

                        <p>Sách YDS cuốn 1 trang 191</p>

                        <p><img height=\"359\"
                                ";
        // line 3873
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8215.png"), "html", null, true);
        yield "
                                width=\"630\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_48\" data-page=\"48\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"48\">
                    <input type=\"hidden\" name=\"Quiz[48][id]\" value=\"6721a919e275cb5d478e2cfb\">
                    <input type=\"hidden\" name=\"Quiz[48][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 49: Động mạch phế quản trái thường xuất
                                phát từ động mạch nào?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch gian sườn sau bên trái</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch phổi trái</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch chủ ngực</div>
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
                               Động mạch màng ngoài tim hoành</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"297\"
                                ";
        // line 3950
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8213.png"), "html", null, true);
        yield "
                                width=\"630\"></p>

                        <p>Sách YDS cuốn 1 trang 193</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_49\" data-page=\"49\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"49\">
                    <input type=\"hidden\" name=\"Quiz[49][id]\" value=\"6721a919e275cb5d478e2cfc\">
                    <input type=\"hidden\" name=\"Quiz[49][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 50: Thân động mạch phổi chia thành động mạch phổi
                                phải và động mạch phổi trái ở vị trí ngang với vị trí nào?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Góc ức</div>
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
                               Nền xương ức</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Bờ trên xương đòn trái</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Bờ trên xương sườn 1</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"220\"
                                ";
        // line 4029
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8212.png"), "html", null, true);
        yield "
                                width=\"647\"></p>

                        <p>Sách YDS cuốn 1 trang 191</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_50\" data-page=\"50\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"50\">
                    <input type=\"hidden\" name=\"Quiz[50][id]\" value=\"6721a919e275cb5d478e2cfd\">
                    <input type=\"hidden\" name=\"Quiz[50][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 51: Bờ trước của phổi là ranh giới giữa
                                các cấu trúc nào?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Mặt trước và mặt trong</div>
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
                               Đáy phổi và màng phổi</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Rãnh động mạch chủ và rãnh tĩnh mạch chủ</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Thùy trên và thùy dưới</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"147\"
                                ";
        // line 4108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8210.png"), "html", null, true);
        yield "
                                width=\"634\"></p>

                        <p>Sách YDS cuốn 1 trang 182</p>

                        <p><img height=\"452\"
                                ";
        // line 4114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8211.png"), "html", null, true);
        yield "
                                width=\"639\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_51\" data-page=\"51\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"51\">
                    <input type=\"hidden\" name=\"Quiz[51][id]\" value=\"6721a919e275cb5d478e2cfe\">
                    <input type=\"hidden\" name=\"Quiz[51][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 52: Tĩnh mạch phế quản bên phải thường đồ
                                về tĩnh mạch nào?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Tĩnh mạch ngực trong</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Tĩnh mạch đơn</div>
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
                               Tĩnh mạch bán đơn</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Tĩnh mạch gian sườn</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"105\"
                                ";
        // line 4191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8209.png"), "html", null, true);
        yield "
                                width=\"627\"></p>

                        <p>Sách YDS cuốn 1 trang 193</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_52\" data-page=\"52\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"52\">
                    <input type=\"hidden\" name=\"Quiz[52][id]\" value=\"6721a919e275cb5d478e2cff\">
                    <input type=\"hidden\" name=\"Quiz[52][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 53: Cơ nào sau đây không tham gia vào động
                                tác thở ra gắng sức?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ hoành</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ chéo bụng trong</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ thẳng bụng</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ ức đòn chũm</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p>Thở ra gắng sức liên quan đến các cơ bụng (như cơ chéo bụng trong, cơ thẳng bụng) và các cơ
                            khác giúp tăng áp lực trong ổ bụng, đẩy cơ hoành lên để đẩy không khí ra khỏi phổi.</p>

                        <p>Cơ ức đòn chũm là cơ tham gia vào động tác hít vào gắng sức chứ không tham gia thở ra</p>

                        <p><img height=\"134\"
                                ";
        // line 4275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8208.png"), "html", null, true);
        yield "
                                width=\"645\">.</p>

                        <p>Sách YDS cuốn 1 trang 204</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_53\" data-page=\"53\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"53\">
                    <input type=\"hidden\" name=\"Quiz[53][id]\" value=\"6721a919e275cb5d478e2d00\">
                    <input type=\"hidden\" name=\"Quiz[53][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 54: Cơ nào sau đây không tham gia vào động
                                tác hít vào gắng sức?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ chéo bụng ngoài</div>
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
                               Cơ ức đòn chũm</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Các cơ gian sườn</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ ngực lớn</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p>Hít vào gắng sức liên quan đến các cơ làm tăng thể tích lồng ngực, như cơ ức đòn chũm, các cơ
                            gian sườn, cơ ngực lớn, và cơ hoành.</p>

                        <p>Cơ chéo bụng ngoài không tham gia hít vào, mà tham gia vào động tác thở ra bằng cách hỗ trợ
                            tăng áp lực ổ bụng.</p>

                        <p><img height=\"221\"
                                ";
        // line 4360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8207.png"), "html", null, true);
        yield "
                                width=\"643\"></p>

                        <p>Sách YDS cuốn 1 trang 153</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_54\" data-page=\"54\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"54\">
                    <input type=\"hidden\" name=\"Quiz[54][id]\" value=\"6721a919e275cb5d478e2d01\">
                    <input type=\"hidden\" name=\"Quiz[54][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 55: Cơ nào sau đây không hoạt động góp phần tham
                                gia vào động tác hít vào gắng sức?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ ức đòn chũm</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ chéo bụng trong</div>
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
                               Các cơ gian sườn</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ ngực lớn</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"219\"
                                ";
        // line 4439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8205.png"), "html", null, true);
        yield "
                                width=\"658\"></p>

                        <p>Sách YDS cuốn 1 trang 153</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_55\" data-page=\"55\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"55\">
                    <input type=\"hidden\" name=\"Quiz[55][id]\" value=\"6721a919e275cb5d478e2d02\">
                    <input type=\"hidden\" name=\"Quiz[55][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 56: Cơ nào sau đây có tác dụng làm tăng
                                đường kính ngang cùa lồng ngực?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ hoành</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ ngực lớn</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ ngực bé</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ gian sườn ngoài</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"117\"
                                ";
        // line 4518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8204.png"), "html", null, true);
        yield "
                                width=\"648\"></p>

                        <p>Sách YDS cuốn 1 trang 204</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_56\" data-page=\"56\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"56\">
                    <input type=\"hidden\" name=\"Quiz[56][id]\" value=\"6721a919e275cb5d478e2d03\">
                    <input type=\"hidden\" name=\"Quiz[56][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 57: Cơ hoành là giới hạn dưới của lồng ngực đồng
                                thời ngăn cách lồng ngực với ổ bụng. Đi xuyên qua cơ hoành có các thành phần sau, ngoại
                                trừ?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Động mạch chủ</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Tĩnh mạch chủ dưới</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Thần kinh lang thang</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Chuỗi hạch giao cảm ngực</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"443\"
                                ";
        // line 4598
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8203.png"), "html", null, true);
        yield "
                                width=\"640\"></p>

                        <p>Sách YDS cuốn 1 trang 202</p>

                        <p><img height=\"345\"
                                ";
        // line 4604
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8242.png"), "html", null, true);
        yield "
                                width=\"555\"></p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_57\" data-page=\"57\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"57\">
                    <input type=\"hidden\" name=\"Quiz[57][id]\" value=\"6721a919e275cb5d478e2d04\">
                    <input type=\"hidden\" name=\"Quiz[57][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 58: Cơ nào sau đây đóng vai trò quan trọng nhất
                                trong cả quá trình hô hấp bình thường và hô hấp gắng sức?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ ngực lớn</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ thẳng bụng</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ hoành</div>
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
                               Cơ ức đòn chũm</div>

                        </label>
                    </div>



                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_58\" data-page=\"58\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"58\">
                    <input type=\"hidden\" name=\"Quiz[58][id]\" value=\"6721a919e275cb5d478e2d05\">
                    <input type=\"hidden\" name=\"Quiz[58][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 59: Các hiện tượng sau đây xảy ra ở đầu
                                thì hít vào, ngoại trừ?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ hoành bắt đầu giãn nghỉ</div>
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
                               Áp suất khoang ngực giảm xuống</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Áp suất khoang bụng tăng lên</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Thể tích khoang bụng giảm xuống</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"351\"
                                ";
        // line 4749
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8201.png"), "html", null, true);
        yield "
                                width=\"630\"></p>

                        <p>Sách YDS cuốn 1 trang 203</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_59\" data-page=\"59\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"59\">
                    <input type=\"hidden\" name=\"Quiz[59][id]\" value=\"6721a919e275cb5d478e2d06\">
                    <input type=\"hidden\" name=\"Quiz[59][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 60: Cơ nào sau đây có tác dụng hỗ trợ
                                động tác thở ra?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ ức đòn chũm</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ gian sườn ngoài</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ ngực bé</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ thẳng bụng</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"129\"
                                ";
        // line 4828
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8200.png"), "html", null, true);
        yield "
                                width=\"628\"></p>

                        <p>Sách YDS cuốn 1 trang 204</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_60\" data-page=\"60\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"60\">
                    <input type=\"hidden\" name=\"Quiz[60][id]\" value=\"6721a919e275cb5d478e2d07\">
                    <input type=\"hidden\" name=\"Quiz[60][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 61: Hiện tượng nào sau đây xảy ra khi cơ
                                hoành co?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Vòm hoành nhô cao</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Áp suất khoang ngực tăng</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Áp suất khoang bụng giảm</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Thể tích khoang ngực tăng</div>
                            <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"150\"
                                ";
        // line 4907
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8199.png"), "html", null, true);
        yield "
                                width=\"623\"></p>

                        <p>Sách YDS cuốn 1 trang 204</p>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class=\"clearfix\"></div>
            <div class=\"block-quiz-test\" id=\"div_block_quiz_test_61\" data-page=\"61\">

                <div class=\"w3-padding w3-light-grey block-question\" style=\"background:#fff;\" data-page=\"61\">
                    <input type=\"hidden\" name=\"Quiz[61][id]\" value=\"6721a919e275cb5d478e2d08\">
                    <input type=\"hidden\" name=\"Quiz[61][sort]\" value=\"\">
                    <div class=\"w3-large\">
                        <span class=\"quiz-title\"><strong>Câu 62: Cơ nào sau đây có tác dụng làm tãng
                                áp suất khoang ngực ở thì thở ra?</strong></span><br>
                        <div class=\"text-\">(Bỏ qua)</div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ ức đòn chũm</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ hoành</div>

                        </label>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"radio\">
                        <label class=\"right-answer  area-answer-quiz d-flex border rounded mb-2 pr-2 \">
                            <div class=\"d-flex font-weight-bold chart-answer\" style=\"background: #dee1e6\">
                                
                                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
                            </div>
                            <div class=\"w-100 border-left p-1 text-answer\">
                               Cơ thẳng bụng</div>
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
                               Cơ gian sườn ngoài</div>

                        </label>
                    </div>


                    <div class=\"quiz_note hidden\">
                        <p>
                            <strong>Gợi ý: </strong>
                        </p>
                        <p><img height=\"332\"
                                ";
        // line 4986
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8198.png"), "html", null, true);
        yield "
                                width=\"642\"></p>

                        <p>Sách YDS cuốn 1 trang 204</p>

                        <p><img height=\"566\"
                                ";
        // line 4992
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/image-8241.png"), "html", null, true);
        yield "
                                width=\"551\"></p>
                        <p></p>
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
        return "quizz/contents/hohap.html";
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
        return array (  5326 => 4992,  5317 => 4986,  5235 => 4907,  5153 => 4828,  5071 => 4749,  4923 => 4604,  4914 => 4598,  4831 => 4518,  4749 => 4439,  4667 => 4360,  4579 => 4275,  4492 => 4191,  4412 => 4114,  4403 => 4108,  4321 => 4029,  4239 => 3950,  4159 => 3873,  4150 => 3867,  4070 => 3790,  3990 => 3713,  3910 => 3636,  3901 => 3630,  3821 => 3553,  3812 => 3547,  3732 => 3470,  3652 => 3393,  3645 => 3389,  3638 => 3385,  3556 => 3306,  3474 => 3227,  3394 => 3150,  3314 => 3073,  3307 => 3069,  3223 => 2988,  3143 => 2911,  3063 => 2834,  3054 => 2828,  2974 => 2751,  2965 => 2745,  2885 => 2668,  2805 => 2591,  2796 => 2585,  2716 => 2508,  2634 => 2429,  2554 => 2352,  2474 => 2275,  2465 => 2269,  2315 => 2122,  2308 => 2118,  2301 => 2114,  2294 => 2110,  2287 => 2106,  2207 => 2029,  2200 => 2025,  2193 => 2021,  2186 => 2017,  2106 => 1940,  2099 => 1936,  2092 => 1932,  2085 => 1928,  2005 => 1851,  1996 => 1845,  1916 => 1768,  1836 => 1691,  1827 => 1685,  1747 => 1608,  1740 => 1604,  1733 => 1600,  1726 => 1596,  1646 => 1519,  1566 => 1442,  1485 => 1364,  1478 => 1360,  1397 => 1282,  1388 => 1276,  1308 => 1199,  1301 => 1195,  1221 => 1118,  1212 => 1112,  1132 => 1035,  1125 => 1031,  1045 => 954,  964 => 876,  884 => 799,  804 => 722,  797 => 718,  790 => 714,  710 => 637,  703 => 633,  623 => 556,  614 => 550,  535 => 474,  526 => 468,  376 => 321,  294 => 242,  210 => 161,  129 => 83,  120 => 77,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "quizz/contents/hohap.html", "D:\\Projects\\minic2\\src\\app\\Views\\quizz\\contents\\hohap.html");
    }
}
