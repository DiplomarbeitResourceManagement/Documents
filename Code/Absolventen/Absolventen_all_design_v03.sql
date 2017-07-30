CREATE TABLE Katalognummer (
  id_kat INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  katnr INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_kat)
);

CREATE TABLE Klasse (
  id_k INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  klasse VARCHAR(255) NULL,
  PRIMARY KEY(id_k)
);

CREATE TABLE Firma_Strasse (
  id_strasse INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Strasse VARCHAR(255) NULL,
  PRIMARY KEY(id_strasse)
);

CREATE TABLE Firmentelefon (
  id_f_tel INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  F_Tel VARCHAR(255) NULL,
  PRIMARY KEY(id_f_tel)
);

CREATE TABLE Nachname (
  id_nn INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nn VARCHAR(255) NULL,
  PRIMARY KEY(id_nn)
);

CREATE TABLE Titel (
  id_t INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  titel VARCHAR(255) NULL,
  PRIMARY KEY(id_t)
);

CREATE TABLE Vorname (
  id_vn INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  vn VARCHAR(255) NULL,
  PRIMARY KEY(id_vn)
);

CREATE TABLE Taetigkeit (
  id_taet INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Taetigkeit VARCHAR(255) NULL,
  PRIMARY KEY(id_taet)
);

CREATE TABLE Tel_Privat (
  id_tel_priv INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Tel_Privat VARCHAR(255) NULL,
  PRIMARY KEY(id_tel_priv)
);

CREATE TABLE EMail_Privat (
  id_mail_priv INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  EMail_Privat VARCHAR(255) NULL,
  PRIMARY KEY(id_mail_priv)
);

CREATE TABLE Firma (
  id_f INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  firma VARCHAR(255) NULL,
  PRIMARY KEY(id_f)
);

CREATE TABLE Abschlussjahr (
  id_j INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Jahr YEAR NULL,
  PRIMARY KEY(id_j)
);

CREATE TABLE Aktualisierungsjahr (
  id_akt INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  jahr_akt YEAR NULL,
  PRIMARY KEY(id_akt)
);

CREATE TABLE Firma_Ort (
  id_ort INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Ort VARCHAR(255) NULL,
  PRIMARY KEY(id_ort)
);

CREATE TABLE Firma_PLZ (
  id_PLZ INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  PLZ INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_PLZ)
);

CREATE TABLE Firma_EMail (
  id_f_email INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  firma_mail VARCHAR(255) NULL,
  PRIMARY KEY(id_f_email)
);

CREATE TABLE Firma_ex_name (
  id_f_ex_n INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  f_ex_n VARCHAR(255) NULL,
  PRIMARY KEY(id_f_ex_n)
);

CREATE TABLE xing_profil (
  id_xing_p INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  xing_p VARCHAR(255) NULL,
  PRIMARY KEY(id_xing_p)
);

CREATE TABLE fb_profil (
  id_fb_p INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  fb_p VARCHAR(255) NULL,
  PRIMARY KEY(id_fb_p)
);

CREATE TABLE linkedin_profil (
  id_linkedin_p INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  linkedin_p VARCHAR(255) NULL,
  PRIMARY KEY(id_linkedin_p)
);

