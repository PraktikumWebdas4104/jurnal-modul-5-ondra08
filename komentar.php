<form
komentar :<input type="text" name="komentar">
<input type="submit" name="submit" value="cek">
</form>

<?php
if(isset($_POST['submit'])){
$komentar=$_POST['komentar'];
if(str_word_count($komentar)>=5){
echo $komentar;
}else if(str_word_count($komentar)<5){
echo"error,kata sangat dari 5";
}
}
?>
