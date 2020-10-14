CREATE TABLE notes (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  title VARCHAR(255),
  content TEXT
);

INSERT INTO notes(title,content)
  VALUES
  ('hello world','hello world'),
  ('hello PHP','hello PHP'),
  ('hello Eloquent','hello Eloquent'),
  ('markdownメモ','# 世界の皆さん、こんにちは。\n\nよろしくお願いします。\n\n## 本日のお買い得\n\n- apple\n- orange\n- jucie');

CREATE TABLE users (
	user_id INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	username VARCHAR( 25 ) NOT NULL ,
	email VARCHAR( 35 ) NOT NULL ,
	password VARCHAR( 60 ) NOT NULL ,
	birth_year INT( 4 ) NOT NULL,
	UNIQUE (email)
);