CREATE TABLE Absolventen (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Tel_Privat_id_tel_priv INTEGER UNSIGNED NOT NULL,
  EMail_Privat_id_mail_priv INTEGER UNSIGNED NOT NULL,
  Firma_EMail_id_f_email INTEGER UNSIGNED NOT NULL,
  Firmentelefon_id_f_tel INTEGER UNSIGNED NOT NULL,
  Firma_ex_name_id_f_ex_n INTEGER UNSIGNED NOT NULL,
  Firma_Strasse_id_strasse INTEGER UNSIGNED NOT NULL,
  Firma_Ort_id_ort INTEGER UNSIGNED NOT NULL,
  Firma_PLZ_id_PLZ INTEGER UNSIGNED NOT NULL,
  Taetigkeit_id_taet INTEGER UNSIGNED NOT NULL,
  Aktualisierungsjahr_id_akt INTEGER UNSIGNED NOT NULL,
  Titel_id_t INTEGER UNSIGNED NOT NULL,
  Katalognummer_id_kat INTEGER UNSIGNED NOT NULL,
  Firma_id_f INTEGER UNSIGNED NOT NULL,
  Klasse_id_k INTEGER UNSIGNED NOT NULL,
  Nachname_id_nn INTEGER UNSIGNED NOT NULL,
  Vorname_id_vn INTEGER UNSIGNED NOT NULL,
  Abschlussjahr_id_j INTEGER UNSIGNED NOT NULL,
  xing_profil_id_xing_p INTEGER UNSIGNED NOT NULL,
  fb_profil_id_fb_p INTEGER UNSIGNED NOT NULL,
  linkedin_profil_id_linkedin_p INTEGER UNSIGNED NOT NULL,
  xing BOOL NULL,
  da BOOL NULL,
  exkursion BOOL NULL,
  f_praxis BOOL NULL,
  verstorben BOOL NULL,
  PRIMARY KEY(id),
  INDEX Absolventen_FKIndex1(Abschlussjahr_id_j),
  INDEX Absolventen_FKIndex2(Vorname_id_vn),
  INDEX Absolventen_FKIndex3(Nachname_id_nn),
  INDEX Absolventen_FKIndex4(Klasse_id_k),
  INDEX Absolventen_FKIndex5(Firma_id_f),
  INDEX Absolventen_FKIndex6(Katalognummer_id_kat),
  INDEX Absolventen_FKIndex7(Titel_id_t),
  INDEX Absolventen_FKIndex9(Aktualisierungsjahr_id_akt),
  INDEX Absolventen_FKIndex11(Taetigkeit_id_taet),
  INDEX Absolventen_FKIndex13(Firma_PLZ_id_PLZ),
  INDEX Absolventen_FKIndex14(Firma_Ort_id_ort),
  INDEX Absolventen_FKIndex15(Firma_Strasse_id_strasse),
  INDEX Absolventen_FKIndex19(Firma_ex_name_id_f_ex_n),
  INDEX Absolventen_FKIndex17(Firmentelefon_id_f_tel),
  INDEX Absolventen_FKIndex18(Firma_EMail_id_f_email),
  INDEX Absolventen_FKIndex20(EMail_Privat_id_mail_priv),
  INDEX Absolventen_FKIndex21(Tel_Privat_id_tel_priv),
  INDEX Absolventen_FKIndex22(xing_profil_id_xing_p),
  INDEX Absolventen_FKIndex23(fb_profil_id_fb_p),
  INDEX Absolventen_FKIndex24(linkedin_profil_id_linkedin_p),
  FOREIGN KEY(Abschlussjahr_id_j)
    REFERENCES Abschlussjahr(id_j)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Vorname_id_vn)
    REFERENCES Vorname(id_vn)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Nachname_id_nn)
    REFERENCES Nachname(id_nn)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Klasse_id_k)
    REFERENCES Klasse(id_k)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Firma_id_f)
    REFERENCES Firma(id_f)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Katalognummer_id_kat)
    REFERENCES Katalognummer(id_kat)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Titel_id_t)
    REFERENCES Titel(id_t)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Aktualisierungsjahr_id_akt)
    REFERENCES Aktualisierungsjahr(id_akt)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Taetigkeit_id_taet)
    REFERENCES Taetigkeit(id_taet)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Firma_PLZ_id_PLZ)
    REFERENCES Firma_PLZ(id_PLZ)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Firma_Ort_id_ort)
    REFERENCES Firma_Ort(id_ort)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Firma_Strasse_id_strasse)
    REFERENCES Firma_Strasse(id_strasse)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Firma_ex_name_id_f_ex_n)
    REFERENCES Firma_ex_name(id_f_ex_n)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Firmentelefon_id_f_tel)
    REFERENCES Firmentelefon(id_f_tel)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Firma_EMail_id_f_email)
    REFERENCES Firma_EMail(id_f_email)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(EMail_Privat_id_mail_priv)
    REFERENCES EMail_Privat(id_mail_priv)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Tel_Privat_id_tel_priv)
    REFERENCES Tel_Privat(id_tel_priv)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(xing_profil_id_xing_p)
    REFERENCES xing_profil(id_xing_p)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(fb_profil_id_fb_p)
    REFERENCES fb_profil(id_fb_p)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(linkedin_profil_id_linkedin_p)
    REFERENCES linkedin_profil(id_linkedin_p)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


