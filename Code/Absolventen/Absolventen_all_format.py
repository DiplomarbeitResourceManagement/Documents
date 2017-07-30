#!/usr/bin/python3

import csv
import re
  
fp=open("L:\GitHub\Documents\Code\Absolventen\Absolventen_all.csv", "r")
fp1=open("L:\GitHub\Documents\Code\Absolventen\Absolventen_all_format.csv", "w+")

nr=0
#print "Name of the file: ", fp1.name
for line in fp.readlines():
  line=line.strip()
  parts=line.split(";")
  
  if not parts[7]:		# xing
    parts[7] = "0"
  elif parts[7] == "x":
    parts[7] = "1"
  else:
    parts[7] = "0"
	
  if not parts[16]:		# ferial
    parts[16] = "0"
  elif parts[16] == "J":
    parts[16] = "1"
  else:
    parts[16] = "0"
	
  if not parts[17]:		#diplom
    parts[17] = "0"
  elif parts[17] == "J":
    parts[17] = "1"
  else:
    parts[17] = "0"
	
  if not parts[18]:		# excursion
    parts[18] = "0"
  elif parts[18] == "J":
    parts[18] = "1"
  else:
    parts[18] = "0"
	

  telnum=""	
  if parts[12]:								# wenn eine Firmentelefonnummer angegeben wurde
    string=""
    for zeichen in parts[12]:				# solange ein ASCII Zeichen an der aktuellen Stelle steht
      wert = ord(zeichen)					# der ASCII-Wert des aktuellen Zeichens wird in in der Variable Wert gespeichert
      if (wert <= 57) and (wert >= 48):		# wenn das aktuelle Zeichen eine Zahl ist...
        string = string + zeichen			# ...wird der Wert dieser Zahl in einen String gespeichert
    
    i=0
    if string.startswith('00'):				# wenn an den ersten beiden Stellen des Strings "0" steht,...
      parts[12]="+"							# ...wird an die erste Stelle der Nummer "+" gespeichert...
      parts[12] = parts[12] + string[2:]	# ...und die ersten beiden Stellen des Strings werden nicht in die Nummer gespeichert
    elif string.startswith('66'):			# wenn der String mit "66" beginnt...
      parts[12] = "+43" + string
    elif string.startswith('0'):			# wenn der String mit "0" beginnt...
      help = string[1:]
      if not help.startswith('0'):			# ...und an der zweiten Stelle nicht "0" steht...
        parts[12]="+43"						# ...wird an die ersten 3 Stellen der Nummer "+43" gespeichert...
        parts[12] = parts[12] + help		# ...und die erste Stelle des Strings wird nicht in die Nummer gespeichert
    elif string.startswith('4'):			# wenn der String mit "4" beginnt...
      help = string[2:]
      if help.startswith('0'):				# ...und an der dritten Stelle "0" steht...
        parts[12]="+43"						# ...wird an die ersten 3 Stellen der Nummer "+43" gespeichert...
        parts[12] = parts[12] + help[1:]	# ...und die "0" an der dritten Stelle wird nicht in die Nummer gespeichert
      else:									# wenn an der dritten Stelle des Strings nicht "0" steht...
        parts[12]="+"						# ...wird an die erste Stelle der Nummer "+" gespeichert
        parts[12] = parts[12] + string

    
  if parts[21]:								# wenn eine private Telefonnummer angegeben wurde
    string=""
    for zeichen in parts[21]:				# solange ein ASCII Zeichen an der aktuellen Stelle steht
      wert = ord(zeichen)					# der ASCII-Wert des aktuellen Zeichens wird in in der Variable Wert gespeichert
      if (wert <= 57) and (wert >= 48):		# wenn das aktuelle Zeichen eine Zahl ist...
        string = string + zeichen			# ...wird der Wert dieser Zahl in einen String gespeichert
    
    i=0
    if string.startswith('00'):				# wenn an den ersten beiden Stellen des Strings "0" steht,...
      parts[21]="+"							# ...wird an die erste Stelle der Nummer "+" gespeichert...
      parts[21] = parts[21] + string[2:]	# ...und die ersten beiden Stellen des Strings werden nicht in die Nummer gespeichert
    elif string.startswith('66'):			# wenn der String mit "66" beginnt...
      parts[21] = "+43" + string
    elif string.startswith('0'):			# wenn der String mit "0" beginnt...
      help = string[1:]
      if not help.startswith('0'):			# ...und an der zweiten Stelle nicht "0" steht...
        parts[21]="+43"						# ...wird an die ersten 3 Stellen der Nummer "+43" gespeichert...
        parts[21] = parts[21] + help		# ...und die erste Stelle des Strings wird nicht in die Nummer gespeichert
    elif string.startswith('4'):			# wenn der String mit "4" beginnt...
      help = string[2:]
      if help.startswith('0'):				# ...und an der dritten Stelle "0" steht...
        parts[21]="+43"						# ...wird an die ersten 3 Stellen der Nummer "+43" gespeichert...
        parts[21] = parts[21] + help[1:]	# ...und die "0" an der dritten Stelle wird nicht in die Nummer gespeichert
      else:									# wenn an der dritten Stelle des Strings nicht "0" steht...
        parts[21]="+"						# ...wird an die erste Stelle der Nummer "+" gespeichert
        parts[21] = parts[21] + string


	
  fp1.write("" + str(nr) + ";"          # nr
			   + parts[1] + ";"         # jahr
			   + parts[2] + ";"  		# klasse
			   + parts[3] + ";"         # kn
			   + parts[4] + ";"      	# name
			   + parts[5] + ";"      	# vorname
			   + parts[6] + ";"      	# Titel
			   + parts[7] + ";"      	# xing
			   + parts[8] + ";"         # fjahr
			   + parts[9] + ";"      	# fname
			   + parts[10] + ";"      	# femail
			   + parts[11] + ";"     	# ftaetigkeit
			   + parts[12] + ";"     	# ftel
			   + parts[13] + ";"     	# fplz
			   + parts[14] + ";"     	# fort
			   + parts[15] + ";"     	# fstrasse
			   + parts[16] + ";"     	# ferial
			   + parts[17] + ";"     	# diplom
			   + parts[18] + ";"    	# excursion
			   + parts[19] + ";"     	# fexname
			   + parts[20] + ";"     	# pemail
			   + parts[21] + ";\n")     # ptel
  nr=nr+1

fp1.close()
fp.close()