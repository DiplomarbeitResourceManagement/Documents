CREATE TABLE kasten (
  kastid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  kastname VARCHAR(255) NULL,
  PRIMARY KEY(kastid)
);

CREATE TABLE bmkz (
  bmkzid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  bmkz VARCHAR(1) NULL,
  PRIMARY KEY(bmkzid)
);

CREATE TABLE invnr (
  invid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  invnr VARCHAR(255) NULL,
  PRIMARY KEY(invid)
);

CREATE TABLE kategorie (
  kid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  kname VARCHAR(255) NULL,
  PRIMARY KEY(kid)
)
AUTO_INCREMENT = 1;

CREATE TABLE typ (
  typid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  typ VARCHAR(255) NULL,
  PRIMARY KEY(typid)
);

CREATE TABLE raum (
  rid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  rname VARCHAR(255) NULL,
  PRIMARY KEY(rid)
)
AUTO_INCREMENT = 1;

CREATE TABLE bildreferenz (
  bid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  bildref VARCHAR(255) NULL,
  PRIMARY KEY(bid)
);

CREATE TABLE bemerkung (
  bemid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  bem VARCHAR(255) NULL,
  PRIMARY KEY(bemid)
);

CREATE TABLE fach (
  fachid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  fachname VARCHAR(255) NULL,
  PRIMARY KEY(fachid)
);

CREATE TABLE ger_ser_nr (
  gsnid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  g_s_nr VARCHAR(255) NULL,
  PRIMARY KEY(gsnid)
);

CREATE TABLE firma (
  fid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  fname VARCHAR(255) NULL,
  PRIMARY KEY(fid)
)
AUTO_INCREMENT = 1;

CREATE TABLE labor (
  id INT(4) ZEROFILL NOT NULL AUTO_INCREMENT,
  bmkz_bmkzid INTEGER UNSIGNED NOT NULL,
  typ_typid INTEGER UNSIGNED NOT NULL,
  invnr_invid INTEGER UNSIGNED NOT NULL,
  ger_ser_nr_gsnid INTEGER UNSIGNED NOT NULL,
  bemerkung_bemid INTEGER UNSIGNED NOT NULL,
  bildreferenz_bid INTEGER UNSIGNED NOT NULL,
  fach_fachid INTEGER UNSIGNED NOT NULL,
  kasten_kastid INTEGER UNSIGNED NOT NULL,
  raum_rid INTEGER UNSIGNED NOT NULL,
  firma_fid INTEGER UNSIGNED NOT NULL,
  kategorie_kid INTEGER UNSIGNED NOT NULL,
  anlagennr BIGINT(15) UNSIGNED NULL,
  ausgeborgt BOOL NULL,
  reparatur BOOL NULL,
  PRIMARY KEY(id),
  INDEX labor_FKIndex1(kategorie_kid),
  INDEX labor_FKIndex2(firma_fid),
  INDEX labor_FKIndex3(raum_rid),
  INDEX labor_FKIndex4(kasten_kastid),
  INDEX labor_FKIndex5(fach_fachid),
  INDEX labor_FKIndex6(bildreferenz_bid),
  INDEX labor_FKIndex7(ger_ser_nr_gsnid),
  INDEX labor_FKIndex8(invnr_invid),
  INDEX labor_FKIndex9(typ_typid),
  INDEX labor_FKIndex10(bemerkung_bemid),
  INDEX labor_FKIndex11(bmkz_bmkzid),
  FOREIGN KEY(kategorie_kid)
    REFERENCES kategorie(kid)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(firma_fid)
    REFERENCES firma(fid)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(raum_rid)
    REFERENCES raum(rid)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(kasten_kastid)
    REFERENCES kasten(kastid)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(fach_fachid)
    REFERENCES fach(fachid)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(bildreferenz_bid)
    REFERENCES bildreferenz(bid)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(ger_ser_nr_gsnid)
    REFERENCES ger_ser_nr(gsnid)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(invnr_invid)
    REFERENCES invnr(invid)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(typ_typid)
    REFERENCES typ(typid)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(bemerkung_bemid)
    REFERENCES bemerkung(bemid)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(bmkz_bmkzid)
    REFERENCES bmkz(bmkzid)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
)
AUTO_INCREMENT = 1;


