#!/usr/bin/python3

import csv
import re
  
fp=open("L:\GitHub\Documents\Code\LabDB\Bestand2007_orig.csv", "r")
fp1=open("L:\GitHub\Documents\Code\LabDB\Bestand2007_format.csv", "w+")

nr=0
#print "Name of the file: ", fp1.name
for line in fp.readlines():
  if nr>0:
    line=line.strip()
    line=line.replace("\"","")
    parts=line.split(";")

    fp1.write("" + parts[0] + ";"       # nr
	   		     + parts[1] + ";"       # bemerkung
			     + parts[2] + ";"  		# firma
			     + parts[3] + ";"       # type
			     + parts[4] + ";"      	# anlagennr
			     + parts[5] + ";"      	# inventarnr
			     + parts[6] + ";"      	# ger./ser. nr.
			     + parts[7] + ";"      	# raum
			     + parts[8] + ";"       # kasten
			     + parts[9] + ";"      	# fach
			     + parts[10] + ";"      # kategorie
			     + parts[11] + ";"     	# standort
			     + parts[12] + ";"     	# bildreferenz
			     + parts[13] + ";\n")   # dateireferenz
  nr=nr+1

fp1.close()
fp.close()