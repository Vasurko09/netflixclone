from PIL import Image, ImageDraw, ImageFont

# Open an image
image_path = "yellow.png"
image = Image.open(image_path)

# Define the text to overlay
text = "Hello, World!"

# Choose a font and font size
font_path = "path_to_font.ttf"  # Replace with the path to a TrueType font file
font_size = 36
font = ImageFont.truetype(font_path, font_size)

# Create a drawing object
draw = ImageDraw.Draw(image)

# Calculate text size and position
text_width, text_height = draw.textsize(text, font=font)
image_width, image_height = image.size
x = (image_width - text_width) // 2
y = image_height - text_height - 20  # You can adjust the y-coordinate as needed

# Define text color
text_color = (255, 255, 255)  # White color

# Draw the text on the image
draw.text((x, y), text, font=font, fill=text_color)

# Save the edited image
output_path = "output_image.jpg"
image.save(output_path)

print("Text overlay complete.")
