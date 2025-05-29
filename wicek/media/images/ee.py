import os
from PIL import Image

def remove_metadata(image_path):
    try:
        img = Image.open(image_path)

        # Sprawdź orientację
        width, height = img.size
        if height > width:
            print(f"Pomijam (portret): {image_path}")
            return

        # Usuń metadane
        data = list(img.getdata())
        clean_img = Image.new(img.mode, img.size)
        clean_img.putdata(data)
        clean_img.save(image_path)
        print(f"Usunięto metadane: {image_path}")

    except Exception as e:
        print(f"Błąd przy {image_path}: {e}")

def main():
    folder = os.path.dirname(os.path.abspath(__file__))
    supported_formats = (".jpg", ".jpeg", ".png", ".tiff", ".bmp")

    for filename in os.listdir(folder):
        if filename.lower().endswith(supported_formats):
            path = os.path.join(folder, filename)
            remove_metadata(path)

if __name__ == "__main__":
    main()
