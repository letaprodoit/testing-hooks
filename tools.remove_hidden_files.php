<?php 

	echo "Removing hidden files. . .";
	
	system("find . -name '.svn' -exec rm -rf {} \;");
	system("find . -name '_notes' -exec rm -rf {} \;");
	system("find . -name '.DS_Store' -exec rm -rf {} \;");
	system("find . -name '._*' -exec rm -rf {} \;");
	system("find . -name '__MACOSX' -exec rm -rf {} \;");
	
	echo "done!";
		
?>