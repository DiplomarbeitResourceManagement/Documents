#!/usr/bin/python3

import csv
  
fp=open("L:\GitHub\Documents\Code\Absolventen\Telnum.txt", "r")
fp1=open("L:\GitHub\Documents\Code\Absolventen\Telnum_format.txt", "w+")

#print "Name of the file: ", fp1.name
for line in fp.readlines():					# Schleife: liest jede Zeile des Files ein solange diese beschrieben ist
  line=line.strip()
  
  string=""
  for zeichen in line:						# solange ein ASCII Zeichen an der aktuellen Stelle steht
    wert = ord(zeichen)						# der ASCII-Wert des aktuellen Zeichens wird in in der Variable Wert gespeichert
    if (wert <= 57) and (wert >= 48):		# wenn das aktuelle Zeichen eine Zahl ist...
      string = string + zeichen				# ...wird der Wert dieser Zahl in einen String gespeichert

  i=0
  if string.startswith('00'):				# wenn an den ersten beiden Stellen des Strings "0" steht,...
    telnum="+"								# ...wird an die erste Stelle der Nummer "+" gespeichert...
    telnum = telnum + string[2:]			# ...und die ersten beiden Stellen des Strings werden nicht in die Nummer gespeichert
  elif string.startswith('66'):				# wenn der String mit "66" beginnt...
    telnum = "+43" + string
  elif string.startswith('0'):				# wenn der String mit "0" beginnt...
    help = string[1:]
    if not help.startswith('0'):			# ...und an der zweiten Stelle nicht "0" steht...
      telnum="+43"							# ...wird an die ersten 3 Stellen der Nummer "+43" gespeichert...
      telnum = telnum + help				# ...und die erste Stelle des Strings wird nicht in die Nummer gespeichert
  elif string.startswith('4'):				# wenn der String mit "4" beginnt...
    help = string[2:]
    if help.startswith('0'):				# ...und an der dritten Stelle "0" steht...
      telnum="+43"							# ...wird an die ersten 3 Stellen der Nummer "+43" gespeichert...
      telnum = telnum + help[1:]			# ...und die "0" an der dritten Stelle wird nicht in die Nummer gespeichert
    else:									# wenn an der dritten Stelle des Strings nicht "0" steht...
      telnum="+"							# ...wird an die erste Stelle der Nummer "+" gespeichert
      telnum = telnum + string

  fp1.write("" + telnum + "\n")

fp1.close()
fp.close()