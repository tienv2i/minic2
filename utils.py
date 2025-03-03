import os
import glob
from bs4 import BeautifulSoup

def process_html_file(input_path, output_path, question_counter):
    with open(input_path, 'r', encoding='utf-8') as file:
        soup = BeautifulSoup(file, 'html.parser')
    
    for quiz_block in soup.find_all("div", class_="block-quiz-test"):
        question_counter += 1
        
        # Cập nhật số thứ tự câu hỏi vào thuộc tính data-question-number
        quiz_block["data-question-number"] = str(question_counter)
        
        # Thêm nút button ngay trước quiz-title trong div.w3-large
        question_title_div = quiz_block.find("div", class_="w3-large")
        if question_title_div:
            quiz_title = question_title_div.find("span", class_="quiz-title")
            if quiz_title:
                button_tag = soup.new_tag("button")
                button_tag["class"] = "quiz-button"
                button_tag["data-question"] = str(question_counter)
                button_tag.string = "Chọn câu này"
                quiz_title.insert_before(button_tag)
    
    with open(output_path, 'w', encoding='utf-8') as file:
        file.write(str(soup))
    
    return question_counter

def main():
    input_dir = "./src/app/Views/quizz/contents/"
    output_dir = "./src/app/Views/quizz/contents_2/"
    os.makedirs(output_dir, exist_ok=True)
    
    question_counter = 0
    
    html_files = glob.glob(os.path.join(input_dir, "*.html"))
    for file_path in sorted(html_files):
        file_name = os.path.basename(file_path)
        output_path = os.path.join(output_dir, file_name)
        question_counter = process_html_file(file_path, output_path, question_counter)
    
    print("Processing complete. Updated files are saved in contents_2 folder.")

if __name__ == "__main__":
    main()
