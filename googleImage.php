<?php
 include("wp-config.php");
 wp_head();
$search = "Bess Wallpaper creative";
$url="http://www.bing.com/images/search?pq=".urlencode(strtolower($search))."&count=50&q=".urlencode($search);
$data=file_get_contents($url);

$rr=explode("<div class=\"item\">", $data);
$execc="";
for($r=2;$r<(count($rr));$r++){
    $nf=explode("\"", $rr[$r]);
    $nextFile=$nf[1];
    $no="stock;123;dreams";
    $x=true;
    $tt=explode(";", $no);
    for($a=0;$a<count($tt);$a++){

            if(strpos($nextFile, $tt[$a])!=false){
                    $x=false;
            }
    }
    if($x==true){
            $nextFil[]=$nf[5];
            ?>
           <label for="image_<?php echo $a; ?>"><img src="<?php echo $nf[5]; ?>" alt="" width="200px"><input type="radio" name="imageBlyst" id="image_<?php echo $a; ?>" value="<?php echo $nf[5]; ?>"></label>
            <?php 
    }
}
?>
 <button class="btn"  onclick="myFun()">Save</button>
 <?php 
 wp_footer();
 ?>
 <script>
 function myFun() {
    var myVal = jQuery("input[type='radio']:checked").val();
    if(myVal != "") {
        jQuery.ajax({
            type: "POST",
            url: '<?php echo site_url(); ?>/helpGoogle.php',
            data:{myVal:myVal,format:'raw'},
            success:function(resp){
                window.close();
            }
        });
    } else {
        alert("Please select a image first");
    }
 }

/* jQuery(document).ready(function(){
    jQuery("label").each(function(){
        if(jQuery(this).find("input[type='radio']").is(':checked')) {
            jQuery(this).find("input[type='radio']").attr('checked', false);
            jQuery(".btn").removeAttr("disabled");
        } else {
            jQuery(".btn").attr("disabled", "disabled");
        }
    });
 });*/
window.onunload = refreshParent;
function refreshParent() {
    window.opener.location.reload();
}
 </script>