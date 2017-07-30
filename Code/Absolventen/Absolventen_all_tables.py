#!/usr/bin/python3

import csv
import codecs

def unique_list(l):
  x = []
  for a in l:
    if a not in x:
      x.append(a)
  return x
  
fp=open("L:\GitHub\Documents\Code\Absolventen\Absolventen_all_format.csv", "r")
fp1=codecs.open("L:\GitHub\Documents\Code\Absolventen\Absolventen_all_tables.sql", "w+", encoding = 'utf8')	# sql file in utf8 speichern

reader=csv.reader(fp, delimiter=';')

jahr=[]
klasse=[]
katnr=[]
nn=[]
vn=[]
titel=[]
fa_erhebungsjahr=[]
fa_name=[]
fa_email=[]
fa_taet=[]
fa_tel=[]
fa_plz=[]
fa_ort=[]
fa_str=[]
fa_ex_name=[]
priv_email=[]
priv_tel=[]

i=0
for row in reader:
   if i != 0:
	   jahr.append(row[1])
	   klasse.append(row[2])
	   katnr.append(row[3])
	   nn.append(row[4].upper())	   
	   vn.append(row[5])
	   titel.append(row[6])
	   fa_erhebungsjahr.append(row[8])
	   fa_name.append(row[9])
	   fa_email.append(row[10])
	   fa_taet.append(row[11])
	   fa_tel.append(row[12])
	   fa_plz.append(row[13])
	   fa_ort.append(row[14])
	   fa_str.append(row[15])
	   fa_ex_name.append(row[19])
	   priv_email.append(row[20])
	   priv_tel.append(row[21])
   i=1

jahr_u=unique_list(jahr)
klasse_u=unique_list(klasse)
katnr_u=unique_list(katnr)
nn_u=unique_list(nn)
vn_u=unique_list(vn)
titel_u=unique_list(titel)
fa_erhebungsjahr_u=unique_list(fa_erhebungsjahr)
fa_name_u=unique_list(fa_name)
fa_email_u=unique_list(fa_email)
fa_taet_u=unique_list(fa_taet)
fa_tel_u=unique_list(fa_tel)
fa_plz_u=unique_list(fa_plz)
fa_ort_u=unique_list(fa_ort)
fa_str_u=unique_list(fa_str)
fa_ex_name_u=unique_list(fa_ex_name)
priv_email_u=unique_list(priv_email)
priv_tel_u=unique_list(priv_tel)

for elem in jahr_u:
  fp1.write("insert into abschlussjahr (jahr) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in klasse_u:
  fp1.write("insert into klasse (klasse) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in katnr_u:
  fp1.write("insert into katalognummer (katnr) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in nn_u:
  fp1.write("insert into nachname (nn) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in vn_u:
  fp1.write("insert into vorname (vn) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in titel_u:
  fp1.write("insert into titel (titel) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in fa_erhebungsjahr_u:
  fp1.write("insert into aktualisierungsjahr (jahr_akt) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in fa_name_u:
  fp1.write("insert into firma (firma) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in fa_email_u:
  fp1.write("insert into firma_email (firma_mail) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in fa_taet_u:
  fp1.write("insert into taetigkeit (taetigkeit) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in fa_tel_u:
  fp1.write("insert into firmentelefon (f_tel) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in fa_plz_u:
  fp1.write("insert into firma_plz (plz) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in fa_ort_u:
  fp1.write("insert into firma_ort (ort) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in fa_str_u:
  fp1.write("insert into firma_strasse (strasse) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in fa_ex_name_u:
  fp1.write("insert into firma_ex_name (f_ex_n) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in priv_email_u:
  fp1.write("insert into email_privat (email_privat) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

for elem in priv_tel_u:
  fp1.write("insert into tel_privat (tel_privat) values (\"" \
		+ elem + "\");\n" \
	   ) 
fp1.write("\n")

fp1.close()
fp.close()