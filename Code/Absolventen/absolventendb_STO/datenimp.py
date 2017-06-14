# Databaseimport from CSV to MySQL
#
nr=1

print "Starting ..."
fp1=open("inp.csv", "r")
fp2=open("out.sql", "w")

#print "Name of the file: ", fp1.name
for line in fp1.readlines():
  line=line.strip()
  parts=line.split(";")
  if not parts[7]:
     parts[7] = "0"
  fp2.write("insert into sdfull values (" + str(nr) + ","                     # nr
                                          + parts[0] + ","                    # jahr
										  + "\"" + parts[1] + "\"" + ","      # klasse
										  + parts[2] + ","                    # kn
										  + "\"" + parts[3] + "\"" + ","      # name
										  + "\"" + parts[4] + "\"" + ","      # vorname
										  + "\"" + parts[5] + "\"" + ","      # Titel
										  + "\"" + parts[6] + "\"" + ","      # xing
										  + parts[7] + ","                    # fjahr
										  + "\"" + parts[8] + "\"" + ","      # fname
										  + "\"" + parts[9] + "\"" + ","      # femail
										  + "\"" + parts[10] + "\"" + ","     # ftaetigkeit
										  + "\"" + parts[11] + "\"" + ","     # ftel
										  + "\"" + parts[12] + "\"" + ","     # fplz
										  + "\"" + parts[13] + "\"" + ","     # fort
										  + "\"" + parts[14] + "\"" + ","     # fstrasse
										  + "\"" + parts[15] + "\"" + ","     # ferial
										  + "\"" + parts[16] + "\"" + ","     # diplom
										  + "\"" + parts[17] + "\"" + ","     # excursion
										  + "\"" + parts[18] + "\"" + ","     # fexname
										  + "\"" + parts[19] + "\"" + ","     # pemail
										  + "\"" + parts[20] + "\"" + ","     # ptel
										  + "\"\");" + "\n")                  # bemerkung
  nr=nr+1
										  								  
fp1.close()
fp2.close()
print "Ending ..."