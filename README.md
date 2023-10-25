# RCF_public_html <br>
 Officaial Website of Ruet Carreer Forum (RCF)<br>
 Developed by RCF devTeam <br>

Instructions: <br>
 1. In xampp import database of RCF(ruetcare_databased.sql) to view webpage in local host <br>
 2. open xampp > start MySQL <br>
 3. open RCF_public_html/index.php in VsCode > right click > php server: serve project > view webpage in browser  <br>
 4. for above approach / if index.php is directly in "/xampp/htdocs" folder in pc
  --> inc/base.php --> file should contain ( define('BASE_URL', app_url() . ''); ) line --> http://localhost:3000 <br>
  
5. else: if it's in "rcf/index.php" code should be define('BASE_URL', app_url() . '/RCF_public_html'); --> http://localhost:3000/RCF_public_html <br>
 

