import os
import sys
from PIL import Image
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="root",
  database="zify"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT * FROM customers")

myresult = mycursor.fetchall()

for x in myresult:
  print(x)

# images = [Image.open(x) for x in ['./Database/samplePics/inutero.jpg', './Database/samplePics/nevermind.jpg', './Database/samplePics/pfp.jpg', './Database/samplePics/samplePlaylist.jpg']] #Change to DB output
# widths, heights = zip(*(i.size for i in images))

# total_width = sum(widths)
# max_height = max(heights)

# new_im = Image.new('RGB', (total_width, max_height))

# x_offset = 0
# for im in images:
#   new_im.paste(im, (x_offset,0))
#   x_offset += im.size[0]

# new_im.save('test.jpg')