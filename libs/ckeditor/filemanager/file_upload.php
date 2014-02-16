Upload in folder: <?php echo $_GET['folder']; ?>
<div id="optionsWrapper"> 
	<form id="uploadForm" method="post" action="index.php?action=upload" enctype="multipart/form-data">
 <input type="file" name="ffoto">
 <input type="hidden" name="folder" value="<?php echo $_GET['folder']; ?>" />
 <input type="submit" value="Subir" class="btn" target="_self" />
 </form>
 <div id="uploadOutput"></div>
</div>	
<br />
Crear Carpeta
<div id="optionsWrapper"> 
	<form id="folderForm" method="post" action="index.php?action=create_folder">
 <?php echo $_GET['folder']; ?>&nbsp;<input type="text" name="fname" size="20" />
 <input type="hidden" name="folder" value="<?php echo $_GET['folder']; ?>" />
 <input type="submit" name="submit" value="Crear" class="btn" target="_self" />
 </form>
</div>
Borrar esta carpeta
<div id="optionsWrapper"> 
	<a href="index.php?action=delete_folder&id=<?php echo $_GET['folder']; ?>" target="_self">Borrar carpeta y su contenido</a>
</div>