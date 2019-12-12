import random
import string
import os

non_printables =[]
for i in range(0,46):
	non_printables.append(chr(i))
for i in range(160,255):
	non_printables.append(chr(i))

for i in range(1023):
	filename  = ''.join(random.choices(string.ascii_lowercase, k=random.randint(3, 8)))
	with open("."+filename,"w") as f:
		nn = ''.join(random.choices(non_printables, k=random.randint(5, 10)))
		f.write(nn)
 
