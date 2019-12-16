import random
import string
import os

# non_printables =[]
# for i in range(0,46):
# 	non_printables.append(chr(i))
# for i in range(160,255):
# 	non_printables.append(chr(i))

for i in range(15):
	filename  = ''.join(random.choices(string.ascii_lowercase, k=random.randint(4,7)))
	filename = '-'+filename
	with open(filename,"w") as f:
		nn = ''.join(random.choices(string.ascii_lowercase, k=random.randint(8,12)))
		nn = 'GLUG{'+nn+'}'
		f.write(nn)
 
