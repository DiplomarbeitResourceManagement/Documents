#!/usr/bin/python3

import csv

def unique_list(l):
  x = []
  for a in l:
    if a not in x:
      x.append(a)
  return x
  
fp=open("L:\GitHub\Documents\Code\Absolventen\Absolventen_V2016_Name_1.csv", "r")
fp1=open("L:\GitHub\Documents\Code\Absolventen\Absolventen_V2016_Name_1.sql", "w+")

i=1
reader=csv.reader(fp, delimiter=';')

row0=[]
for row in reader:
   row0.append(row[0])

row0u=unique_list(row0)
for elem in row0u:
  fp1.write("insert into abschlussjahr (id_j, jahr) values (" \
        + str(i) + ",\"" \
		+ elem + "\");\n" \
	   ) 
  i=i+1
  

i=1  
row0=[]
for row in reader:
   row0.append(row[1])

row0u=unique_list(row0)
for elem in row0u:
  fp1.write("insert into klasse (id_k, klasse) values (" \
        + str(i) + ",\"" \
		+ elem + "\");\n" \
	   ) 
  i=i+1


fp1.close()
fp.close()