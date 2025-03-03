import os
import re
from bs4 import BeautifulSoup

def clean_html(content):
    soup = BeautifulSoup(content, 'html.parser')
    
    # Loại bỏ tất cả các input[type="hidden"]
    for hidden_input in soup.find_all('input', {'type': 'hidden'}):
        hidden_input.decompose()
    
    # Loại bỏ các thẻ <br> vô nghĩa dạng </div>(dấu cách hoặc xuống dòng)<br>(dấu cách hoặc xuống dòng)</div>
    for br in soup.find_all('br'):
        if br.previous_sibling and br.previous_sibling.name == 'div':
            if not br.next_sibling or (br.next_sibling.name == 'div' and not br.next_sibling.text.strip()):
                br.decompose()
    
    return str(soup)

def process_files(src_dir, dest_dir):
    if not os.path.exists(dest_dir):
        os.makedirs(dest_dir)
    
    for file_name in os.listdir(src_dir):
        src_path = os.path.join(src_dir, file_name)
        dest_path = os.path.join(dest_dir, file_name)
        
        if os.path.isfile(src_path) and file_name.endswith('.html'):
            with open(src_path, 'r', encoding='utf-8') as file:
                content = file.read()
            
            cleaned_content = clean_html(content)
            
            with open(dest_path, 'w', encoding='utf-8') as file:
                file.write(cleaned_content)
            
            print(f"Processed: {file_name}")

if __name__ == "__main__":
    src_directory = "./src/app/Views/quizz/contents_2"
    dest_directory = "./src/app/Views/quizz/contents_3"
    process_files(src_directory, dest_directory)