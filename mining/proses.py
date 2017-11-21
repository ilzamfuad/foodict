f = open("tahu_campur.txt","r")
read = f.read()
coba = read.split()
count = dict()

for i in coba:
    if i in count:
        count[i] += 1
    else:
        count[i] = 1

print(count)