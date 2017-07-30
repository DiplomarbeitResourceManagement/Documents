#!/usr/bin/python3

import csv
import codecs

def unique_list(l):
  x = []
  for a in l:
    if a not in x:
      x.append(a)
  return x
  
fp=open("L:\GitHub\Documents\Code\LabDB\Bestand2007_format.csv", "r")
fp1=codecs.open("L:\GitHub\Documents\Code\LabDB\LabDB_all_tables.sql", "w+", encoding = 'utf8')	# sql file in utf8 speichern

reader=csv.reader(fp, delimiter=';')

bemerkung=[]
firma=[]
type=[]
invnr=[]
ger_ser_nr=[]
ortkast=[]
ortfach=[]
kategorie=[]
standort=[]
bildref=[]

i=0
for row in reader:
   if i != 0:
	   bemerkung.append(row[1])
	   firma.append(row[2])
	   type.append(row[3])   
	   invnr.append(row[5])
	   ger_ser_nr.append(row[6])
	   ortkast.append(row[8])
	   ortfach.append(row[9])
	   kategorie.append(row[10])
	   standort.append(row[11])
	   bildref.append(row[12])
   i=1

bemerkung_u=unique_list(bemerkung)
firma_u=unique_list(firma)
type_u=unique_list(type)
invnr_u=unique_list(invnr)
ger_ser_nr_u=unique_list(ger_ser_nr)
ortkast_u=unique_list(ortkast)
ortfach_u=unique_list(ortfach)
kategorie_u=unique_list(kategorie)
standort_u=unique_list(standort)
bildref_u=unique_list(bildref)

for elem in bemerkung_u:
  fp1.write("insert into bemerkung (bem) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in firma_u:
  fp1.write("insert into firma (fname) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in type_u:
  fp1.write("insert into typ (typ) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in invnr_u:
  fp1.write("insert into invnr (invnr) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in ger_ser_nr_u:
  fp1.write("insert into ger_ser_nr (g_s_nr) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in standort_u:
  fp1.write("insert into raum (rname) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in ortkast_u:
  fp1.write("insert into kasten (kname) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in ortfach_u:
  fp1.write("insert into fach (fachname) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in kategorie_u:
  fp1.write("insert into kategorie (kname) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in bildref_u:
  fp1.write("insert into bildreferenz (bildref) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

fp1.close()
fp.close()