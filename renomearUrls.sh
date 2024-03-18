#!/bin/bash

# Definir variáveis para o texto antigo, novo texto e nome do banco de dados
OLD_TEXT='localhost/23/05/perfectacting_wp'
NEW_TEXT='localhost/perfectacting/perfectacting_wp'
DATABASE_NAME='perfectacting_wp'
MYSQL_USER='root'
MYSQL_PASSWORD='db32255289'

# Gerar o comando SQL para cada tabela e coluna especificada
SQL_QUERY=$(mysql -u $MYSQL_USER -p$MYSQL_PASSWORD -D $DATABASE_NAME -e "
    SET @old_text = '$OLD_TEXT';
    SET @new_text = '$NEW_TEXT';
    SELECT CONCAT(
        'UPDATE ', table_name, ' SET ', column_name, ' = REPLACE(', column_name, ', ''', @old_text, ''', ''', @new_text, ''') WHERE ', column_name, ' LIKE ''%', @old_text, '%'';'
    )
    FROM information_schema.columns
    WHERE table_schema = '$DATABASE_NAME'
      AND data_type IN ('varchar', 'text')
      AND table_name IN ('perfc_posts', 'perfc_postmeta', 'perfc_options');
")

# Executar o comando SQL gerado
echo "$SQL_QUERY" | mysql -u $MYSQL_USER -p$MYSQL_PASSWORD $DATABASE_NAME
