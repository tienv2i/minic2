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

/* quizz/contents/timmach.html */
class __TwigTemplate_f8b9880d1b96e0f02fed9af78cf8f4d9 extends Template
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
        yield "<div class=\"container my-4\" style=\"max-width: 720px\">
  <div class=\"main-test detail-quiz-course-result\" style=\"overflow: hidden\">
    <div class=\"quiz_name text-center\" style=\"margin: 0px; margin-bottom: 20px\">
      <h3>Module tim mạch</h3>
    </div>
    <div class=\"col-md-12 col-sm-12\">
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_0\" data-page=\"0\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"0\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[0][id]\"
            value=\"6721a5d1e275cbe0768e2cbc\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 1: Các động mạch sau đây xuất hiện từ mặt trước động mạch
                cảnh ngoài, ngoại trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch giáp trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lưỡi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mặt</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch hầu lên
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_1\" data-page=\"1\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"1\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[1][id]\"
            value=\"6721a5d1e275cbe0768e2cbd\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 2: Động mạch mặt có các đặc điểm sau đây, ngoại
                trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Có nguyên ủy là mặt trước động mạch cảnh ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Trên đường đi, bắt chéo bờ xương hàm dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cho một trong những nhánh bên có tên là động mạch má
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thông nối dồi dào với động mạch bên đối diện
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch má là nhánh của động mạch hàm
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_2\" data-page=\"2\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"2\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[2][id]\"
            value=\"6721a5d1e275cbe0768e2cbe\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 3: Thần kinh nào sau đây bắt chéo phía ngoài động mạch lưỡi
                hai lần?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thần kinh lưỡi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thần kinh hạ thiệt
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thần kinh thiệt hầu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thần kinh hàm dưới
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_3\" data-page=\"3\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"3\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[3][id]\"
            value=\"6721a5d1e275cbe0768e2cbf\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 4: Khi mô tả đường đi của động mạch hàm, người ta chia động
                mạch thành ba đoạn dựa vào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Cơ cắn</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Cơ mút</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cơ chân bướm trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cơ chân bướm ngoài
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch hàm bắt chéo phía ngoài cơ chân
              bướm ngoài
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_4\" data-page=\"4\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"4\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[4][id]\"
            value=\"6721a5d1e275cbe0768e2cc0\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 5: Động mạch nào sau đây không phải là nhánh bên của động
                mạch cảnh ngoài?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch hầu lên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch đốt sống
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lưỡi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mặt</div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch đốt sống là nhánh của động mạch
              dưới đòn
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_5\" data-page=\"5\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"5\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[5][id]\"
            value=\"6721a5d1e275cbe0768e2cc1\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 6: Động mạch cảnh ngoài chia thành hai nhánh tận là động
                mạch hàm và động mạch thái dương nông ở vị trí nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Phía sau cổ xương hàm dưới
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ngang góc hàm dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ngang bờ trên sụn giáp
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Phía trước lỗ tai ngoài
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch cảnh ngoài chia thành hai nhánh
              tận này ở ngang mức cổ xương hàm dưới, ngay sau khi nó đi qua
              tuyến mang tai.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_6\" data-page=\"6\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"6\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[6][id]\"
            value=\"6721a5d1e275cbe0768e2cc2\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 7: Sau khi đi qua khỏi cổ xương hàm dưới, động mạch hàm đi
                ngang qua mặt ngoài của?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cơ chân bướm trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Cơ hàm mỏng</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cơ chân bướm ngoài
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Cơ cắn</div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_7\" data-page=\"7\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"7\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[7][id]\"
            value=\"6721a5d1e275cbe0768e2cc3\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 8: Động mạch dưới ổ mắt là nhánh của?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mặt</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mắt</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trên ổ mắt
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch hàm</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_8\" data-page=\"8\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"8\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[8][id]\"
            value=\"6721a5d1e275cbe0768e2cc4\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 9: Động mạch nào sau đây xuất phát từ động mạch hàm trước
                khi động mạch này đi bắt ngang qua cơ chân bướm ngoài?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch huyệt răng dưới
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch huyệt răng trên sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cơ cắn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch khẩu cái xuống
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_9\" data-page=\"9\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"9\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[9][id]\"
            value=\"6721a5d1e275cbe0768e2cc5\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 10: Sau khi đi qua khỏi cơ chân bướm ngoài, động mạch hàm
                cho nhánh nào sau đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch má</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bướm khẩu cái
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thái dương sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch màng não giữa
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch hàm (Maxillary artery) có ba
              phần chính, mỗi phần lại có các nhánh cụ thể. Dưới đây là các
              nhánh chia theo từng phần của động mạch hàm:<br /><br />1. Phần
              hàm (Mandibular part) - Phần đầu tiên của động mạch hàm:<br />Động
              mạch tai sâu (Deep auricular artery): Cấp máu cho ống tai
              ngoài.<br />Động mạch nhĩ trước (Anterior tympanic artery): Cấp
              máu cho màng nhĩ.<br />Động mạch màng não giữa (Middle meningeal
              artery): Cấp máu cho màng não và xương sọ.<br />Động mạch màng não
              phụ (Accessory meningeal artery): Cấp máu cho phần nền sọ.<br />Động
              mạch huyệt răng dưới (Inferior alveolar artery): Cấp máu cho răng
              và xương hàm dưới.<br />2. Phần chân bướm (Pterygoid part) - Phần
              giữa của động mạch hàm:<br />Động mạch nhai (Masseteric artery):
              Cấp máu cho cơ nhai.<br />Các động mạch thái dương sâu (Deep
              temporal arteries - trước và sau): Cấp máu cho cơ thái dương.<br />Động
              mạch chân bướm (Pterygoid artery): Cấp máu cho cơ chân bướm.<br />Động
              mạch má (Buccal artery): Cấp máu cho vùng má và cơ má.<br />3.
              Phần chân bướm-khẩu cái (Pterygopalatine part) - Phần cuối của
              động mạch hàm:<br />Động mạch dưới hốc mắt (Infraorbital artery):
              Cấp máu cho vùng dưới hốc mắt và má.<br />Động mạch khẩu cái xuống
              (Descending palatine artery): Cấp máu cho vòm miệng và phần sau
              của khoang mũi.<br />Động mạch bướm khẩu cái (Sphenopalatine
              artery): Cấp máu cho khoang mũi.<br />Động mạch huyệt răng trên
              sau (Posterior superior alveolar artery): Cấp máu cho răng hàm
              trên.<br />Động mạch ống chân bướm (Artery of the pterygoid
              canal): Cấp máu cho ống chân bướm.<br />Động mạch hầu (Pharyngeal
              artery): Cấp máu cho vùng hầu.<br />Những nhánh này của động mạch
              hàm cung cấp máu cho nhiều cấu trúc quan trọng ở vùng mặt, hàm, và
              sọ.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_10\" data-page=\"10\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"10\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[10][id]\"
            value=\"6721a5d1e275cbe0768e2cc6\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 11: Động mạch ngang mặt là nhánh của?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mặt</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thái dương nông
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch hàm</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch góc</div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch thái dương nông (Superficial
              temporal artery) có các nhánh chính sau:<br /><br />Nhánh ngang
              mặt (Transverse facial artery): Cấp máu cho da và cơ ở vùng
              mặt.<br />Nhánh trán (Frontal branch): Đi lên phía trước và cấp
              máu cho vùng trán.<br />Nhánh đỉnh (Parietal branch): Đi về phía
              sau và cấp máu cho vùng đỉnh đầu.<br />Nhánh thái dương giữa
              (Middle temporal artery): Cấp máu cho cơ thái dương.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_11\" data-page=\"11\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"11\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[11][id]\"
            value=\"6721a5d1e275cbe0768e2cc7\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 12: Khi cần, ta có thể bắt mạch ở phía trên mỏm gò má, ngay
                trước lỗ tai ngoài. Đây là vị trí của động mạch nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngang mặt
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mặt</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thái dương nông
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thái dương sâu
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_12\" data-page=\"12\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"12\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[12][id]\"
            value=\"6721a5d1e275cbe0768e2cc8\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 13: Một động mạch đi vào tuyến mang tai từ sau ra trước rồi
                bắt chéo phía ngoài cơ cắn và ở phía dưới cung gò má, đó
                là?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngang mặt
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cơ cắn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch hàm</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch má</div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_13\" data-page=\"13\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"13\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[13][id]\"
            value=\"6721a5d1e275cbe0768e2cc9\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 14: Thân động mạch cánh tay đầu chia thành động mạch cảnh
                chung phải và động mạch dưới đòn phải ở ngang vị trí?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Sau khớp sụn sườn 1 bên phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Sau khớp ức đòn bên phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Bờ trên mỏm gai đốt sống cổ 4
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Bờ trên xương đòn bên phải
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_14\" data-page=\"14\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"14\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[14][id]\"
            value=\"6721a5d1e275cbe0768e2cca\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 15: Sau khi cho nhánh động mạch giáp trên, động mạch cảnh
                ngoài sẽ cho nhánh kế tiếp là?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lưỡi
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mặt</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch hầu lên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch hàm</div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Hầu lên<br />Giáp trên<br />Lưỡi<br />Mặt<br />Chẩm<br />Tai
              sau<br />(Nhánh tận) Hàm trên<br />(Nhánh tận) Thái dương nông
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_15\" data-page=\"15\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"15\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[15][id]\"
            value=\"6721a5d1e275cbe0768e2ccb\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 16: Về các động mạch cảnh, câu nào sau đây đúng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Hai động mạch cảnh chung xuất phát từ cung động mạch chủ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cảnh chung tận hết ở ngang mức củ cảnh
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ở vùng cổ, động mạch cảnh ngoài đi kèm với tĩnh mạch cảnh ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ở vùng cổ, động mạch cảnh trong không cho nhánh bên
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_16\" data-page=\"16\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"16\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[16][id]\"
            value=\"6721a5d1e275cbe0768e2ccc\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 17: Động mạch môi dưới là nhánh bên của?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lưỡi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mặt</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch hàm</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bướm khẩu cái
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch mặt (Facial artery) có các nhánh
              chính cấp máu cho các cấu trúc ở vùng mặt, môi, và mũi. Các nhánh
              của động mạch mặt bao gồm:<br /><br />Nhánh khẩu cái lên
              (Ascending palatine artery): Cấp máu cho khẩu cái mềm, amidan và
              các cơ vùng họng.<br />Nhánh hạnh nhân (Tonsillar artery): Cấp máu
              cho hạnh nhân khẩu cái.<br />Nhánh dưới cằm (Submental artery):
              Cấp máu cho vùng dưới cằm và sàn miệng.<br />Các nhánh môi dưới
              (Inferior labial artery): Cấp máu cho môi dưới.<br />Các nhánh môi
              trên (Superior labial artery): Cấp máu cho môi trên và phần mũi
              gần môi.<br />Nhánh mũi bên (Lateral nasal artery): Cấp máu cho
              phần bên của mũi.<br />Nhánh góc (Angular artery): Nhánh cuối của
              động mạch mặt, cấp máu cho góc trong của mắt và liên kết với các
              nhánh từ động mạch mắt.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_17\" data-page=\"17\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"17\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[17][id]\"
            value=\"6721a5d1e275cbe0768e2ccd\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 18: Thành phần nào sau đây đi trong phần sâu tuyến nước bọt
                mang tai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch hàm</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thần kinh lang thang
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cảnh ngoài
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Thần kinh mặt</div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_18\" data-page=\"18\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"18\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[18][id]\"
            value=\"6721a5d1e275cbe0768e2cce\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 19: Động mạch nào sau đây không xuất phát từ động mạch cảnh
                ngoài?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cổ sâu
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch hàm</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lưỡi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chẩm
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch cổ sâu xuất phát từ thân sườn cổ
              của động mạch dưới đòn
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_19\" data-page=\"19\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"19\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[19][id]\"
            value=\"6721a5d1e275cbe0768e2ccf\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 20: Động mạch cơ cắn là nhánh của?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cảnh ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới đòn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mặt</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch hàm</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_20\" data-page=\"20\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"20\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[20][id]\"
            value=\"6721a5d1e275cbe0768e2cd0\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 21: Động mạch lưỡi cho các nhánh sau đây, ngoại
                trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nhánh lưng lưỡi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nhánh động mạch lưỡi sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nhánh hạnh nhân khẩu cái
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nhánh trên móng
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Nhánh hạnh nhân khẩu cái của động mạch
              mặt<br />Động mạch lưỡi (Lingual artery) là một nhánh của động
              mạch cảnh ngoài và cấp máu cho lưỡi, sàn miệng và các cấu trúc lân
              cận. Động mạch lưỡi có các nhánh chính sau:<br /><br />Động mạch
              trên móng (Suprahyoid artery):<br /><br />Cấp máu cho các cơ ở
              vùng trên xương móng.<br />Nhánh lưng lưỡi (Dorsal lingual
              arteries):<br /><br />Các nhánh nhỏ đi về phía sau, cấp máu cho
              mặt lưng lưỡi, hạnh nhân lưỡi (lingual tonsil), và phần mềm lân
              cận.<br />Động mạch dưới lưỡi (Sublingual artery):<br /><br />Đi
              về phía trước dưới lưỡi, cấp máu cho sàn miệng, tuyến dưới lưỡi,
              và nướu răng của vùng lưỡi.<br />Động mạch sâu lưỡi (Deep lingual
              artery):<br /><br />Là nhánh tận của động mạch lưỡi, chạy dọc theo
              mặt dưới lưỡi và cấp máu cho phần trước của lưỡi.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_21\" data-page=\"21\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"21\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[21][id]\"
            value=\"6721a5d1e275cbe0768e2cd1\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 22: Động mạch nào sau đây cho nhánh động mạch ngang
                mặt?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch hàm</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mặt</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thái dương nông
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tai sau
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch thái dương nông (Superficial
              temporal artery) có các nhánh chính sau:<br /><br />Nhánh ngang
              mặt (Transverse facial artery): Cấp máu cho da và cơ ở vùng
              mặt.<br />Nhánh trán (Frontal branch): Đi lên phía trước và cấp
              máu cho vùng trán.<br />Nhánh đỉnh (Parietal branch): Đi về phía
              sau và cấp máu cho vùng đỉnh đầu.<br />Nhánh thái dương giữa
              (Middle temporal artery): Cấp máu cho cơ thái dương.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_22\" data-page=\"22\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"22\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[22][id]\"
            value=\"6721a5d1e275cbe0768e2cd2\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 23: Nhánh nào sau đây không thuộc động mạch hàm?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch góc</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch huyệt răng trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch nhĩ trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch màng não giữa
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch góc là đoạn cuối cùa động mạch
              mặt<br />Động mạch hàm (Maxillary artery) có ba phần chính, mỗi
              phần lại có các nhánh cụ thể. Dưới đây là các nhánh chia theo từng
              phần của động mạch hàm:<br /><br />1. Phần hàm (Mandibular part) -
              Phần đầu tiên của động mạch hàm:<br />Động mạch tai sâu (Deep
              auricular artery): Cấp máu cho ống tai ngoài.<br />Động mạch nhĩ
              trước (Anterior tympanic artery): Cấp máu cho màng nhĩ.<br />Động
              mạch màng não giữa (Middle meningeal artery): Cấp máu cho màng não
              và xương sọ.<br />Động mạch màng não phụ (Accessory meningeal
              artery): Cấp máu cho phần nền sọ.<br />Động mạch huyệt răng dưới
              (Inferior alveolar artery): Cấp máu cho răng và xương hàm dưới.<br />2.
              Phần chân bướm (Pterygoid part) - Phần giữa của động mạch hàm:<br />Động
              mạch nhai (Masseteric artery): Cấp máu cho cơ nhai.<br />Các động
              mạch thái dương sâu (Deep temporal arteries - trước và sau): Cấp
              máu cho cơ thái dương.<br />Động mạch chân bướm (Pterygoid
              artery): Cấp máu cho cơ chân bướm.<br />Động mạch má (Buccal
              artery): Cấp máu cho vùng má và cơ má.<br />3. Phần chân bướm-khẩu
              cái (Pterygopalatine part) - Phần cuối của động mạch hàm:<br />Động
              mạch dưới hốc mắt (Infraorbital artery): Cấp máu cho vùng dưới hốc
              mắt và má.<br />Động mạch khẩu cái xuống (Descending palatine
              artery): Cấp máu cho vòm miệng và phần sau của khoang mũi.<br />Động
              mạch bướm khẩu cái (Sphenopalatine artery): Cấp máu cho khoang
              mũi.<br />Động mạch huyệt răng trên sau (Posterior superior
              alveolar artery): Cấp máu cho răng hàm trên.<br />Động mạch ống
              chân bướm (Artery of the pterygoid canal): Cấp máu cho ống chân
              bướm.<br />Động mạch hầu (Pharyngeal artery): Cấp máu cho vùng
              hầu.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_23\" data-page=\"23\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"23\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[23][id]\"
            value=\"6721a5d1e275cbe0768e2cd3\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 24: Nhánh nào sau đây không thuộc động mạch dưới
                đòn?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trên vai
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới vai
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vai xuống
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch giáp dưới
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch dưới vai là nhánh của động mạch
              nách <br />Động mạch dưới đòn (Subclavian artery) có các nhánh
              chính sau đây, chia làm ba đoạn theo vị trí so với cơ bậc thang
              trước:<br /><br />1. Các nhánh từ đoạn thứ nhất (trước cơ bậc
              thang trước):<br />Động mạch đốt sống (Vertebral artery): Đi lên
              qua các lỗ ngang của đốt sống cổ và vào sọ để cấp máu cho não.<br />Động
              mạch ngực trong (Internal thoracic artery): Đi xuống dọc theo mặt
              trong của thành ngực, cấp máu cho thành ngực và tuyến vú.<br />Thân
              giáp cổ (Thyrocervical trunk): Cho các nhánh nhỏ hơn:<br />Động
              mạch giáp dưới (Inferior thyroid artery): Cấp máu cho tuyến giáp
              và vùng cổ.<br />Động mạch trên vai (Suprascapular artery): Cấp
              máu cho vùng vai và cơ vai.<br />Động mạch ngang cổ (Transverse
              cervical artery): Cấp máu cho các cơ ở cổ và lưng trên.<br />2.
              Các nhánh từ đoạn thứ hai (sau cơ bậc thang trước):<br />Thân sườn
              cổ (Costocervical trunk): Chia thành:<br />Động mạch gian sườn
              trên cùng (Supreme intercostal artery): Cấp máu cho các khoang
              gian sườn 1 và 2.<br />Động mạch cổ sâu (Deep cervical artery):
              Cấp máu cho các cơ ở cổ sâu.<br />3. Các nhánh từ đoạn thứ ba (sau
              cơ bậc thang trước đến bờ ngoài cơ bậc thang trước):<br />Động
              mạch vai xuống (Dorsal scapular artery): Cấp máu cho cơ vùng vai
              và lưng trên. Động mạch này có thể xuất phát từ đoạn này hoặc từ
              thân giáp cổ.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_24\" data-page=\"24\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"24\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[24][id]\"
            value=\"6721a5d1e275cbe0768e2cd4\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 25: Động mạch dưới đòn khi đi qua khe sườn đòn thì đổi tên
                thành gì?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch nách
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cánh tay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trên vai
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_25\" data-page=\"25\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"25\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[25][id]\"
            value=\"6721a5d1e275cbe0768e2cd5\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 26: Động mạch nào sau đây xuất phát từ động mạch dưới
                đòn?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cùng vai ngực
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch dưới đòn (Subclavian artery) có
              các nhánh chính sau đây, chia làm ba đoạn theo vị trí so với cơ
              bậc thang trước:<br /><br />1. Các nhánh từ đoạn thứ nhất (trước
              cơ bậc thang trước):<br />Động mạch đốt sống (Vertebral artery):
              Đi lên qua các lỗ ngang của đốt sống cổ và vào sọ để cấp máu cho
              não.<br />Động mạch ngực trong (Internal thoracic artery): Đi
              xuống dọc theo mặt trong của thành ngực, cấp máu cho thành ngực và
              tuyến vú.<br />Thân giáp cổ (Thyrocervical trunk): Cho các nhánh
              nhỏ hơn:<br />Động mạch giáp dưới (Inferior thyroid artery): Cấp
              máu cho tuyến giáp và vùng cổ.<br />Động mạch trên vai
              (Suprascapular artery): Cấp máu cho vùng vai và cơ vai.<br />Động
              mạch ngang cổ (Transverse cervical artery): Cấp máu cho các cơ ở
              cổ và lưng trên.<br />2. Các nhánh từ đoạn thứ hai (sau cơ bậc
              thang trước):<br />Thân sườn cổ (Costocervical trunk): Chia
              thành:<br />Động mạch gian sườn trên cùng (Supreme intercostal
              artery): Cấp máu cho các khoang gian sườn 1 và 2.<br />Động mạch
              cổ sâu (Deep cervical artery): Cấp máu cho các cơ ở cổ sâu.<br />3.
              Các nhánh từ đoạn thứ ba (sau cơ bậc thang trước đến bờ ngoài cơ
              bậc thang trước):<br />Động mạch vai xuống (Dorsal scapular
              artery): Cấp máu cho cơ vùng vai và lưng trên. Động mạch này có
              thể xuất phát từ đoạn này hoặc từ thân giáp cổ.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_26\" data-page=\"26\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"26\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[26][id]\"
            value=\"6721a5d1e275cbe0768e2cd6\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 27: Động mạch nào sau đây xuất phát trực tiếp từ cung động
                mạch chủ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cảnh chung phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới đòn phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới đòn trái
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cảnh trong trái
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_27\" data-page=\"27\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"27\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[27][id]\"
            value=\"6721a5d1e275cbe0768e2cd7\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 28: Khi mô tả đường đi và liên quan của động mạch dưới đòn,
                người ta chia động mạch dưới đòn thành ba đoạn dựa vào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Cơ thang</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cơ ức đòn chũm
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cơ bậc thang trước
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cơ bậc thang giữa
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Cơ bậc thang trước bắt<br />chéo phía
              trước động mạch dưới đòn và chia động mạch dưới đòn thành ba đoạn
              là đoạn trong, đoạn sau và đoạn ngoài cơ bậc thang
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_28\" data-page=\"28\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"28\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[28][id]\"
            value=\"6721a5d1e275cbe0768e2cd8\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 29: Động mạch màng ngoài tim hoành là nhánh của?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cơ hoành
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trung thất
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chủ ngực
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch ngực trong cho ra động mạch màng
              ngoài tim hoành, đi kèm với dây thần kinh hoành, cấp máu cho màng
              ngoài tim và cơ hoành.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_29\" data-page=\"29\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"29\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[29][id]\"
            value=\"6721a5d1e275cbe0768e2cd9\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 30: Về động mạch ngực trong, điều nào sau đây sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Xuất phát từ động mạch dưới đòn ở đoạn sau cơ bậc thang
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cho nhánh động mạch thượng vị trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Góp phần cấp máu cho cơ hoành
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nối với động mạch chủ ngực qua các động mạch gian sườn
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_30\" data-page=\"30\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"30\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[30][id]\"
            value=\"6721a5d1e275cbe0768e2cda\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 31: Động mạch đốt sống là nhánh bên của?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới đòn
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cảnh chung
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cảnh trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cánh tay đầu
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch dưới đòn (Subclavian artery) có
              các nhánh chính sau đây, chia làm ba đoạn theo vị trí so với cơ
              bậc thang trước:<br /><br />1. Các nhánh từ đoạn thứ nhất (trước
              cơ bậc thang trước):<br />Động mạch đốt sống (Vertebral artery):
              Đi lên qua các lỗ ngang của đốt sống cổ và vào sọ để cấp máu cho
              não.<br />Động mạch ngực trong (Internal thoracic artery): Đi
              xuống dọc theo mặt trong của thành ngực, cấp máu cho thành ngực và
              tuyến vú.<br />Thân giáp cổ (Thyrocervical trunk): Cho các nhánh
              nhỏ hơn:<br />Động mạch giáp dưới (Inferior thyroid artery): Cấp
              máu cho tuyến giáp và vùng cổ.<br />Động mạch trên vai
              (Suprascapular artery): Cấp máu cho vùng vai và cơ vai.<br />Động
              mạch ngang cổ (Transverse cervical artery): Cấp máu cho các cơ ở
              cổ và lưng trên.<br />2. Các nhánh từ đoạn thứ hai (sau cơ bậc
              thang trước):<br />Thân sườn cổ (Costocervical trunk): Chia
              thành:<br />Động mạch gian sườn trên cùng (Supreme intercostal
              artery): Cấp máu cho các khoang gian sườn 1 và 2.<br />Động mạch
              cổ sâu (Deep cervical artery): Cấp máu cho các cơ ở cổ sâu.<br />3.
              Các nhánh từ đoạn thứ ba (sau cơ bậc thang trước đến bờ ngoài cơ
              bậc thang trước):<br />Động mạch vai xuống (Dorsal scapular
              artery): Cấp máu cho cơ vùng vai và lưng trên. Động mạch này có
              thể xuất phát từ đoạn này hoặc từ thân giáp cổ.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_31\" data-page=\"31\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"31\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[31][id]\"
            value=\"6721a5d1e275cbe0768e2cdb\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 32: Mô tả động mạch dưới đòn, câu nào sau đây sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới đòn đi trong rãnh dưới đòn của xương đòn
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới đòn phải xuất phát từ thân động mạch cánh tay đầu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới đòn trái xuất phát từ cung động mạch chủ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới đòn trái dài hơn động mạch dưới đòn phải
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch dưới đòn thực sự đi phía sau
              xương đòn và uốn cong lồi lên trên, cao hơn xương đòn. Rãnh dưới
              đòn là nơi bám của cơ dưới đòn
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_32\" data-page=\"32\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"32\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[32][id]\"
            value=\"6721a5d1e275cbe0768e2cdc\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 33: Động mạch nào sau đây không phải là nhánh của động mạch
                dưới đòn?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Thân giáp cổ</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Thân sườn cổ</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới vai
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trong
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch dưới đòn (Subclavian artery) có
              các nhánh chính sau đây, chia làm ba đoạn theo vị trí so với cơ
              bậc thang trước:<br /><br />1. Các nhánh từ đoạn thứ nhất (trước
              cơ bậc thang trước):<br />Động mạch đốt sống (Vertebral artery):
              Đi lên qua các lỗ ngang của đốt sống cổ và vào sọ để cấp máu cho
              não.<br />Động mạch ngực trong (Internal thoracic artery): Đi
              xuống dọc theo mặt trong của thành ngực, cấp máu cho thành ngực và
              tuyến vú.<br />Thân giáp cổ (Thyrocervical trunk): Cho các nhánh
              nhỏ hơn:<br />Động mạch giáp dưới (Inferior thyroid artery): Cấp
              máu cho tuyến giáp và vùng cổ.<br />Động mạch trên vai
              (Suprascapular artery): Cấp máu cho vùng vai và cơ vai.<br />Động
              mạch ngang cổ (Transverse cervical artery): Cấp máu cho các cơ ở
              cổ và lưng trên.<br />2. Các nhánh từ đoạn thứ hai (sau cơ bậc
              thang trước):<br />Thân sườn cổ (Costocervical trunk): Chia
              thành:<br />Động mạch gian sườn trên cùng (Supreme intercostal
              artery): Cấp máu cho các khoang gian sườn 1 và 2.<br />Động mạch
              cổ sâu (Deep cervical artery): Cấp máu cho các cơ ở cổ sâu.<br />3.
              Các nhánh từ đoạn thứ ba (sau cơ bậc thang trước đến bờ ngoài cơ
              bậc thang trước):<br />Động mạch vai xuống (Dorsal scapular
              artery): Cấp máu cho cơ vùng vai và lưng trên. Động mạch này có
              thể xuất phát từ đoạn này hoặc từ thân giáp cổ.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_33\" data-page=\"33\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"33\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[33][id]\"
            value=\"6721a5d1e275cbe0768e2cdd\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 34: Tĩnh mạch cảnh ngoài đổ vào?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch dưới đòn
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tay đầu
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_34\" data-page=\"34\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"34\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[34][id]\"
            value=\"6721a5d1e275cbe0768e2cde\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 35: Tĩnh mạch tay đầu được hình thành do sự hợp lưu
                giữa?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trong và tĩnh mạch cảnh ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trong và tĩnh mạch cảnh trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trong và tĩnh mạch dưới đòn
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trong và tĩnh mạch sau hàm
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_35\" data-page=\"35\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"35\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[35][id]\"
            value=\"6721a5d1e275cbe0768e2cdf\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 36: Tĩnh mạch nào sau đây đi bắt chéo phía ngoài cơ ức đòn
                chũm?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh ngoài
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_36\" data-page=\"36\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"36\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[36][id]\"
            value=\"6721a5d1e275cbe0768e2ce0\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 37: Các tĩnh mạch sau đây được xem là nhóm các tĩnh mạch
                nông của đầu mặt cổ, ngoại trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch mặt chung
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch sau hàm
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch giáp trên
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh ngoài
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Tĩnh mạch giáp trên thuộc nhóm tĩnh mạch
              sâu của vùng đầu cổ, vì nó thường đi kèm với động mạch giáp trên
              và đổ vào hệ thống tĩnh mạch sâu như tĩnh mạch cảnh trong.<br /><br />Hệ
              thống tĩnh mạch nông ở vùng đầu, mặt và cổ bao gồm các tĩnh mạch
              chủ yếu nằm gần bề mặt da và không đi kèm với động mạch. Các tĩnh
              mạch chính trong hệ thống tĩnh mạch nông bao gồm:<br /><br />Tĩnh
              mạch cảnh ngoài (External jugular vein):<br /><br />Đây là tĩnh
              mạch nông lớn nhất ở vùng cổ, bắt đầu từ góc hàm và chạy xuống
              phía bên của cổ, rồi đổ vào tĩnh mạch dưới đòn.<br />Tĩnh mạch mặt
              (Facial vein):<br /><br />Thu nhận máu từ các tĩnh mạch ở mặt và
              đổ vào tĩnh mạch cảnh trong, tuy nằm nông nhưng liên kết với các
              tĩnh mạch sâu qua hệ thống nối, giúp thoát máu cho mặt.<br />Tĩnh
              mạch sau hàm (Retromandibular vein):<br /><br />Hình thành từ các
              tĩnh mạch thái dương nông và tĩnh mạch hàm trên, chảy xuống sau
              góc hàm và có nhánh đổ vào tĩnh mạch cảnh ngoài và tĩnh mạch
              mặt.<br />Tĩnh mạch cảnh trước (Anterior jugular vein):<br /><br />Nằm
              ở vùng trước cổ, dẫn máu từ da và mô dưới da ở vùng dưới cằm và
              cổ, đổ vào tĩnh mạch cảnh ngoài hoặc tĩnh mạch dưới đòn
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_37\" data-page=\"37\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"37\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[37][id]\"
            value=\"6721a5d1e275cbe0768e2ce1\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 38: Tĩnh mạch mặt chung được tạo thành từ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch mặt và nhánh trước tĩnh mạch sau hàm
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch mặt và nhánh sau tĩnh mạch sau hàm
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch mặt và tĩnh mạch thái dương nông
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch mặt và tĩnh mạch cảnh ngoài
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_38\" data-page=\"38\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"38\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[38][id]\"
            value=\"6721a5d1e275cbe0768e2ce2\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 39: Tĩnh mạch mặt chung đổ về?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch sau hàm
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Tĩnh mạch cảnh trong (Internal jugular
              vein) nhận nhiều nhánh phụ từ vùng đầu, mặt, và cổ. Dưới đây là
              các nhánh chính của tĩnh mạch cảnh trong:<br /><br />Tĩnh mạch mặt
              chung (Common facial vein):<br /><br />Thu nhận máu từ tĩnh mạch
              mặt và các nhánh phụ khác ở mặt, rồi đổ vào tĩnh mạch cảnh
              trong.<br />Tĩnh mạch hầu (Pharyngeal veins):<br /><br />Thu máu
              từ vùng hầu và đổ vào tĩnh mạch cảnh trong ở gần ngang mức xương
              móng.<br />Tĩnh mạch lưỡi (Lingual vein):<br /><br />Thu nhận máu
              từ lưỡi và sàn miệng, đổ vào tĩnh mạch cảnh trong.<br />Tĩnh mạch
              giáp trên (Superior thyroid vein):<br /><br />Dẫn máu từ tuyến
              giáp và các cấu trúc lân cận, đổ vào tĩnh mạch cảnh trong.<br />Tĩnh
              mạch giáp giữa (Middle thyroid vein):<br /><br />Cũng dẫn máu từ
              tuyến giáp, đổ trực tiếp vào tĩnh mạch cảnh trong.<br />Tĩnh mạch
              màng não (Meningeal veins):<br /><br />Dẫn máu từ màng não và đổ
              vào tĩnh mạch cảnh trong khi đi qua lỗ tĩnh mạch cảnh.<br />Các
              nhánh tĩnh mạch đáy sọ (Inferior petrosal sinus):<br /><br />Nhánh
              từ hệ thống tĩnh mạch trong sọ, dẫn máu từ xoang hang và đổ vào
              tĩnh mạch cảnh trong.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_39\" data-page=\"39\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"39\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[39][id]\"
            value=\"6721a5d1e275cbe0768e2ce3\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 40: Tĩnh mạch cảnh ngoài hình thành từ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tai sau và nhánh trước tĩnh mạch sau hàm
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tai sau và nhánh sau tĩnh mạch sau hàm
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tai sau và tĩnh mạch thái dương nông
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tai sau và tĩnh mạch mặt
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Tĩnh mạch cảnh ngoài (External jugular
              vein) có một số nhánh phụ thu thập máu từ các vùng khác nhau của
              đầu, mặt và cổ. Các nhánh chính của tĩnh mạch cảnh ngoài bao
              gồm:<br /><br />Tĩnh mạch tai sau (Posterior auricular vein):<br /><br />Thu
              nhận máu từ vùng tai ngoài và phía sau tai, rồi hợp lưu với nhánh
              sau của tĩnh mạch sau hàm để tạo thành tĩnh mạch cảnh ngoài.<br />Nhánh
              sau của tĩnh mạch sau hàm (Posterior division of the
              retromandibular vein):<br /><br />Hợp lưu với tĩnh mạch tai sau để
              hình thành tĩnh mạch cảnh ngoài.<br />Tĩnh mạch ngang cổ
              (Transverse cervical vein):<br /><br />Nhận máu từ vùng cổ bên và
              đổ vào tĩnh mạch cảnh ngoài hoặc nối với các tĩnh mạch khác ở
              cổ.<br />Tĩnh mạch trên vai (Suprascapular vein):<br /><br />Dẫn
              máu từ vùng trên vai, đôi khi đổ trực tiếp vào tĩnh mạch cảnh
              ngoài hoặc tĩnh mạch dưới đòn.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_40\" data-page=\"40\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"40\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[40][id]\"
            value=\"6721a5d1e275cbe0768e2ce4\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 41: Tĩnh mạch thái dương nông nối với tĩnh mạch thái dương
                giữa tạo thành?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch sau hàm
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch mặt chung
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cổ sâu
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_41\" data-page=\"41\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"41\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[41][id]\"
            value=\"6721a5d1e275cbe0768e2ce5\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 42: Máu tĩnh mạch từ vùng mặt và da đầu phía trước đổ về
                tĩnh mạch nào sau đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch dưới đòn
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Máu tĩnh mạch từ vùng mặt và da đầu phía
              trước chủ yếu đổ về tĩnh mạch mặt, sau đó hợp với các nhánh khác
              tạo thành tĩnh mạch mặt chung và cuối cùng đổ vào tĩnh mạch cảnh
              trong.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_42\" data-page=\"42\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"42\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[42][id]\"
            value=\"6721a5d1e275cbe0768e2ce6\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 43: Máu tĩnh mạch từ da đầu phía sau và vùng cổ đổ về tĩnh
                mạch nào sau đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch mặt chung
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch dưới đòn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh ngoài
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_43\" data-page=\"43\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"43\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[43][id]\"
            value=\"6721a5d1e275cbe0768e2ce7\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 44: Về mô tả tĩnh mạch cảnh ngoài, câu nào sau đây
                sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Bắt đầu từ góc hàm
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nằm trong bao cảnh
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đổ vào tĩnh mạch dưới đòn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cho nhánh nối với tĩnh mạch cảnh trong
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_44\" data-page=\"44\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"44\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[44][id]\"
            value=\"6721a5d1e275cbe0768e2ce8\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 45: Về động mạch đốt sống, điều nào sau đây đúng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Không đi qua lỗ ngang của đốt sống cổ I
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cho các nhánh gai đi qua lỗ gian đốt sống vào ống sống
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Hợp thành động mạch nền rồi đi qua lỗ lớn xương chẩm
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cấp máu cho não qua động mạch não giữa
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch đốt sống xuất phát từ động mạch
              dưới đòn, đi qua lỗ ngang của các đốt sống cổ từ C6 đến C1 và
              không đi qua lỗ ngang của đốt sống cổ C7.<br />Hai động mạch đốt
              sống (trái và phải) hợp lại ở nền não để tạo thành động mạch nền
              (Basilar artery), sau đó đi qua lỗ lớn xương chẩm (foramen magnum)
              để vào hộp sọ, cấp máu cho não.<br />Động mạch đốt sống và động
              mạch nền cấp máu cho phần sau của não, nhưng không cấp máu cho não
              qua động mạch não giữa (Middle cerebral artery), vì động mạch não
              giữa là nhánh của động mạch cảnh trong.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_45\" data-page=\"45\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"45\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[45][id]\"
            value=\"6721a5d1e275cbe0768e2ce9\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 46: Động mạch trên vai xuất phát từ?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Thân giáp cổ</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Thân sườn cổ</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch nách
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ vai
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_46\" data-page=\"46\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"46\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[46][id]\"
            value=\"6721a5d1e275cbe0768e2cea\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 47: Trên thiết đồ ngang qua cổ cho thấy có động mạch giáp
                dưới cũng sẽ cho thấy các cấu trúc sau, ngoại trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch giáp dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thần kinh thanh quản quặt ngược
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thần kinh lang thang
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thần kinh hạ thiệt
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Thần kinh hạ thiệt đi xuống đến tam giác
              dưới hàm, nghĩa là phía trên bụng sau cơ hai thân thì đi ra trước.
              Thiết đồ này thấy được động mạch giáp dưới nghĩa là thấp hơn thần
              kinh hạ thiệt nên ta không không thấy thần kinh hạ thiệt. Các cấu
              trúc còn lại nêu trong đều thấy được trên thiết đồ này
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_47\" data-page=\"47\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"47\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[47][id]\"
            value=\"6721a5d1e275cbe0768e2ceb\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 48: Các thành phần sau đây nằm trong bao cảnh, ngoại
                trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thần kinh lang thang
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cảnh chung
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Thân giao cảm</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_48\" data-page=\"48\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"48\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[48][id]\"
            value=\"6721a5d1e275cbe0768e2cec\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 49: Động mạch cảnh ngoài xuất phát ở ngang mức với?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Eo tuyến giáp</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Góc xương hàm dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Bờ trên sụn giáp
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Khuyết cảnh</div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_49\" data-page=\"49\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"49\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[49][id]\"
            value=\"6721a5d1e275cbe0768e2ced\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 50: Bắt chéo ngoài cơ chân bướm ngoài?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lưỡi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch hàm</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mặt</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thái dương nông
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_50\" data-page=\"50\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"50\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[50][id]\"
            value=\"6721a5d1e275cbe0768e2cee\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 51: Hai lần bị dây thần kinh hạ thiệt bắt chéo phía
                ngoài?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lưỡi
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch hàm</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mặt</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thái dương nông
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_51\" data-page=\"51\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"51\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[51][id]\"
            value=\"6721a5d1e275cbe0768e2cef\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 52: Cho nhánh gò má ổ mắt?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lưỡi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch hàm</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mặt</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thái dương nông
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_52\" data-page=\"52\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"52\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[52][id]\"
            value=\"6721a5d1e275cbe0768e2cf0\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 53: Tận cùng bằng động mạch góc</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lưỡi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch hàm</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mặt</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thái dương nông
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_53\" data-page=\"53\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"53\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[53][id]\"
            value=\"6721a5d1e275cbe0768e2cf1\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 54: Động mạch bướm khẩu cái 1. Xuất phát từ đoạn thứ ba của
                động mạch hàm 2. Không cho nhánh nối với các động mạch khác 3.
                Cấp máu cho thành ngoài và thành trong ổ mũi 4. Cho nhánh tận là
                động mạch khẩu cái xuống</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nếu 1, 2, 3 đúng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Nếu 1, 3 đúng</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Nếu 2, 4 đúng</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nếu chỉ có 4 đúng
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p><strong>Gợi ý: </strong>1,2,3 đúng</p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_54\" data-page=\"54\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"54\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[54][id]\"
            value=\"6721a5d1e275cbe0768e2cf2\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 55: Động mạch cảnh ngoài 1. Xuất phát từ động mạch cảnh
                chung ở ngang bờ trên sụn giáp 2. Cho hai nhánh tận là động mạch
                hàm và động mạch thái dưomg nông 3. Là động mạch chính cung cấp
                máu cho các cơ, tuyến vùng đầu, mặt cổ 4. Không cho nhánh nối
                với các động mạch khác</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nếu 1, 2, 3 đúng
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Nếu 1, 3 đúng</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Nếu 2, 4 đúng</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nếu chỉ có 4 đúng
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_55\" data-page=\"55\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"55\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[55][id]\"
            value=\"6721a5d1e275cbe0768e2cf3\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 56: Tĩnh mạch nào sau đây đổ về tĩnh mạch bán đơn?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch gian sườn 4 bên trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch gian sườn 4 bên phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch gian sườn 6 bên phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch gian sườn 9 bên trái
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>5-6 tĩnh mạch gian sườn trái dưới dồ về
              tĩnh mạch bán đơn. A đổ về tĩnh mạch bán đơn phụ; B và c là các
              tĩnh mạch gian sườn bên phài đều đồ về tĩnh mạch đơn
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_56\" data-page=\"56\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"56\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[56][id]\"
            value=\"6721a5d1e275cbe0768e2cf4\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 57: Tĩnh mạch bán đơn phụ đổ vào?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch bán đơn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch đơn</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch chủ trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch gian sườn
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_57\" data-page=\"57\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"57\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[57][id]\"
            value=\"6721a5d1e275cbe0768e2cf5\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 58: Mô tả về tĩnh mạch đơn, chi tiết nào sau đây
                đúng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đi lên sát bờ phải của các thân đốt sống
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Vòng phía trên cuống phổi trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đổ vào tĩnh mạch chủ dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Không thông nối với tĩnh mạch bán đơn
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_58\" data-page=\"58\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"58\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[58][id]\"
            value=\"6721a5d1e275cbe0768e2cf6\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 59: Tĩnh mạch đơn đổ về?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch dưới đòn phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cảnh trong phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch chủ trên
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch chủ dưới
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_59\" data-page=\"59\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"59\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[59][id]\"
            value=\"6721a5d1e275cbe0768e2cf7\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 60: Động mạch nào sau đây không phải là nhánh của động mạch
                thân tạng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan chung
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan lách
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_60\" data-page=\"60\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"60\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[60][id]\"
            value=\"6721a5d1e275cbe0768e2cf8\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 61: Cấu trúc nào sau đây nằm phía sau đoạn sau tụy của động
                mạch mạc treo tràng trên?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Khuyết tụy</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chủ bụng
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch chủ dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cột sống thắt lưng
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Đoạn sau tụy của động mạch mạc treo tràng
              trên đi phía trước động mạch chủ bụng
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_61\" data-page=\"61\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"61\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[61][id]\"
            value=\"6721a5d1e275cbe0768e2cf9\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 62: Khi áp lực tĩnh mạch cửa tăng, tĩnh mạch nào sau đây có
                thể sẽ bị giãn?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch bán đơn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch thận trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch lách
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch gan</div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_62\" data-page=\"62\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"62\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[62][id]\"
            value=\"6721a5d1e275cbe0768e2cfa\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 63: Tĩnh mạch mạc treo tràng dưới đổ về tĩnh mạch nào sau
                đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch gan trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch cửa</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch lách
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch chủ dưới
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_63\" data-page=\"63\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"63\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[63][id]\"
            value=\"6721a5d1e275cbe0768e2cfb\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 64: Động mạch nào sau đây xuất phát từ động mạch gan
                riêng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
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
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị mạc nối phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị mạc nối trái
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_64\" data-page=\"64\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"64\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[64][id]\"
            value=\"6721a5d1e275cbe0768e2cfc\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 65: Động mạch gan chung chia hai nhánh là?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan phải và động mạch gan trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan phải và động mạch túi mật
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan riêng và động mạch vị tá tràng
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan riêng và động mạch túi mật
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_65\" data-page=\"65\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"65\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[65][id]\"
            value=\"6721a5d1e275cbe0768e2cfd\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 66: Phần nào sau đây ở phía sau động mạch mạc treo tràng
                trên?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Cổ tụy</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Mỏm móc tụy</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Ống mật chủ</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch cửa</div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Tụy ở phía trước động mạch mạch treo tràng
              trên nhưng có một phần nhỏ ở phía sau động mạch là mỏm móc
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_66\" data-page=\"66\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"66\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[66][id]\"
            value=\"6721a5d1e275cbe0768e2cfe\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 67: Động mạch ruột thừa xuất phát từ?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch manh tràng trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch manh tràng sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch hồi kết tràng
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch kết tràng phải
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_67\" data-page=\"67\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"67\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[67][id]\"
            value=\"6721a5d1e275cbe0768e2cff\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 68: Tĩnh mạch nào sau đây có liên quan trong trường hợp
                tăng áp lực tĩnh mạch cửa?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch bán đơn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch thận trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch trực tràng trên
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch trực tràng giữa
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Vì tĩnh mạch trực tràng trên đổ về tĩnh
              mạch mạc treo tràng dưới rồi về tĩnh mạch lách và cuối cùng về
              tĩnh mạch cửa
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_68\" data-page=\"68\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"68\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[68][id]\"
            value=\"6721a5d1e275cbe0768e2d00\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 69: Động mạch thân tạng chia thành ba nhánh là?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái, động mạch gan riêng, động mạch lách
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái, động mạch gan chung, động mạch lách
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái, động mạch vị phải, động mạch lách
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái, động mạch vị phải, động mạch gan chung
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_69\" data-page=\"69\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"69\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[69][id]\"
            value=\"6721a5d1e275cbe0768e2d01\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 70: Động mạch nào sau đây không xuất phát từ động mạch chủ
                bụng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
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
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
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
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch sinh dục
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tử cung
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch tử cung xuất phát từ động mạch
              chậu trong
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_70\" data-page=\"70\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"70\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[70][id]\"
            value=\"6721a5d1e275cbe0768e2d02\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 71: Động mạch vị phải tách ra từ?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
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
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan chung
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan riêng
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị - tá tràng vị
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_71\" data-page=\"71\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"71\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[71][id]\"
            value=\"6721a5d1e275cbe0768e2d03\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 72: Mô tả mạch máu cung cấp cho dạ dày, câu nào sau đây
                sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị phải xuất phát từ động mạch gan riêng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái xuất phát từ động mạch thân tạng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị mạc nối phải xuất phát từ động mạch lách
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch đáy vị sau xuất phát từ động mạch lách
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch vị mạc nối phải xuất phát từ
              động mạch vị tá tràng
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_72\" data-page=\"72\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"72\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[72][id]\"
            value=\"6721a5d1e275cbe0768e2d04\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 73: Tĩnh mạch vị phải và tĩnh mạch vị trái đổ về?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch cửa</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch lách
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch gan chung
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch gan riêng
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_73\" data-page=\"73\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"73\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[73][id]\"
            value=\"6721a5d1e275cbe0768e2d05\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 74: Dọc theo bờ cong lớn dạ dày có hai động mạch là động
                mạch nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái và động mạch vị phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái và động mạch vị tá tràng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị mạc nối trái và động mạch vị mạc nối phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị phải và động mạch vị mạc nối phải
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_74\" data-page=\"74\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"74\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[74][id]\"
            value=\"6721a5d1e275cbe0768e2d06\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 75: Hai động mạch đi dọc theo bờ cong nhỏ dạ dày là động
                mạch nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị phải, động mạch vị tá tràng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái, động mạch vị phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái, động mạch vị mạc nối trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị mạc nối trái, động mạch vị mạc nối phải
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_75\" data-page=\"75\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"75\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[75][id]\"
            value=\"6721a5d1e275cbe0768e2d07\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 76: Động mạch vị mạc nối trái xuất phát từ động mạch
                nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thân tạng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lách
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị tá tràng
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_76\" data-page=\"76\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"76\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[76][id]\"
            value=\"6721a5d1e275cbe0768e2d08\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 77: Cấp máu chủ yếu cho phần thân và đuôi tụy là các động
                mạch xuất phát từ động mạch nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lách
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị tá tràng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tụy dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thân tạng
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_77\" data-page=\"77\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"77\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[77][id]\"
            value=\"6721a5d1e275cbe0768e2d09\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 78: Các động mạch của đầu tụy và tá tràng hầu hết xuất phát
                từ động mạch nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị tá tràng và động mạch mạc treo tràng trên
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị tá tràng và động mạch lách
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mạc treo tràng dưới và động mạch gan riêng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị tá tràng và động mạch mạc treo tràng dưới
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Đó là các dộng mạch tả tụy trên trước,
              động mạch tá tụy dưới trước, động mạch tá tụy trên sau, động mạch
              tá tụy dưới sau)
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_78\" data-page=\"78\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"78\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[78][id]\"
            value=\"6721a5d1e275cbe0768e2d0a\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 79: Động mạch nào sau đây đi trong dây chằng vị - kết
                tràng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
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
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch đáy vị sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị mạc nối phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tá tụy dưới sau
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_79\" data-page=\"79\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"79\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[79][id]\"
            value=\"6721a5d1e275cbe0768e2d0b\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 80: Động mạch nào sau đây xuất phát từ động mạch mạc treo
                tràng trên?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tụy lưng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tụy lớn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tụy dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tá tụy dưới chung
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_80\" data-page=\"80\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"80\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[80][id]\"
            value=\"6721a5d1e275cbe0768e2d0c\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 81: Động mạch nào dưới đây là nhánh của động mạch vị tá
                tràng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tụy lưng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tụy dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch sau tá tràng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tá tụy trên sau
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_81\" data-page=\"81\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"81\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[81][id]\"
            value=\"6721a5d1e275cbe0768e2d0d\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 82: Động mạch tụy lớn xuất phát từ động mạch nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lách
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan chung
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch đuôi tụy
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mạc treo tràng trên
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_82\" data-page=\"82\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"82\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[82][id]\"
            value=\"6721a5d1e275cbe0768e2d0e\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 83: Động mạch nào dưới đây là nhánh của động mạch
                lách?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tụy lưng
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tá tụy trên trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tá tụy dưới trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tá tụy dưới sau
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_83\" data-page=\"83\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"83\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[83][id]\"
            value=\"6721a5d1e275cbe0768e2d0f\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 84: Động mạch vị - tá tràng và động mạch mạc treo tràng
                trên thông nối với nhau qua động mạch nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lưng tụy
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tụy lớn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tụy dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Các động mạch tá tụy
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_84\" data-page=\"84\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"84\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[84][id]\"
            value=\"6721a5d1e275cbe0768e2d10\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 85: Thông thường, động mạch túi mật xuất phát từ động mạch
                nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan riêng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan chung
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_85\" data-page=\"85\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"85\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[85][id]\"
            value=\"6721a5d1e275cbe0768e2d11\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 86: Sau khi sinh, tĩnh mạch rốn trở thành gì?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Dây chằng động mạch
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Dây chằng tròn gan
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Dây chằng tĩnh mạch
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Dây chằng liềm
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_86\" data-page=\"86\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"86\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[86][id]\"
            value=\"6721a5d1e275cbe0768e2d12\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 87: Tĩnh mạch cửa được hình thành từ tĩnh mạch lách và
                gì?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch vị mạc nối trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch gan</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch mạc treo tràng trên
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch mạc treo tràng dưới
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>
              <strong>Tĩnh mạch cửa</strong> (<em>portal vein</em>) hay tĩnh
              mạch cửa gan (<em>hepatic portal vein</em>) có nhiệm vụ đưa về gan
              các chất dinh dưỡng cũng như các chất độc ở ống tiêu hóa để gan
              chọn lọc, lưu trữ, chuyển hóa và điều hòa.
            </p>

            <p>
              Tĩnh mạch cửa được hợp bởi tĩnh mạch mạc treo tràng trên và tĩnh
              mạch lách tại vị trí phía trước tĩnh mạch chủ dưới, ngang đốt sống
              thắt lưng I. Riêng tĩnh mạch lách còn nhận thêm một nhánh lớn là
              tĩnh mạch mạc treo tràng dưới. Tĩnh mạch cửa đi trong bờ tự do của
              mạc nối nhỏ, nằm sau ống mật chủ và ống mật. Ngoài hai nhánh chính
              là tĩnh mạch lách và tĩnh mạch mạc treo tràng trên, tĩnh mạch cửa
              còn nhận tĩnh mạch vị trái (<em>left gastric vein</em>), tĩnh mạch
              tụy tạng sau (<em>posterior superior pancreatoduodenal vein</em>).
              Khi đến cửa gan, tĩnh mạch cửa chia hai ngành trái và phải để chạy
              vào tận trái và phải gan.
            </p>

            <p>
              Tĩnh mạch cửa thông nối hệ thống tĩnh mạch chủ bởi các vòng nối
              như vòng nối thực quản, vòng nối trực tràng, vòng nối quanh rốn,
              vòng nối qua phúc mạc nối các tĩnh mạch ruột với tĩnh mạch chủ
              dưới. Khi áp lực tĩnh mạch cửa tăng lên, máu chảy từ hệ tĩnh mạch
              cửa qua hệ tĩnh mạch chủ và làm giãn rồi vỡ các tĩnh mạch này và
              gây chảy máu.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_87\" data-page=\"87\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"87\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[87][id]\"
            value=\"6721a5d1e275cbe0768e2d13\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 88: Tĩnh mạch nào sau đây không đổ về hệ tĩnh mạch
                cửa?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch vị trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch vị phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch mạc treo tràng dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch trực tràng dưới
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Tĩnh mạch trước tràng dưới đồ về tĩnh mạch
              chậu trong, cuối cùng về tĩnh mạch chủ dưới, tức là thuộc hệ chủ
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_88\" data-page=\"88\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"88\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[88][id]\"
            value=\"6721a5d1e275cbe0768e2d14\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 89: Tĩnh mạch cửa dẫn máu từ ống tiêu hóa, tụy, lách và đổ
                vào đâu?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Lách</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Gan</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch gan</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch chủ dưới
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_89\" data-page=\"89\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"89\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[89][id]\"
            value=\"6721a5d1e275cbe0768e2d15\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 90: Chọn câu đúng:</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan riêng xuất phát từ động mạch vị tá tràng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan riêng có một nhánh bên cho dạ dày là động mạch vị
                phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch cửa cùng động mạch gan riêng và tĩnh mạch gan tạo
                thành cuống gan
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ống tĩnh mạch sau khi tắc sẽ trở thành dây chằng tròn gan
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_90\" data-page=\"90\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"90\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[90][id]\"
            value=\"6721a5d1e275cbe0768e2d16\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 91: Ở đoạn sau tụy, động mạch mạc treo tràng trên nằm trong
                một tứ giác tĩnh mạch.Tĩnh mạch nào sau đây không là thành phần
                của tứ giác tĩnh mạch đó?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch cửa</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch chủ dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch thận trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch lách
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Tứ giác tĩnh mạch này gồm tĩnh mạch lách,
              tĩnh mạch thận trái, tĩnh mạch chủ dưới, tĩnh mạch mạc treo tràng
              dưới
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_91\" data-page=\"91\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"91\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[91][id]\"
            value=\"6721a5d1e275cbe0768e2d17\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 92: Động mạch nào sau đây xuất phát từ động mạch mạc treo
                tràng dưới?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tá tụy dưới chung
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch sau tá tràng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch kết tràng phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch kết tràng trái
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_92\" data-page=\"92\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"92\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[92][id]\"
            value=\"6721a5d1e275cbe0768e2d18\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 93: Chọn câu đúng khi mô tả về động mạch mạc treo tràng
                trên?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cấp máu cho toàn bộ ruột non
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cấp máu cho toàn bộ ruột già
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cấp máu cho phần lớn ruột non và nửa phải ruột già
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cấp máu cho ruột non, ruột già, tụy, lách
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Có một phần nhỏ thuộc ruột non mà động
              mạch mạc treo tràng trên không cấp máu, đó là đoạn đầu tiên của tá
              tràng
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_93\" data-page=\"93\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"93\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[93][id]\"
            value=\"6721a5d1e275cbe0768e2d19\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 94: Các thành phần sau đây được cấp máu bởi động mạch hồi
                kết tràng, ngoại trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đoạn cuối hồi tràng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Manh tràng</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Ruột thừa</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đại tràng ngang
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch hồi kết tràng câp máu cho hôi
              tràng, manh tràng, ruột thừa, doạn đầu đại tràng lên
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_94\" data-page=\"94\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"94\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[94][id]\"
            value=\"6721a5d1e275cbe0768e2d1a\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 95: Ở đoạn trước khối tá tụy, động mạch mạc treo tràng trên
                nằm ngay phía trước bộ phận nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Mỏm móc tụy</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Phần lên (D4) tá tràng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chủ bụng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch chủ dưới
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_95\" data-page=\"95\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"95\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[95][id]\"
            value=\"6721a5d1e275cbe0768e2d1b\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 96: Động mạch mạc treo tràng trên không cho nhánh
                đến?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Ruột thừa</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Kết tràng ngang
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Góc kết tràng trái
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Góc kết tràng phải
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_96\" data-page=\"96\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"96\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[96][id]\"
            value=\"6721a5d1e275cbe0768e2d1c\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 97: Động mạch nào sau đây không phải là nhánh của động mạch
                hồi kết tràng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ruột thừa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch hồi tràng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch kết tràng phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch manh tràng trước
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_97\" data-page=\"97\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"97\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[97][id]\"
            value=\"6721a5d1e275cbe0768e2d1d\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 98: Động mạch mạc treo tràng dưới có đặc điểm gì?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đi trong rễ mạc treo kết tràng xuống
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cung cấp máu cho toàn bộ đại tràng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Có hai tĩnh mạch đi kèm
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cho nhánh tận là động mạch trực tràng dưới
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>B sai vì động mạch này chỉ câp máu cho nửa
              trái đại tràng, D sai vì nhánh cuối là động mạch trực tràng trên
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_98\" data-page=\"98\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"98\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[98][id]\"
            value=\"6721a5d1e275cbe0768e2d1e\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 99: Động mạch nào sau đây không cho nhánh đến nuôi ruột
                già?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chậu ngoài
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chậu trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mạc treo tràng trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mạc treo tràng dưới
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>B : động mạch chậu trong có cho nhánh đến
              ruột già là động mạch trực tràng giữa, động mạch trực tràng dưới
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_99\" data-page=\"99\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"99\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[99][id]\"
            value=\"6721a5d1e275cbe0768e2d1f\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 100: Nhánh tận cùng của động mạch mạc treo tràng dưới là
                động mạch nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch xích ma dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trực tràng trên
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trực tràng dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cùng giữa
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_100\" data-page=\"100\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"100\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[100][id]\"
            value=\"6721a5d1e275cbe0768e2d20\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 101: Động mạch mạc treo tràng dưới có đặc điểm nào sau
                đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Xuất phát từ động mạch chủ bụng ở ngang mức với đốt sống thắt
                lưng 1
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cho nhánh tận là động mạch trực tràng dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Không thông nối với động mạch mạc treo tràng trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Góp phần cung cấp máu cho kết tràng ngang
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>A sai, nguyên ủy cùa động mạch mạc treo
              tràng dưới ở ngang đốt sống thắt lưng 3 hoặc bờ trên đốt sống thắt
              lưng 4
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_101\" data-page=\"101\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"101\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[101][id]\"
            value=\"6721a5d1e275cbe0768e2d21\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 102: Động mạch nào sau đây không phải là nhánh của động
                mạch chậu trong?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bàng quang trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bàng quang dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trực tràng giữa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thượng vị dưới
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_102\" data-page=\"102\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"102\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[102][id]\"
            value=\"6721a5d1e275cbe0768e2d22\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 103: Vòi tử cung được cấp máu bởi động mạch nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch buồng trứng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tử cung
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch buồng trứng và động mạch tử cung
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vòi tử cung, nhánh của động mạch chậu trong
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_103\" data-page=\"103\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"103\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[103][id]\"
            value=\"6721a5d1e275cbe0768e2d23\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 104: Động mạch tử cung là nhánh của động mạch nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chậu trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chậu ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bàng quang trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bàng quang dưới
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_104\" data-page=\"104\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"104\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[104][id]\"
            value=\"6721a5d1e275cbe0768e2d24\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 105: Động mạch tinh hoàn có các đặc điểm, ngoại
                trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Xuất phát từ động mạch chủ bụng, dưới động mạch thận
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ở bụng thì đi sau phúc mạc
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Vào ống bẹn đi trong thừng tinh
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cho nhánh động mạch cơ bìu
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch cơ bìu là nhánh của động mạch
              thượng vị dưới
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_105\" data-page=\"105\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"105\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[105][id]\"
            value=\"6721a5d1e275cbe0768e2d25\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 106: Động mạch chủ bụng chia thành hai động mạch chậu chung
                ở vị trí nào sau đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Bên trái đốt sống thắt lưng 2
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Bên trái đốt sống thắt lưng 3
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Bên trái đốt sống thắt lưng 4
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Bên trái đốt sống thắt lưng 5
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_106\" data-page=\"106\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"106\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[106][id]\"
            value=\"6721a5d1e275cbe0768e2d26\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 107: Động mạch chậu chung chia thành động mạch chậu ngoài
                và động mạch chậu trong ở vị trí nào sau đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ngang mức với đĩa gian đốt sống đốt thắt lưng 4 và thắt lưng 5
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ngang mức với đĩa gian đốt sống thắt lưng 5 và cùng 1
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ngang mức với đốt sống thắt lưng 5
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ngang mức với đĩa gian đốt sống đốt cùng 1
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_107\" data-page=\"107\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"107\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[107][id]\"
            value=\"6721a5d1e275cbe0768e2d27\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 108: Động mạch chậu trong khi đến bờ trên của khuyết ngồi
                lớn thì chia thành thân trước và thân sau, thân sau cho nhánh
                bên nào sau đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mông trên
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mông dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trực tràng giữa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bàng quang dưới
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p><strong>Gợi ý: </strong>B, c, D đều từ thân trước</p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_108\" data-page=\"108\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"108\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[108][id]\"
            value=\"6721a5d1e275cbe0768e2d28\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 109: Thân trước của động mạch chậu trong cho các nhánh bên
                sau đây, ngoại trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch bịt</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thẹn trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch tử cung
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chậu thắt lưng
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p><strong>Gợi ý: </strong>Động mạch chậu thắt lưng từ thân sau</p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_109\" data-page=\"109\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"109\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[109][id]\"
            value=\"6721a5d1e275cbe0768e2d29\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 110: Động mạch nào sau đây không đi qua khuyết ngồi
                lớn?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mông trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mông dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch bịt</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thẹn trong
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Các thành phần A,B, D đều từ chậu hông đi
              qua khuyết ngồi lớn để ra vùng mông, riêng dộng mạch bịt đi qua
              ống bịt
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_110\" data-page=\"110\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"110\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[110][id]\"
            value=\"6721a5d1e275cbe0768e2d2a\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 111: Xuất phát từ động mạch thân tạng và đi ở bờ cong nhỏ
                dạ dày.</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mạc treo tràng trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mạc treo tràng dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan riêng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_111\" data-page=\"111\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"111\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[111][id]\"
            value=\"6721a5d1e275cbe0768e2d2b\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 112: Cho nhánh động mạch kết tràng phải.</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mạc treo tràng trên
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mạc treo tràng dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan riêng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_112\" data-page=\"112\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"112\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[112][id]\"
            value=\"6721a5d1e275cbe0768e2d2c\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 113: Cho nhánh động mạch vị phải.</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mạc treo tràng trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mạc treo tràng dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan riêng
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_113\" data-page=\"113\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"113\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[113][id]\"
            value=\"6721a5d1e275cbe0768e2d2d\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 114: Cho nhánh động mạch trực tràng trên.</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mạc treo tràng trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mạc treo tràng dưới
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gan riêng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vị trái
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_114\" data-page=\"114\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"114\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[114][id]\"
            value=\"6721a5d1e275cbe0768e2d2e\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 115: Nguyên ủy của các động mạch: Động mạch cơ
                hoành.</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chủ bụng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thân tạng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lách
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_115\" data-page=\"115\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"115\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[115][id]\"
            value=\"6721a5d1e275cbe0768e2d2f\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 116: Nguyên ủy của các động mạch: Động mạch hoành
                dưới.</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chủ bụng
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thân tạng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lách
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trong
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_116\" data-page=\"116\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"116\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[116][id]\"
            value=\"6721a5d1e275cbe0768e2d30\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 117: Nguyên ủy của các động mạch: Động mạch vị
                trái.</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chủ bụng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thân tạng
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lách
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trong
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_117\" data-page=\"117\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"117\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[117][id]\"
            value=\"6721a5d1e275cbe0768e2d31\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 118: Nguyên ủy của các động mạch: Động mạch vị mạc nối
                trái.</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chủ bụng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thân tạng
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch lách
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trong
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_118\" data-page=\"118\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"118\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[118][id]\"
            value=\"6721a5d1e275cbe0768e2d32\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 119: Khi mô tả, động mạch nách được chia thành ba đoạn dựa
                vào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cơ bậc thang trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cơ bậc thang giữa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Cơ ngực bé</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Cơ ngực lớn</div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Cơ ngực bé bẳt chéo phía trước động mạch
              nách, dựa vào đó người ta chia động mạch nách thành ba đoạn là
              trên, sau và dưới cơ ngực bé
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_119\" data-page=\"119\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"119\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[119][id]\"
            value=\"6721a5d1e275cbe0768e2d33\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 120: Động mạch nách có đặc điểm sau đây, ngoại trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Là động mạch dưới đòn đổi tên sau khi đi qua khe sườn đòn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Chia làm ba đoạn dựa vào cơ ngực bé
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cho một trong những nhánh bên là động mạch ngực trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cho nhánh nối với động mạch dưới đòn và động mạch cánh tay
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch ngực trong xuất phát từ động
              mạch dưới đòn
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_120\" data-page=\"120\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"120\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[120][id]\"
            value=\"6721a5d1e275cbe0768e2d34\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 121: Động mạch nách cho các nhánh bên sau đây, ngoại
                trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cùng vai ngực
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trên vai
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch trên vai là nhánh của thân giáp
              cổ thuộc động mạch dưới đòn
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_121\" data-page=\"121\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"121\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[121][id]\"
            value=\"6721a5d1e275cbe0768e2d35\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 122: Động mạch nách đổi tên thành động mạch cánh tay
                khi?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đi qua khỏi khe sườn đòn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đến cổ phẫu thuật xương cánh tay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đến bờ trên cơ ngực lớn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đến bờ dưới cơ ngực lớn
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_122\" data-page=\"122\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"122\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[122][id]\"
            value=\"6721a5d1e275cbe0768e2d36\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 123: Không nên thắt động mạch nách ở khoảng giữa.</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trên và động mạch cùng vai ngực
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trên và động mạch ngực ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới vai và các động mạch mũ cánh tay
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ cánh tay trước và động mạch mũ cánh tay sau
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Vì các động mạch ở phía trên và phía dưới
              vị trí này không thông nối nhau
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_123\" data-page=\"123\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"123\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[123][id]\"
            value=\"6721a5d1e275cbe0768e2d37\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 124: Động mạch nào sau đây không phải là nhánh của động
                mạch nách?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới vai
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực ngoài
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_124\" data-page=\"124\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"124\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[124][id]\"
            value=\"6721a5d1e275cbe0768e2d38\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 125: Khi phẫu tích vùng cánh tay sau ta gặp một động mạch
                đi cùng thần kinh quay, động mạch đó chính là?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gian cốt sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cánh tay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cánh tay sâu
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_125\" data-page=\"125\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"125\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[125][id]\"
            value=\"6721a5d1e275cbe0768e2d39\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 126: Ở đoạn trên cơ ngực bé, động mạch nách cho nhánh bên
                là?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cùng vai ngực
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trên
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới vai
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_126\" data-page=\"126\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"126\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[126][id]\"
            value=\"6721a5d1e275cbe0768e2d3a\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 127: Ở vòng nối quanh vai, nhánh bên của động mạch nách nối
                với động mạch nào sau đây của động mạch dưới đòn?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trên vai
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngang cổ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vai xuống
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_127\" data-page=\"127\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"127\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[127][id]\"
            value=\"6721a5d1e275cbe0768e2d3b\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 128: Ở vòng nối quanh vai, nhánh nào sau đây của động mạch
                nách nối với nhánh bên của động mạch dưới đòn?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cùng vai ngực
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới vai
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_128\" data-page=\"128\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"128\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[128][id]\"
            value=\"6721a5d1e275cbe0768e2d3c\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 129: Động mạch bên trụ dưới là nhánh bên của?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bên quay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bên giữa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cánh tay
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cánh tay sâu
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_129\" data-page=\"129\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"129\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[129][id]\"
            value=\"6721a5d1e275cbe0768e2d3d\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 130: Động mạch nào sau đây là nhánh bên của động mạch cánh
                tay?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bên quay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bên giữa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cánh tay sâu
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch cánh tay cho ba nhánh bên là
              động mạch cánh tay sâu, động mạch bên trụ trên, động mạch bên trụ
              dưới
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_130\" data-page=\"130\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"130\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[130][id]\"
            value=\"6721a5d1e275cbe0768e2d3e\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 131: Khi phẫu tích vùng khuỷu trước nếu tìm được thần kinh
                giữa, chúng ta có thể tìm thấy động mạch cánh tay ở?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Phía sau thần kinh giữa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Phía trước thần kinh giữa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Phía trong thần kinh giữa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Phía ngoài thần kinh giữa
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Từ 1/3 giữa cánh tay trở xuống thì thần
              kinh giữa đi vào phía trong động mạch cánh tay. Vì vậy, ở vùng
              khuỷu thì thần kinh giữa ở phía trong, động mạch cánh tay ở ngoài
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_131\" data-page=\"131\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"131\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[131][id]\"
            value=\"6721a5d1e275cbe0768e2d3f\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 132: Động mạch nào sau đây có thể bị tổn thương trong
                trường hợp gãy thân xương cánh tay?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cánh tay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cánh tay sâu
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ cánh tay trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ cánh tay sau
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch cánh tay sâu và thần kinh quay
              đi sát xưong cánh tay, trong rãnh thần kinh quay ở mặt sau thân
              xương
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_132\" data-page=\"132\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"132\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[132][id]\"
            value=\"6721a5d1e275cbe0768e2d40\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 133: Ở vòng nối quanh khuỷu, động mạch bên giữa nối
                với?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bên trụ trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quặt ngược gian cốt
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quặt ngược quay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quặt ngược trụ
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_133\" data-page=\"133\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"133\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[133][id]\"
            value=\"6721a5d1e275cbe0768e2d41\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 134: Ở vòng nối quanh khuỷu, động mạch bên quay nối
                với?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quặt ngược trụ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quặt ngược quay
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bên trụ trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quặt ngược gian cốt
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_134\" data-page=\"134\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"134\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[134][id]\"
            value=\"6721a5d1e275cbe0768e2d42\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 135: Ở vòng nối quanh khuỷu, động mạch bên trụ dưới nối
                với?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quặt ngược tại
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bên giữa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bên quay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quặt ngược quay
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_135\" data-page=\"135\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"135\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[135][id]\"
            value=\"6721a5d1e275cbe0768e2d43\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 136: Động mạch nào sau đây không tham gia vào vòng nối
                quanh mỏm trên lồi cầu ngoài xương cánh tay?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quặt ngược trụ
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bên giữa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch bên quay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quặt ngược gian cốt
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_136\" data-page=\"136\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"136\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[136][id]\"
            value=\"6721a5d1e275cbe0768e2d44\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 137: Động mạch nào sau đây không tham gia vào vòng nối
                quanh ngực?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cùng vai ngực
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực lưng
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trong
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Vòng nối quanh ngực có sự tham gia của ba
              động mạch là động mạch ngực ngoài, động mạch cùng vai ngực và động
              mạch ngực trong
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_137\" data-page=\"137\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"137\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[137][id]\"
            value=\"6721a5d1e275cbe0768e2d45\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 138: Vị trí nào sau đây trên động mạch nách được khuyên
                không nên thắt để cầm máu khi phẫu thuật vì có thể gây thiếu máu
                bên dưới chỗ thắt?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đoạn từ bờ dưới xương đòn đến nơi xuất phát của động mạch cùng
                vai ngực
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đoạn từ động mạch cùng vai ngực đến nơi xuất phát của động mạch
                ngực ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đoạn từ động mạch dưới vai đến nơi xuất phát động mạch mũ cánh
                tay trước
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đoạn từ động mạch mũ cánh tay trước đến nơi xuất phát động mạch
                mũ cánh tay sau
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_138\" data-page=\"138\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"138\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[138][id]\"
            value=\"6721a5d1e275cbe0768e2d46\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 139: Động mạch cánh tay sâu có các đặc điểm sau đây, ngoại
                trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Là một nhánh của động mạch cánh tay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Chui qua lỗ tam giác vai tam đầu
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đi trong rãnh thần kinh quay cùng với thần kinh quay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Có hai nhánh tận là động mạch bên giữa và động mạch bên quay
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch cánh tay sâu chui qua lỗ tam
              giác cánh tay tam đầu
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_139\" data-page=\"139\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"139\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[139][id]\"
            value=\"6721a5d1e275cbe0768e2d47\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 140: Động mạch bên trụ trên là nhánh của động mạch nào sau
                đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch trụ</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cánh tay
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cánh tay sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ cánh tay sau
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_140\" data-page=\"140\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"140\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[140][id]\"
            value=\"6721a5d1e275cbe0768e2d48\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 141: Động mạch trụ có các đặc điểm sau đây, ngoại
                trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ở cẳng tay, đi phía trong thần kinh trụ
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đến bàn tay, đi phía trước mạc giữ gân gấp
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Là động mạch chính tạo nên cung gan tay nông
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cho nhánh nối với động mạch quay
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch trụ di phía ngoài thần kinh trụ
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_141\" data-page=\"141\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"141\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[141][id]\"
            value=\"6721a5d1e275cbe0768e2d49\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 142: Cung động mạch gan tay nông được tạo bởi?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trụ và động mạch quay ngón trỏ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trụ và nhánh gan tay nông của động mạch quay
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trụ và nhánh gan cổ tay của động mạch quay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trụ và động mạch ngón cái chính
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_142\" data-page=\"142\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"142\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[142][id]\"
            value=\"6721a5d1e275cbe0768e2d4a\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 143: Cung động mạch gan tay sâu được tạo bởi?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trụ và động mạch quay ngón trỏ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quay và động mạch gian cốt trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quay và nhánh gan tay sâu của động mạch trụ
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trụ và nhánh gan cổ tay của động mạch quay
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_143\" data-page=\"143\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"143\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[143][id]\"
            value=\"6721a5d1e275cbe0768e2d4b\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 144: Động mạch quay ngón trỏ xuất phát từ bộ phận nào sau
                đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch trụ</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quay
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cung gan tay nông
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cung gan tay sâu
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_144\" data-page=\"144\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"144\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[144][id]\"
            value=\"6721a5d1e275cbe0768e2d4c\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 145: Tĩnh mạch nào sau đây được xếp vào nhóm tĩnh mạch nông
                của chi trên?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch đầu</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch quay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch trụ</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch gan ngón riêng
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_145\" data-page=\"145\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"145\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[145][id]\"
            value=\"6721a5d1e275cbe0768e2d4d\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 146: Ở bàn tay, động mạch ngón cái chính là nhánh
                của?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gian cốt trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cung gan tay nông
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cung gan tay sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quay
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_146\" data-page=\"146\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"146\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[146][id]\"
            value=\"6721a5d1e275cbe0768e2d4e\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 147: Nói về động mạch quay ở vùng bàn tay, điều nào sau đây
                sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Là thành phần chính tạo nên cung gan tay nông
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đi vào gan tay giữa hai xương đốt bàn I và II
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cho nhánh động mạch quay ngón trỏ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cho nhánh nối với động mạch trụ
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch trụ là độ̂ng mạch chính tạo thành
              cung gan tay nông
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_147\" data-page=\"147\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"147\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[147][id]\"
            value=\"6721a5d1e275cbe0768e2d4f\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 148: Động mạch nào sau đây có hai tĩnh mạch cùng tên đi
                cùng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới đòn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch khoeo
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày trước
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch đùi</div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_148\" data-page=\"148\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"148\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[148][id]\"
            value=\"6721a5d1e275cbe0768e2d50\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 149: Động mạch nào sau đây là động mạch chính hình thành
                cung động mạch gan tay nông?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quay ngón trỏ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngón cái chính
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch quay
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch trụ</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_149\" data-page=\"149\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"149\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[149][id]\"
            value=\"6721a5d1e275cbe0768e2d51\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 150: Động mạch mông trên và động mạch mông dưới là xuất
                phát từ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch đùi</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch đùi sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chậu ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chậu trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_150\" data-page=\"150\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"150\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[150][id]\"
            value=\"6721a5d1e275cbe0768e2d52\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 151: Động mạch nào sau đây không phải là nhánh của động
                mạch đùi?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ chậu sâu
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thượng vị nông
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thẹn ngoài nông
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gối xuống
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch mũ chậu sâu là nhánh của động
              mạch chậu ngoài
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_151\" data-page=\"151\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"151\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[151][id]\"
            value=\"6721a5d1e275cbe0768e2d53\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 152: Động mạch nào sau đây là nhánh của động mạch đùi
                sâu?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ chậu nông
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ chậu sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thẹn ngoài sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi ngoài
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_152\" data-page=\"152\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"152\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[152][id]\"
            value=\"6721a5d1e275cbe0768e2d54\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 153: Động mạch bịt là nhánh của?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch đùi</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch đùi sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chậu trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ chậu sâu
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_153\" data-page=\"153\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"153\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[153][id]\"
            value=\"6721a5d1e275cbe0768e2d55\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 154: Nhánh đầu tiên của động mạch đùi là?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thượng vị nông
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ chậu nông
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thẹn ngoài sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch đùi sâu
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_154\" data-page=\"154\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"154\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[154][id]\"
            value=\"6721a5d1e275cbe0768e2d56\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 155: Động mạch đùi cho các nhánh sau đây, ngoại
                trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thượng vị nông
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ chậu nông
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gối xuống
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch mũ đùi trong là nhánh cùa động
              mạch đùi sâu
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_155\" data-page=\"155\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"155\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[155][id]\"
            value=\"6721a5d1e275cbe0768e2d57\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 156: Các cơ vùng đùi sau được cấp máu bởi?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ chậu sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch đùi sâu
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_156\" data-page=\"156\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"156\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[156][id]\"
            value=\"6721a5d1e275cbe0768e2d58\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 157: Động mạch nào sau đây là nhánh cuối cùng của động mạch
                đùi?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thượng vị nông
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thẹn ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch đùi sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gối xuống
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_157\" data-page=\"157\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"157\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[157][id]\"
            value=\"6721a5d1e275cbe0768e2d59\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 158: Tĩnh mạch đùi?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Bắt đầu từ vòng gân cơ khép, liên tục với tĩnh mạch khoeo
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đoạn trong ống cơ khép, nằm phía trong động mạch đùi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đoạn trong tam giác đùi, nằm phía sau động mạch đùi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đổ vào tĩnh mạch chậu trong
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>B và C đều sai vì khi ở tam giác đùi thì
              động mạch đùi ở phía ngoài tĩnh mạch đùi. Sau đó, khi vào ống cơ
              khép thì động mạch đùi bẳt chéo phía trước tình mạch đùi để vào
              phía trong tĩnh mạch đùi
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_158\" data-page=\"158\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"158\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[158][id]\"
            value=\"6721a5d1e275cbe0768e2d5a\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 159: Tĩnh mạch hiển bé đổ vào?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch khoeo
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch chày trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch chày sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch đùi</div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_159\" data-page=\"159\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"159\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[159][id]\"
            value=\"6721a5d1e275cbe0768e2d5b\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 160: Động mạch nào sau đây vòng quanh phía trước cổ xương
                đùi?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi ngoài
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thẹn trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ chậu sâu
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_160\" data-page=\"160\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"160\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[160][id]\"
            value=\"6721a5d1e275cbe0768e2d5c\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 161: Động mạch nào sau đây vòng quanh phía sau cổ xương
                đùi?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch bịt</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch thẹn trong
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_161\" data-page=\"161\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"161\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[161][id]\"
            value=\"6721a5d1e275cbe0768e2d5d\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 162: Động mạch nào sau đây là nhánh của động mạch
                đùi?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mác</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gối giữa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gối xuống
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_162\" data-page=\"162\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"162\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[162][id]\"
            value=\"6721a5d1e275cbe0768e2d5e\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 163: Động mạch chày sau có các đặc điểm sau đây, ngoại
                trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ở cẳng chân sau, đi trước cơ dép
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đến cổ chân, đi trước gân cơ gấp ngón cái dài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Chia hai nhánh tận ở gan bàn chân
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đi cùng thần kinh chày mác sâu
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch chày sau đi cùng thần kinh chày
              ờ khoang sau cẳng chân
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_163\" data-page=\"163\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"163\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[163][id]\"
            value=\"6721a5d1e275cbe0768e2d5f\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 164: Tĩnh mạch hiển lớn bắt đầu từ?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Mu chân</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt sau cẳng chân
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cạnh ngoài bàn chân
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cạnh trong bàn chân
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_164\" data-page=\"164\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"164\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[164][id]\"
            value=\"6721a5d1e275cbe0768e2d60\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 165: Động mạch cấp máu chủ yếu cho vùng đùi sau là?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mông dưới
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch đùi sâu
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch bịt</div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_165\" data-page=\"165\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"165\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[165][id]\"
            value=\"6721a5d1e275cbe0768e2d61\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 166: Động mạch mông trên nối với động mạch đùi sâu qua
                nhánh động mạch nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi ngoài
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ chậu sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ chậu nông
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_166\" data-page=\"166\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"166\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[166][id]\"
            value=\"6721a5d1e275cbe0768e2d62\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 167: Động mạch mông trên nối với động mạch chậu ngoài qua
                nhánh?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ chậu sâu
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ chậu nông
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_167\" data-page=\"167\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"167\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[167][id]\"
            value=\"6721a5d1e275cbe0768e2d63\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 168: Bệnh nhân được chẩn đoán chèn ép khoang sau cẳng chân,
                dấu hiệu nào sau đây có thể gặp ở bệnh nhân này?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tê cạnh trong ngón cái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tê mu bàn chân
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mất mạch mu chân
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mất mạch sau mắt cá trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>mạch sau mắt cá trong chính là động mạch
              chày sau. Khi khoang sau cẳng chân bị chèn ép cỏ thể làm tắc động
              mạch chày sau
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_168\" data-page=\"168\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"168\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[168][id]\"
            value=\"6721a5d1e275cbe0768e2d64\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 169: Các động mạch cấp máu cho khớp gối xuất phát từ động
                mạch nào sau đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gối xuống
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch đùi</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch khoeo
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày sau
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_169\" data-page=\"169\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"169\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[169][id]\"
            value=\"6721a5d1e275cbe0768e2d65\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 170: Đoạn ngang của động mạch gan chân ngoài đi?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Giữa cơ gấp các ngón chân ngắn và vuông gan chân
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Giữa cơ gấp các ngón chân dài và cơ khép ngón cái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Giữa cơ khép ngón cái và cơ gian cốt
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Giữa cơ gian cốt mu chân và cơ gian cốt gan chân
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_170\" data-page=\"170\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"170\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[170][id]\"
            value=\"6721a5d1e275cbe0768e2d66\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 171: Mô tả về động mạch chày sau, câu nào sau đây
                đúng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày sau là động mạch khoeo đổi tên khi qua cung gân
                cơ dép
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Khi qua khỏi mắt cá trong, động mạch chày sau cho hai nhánh tận
                vào vùng mu chân
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ta có thể sờ thấy được mạch đập của động mạch chày sau ở phía
                trước mắt cá trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày sau chia hai nhánh là động mạch gan chân trong và
                động mạch gan chân ngoài
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>A sai vì động mạch chày sau là một trong
              hai nhánh tận của động mạch khoeo chứ không phải liên tục của động
              mạch khoeo
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_171\" data-page=\"171\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"171\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[171][id]\"
            value=\"6721a5d1e275cbe0768e2d67\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 172: Mô tả động mạch vùng cẳng chân, câu nào sau đây
                sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày trước và động mạch chày sau là hai nhánh tận của
                động mạch khoeo
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày sau cho nhánh bên là động mạch mác cấp máu cho
                các cơ khu ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mác đi cùng với thần kinh mác nông
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mu chân chính là động mạch chày trước đổi tên khi đến
                vùng bàn chân
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch mác đi cùng thần kinh mác sâu.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_172\" data-page=\"172\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"172\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[172][id]\"
            value=\"6721a5d1e275cbe0768e2d68\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 173: Khi mô tả động mạch chày sau, câu nào sau đây
                sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch đi giữa hai lớp cơ vùng cẳng chân sau, trước mạc sâu
                cẳng chân
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ở 1/3 trên cẳng chân, động mạch đi giữa xương chày và xương mác
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ở 2/3 dưới cẳng chân, động mạch đi vào trong và hướng ra nông
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ở cổ chân, động mạch đi ở phía ngoài gân gót
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p><strong>Gợi ý: </strong>Động mạch đi phía trong gân gót</p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_173\" data-page=\"173\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"173\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[173][id]\"
            value=\"6721a5d1e275cbe0768e2d69\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 174: Động mạch mũ mác là nhánh của?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày sau
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mác</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch khoeo
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_174\" data-page=\"174\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"174\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[174][id]\"
            value=\"6721a5d1e275cbe0768e2d6a\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 175: Khi tắc tĩnh mạch khoeo, hiện tượng ứ máu sẽ thấy rõ
                ở?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Mu bàn chân</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Vùng gối</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Mặt sau đùi</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Mặt trước đùi</div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_175\" data-page=\"175\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"175\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[175][id]\"
            value=\"6721a5d1e275cbe0768e2d6b\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 176: Động mạch gối giữa là nhánh bên của?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch đùi sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch khoeo
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày sau
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_176\" data-page=\"176\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"176\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[176][id]\"
            value=\"6721a5d1e275cbe0768e2d6c\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 177: Động mạch nào sau đây không góp phần tạo nên mạng mạch
                khớp gối?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch đùi sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi trong
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_177\" data-page=\"177\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"177\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[177][id]\"
            value=\"6721a5d1e275cbe0768e2d6d\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 178: Trong các động mạch tạo nên mạng mạch khớp gối, động
                mạch nào xuất phát từ động mạch đùi sâu?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gối xuống
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gối giữa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ đùi ngoài
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ mác
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_178\" data-page=\"178\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"178\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[178][id]\"
            value=\"6721a5d1e275cbe0768e2d6e\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 179: Tĩnh mạch nào sau đây đổ trực tiếp vào tĩnh mạch
                khoeo?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch hiển lớn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch hiển bé
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch đùi sâu
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Tĩnh mạch mác</div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_179\" data-page=\"179\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"179\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[179][id]\"
            value=\"6721a5d1e275cbe0768e2d6f\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 180: Động mạch nào sau đây không phải là nhánh của động
                mạch khoeo?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gối trên trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gối dưới trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gối dưới ngoài
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gối xuống
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_180\" data-page=\"180\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"180\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[180][id]\"
            value=\"6721a5d1e275cbe0768e2d70\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 181: Mô tả động mạch gan chân trong, câu nào sau đây
                sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Là một trong hai nhánh của động mạch chày sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đi dọc theo bờ ngoài gân cơ gấp ngón cái dài
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tận hết ở nền đốt bàn I
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nối với động mạch gan đốt bàn chân I
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch gan chân trong đi dọc theo bờ
              trong gân cơ gấp ngón cái dài
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_181\" data-page=\"181\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"181\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[181][id]\"
            value=\"6721a5d1e275cbe0768e2d71\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 182: Động mạch nào sau đây có hai tĩnh mạch cùng tên đi
                kèm?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch đùi</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch khoeo
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chày trước
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chậu trong
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_182\" data-page=\"182\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"182\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[182][id]\"
            value=\"6721a5d1e275cbe0768e2cbb\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 183: Động mạch thanh quản trên đi xuyên qua màng giáp móng
                cùng với?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nhánh ngoài thần kinh thanh quản trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nhánh trong thần kinh thanh quản trên
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thần kinh quặt ngược thanh quản
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thần kinh thanh quản dưới
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_183\" data-page=\"183\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"183\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[183][id]\"
            value=\"672118bae275cb04208e2cc5\"
          />
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 184: Dùng hình vẽ trên để trả lời ba câu sau bằng cách điền
                vào chỗ trống - Chi tiết số 3 là:
                <label
                  class=\"error_fill-word\"
                  style=\"display: inline; margin: 0 8px\"
                  ><span
                    class=\"answer_fill-word\"
                    style=\"display: inline\"
                  ></span></label
                ><label class=\"right-answer\">[rãnh gian nhĩ]</label></strong
              ></span
            ><br />
            <p>
              <img
                style=\"width: 100%\"
                src=\"";
        // line 16045
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/download-1-4.jpg"), "html", null, true);
        yield "\"
              />
            </p>
            <div class=\"text-error\">(0/1)</div>
          </div>
          <div class=\"clearfix\"></div>
          <script type=\"text/javascript\">
            \$(\"#div_block_quiz_test_183 .input_answer_quiz_fill_words\")
              // event handler
              .keyup(function () {
                \$(this).attr(\"size\", \$(this).val().length + 1);
              })
              // resize on page load
              .each(function () {
                \$(this).attr(\"size\", \$(this).val().length + 1);
              });
          </script>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>Rãnh gian nhĩ&nbsp;</p>
          </div>
        </div>

        <style>
          label.correct_fill-word::after {
            content: \"\\2713\";
            color: green;
            margin-left: 2px;
            font-weight: bold;
          }

          label.error_fill-word::after {
            content: \"\\2717\";
            color: red;
            margin-left: 2px;
            font-weight: bold;
          }

          label span.answer_fill-word {
            border-bottom: 1px solid;
            display: inline-block;
            padding: 0 10px;
          }
        </style>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_184\" data-page=\"184\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"184\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[184][id]\"
            value=\"67211871e275cb1f208e2cc4\"
          />
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 185: Dùng hình vẽ trên để trả lời ba câu sau bằng cách điền
                vào chỗ trống - Chi tiết số 2 là:
                <label
                  class=\"error_fill-word\"
                  style=\"display: inline; margin: 0 8px\"
                  ><span
                    class=\"answer_fill-word\"
                    style=\"display: inline\"
                  ></span></label
                ><label class=\"right-answer\">[rãnh vành]</label></strong
              ></span
            ><br />
            <p>
              <img
                style=\"width: 100%\"
                src=\"";
        // line 16123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/download-1-3.jpg"), "html", null, true);
        yield "\"
              />
            </p>
            <div class=\"text-error\">(0/1)</div>
          </div>
          <div class=\"clearfix\"></div>
          <script type=\"text/javascript\">
            \$(\"#div_block_quiz_test_184 .input_answer_quiz_fill_words\")
              // event handler
              .keyup(function () {
                \$(this).attr(\"size\", \$(this).val().length + 1);
              })
              // resize on page load
              .each(function () {
                \$(this).attr(\"size\", \$(this).val().length + 1);
              });
          </script>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>Rãnh vành</p>
          </div>
        </div>

        <style>
          label.correct_fill-word::after {
            content: \"\\2713\";
            color: green;
            margin-left: 2px;
            font-weight: bold;
          }

          label.error_fill-word::after {
            content: \"\\2717\";
            color: red;
            margin-left: 2px;
            font-weight: bold;
          }

          label span.answer_fill-word {
            border-bottom: 1px solid;
            display: inline-block;
            padding: 0 10px;
          }
        </style>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_185\" data-page=\"185\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"185\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[185][id]\"
            value=\"6721181de275cb09208e2cc7\"
          />
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 186: Dùng hình vẽ trên để trả lời ba câu sau bằng cách điền
                vào chỗ trống - Chi tiết số 1 là:
                <label
                  class=\"error_fill-word\"
                  style=\"display: inline; margin: 0 8px\"
                  ><span
                    class=\"answer_fill-word\"
                    style=\"display: inline\"
                  ></span></label
                ><label class=\"right-answer\"
                  >[rãnh gian thất sau]</label
                ></strong
              ></span
            ><br />
            <p>
              <img
                style=\"width: 100%\"
                src=\"";
        // line 16203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(static_url("unica.vn_storage/85a5243a7a06f0326d6b7422cceee1c6c129686e/download-1-2.jpg"), "html", null, true);
        yield "\"
              />
            </p>
            <div class=\"text-error\">(0/1)</div>
          </div>
          <div class=\"clearfix\"></div>
          <script type=\"text/javascript\">
            \$(\"#div_block_quiz_test_185 .input_answer_quiz_fill_words\")
              // event handler
              .keyup(function () {
                \$(this).attr(\"size\", \$(this).val().length + 1);
              })
              // resize on page load
              .each(function () {
                \$(this).attr(\"size\", \$(this).val().length + 1);
              });
          </script>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>Rãnh gian thất sau&nbsp;</p>
          </div>
        </div>

        <style>
          label.correct_fill-word::after {
            content: \"\\2713\";
            color: green;
            margin-left: 2px;
            font-weight: bold;
          }

          label.error_fill-word::after {
            content: \"\\2717\";
            color: red;
            margin-left: 2px;
            font-weight: bold;
          }

          label span.answer_fill-word {
            border-bottom: 1px solid;
            display: inline-block;
            padding: 0 10px;
          }
        </style>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_186\" data-page=\"186\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"186\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[186][id]\"
            value=\"672114f6e275cb18208e2cc1\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 187: Nhánh đầu tiên của cung động mạch chủ là</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cảnh chung phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch cảnh chung trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thân động mạch cánh tay đầu&nbsp;
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch dưới đòn trái
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_187\" data-page=\"187\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"187\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[187][id]\"
            value=\"672114f6e275cb18208e2cc4\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 188: Động mạch gian sườn sau xuất phát từ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chủ ngực
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực trong
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch trung thất
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch ngực ngoài
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>
              Động mạch chủ ngực (thoracic aorta): Động mạch chủ ngực cung cấp
              các nhánh động mạch gian sườn sau cho các khoang gian sườn từ
              khoang gian sườn 3 đến khoang gian sườn 11.<br />
              <br />
              Động mạch gian sườn trên cùng (Superior intercostal artery): Động
              mạch này là một nhánh của động mạch dưới đòn (subclavian artery)
              qua động mạch ngực trong (internal thoracic artery), và cung cấp
              các nhánh gian sườn sau cho khoang gian sườn 1 và 2.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_188\" data-page=\"188\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"188\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[188][id]\"
            value=\"672114f6e275cb18208e2cc6\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 189: Cung động mạch chủ cho thân động mạch cánh tay đầu
                và?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh chung phải, động mạch cảnh
                                    chung trái</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh chung phải, động mạch dưới
                                    đòn phải</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh chung trái, động mạch dưới
                                    đòn trái</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch dưới đòn phải, động mạch dưới đòn
                                    trái</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_189\" data-page=\"189\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"189\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[189][id]\"
            value=\"672114f6e275cb18208e2cc7\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 190: Ở vị trí ngang đốt sống cổ 3, trong bao cảnh có chứa
                các thành phần nào sau đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh chung, tĩnh mạch cảnh trong,
                                    thần kinh lang thang</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh trong, tĩnh mạch cảnh trong,
                                    thần kinh lang thang</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh chung, tĩnh mạch cảnh trong,
                                    thân giao cảm cổ</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh trong, tĩnh mạch cảnh trong,
                                    thân giao cảm cổ</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>
              Động mạch cảnh chung khi đến ngang đốt sống cổ 4 thì chia thành
              động mạch cảnh ngoài và động mạch cảnh trong. Vì vậy, khi đến cổ 3
              không còn động mạch cảnh chung nữa, lúc này trong bao cảnh chứa
              động mạch cảnh trong cùng tĩnh mạch cảnh trong và thần kinh lang
              thang
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_190\" data-page=\"190\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"190\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[190][id]\"
            value=\"672114f6e275cb18208e2cc8\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 191: Động mạch cảnh chung chia thành động mạch cảnh trong
                và động mạch cảnh ngoài ở ngang mức</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Đốt sống cổ C2</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Đốt sống cổ C1</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Bờ trên sụn giáp</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Bờ dưới sụn giáp</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>Đốt sống cổ 4 (C4) nằm ở mức ngang với bờ trên của sụn giáp.</p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_191\" data-page=\"191\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"191\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[191][id]\"
            value=\"672114f6e275cb18208e2cc9\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 192: Vị trí xuất phát của động mạch cảnh trong và động mạch
                cảnh ngoài thường ở ngang mức với bộ phận nào?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Sụn nhẫn</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Xương móng</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Đốt sống cổ 4</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Đốt sống cổ 6</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>Đốt sống cổ 4 (C4) nằm ở mức ngang với bờ trên của sụn giáp.</p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_192\" data-page=\"192\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"192\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[192][id]\"
            value=\"672114f6e275cb18208e2ccb\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 193: Tiêu chuẩn chắc chắn nhất để phân biệt động mạch cảnh
                ngoài và động mạch cảnh trong ở vùng cổ là gì?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh ngoài nằm phía ngoài động
                                    mạch cảnh trong</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh ngoài nằm phía sau động mạch
                                    cảnh trong</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh ngoài có nhánh bên ở
                                    cổ</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh ngoài đi cùng với tĩnh mạch
                                    cảnh ngoài</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_193\" data-page=\"193\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"193\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[193][id]\"
            value=\"672114f6e275cb18208e2ccc\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 194: Động mạch cảnh chung thường chia đôi thành động mạch
                cảnh trong và động mạch cảnh ngoài ở?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Tam giác dưới hàm</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Tam giác chẩm</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Tam giác cảnh</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Tam giác vai đòn</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>
              Tam giác cảnh được giới hạn bởi bụng sau cơ hai thân, bụng trước
              cơ vai móng, cơ ức đò̀n chũm. Động mạch cảnh chung đi vào tam giác
              cảnh và chia thành động mạch cảnh trong và động mạch cảnh ngoài
              tại đây
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_194\" data-page=\"194\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"194\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[194][id]\"
            value=\"672114f6e275cb18208e2ccd\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 195: Động mạch nào sau đây không phải là nhánh của động
                mạch cảnh trong?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch não trước</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch não giữa</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch não sau</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch mạch mạc trước</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>
              Động mạch não sau là nhánh của động mạch thân nền<br />
              Động mạch cảnh trong có 4 nhánh chính khi đi vào trong hộp sọ và
              không có nhánh nào ở vùng cổ. Các nhánh này bao gồm:<br />
              <br />
              Động mạch não trước (Anterior cerebral artery): Cấp máu cho phần
              lớn bề mặt trong của bán cầu não và phần trước của não.<br />
              Động mạch não giữa (Middle cerebral artery): Cấp máu cho phần lớn
              bề mặt ngoài của bán cầu não.<br />
              Động mạch thông sau (Posterior communicating artery): Kết nối động
              mạch cảnh trong với động mạch não sau trong vòng động mạch
              Willis.<br />
              Động mạch mạch mạc trước (Anterior choroidal artery): Cấp máu cho
              một phần của đồi thị, bao nhân nền, và các cấu trúc trong hệ thần
              kinh trung ương.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_195\" data-page=\"195\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"195\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[195][id]\"
            value=\"672114f6e275cb18208e2cce\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 196: Các động mạch sau đây là nhánh của động mạch cảnh
                ngoài, ngoại trừ?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch mặt</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch lưỡi</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch giáp dưới</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch hầu lên</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>
              Động mạch giáp dưới là nhánh cùa thân giáp cổ của dộng mạch dưới
              đòn
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_196\" data-page=\"196\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"196\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[196][id]\"
            value=\"672114f6e275cb18208e2ccf\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 197: Về động mạch cảnh ngoài, câu nào sau đây sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh ngoài bắt đầu từ bờ trên sụn
                                    giáp</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Ở chỗ xuất phát, động mạch cảnh ngoài nằm
                                    phía ngoài động mạch cảnh trong</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh ngoài không nằm trong bao
                                    cảnh</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch cảnh ngoài cấp máu cho tuyến giáp
                                    qua động mạch giáp trên</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>
              Tại nơi xuất phát, động mạch cảnh ngoài ở phía trước và phía trong
              động mạch cả̀nh trong, sau đó mới đi dần ra ngoài
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_197\" data-page=\"197\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"197\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[197][id]\"
            value=\"672114f6e275cb18208e2cd0\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 198: Động mạch cảnh ngoài có đặc điểm gì?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Là động mạch chính cấp máu cho các cơ,
                                    tuyến vùng đầu, mặt, cổ</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Vùng mang tai, đi xuyên qua phần nông tuyến
                                    mang tai</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Cấp máu cho tuyến giáp bằng động mạch giáp
                                    trên và động mạch giáp dưới</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Chia thành hai nhánh tận ở ngang bờ trên
                                    sụn giáp</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>
              Động mạch cảnh ngoài đi vào phần sâu tuyế̉n mang tai<br />
              Động mạch cảnh ngoài chia thành hai nhánh tận, động mạch thái
              dương nông và động mạch hàm trên, ở ngang cổ xương hàm dưới, không
              phải ở bờ trên sụn giáp.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_198\" data-page=\"198\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"198\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[198][id]\"
            value=\"672114f6e275cb18208e2cd1\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 199: Liên quan giữa động mạch cảnh ngoài và cơ hai thân,
                câu nào sau đây đúng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Bụng trước cơ hai thân bắt chéo phía ngoài
                                    động mạch cảnh ngoài</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Bụng trước cơ hai thân đi phía trong động
                                    mạch cảnh ngoài</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Bụng sau cơ hai thân bắt chéo phía ngoài
                                    động mạch cảnh ngoài</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Bụng sau cơ hai thân đi phía trong động
                                    mạch cảnh ngoài</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_199\" data-page=\"199\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"199\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[199][id]\"
            value=\"672114f6e275cb18208e2cd2\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 200: Nhánh bên đầu tiên của động mạch cảnh ngoài là</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch giáp trên</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch lưỡi</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch mặt</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Động mạch tai sau</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_200\" data-page=\"200\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"200\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[200][id]\"
            value=\"672114f6e275cb18208e2cd3\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 201: Khi cần thắt động mạch giáp trên trong phẫu thuật
                tuyến giáp, cần chú ý nhánh ngoài thần kinh thanh quản trên
                vì</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Thần kinh nằm phía ngoài động mạch</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Thần kinh nằm phía sau động mạch</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Thần kinh nằm phía trước trong động
                                    mạch</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                <table
                  style=\"border-collapse: collapse; width: 63pt; border: none\"
                  width=\"84\"
                >
                  <colgroup>
                    <col />
                  </colgroup>
                  <tbody>
                    <tr height=\"21\" style=\"height: 15.75pt\">
                      <td
                        align=\"left\"
                        height=\"21\"
                        style=\"
                          border: none;
                          height: 15.75pt;
                          width: 63pt;
                          padding-top: 1px;
                          padding-right: 1px;
                          padding-left: 1px;
                          vertical-align: bottom;
                          white-space: nowrap;
                        \"
                        width=\"84\"
                      >
                        <span style=\"font-size: 12pt\"
                          ><span style=\"color: black\"
                            ><span style=\"font-weight: 400\"
                              ><span style=\"font-style: normal\"
                                ><span style=\"text-decoration: none\"
                                  ><span style=\"font-family: Calibri\"
                                    >Thần kinh nằm phía sau trong động
                                    mạch</span
                                  ></span
                                ></span
                              ></span
                            ></span
                          ></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>
            </p>
            <p>
              Nhánh ngoài của thần kinh thanh quản trên nằm ở phía sau động mạch
              giáp trên. Khi phẫu thuật và thắt động mạch này, cần cẩn trọng để
              tránh làm tổn thương thần kinh thanh quản trên, vì tổn thương thần
              kinh này có thể ảnh hưởng đến chức năng của cơ nhẫn giáp và gây
              khó khăn trong việc điều chỉnh âm cao của giọng nói.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_201\" data-page=\"201\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"201\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[201][id]\"
            value=\"67210954e275cb0f5f8e2ced\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 202: Tim và màng ngoài tim nằm trong</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Trung thất trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Trung thất trên
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Trung thất giữa
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Trung thất sau
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_202\" data-page=\"202\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"202\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[202][id]\"
            value=\"67210954e275cb0f5f8e2cee\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 203: Về hình thể ngoài của tim, câu nào sau đây
                đúng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đáy tim nằm trên cơ hoành
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Trong rãnh gian thất sau có tĩnh mạch tim giữa
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Xoang tĩnh mạch vành nằm ở mặt ức sườn của tim
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tâm nhĩ trái có các tĩnh mạch phổi và tĩnh mạch chủ trên đổ vào
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>A Không đúng đáy tim quay ra sau, Rãnh
              gian thất sau nằm ở mặt dưới của tim và chứa tĩnh mạch tim giữa,
              đi kèm với động mạch gian thất sau.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_203\" data-page=\"203\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"203\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[203][id]\"
            value=\"67210954e275cb0f5f8e2cef\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 204: Về động mạch và tĩnh mạch vành, câu nào sau đây
                sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tim lớn đi trong rãnh gian thất trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tim giữa đổ vào xoang tĩnh mạch vành
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vành trái cho nhánh động mạch gian thất trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nhánh gian thất sau thường xuất phát từ động mạch mũ
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Nhánh gian thất sau thường xuất phát từ
              động mạch vành phải, không phải từ động mạch mũ
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_204\" data-page=\"204\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"204\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[204][id]\"
            value=\"67210954e275cb0f5f8e2cf0\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 205: Về hình thể trong của tim, câu nào sau đây
                sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Giữa hai tâm nhĩ thông nhau qua lỗ bầu dục
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Giữa tâm nhĩ và tâm thất cùng bên thông nhau qua lỗ nhĩ - thất
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Giữa hai tâm thất ngăn cách nhau bởi vách gian thất
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Lỗ động mạch chủ và lỗ động mạch phổi đều có van
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_205\" data-page=\"205\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"205\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[205][id]\"
            value=\"67210954e275cb0f5f8e2cf1\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 206: Về phía sau, tâm nhĩ trái liên quan với</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Thực quản</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Phế quản chính trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Phổi và màng phổi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch chủ ngực
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_206\" data-page=\"206\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"206\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[206][id]\"
            value=\"67210954e275cb0f5f8e2cf2\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 207: Các động mạch vành</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nằm trên bề mặt bao xơ màng ngoài tim
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nằm dưới bao xơ màng ngoài tim
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nằm trong khoang màng ngoài tim
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nằm giữa lá tạng bao thanh mạc màng ngoài tim và bề mặt cơ tim
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch vành đi dưới ngoài tâm mạc, trên
              bề mặt cơ tim. Có hai động mạch vành là động mạch vành phải và
              động mạch vành trái.\"
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_207\" data-page=\"207\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"207\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[207][id]\"
            value=\"67210954e275cb0f5f8e2cf3\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 208: Trong hệ thống động mạch vành, nhánh bờ trái xuất phát
                từ</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thân chung động mạch vành trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mũ</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gian thất trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gian thất sau
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_208\" data-page=\"208\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"208\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[208][id]\"
            value=\"67210954e275cb0f5f8e2cf4\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 209: Trong rãnh gian thất trước có động mạch gian thất
                trước và</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tim lớn
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tim giữa
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tim trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tim chếch
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch gian thất trước, còn được gọi là
              động mạch xuống trước trái, đi trong rãnh gian thất trước cùng
              tĩnh mạch tim lớn.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_209\" data-page=\"209\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"209\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[209][id]\"
            value=\"67210954e275cb0f5f8e2cf5\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 210: Nút xoang nhĩ</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nằm ở thành trái của tâm nhĩ trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nằm ở thành phải của tâm nhĩ phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Có bản chất là các tế bào thần kinh
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nối với nút nhĩ - thất bởi bó nhĩ - thất
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Nút xoang nhĩ: thường gọi là nút xoang,
              nằm thành phải của tâm nhĩ phải, bên phải lỗ tĩnh mạch chủ trên.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_210\" data-page=\"210\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"210\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[210][id]\"
            value=\"67210954e275cb0f5f8e2cf6\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 211: Mô tả về các buồng của tim, chi tiết nào sau đây
                sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đổ vào tâm nhĩ trái có các tĩnh mạch phổi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Thành tâm thất phải dày hơn thành tâm trái
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tâm nhĩ thông với tâm thất cùng bên qua lỗ nhĩ thất
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Van nhĩ thất phải còn gọi là van ba lá
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_211\" data-page=\"211\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"211\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[211][id]\"
            value=\"67210954e275cb0f5f8e2cf7\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 212: Rãnh tận cùng.</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ở đáy tim và là ranh giới của tâm nhĩ phải và tâm nhĩ trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nối bờ phải tĩnh mạch chủ trên và tĩnh mạch chủ dưới
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ở bên trái vách liên nhĩ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tương ứng với bó nhĩ thất
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Rãnh tận cùng là một rãnh chạy từ bờ phải
              của tĩnh mạch chủ trên đến bờ phải tĩnh mạch chủ dưới, ứng với bên
              ngoài của mào tận cùng trong tâm nhĩ phải, đây là nơi tâm nhĩ
              nguyên thủy hòa với xoang tĩnh mạch
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_212\" data-page=\"212\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"212\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[212][id]\"
            value=\"67210954e275cb0f5f8e2cf8\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"><strong>Câu 213: Hố bầu dục.</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nằm ở mặt phải vách gian nhĩ
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Vừa thuộc tâm nhĩ phải vừa thuộc tâm nhĩ trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Có viền hố bầu dục giới hạn ở phía trước và trên của hố
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Có van của hố bầu dục là phần kéo dài của van tĩnh mạch chủ dưới
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_213\" data-page=\"213\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"213\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[213][id]\"
            value=\"67210954e275cb0f5f8e2cf9\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 214: Hiện tượng nào sau đây xảy ra vào thì tâm
                trương?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Van hai lá mở</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Van động mạch chủ mở
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Máu từ tâm thất trái lên động mạch chủ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Máu từ tâm thất phải lên động mạch phổi
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Thì tâm trương, hai tâm thất dãn, cả hai
              van nhĩ thất đều mở để máu từ tâm nhĩ xuống tâm thất
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_214\" data-page=\"214\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"214\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[214][id]\"
            value=\"67210954e275cb0f5f8e2cfa\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong>Câu 215: Rãnh gian nhĩ nằm ở đâu?</strong></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Mặt ức sườn</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Đỉnh tim</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Mặt hoành</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Đáy tim</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_215\" data-page=\"215\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"215\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[215][id]\"
            value=\"67210954e275cb0f5f8e2cfb\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 216: Mô tả về mặt ức sườn của tim, điểm nào sau đây
                sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Liên quan với xương ức và các sụn sườn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Có rãnh vành nằm giữa phần tâm nhĩ và phần tâm thất
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Có rãnh gian thất trước chạy dọc giữa hai tâm thất
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Có động mạch gian thất trước và tĩnh mạch tim giữa
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Mặt ức sườn có động mạch gian thất trước
              và tĩnh mạch tim lớn
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_216\" data-page=\"216\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"216\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[216][id]\"
            value=\"67210954e275cb0f5f8e2cfc\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 217: Mỏm tim thường nằm tương ứng với mức nào sau
                đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Khoang gian sườn 3 trên đường trung đòn trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Khoang gian sườn 4 trên đường trung đòn trái
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Khoang gian sườn 5 cạnh bờ trái xương ức
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Khoang gian sườn 4 cạnh bờ trái xương ức
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Đỉnh tim còn gọi là mỏm tim, nằm ngay sau
              khoang gian sườn 5 đường trung đòn trái, bên phải của đỉnh tim có
              khuyết đỉnh tim, là nơi rãnh gian thất trước gặp rãnh gian thất
              sau.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_217\" data-page=\"217\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"217\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[217][id]\"
            value=\"67210954e275cb0f5f8e2cfd\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 218: Nơi gặp nhau giữa rãnh gian thất trước và rãnh gian
                thất sau được gọi là gì?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Khuyết đỉnh tim
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Rãnh tận cùng</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Xoang ngang</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Xoang tĩnh mạch vành
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Đỉnh tim còn gọi là mỏm tim, nằm ngay sau
              khoang gian sườn 5 đường trung đòn trái, bên phải của đỉnh tim có
              khuyết đỉnh tim, là nơi rãnh gian thất trước gặp rãnh gian thất
              sau.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_218\" data-page=\"218\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"218\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[218][id]\"
            value=\"67210954e275cb0f5f8e2cfe\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 219: Rãnh gian thất sau của tim nằm ở đâu?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Đáy tim</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt trái của tim
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt trước của tim
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt hoành của tim
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_219\" data-page=\"219\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"219\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[219][id]\"
            value=\"67210954e275cb0f5f8e2cff\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 220: Mô tả về hình thể ngoài và liên quan của tim, câu nào
                sau đây sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đỉnh tim hướng ra trước, xuống dưới và sang trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đáy tim nằm lên cơ hoành và còn gọi là mặt hoành
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt trước tim liên quan với xương ức và các sụn sườn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt trái tim liên quan với phổi và màng phổi trái
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Mặt hoành của tim là mặt dưới, không gọi
              là đáy tim
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_220\" data-page=\"220\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"220\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[220][id]\"
            value=\"67210954e275cb0f5f8e2d00\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 221: Chi tiết giải phẫu nào sau đây chạy từ mặt trước đến
                mặt hoành của tim?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Rãnh vành</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Rãnh gian thất trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Rãnh gian thất sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Rãnh tận cùng</div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Rãnh gian thất trước (anterior
              interventricular sulcus): Nằm ở mặt trước của tim, ngăn cách hai
              tâm thất nhưng không kéo dài đến mặt hoành.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_221\" data-page=\"221\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"221\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[221][id]\"
            value=\"67210954e275cb0f5f8e2d01\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 222: Thành phần nào sau đây đi cùng với động mạch gian thất
                sau ở rãnh gian thất sau?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tim lớn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tim giữa
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tim nhỏ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Xoang tĩnh mạch vành
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_222\" data-page=\"222\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"222\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[222][id]\"
            value=\"67210954e275cb0f5f8e2d02\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 223: Chi tiết giải phẫu nào sau đây không thấy ở tâm nhĩ
                phải?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Van lỗ bầu dục
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Mào tận cùng</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Lỗ xoang tĩnh mạch vành
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Hố bầu dục</div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_223\" data-page=\"223\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"223\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[223][id]\"
            value=\"67210954e275cb0f5f8e2d03\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 224: Mô tả về động mạch vành, câu nào sau đây sai?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vành phải xuất phát từ xoang phải động mạch chủ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nhánh gian thất sau xuất phát từ động mạch vành trái
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gian thất trước cho các nhánh chéo
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch mũ xuất phát từ thân chung động mạch vành trái
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_224\" data-page=\"224\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"224\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[224][id]\"
            value=\"67210954e275cb0f5f8e2d04\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 225: Mô tả hình thể ngoài của tim, câu nào sau đây
                đúng?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đáy tim nằm trên cơ hoành nên còn gọi là mặt hoành
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                \"Vị trí mỏm tim tương ứng với giao điểm giữa đường thẳng đi qua
                điểm giữa xương đòn trái và khoảng gian sườn 4 hoặc 5 bên trái\"
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt trước tim liên quan với xương ức và các sụn sườn thứ 2 đến
                thứ 7
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Trên lâm sàng, bờ phải tim là ranh giới giữa mặt trước và đáy
                tim
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Mặt ức sườn liên quan với mặt sau thân
              xương ức, các sụn sườn thứ 3 đến thứ 6, bó mạch ngực trong phải và
              trái.
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_225\" data-page=\"225\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"225\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[225][id]\"
            value=\"67210954e275cb0f5f8e2d05\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 226: Chi tiết nào sau đây được nhìn thấy ở mặt hoành lẫn
                mặt phổi của tim?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Rãnh nhĩ thất</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Rãnh gian thất sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Xoang tĩnh mạch vành
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Khuyết đỉnh tim
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_226\" data-page=\"226\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"226\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[226][id]\"
            value=\"67210954e275cb0f5f8e2d06\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 227: Yếu tố nào sau đây không ảnh hưởng đến kích thước của
                tim?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Tuổi</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Giới</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Huyết áp</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Nhóm máu</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_227\" data-page=\"227\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"227\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[227][id]\"
            value=\"67210954e275cb0f5f8e2d07\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 228: Khi khám tim cho bệnh nhân, bác sĩ nghe âm thổi bất
                thường ở mỏm mũi kiếm xương ức. Âm thổi này có khả năng xuất
                phát từ đâu?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Van nhĩ thất trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Van nhĩ thất phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Van động mạch phổi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Van động mạch chủ
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Vị trí nghe rõ tiếng cùa van 3 lá (van nhĩ
              thất phải là mỏm mũi kiếm xương ức)
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_228\" data-page=\"228\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"228\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[228][id]\"
            value=\"67210954e275cb0f5f8e2d08\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 229: Khi khám tim cho bệnh nhân, bác sĩ nghe âm thổi bất
                thường ở khoảng gian sườn 2 cạnh bờ trái xương ức. Âm thổi này
                có khả năng xuất phát từ đâu?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Van nhĩ thất trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Van nhĩ thất phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Van động mạch phổi
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Van động mạch chủ
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Khoảng gian sườn 2 cạnh bờ phải xương ức
              là Van động mạch chủ
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_229\" data-page=\"229\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"229\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[229][id]\"
            value=\"67210954e275cb0f5f8e2d09\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 230: Vị trí bình thường của lỗ động mạch vành là ở
                đâu?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Lỗ động mạch vành phải trên đường SJ, lỗ động mạch vành trái
                dưới đường SJ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Lỗ động mạch vành phải dưới đường SJ, lỗ động mạch vành trái
                trên đường SJ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cả lỗ động mạch vành phải và động mạch vành trái đều ngang đường
                SJ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Cả lỗ động mạch vành phải và động mạch vành trái đều dưới đường
                SJ
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Cả hai lỗ dộng mạch vành đêu dưới đường SJ
              đê tối ưu hóa lượng máu vào động mạch vành
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_230\" data-page=\"230\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"230\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[230][id]\"
            value=\"67210954e275cb0f5f8e2d0a\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 231: Xoang động mạch chủ nào sau đây gọi là xoang không
                vành?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Xoang phải và xoang trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Xoang phải và xoang sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Xoang sau</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Xoang phải</div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_231\" data-page=\"231\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"231\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[231][id]\"
            value=\"67210954e275cb0f5f8e2d0b\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 232: Về mặt lâm sàng, bờ phải (hay bờ sắc) của tim là ranh
                giới giữa?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt hoành và mặt phổi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt hoành và mặt ức sườn
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt ức sườn và mặt phổi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt phổi và mặt đáy
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_232\" data-page=\"232\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"232\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[232][id]\"
            value=\"67210954e275cb0f5f8e2d0c\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 233: Thông thường, động mạch nào sau đây bị tắc sẽ gây
                thiếu máu cơ tim ở mặt hoành?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vành phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vành trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mũ</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gian thất trước
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch vành phải là động mạch chính
              cung cấp máu cho mặt hoành của tim
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_233\" data-page=\"233\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"233\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[233][id]\"
            value=\"67210954e275cb0f5f8e2d0d\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 234: Đặc điểm nào sau đây đúng với tĩnh mạch tim
                giữa?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đi cùng động mạch gian thất trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đi trong rãnh nhĩ thất trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đổ vào xoang tĩnh mạch vành
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Đổ vào tâm nhĩ phải
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p><strong>Gợi ý: </strong>A và B đúng với tĩnh mạch tim lớn</p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_234\" data-page=\"234\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"234\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[234][id]\"
            value=\"67210954e275cb0f5f8e2d0e\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 235: Đặc điểm nào sau đây đúng với lá thành ngoại tâm mạc
                thanh mạc?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nằm trong trung thất giữa
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nối tim với cơ hoành, xương ức
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Chỗ dày lên tạo nên dây chằng hoành - ngoại tâm mạc
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nằm ngay trên bề mặt cơ tim và các động mạch vành
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>B và c đúng với ngoại tâm mạc sợi; D đúng
              với lá tạng ngoại tâm mạc thanh mạc
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_235\" data-page=\"235\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"235\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[235][id]\"
            value=\"67210954e275cb0f5f8e2d0f\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 236: Trên lâm sàng, bờ trái của tim chính là ranh giới
                giữa?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt hoành và mặt phổi
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt hoành và mặt ức sườn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt ức sườn và mặt phổi
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Mặt phổi và đáy tim
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_236\" data-page=\"236\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"236\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[236][id]\"
            value=\"67210954e275cb0f5f8e2d10\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 237: Động mạch nào sau đây bị tắc sẽ gây thiếu máu vùng mỏm
                tim?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mũ</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vành phải
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gian thất sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gian thất trước
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Mỏm tim được cấp máu chủ yếu bởi động mạch
              gian thất trước
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_237\" data-page=\"237\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"237\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[237][id]\"
            value=\"67210954e275cb0f5f8e2d11\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 238: Động mạch gian thất sau đi cùng với?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tim lớn
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tim nhỏ
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tim giữa
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tĩnh mạch tim chếch
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_238\" data-page=\"238\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"238\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[238][id]\"
            value=\"67210954e275cb0f5f8e2d12\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 239: Nút nhĩ thất sẽ bị thiếu máu nuôi trong trường hợp tắc
                động mạch nào sau đây?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mũ</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vành phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vành trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gian thất trước
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Thông thường, nút nhĩ thất được cấp máu
              bởi dộng mạch vành phải
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_239\" data-page=\"239\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"239\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[239][id]\"
            value=\"67210954e275cb0f5f8e2d13\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 240: Trong trường hợp ưu thế trái động mạch vành, mặt hoành
                thất trái được cấp máu bởi?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mũ</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gian thất sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch gian thất trước
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vành phải
              </div>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Trong ưu thế trái, động mạch mũ dài, đi
              qua mặt hoành thất trái, đến rãnh gian thất sau và cho nhánh gian
              thất sau. Trên đường đi, nó cho các nhánh ở mặt hoành thất trái
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_240\" data-page=\"240\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"240\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[240][id]\"
            value=\"67210954e275cb0f5f8e2d14\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 241: Điều nào sau đây đúng đối với mặt dưới của
                tim?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Tiếp xúc với vòm hoành trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Có thân chung động mạch vành trái chạy trong rãnh vành
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Có tĩnh mạch tim lớn chạy trong rãnh gian thất sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Có một đoạn của động mạch gian thất trước
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"quiz_note hidden\">
            <p>
              <strong>Gợi ý: </strong>Động mạch gian thất trước khi di hết rãnh
              gian thất trước sè vòng qua mỏm tim, xuống mặt hoành và đi một
              đoạn ngẩn trong rành gian thất sau. A không đúng vì mặt hoành của
              tim nầm trên trung tâm gân cơ hoành chứ không tiêp xúc với vòm
              hoành
            </p>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_241\" data-page=\"241\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"241\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[241][id]\"
            value=\"67210954e275cb0f5f8e2d15\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 242: Trong trường hợp ưu thế phải động mạch vành, các nhánh
                sau thất trái xuất phát từ đâu?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Động mạch vành phải
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Động mạch mũ</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nhánh gian thất sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Nhánh bờ trái</div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_242\" data-page=\"242\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"242\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[242][id]\"
            value=\"67210954e275cb0f5f8e2d16\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 243: Khi khám tim, bác sĩ sờ thấy mỏm tim đập ở vị trí nào
                sau đây thì cho là bình thường?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Khoảng liên sườn 3 trên đường trung đòn trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Khoảng liên sườn 4 hoặc 5 trên đường trung đòn trái
              </div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ngang góc ức trên đường trung đòn trái
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Ngang mỏm mũi kiếm trên đường trung đòn trái
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"block-quiz-test\" id=\"div_block_quiz_test_243\" data-page=\"243\">
        <div
          class=\"w3-padding w3-light-grey block-question\"
          style=\"background: #fff\"
          data-page=\"243\"
        >
          <input
            type=\"hidden\"
            name=\"Quiz[243][id]\"
            value=\"67210954e275cb0f5f8e2d17\"
          />
          
          <div class=\"w3-large\">
            <span class=\"quiz-title\"
              ><strong
                >Câu 244: Nhánh nào sau đây được xem là nhánh chính của động
                mạch vành phải?</strong
              ></span
            ><br />
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">A</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nhánh nút xoang
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">B</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Nhánh nón</div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label class=\"area-answer-quiz d-flex border rounded mb-2 pr-2\">
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">C</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">
                Nhánh gian thất sau
              </div>
            </label>
          </div>

          <div class=\"clearfix\"></div>
          <div class=\"radio\">
            <label
              class=\"right-answer area-answer-quiz d-flex border rounded mb-2 pr-2\"
            >
              <div
                class=\"d-flex font-weight-bold chart-answer\"
                style=\"background: #dee1e6\"
              >
                <span class=\"m-auto\" style=\"padding: 0 15px\">D</span>
              </div>
              <div class=\"w-100 border-left p-1 text-answer\">Nhánh bờ phải</div>
              <i class=\"fa fa-check-circle hidden text-success my-auto\"></i>
            </label>
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
        return "quizz/contents/timmach.html";
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
        return array (  16252 => 16203,  16169 => 16123,  16088 => 16045,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "quizz/contents/timmach.html", "D:\\Projects\\minic2\\src\\app\\Views\\quizz\\contents\\timmach.html");
    }
}
