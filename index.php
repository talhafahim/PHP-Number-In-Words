<?
include('numToWord.php');
?>
<form method="post" action="#">
  <input type="number" name="num">
  <input type="submit" name="submit">
</form>

<? if (isset($_POST['submit'])){

  $num=$_POST['num'];

  $nw=new NumbersToWords();
    echo $nw->convert($num);

}?>