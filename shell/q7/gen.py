import uuid

with open("secretkey.new","w") as f:
	for i in range(10001):
		f.write("GLUG{"+str(uuid.uuid4())+"}\r\n")

print("c ", uuid.uuid4())
