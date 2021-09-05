<html>
  <body>
<form method="post" action="phptest.php">
 please enter student name:
   <p><input> type="text" name="percent"></p>
   <input type=""submit" value="submit">
</form>
</body>
</html>

<html>
    <body>
         <?php
         $percent=$_POST['percent'];

         if($percent>=50){
             echo 'Student: promoted to next class  ';
     }
     elseif($percent>=40){
             echo 'Student: was fail';
     }
     elseif($percent>=30){
            echo 'Student: was fail not promoted to next class ';
     }


       ?>
    </body>
</htmlNotepad++ v8.1.4 new features, enhancements & bug-fixes:

1.  Fix regression of find/replace and file open performance issue.
2.  Make dark mode compatible with Windows 11.
3.  Make current existing plugins' toolbar icons display in both light and dark mode.
4.  Support TypeScript language (syntax highlighting, auto-completion & function list).
5.  Fix security flaw issue in uninstaller.
6.  Add Insert Date Time commands for both short & long format.
7.  Fix file dialog append extension issue with RTL languages.
8.  Fix Find-in-Files "Follow current doc" not working issue when Default Directory is set.
9.  Enhance dialogs visual look & feel.
10. Fix LICENSE text display problem in installer.



More fixes & implementations detail:
https://notepad-plus-plus.org/downloads/v8.1.4/


Included plugins:

1.  NppExport v0.3
2.  Converter v4.3
3.  Mime Tool v2.6


Updater (Installer only):

* WinGup (for Notepad++) v5.2
