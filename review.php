<html> 
<head>
</head>
<body>
<h1> Approved But Unanswered</h1>
<?php
$database=new mysqli("fdb22.awardspace.net","3165326_database",".Data345","3165326_database",3306); 
$datafile=$database->query("SELECT `title`,`p` FROM `Questions` WHERE (`comments` is null or (`comments` Not Like '%~Will%' And `comments` Not like '%~Nate%' And `comments` Not like '%-Nate%' And `comments` Not like '%-Will%')) and `p`>-1");
if(isset($datafile)){
        while($data=$datafile->fetch_array()){
                echo '<big><a target="_blank" href="http://www.simpleanswers.dx.am?p='.$data['p'].'">"'.$data['title'].'"</a></big><br />';
        }
}else{
echo "No unanswered questions at the moment";
}
?>
</body>
</html>
