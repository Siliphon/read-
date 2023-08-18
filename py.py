import os

l = os.listdir("lo")
file = open('lo.txt','w')
for i in l:
    file.write(i+" | progress"+"\n")