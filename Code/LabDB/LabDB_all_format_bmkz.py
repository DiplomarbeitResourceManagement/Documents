#!/usr/bin/python3

import csv
import re
  
fp=open("L:\GitHub\Documents\Code\LabDB\Bestand2007_orig_bmkz.csv", "r")
fp1=open("L:\GitHub\Documents\Code\LabDB\Bestand2007_format_bmkz.csv", "w+")

nr=0
#print "Name of the file: ", fp1.name
for line in fp.readlines():
  if nr>0:
    line=line.strip()
    line=line.replace("\"","")
    parts=line.split(";")

    fp1.write("" + parts[0] + ";"       # nr
                 + parts[1] + ";"       # bmkz
	   		     + parts[2] + ";"       # bemerkung
			     + parts[3] + ";"  		# firma
			     + parts[4] + ";"       # type
			     + parts[5] + ";"      	# anlagennr
			     + parts[6] + ";"      	# inventarnr
			     + parts[7] + ";"      	# ger./ser. nr.
			     + parts[8] + ";"      	# raum
			     + parts[9] + ";"       # kasten
			     + parts[10] + ";"      # fach
			     + parts[11] + ";"      # kategorie
			     + parts[12] + ";"     	# standort
			     + parts[13] + ";"     	# bildreferenz
			     + parts[14] + ";\n")   # dateireferenz
  nr=nr+1

fp1.close()
fp.close()