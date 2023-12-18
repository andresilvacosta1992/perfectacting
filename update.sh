mysqldump -u "root" "23_05_perfectacting" > "db.sql"
git add .
read -p "comentário:" comentario
git commit -m "$comentario"
git push origin