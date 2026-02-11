<?php
#file read and write
#file write
$file=fopen("uploads/movies.txt.txt","w");
fwrite($file,"The Shawshank Redemption\n");
fwrite($file,"The Godfather\n");
fwrite($file,"The Dark Knight\n");
fclose($file);
echo "file created successfully";
#file read
$file=fopen("uploads/movies.txt.txt","r");
$content=fread($file,filesize("uploads/movies.txt.txt"));
fclose($file);
echo nl2br($content);
echo "<br>";
#file put contents
file_put_contents("uploads/movies.txt.txt","hello mouni\n");
echo "file updated successfully";
#file get contents
$content=file_get_contents("uploads/movies.txt.txt");
echo nl2br($content);

#filr information
echo "<b>File Information:</b><br>";
echo "file exists:".(file_exists("uploads/movies.txt.txt")? "Yes":"No")."<br>";
echo "file size:".filesize("uploads/movies.txt.txt")."bytes<br>";
echo "file type:".filetype("uploads/movies.txt.txt")."<br>";
echo "last access time:".date("Y-m-d H:i:s",fileatime("uploads/movies.txt.txt"))."<br>";
echo "last modified time:".date("Y-m-d H:i:s",filemtime("uploads/movies.txt.txt"))."<br>";
echo "file change time:".date("Y-m-d H:i:s",filectime("uploads/movies.txt.txt"))."<br";
echo "file permission:".substr(sprintf('%o',fileperms("uploads/movies.txt.txt")),-4)."<br>";
echo "file owner:".fileowner("uploads/movies.txt.txt")."<br>";
echo "file group:".filegroup("uploads/movies.txt.txt")."<br>";
echo "file inode number:".fileinode("uploads/movies.txt.txt")."<br>";
#file folder management
echo "<b>File folder management:</b><br>";
echo"file copy:".(copy("uploads/movies.txt.txt","uploads/movies_copy.txt")? "Success":"Failed")."<br>";
echo "file rename:".(rename("uploads/movies_copy.txt","uploads/movies_renamed.txt")? "Success":"Failed")."<br>";
echo "file unlink:".(unlink("uploads/movies_renamed.txt")? "Success":"Failed")."<br>";
echo "file make directory:".(mkdir("uploads/new_folder")? "Success":"Failed")."<br>";
echo "file remove directory:".(rmdir("uploads/new_folder")? "Success":"Failed")."<br>";
echo "file is directory:".(is_dir("uploads")? "Yes":"No")."<br>";
echo "file is file:".(is_file("uploads/movies.txt.txt")? "Yes":"No")."<br>";

#directory handling
echo "<b>Directory handling:</b><br>";
echo"scandirectory:".print_r(scandir("uploads"),true)."<br>";
echo"opendirectory:".(opendir("uploads")? "Success":"Failed")."<br>";
echo "closedirectory:".(closedir(opendir("uploads"))? "Success":"Failed")."<br>";
echo"current working directory:".getcwd()."<br>";
echo"change directory:".(chdir("uploads")? "Success":"Failed")."<br>";


#file operation modes
echo "<b>File operation modes:</b><br>";
#write only
$file = fopen("movies.txt", "w");
fwrite($file,"Initial Data");
fclose($file);
#read only
$file = fopen("movies.txt", "r");
echo "read Mode:".fread($file, filesize("movies.txt"))."<br>";
fclose($file);

#append only
$file = fopen("movies.txt", "a");
fwrite($file, "Appended Data\n");
fclose($file);

#read and write
$file = fopen("movies.txt", "r+");
fwrite($file, "Start-");
fclose($file);

#read and write
$file = fopen("movies.txt", "w+");
fwrite($file, "New Data using w+\n");
fclose($file);

#read and append
$file = fopen("movies.txt", "a+");
fwrite($file, "More Data using a+\n");
fclose($file);

#create new file
$file = fopen("old.txt", "x");
fwrite($file, "Created using x mode");
fclose($file);

#create and read file
$file = fopen("new2.txt", "x+");
fwrite($file, "Created and read using x+ mode");
rewind($file);
echo "create and read Mode:".fread($file, filesize("new2.txt"))."<br>";
fclose($file);


?>