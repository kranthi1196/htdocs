<?php
   $myarr = array("Python", "CSS", "JS", "PHP", "SQL");
   
   foreach($myarr as $i=>$x)
   {
    
      echo $x++;
      echo "<BR>";
   }
?>

                            <?php 
                            $indImg = explode(",", $product1['image']);
                            foreach ($indImg as $img=>$li) {?> 
                            <li style="list-style:none; display:inline;">
                            <img id='imgid' src="<?= base_url($li)?>" style="padding:2px; "  width="50px" height="50px" alt="ProImg">
                            <a href="<?= base_url('ProjectController/delImage/'.$product1['id'].$li)?>" class="cicle_time" Onclick="return confirm('Are you sure?');" ><i class="fa fa-times-circle" onclick="document.getElementById('imgid').remove()" aria-hidden="true"></i></a>
                            <?php 
                            }
                            ?>
                            </li>
                            //this is the main concept of the program so that you will understand the enire logic of the program.

                            <?php 
        						$tzimg = explode(",", $tz['images']);
        						foreach($tzimg as $timg){ ?>
        						<img src="<?=base_url().$timg ?>" width="50" height="50">
        						<a href="<?=base_url().'admin/remove_tzimg/'.$tz['id'].'/'.$timg?>" Onclick="return confirm('Are you sure?');" ><i class="fa fa-times-circle" aria-hidden="true"></i></a>
        					<?php } ?>	


                            http://localhost/ci4/public/Upload/sliders1/Slider_4_marrakech-2.jpg
                            http://localhost/ci4/public/Upload/sliders1/Slider_0_0_123.jpg


                            <!--  Original Code Goes Here

                            <?php for ($i=0;$i<($product1>0);$i++) {
                            $indImg = explode(",", $product1['image']);
                            foreach ($indImg as $img) {?> 
                            <li style="list-style:none; display:inline;">
                            <img id='imgid' src="<?= base_url($img)?>" style="padding:2px; "  width="50px" height="50px" alt="ProImg">
                            <a href="" class="cicle_time" Onclick="return confirm('Are you sure?');" ><i class="fa fa-times-circle" onclick="document.getElementById('imgid').remove()" aria-hidden="true"></i></a>
                            <?php 
                            }
                            }?>
                            </li>

                             -->



                             $product1 = $data1['image'];
$indImg = explode(",", $product1['image']);
foreach ($indImg as $img=>$li) {
unlink('public/Upload/sliders1/'.$li);
}
$product->delImage($id);
return redirect()->back()->with('status', 'You have Successfully Deleted');