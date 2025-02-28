import os
import re
import requests

def extract_img_sources(directory):
    img_sources = []
    pattern = re.compile(r'<img\s+[^>]*src=["\']([^"\']+)["\']', re.IGNORECASE)
    
    for filename in os.listdir(directory):
        if filename.endswith(".html"):
            filepath = os.path.join(directory, filename)
            with open(filepath, 'r', encoding='utf-8') as file:
                content = file.read()
                matches = pattern.findall(content)
                img_sources.extend(matches)
    
    return img_sources

def download_images(img_sources, base_save_path="./static/unica_imgs/"):
    for img_url in img_sources:
        try:
            response = requests.get(img_url, stream=True)
            if response.status_code == 200:
                img_url_clean = img_url.replace("https://", "").replace("http://", "")
                img_path = os.path.join(base_save_path, *img_url_clean.split('/'))
                os.makedirs(os.path.dirname(img_path), exist_ok=True)
                with open(img_path, 'wb') as img_file:
                    for chunk in response.iter_content(1024):
                        img_file.write(chunk)
                print(f"Downloaded: {img_url} -> {img_path}")
            else:
                print(f"Failed to download: {img_url}")
        except Exception as e:
            print(f"Error downloading {img_url}: {e}")

# Đường dẫn đến thư mục chứa các file HTML
directory = "./src/app/Views/quizz/html"
img_sources = extract_img_sources(directory)

# Tải xuống các ảnh và lưu vào thư mục tương ứng
download_images(img_sources)
