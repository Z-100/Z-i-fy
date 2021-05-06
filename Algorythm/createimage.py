import os
import sys
from PIL import Image
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="zify"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT thumbnail FROM songs WHERE id=1")

result = mycursor.fetchall()

for row in myresult:



file = request.files[row['thumbnail']]
img = Image.open(file.stream)
img.show()
img.save("imagefile.jpg")

# images = [Image.open(x) for x in [row['thumbnail'], row['thumbnail'], row['thumbnail'], row['thumbnail']]]
# widths, heights = zip(*(i.size for i in images))

# total_width = sum(widths)
# max_height = max(heights)

# new_im = Image.new('RGB', (total_width, max_height))

# x_offset = 0
# for im in images:
#   new_im.paste(im, (x_offset,0))
#   x_offset += im.size[0]

# new_im.save('test.jpg')