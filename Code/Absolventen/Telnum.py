#!/usr/bin/python3

import csv
  
fp=open("L:\GitHub\Documents\Code\Absolventen\Absolventen_all.csv", "r")
fp1=open("L:\GitHub\Documents\Code\Absolventen\Telnum.txt", "w+")

nr=0
#print "Name of the file: ", fp1.name
for line in fp.readlines():
  line=line.strip()
  parts=line.split(";")
  
  if nr > 0: 
	  if parts[12]:
		  fp1.write("" + parts[12] + "\n")      # ftel
	  if parts[21]:
	      fp1.write("" + parts[21] + "\n")      # ptel
  nr=nr+1

fp1.close()
fp.close()