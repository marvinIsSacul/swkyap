CREATE TABLE "tbl_words" (
	"id"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"text"	TEXT NOT NULL,
	"language_id"	INTEGER NOT NULL,
	"user_id"	INTEGER NOT NULL,
	FOREIGN KEY("language_id") REFERENCES "tbl_languages"("id") ON UPDATE CASCADE,
	FOREIGN KEY("user_id") REFERENCES "tbl_users"("id") ON UPDATE CASCADE
);

CREATE INDEX "tbl_words_fk_language_id" ON "tbl_words" (
	"language_id"	ASC
);

CREATE INDEX "tbl_words_fk_user_id" ON "tbl_words" (
	"user_id"	ASC
);