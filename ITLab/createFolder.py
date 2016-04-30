import os

for i in range(0,10):
    f = "Q_"+str(i+1)
    os.makedirs(f)
    os.chdir(f)
    os.makedirs("Part_A")
    os.makedirs("Part_B")
    os.chdir("..")
    
