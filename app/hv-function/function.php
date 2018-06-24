<?php 
	function MenuMulti($data,$parent_id ,$str='---| ',$select)
	{
		foreach ($data as $val) {
			$id = $val["id"];
			$ten= $val["name"];
			if ($val['parent_id'] == $parent_id) {
				// print_r($select);  exit();
				if ($select!=0 && $id == $select) {
					echo '<option value="'.$id.'" selected >'.$str." ".$ten.'</option>';
				}	else {
					echo '<option value="'.$id.'">'.$str." ".$ten.'</option>';
				}			
				MenuMulti($data,$id,$str.'---|',$select);
			}			
		}
	}
	function listcate ($data,$parent_id =0,$str="")
	{
		foreach ($data as $val) {
			$id = $val["id"];
			$ten= $val["name"];
			if ($val['parent_id'] == $parent_id) {
				echo '<tr>';
				if ($str =="") {
						echo '<td ><strong>'.$id.'</strong></td>';
						echo '<td ><strong style="color:blue;">'.$str.'- '.$ten.'</strong></td>';
					} else {
						echo '<td ><strong>'.$id.'</strong></td>';
						echo '<td style="color:green;">'.$str.'--|'.$ten.'</td>';
					}	
			echo '<td class="list_td aligncenter">
		            <a href="../admin/danhmuc/edit/'.$id.'" title="Sửa"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;&nbsp;
		            <a href="../admin/danhmuc/del/'.$id.'" title="Xóa" onclick="return xacnhan(\'Xóa danh mục này ?\') "> <span class="glyphicon glyphicon-remove"></span> </a>
			      </td>    
			    </tr>';
			    listcate ($data,$id,$str." ---| ");
			}
		}		
	}
	function listcate_home ($data,$parent_id =0,$str="")
	{
		foreach ($data as $val) {
			$id = $val["id"];
			$ten= $val["name"];
			$check = 0;
			if ($val['parent_id'] == $parent_id) {

				echo '<li class="dropdown dropdown-large">';
	foreach ($data as $val_check) {
 	if($val['id'] == $val_check['parent_id']){ 
 			$check = 1;
 	}
 }
 //print_r($check);
 $url_nn = '#';
 switch ($val['id']) {
 	case '19':
 		$url_nn ='kho-gia';
 		break;
 	case '34':
 		$url_nn ='video-huong-dan';
 		break;
 	case '35':
 		$url_nn ='dia-chi';
 		break;
 	default:
 		# code...
 		break;
 }
					if ($str =="") {
							//print_r($ten);
 						if($check == '1'){
 							  echo  '<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$ten.' <b class="caret"></b></a>';
                       			 echo '<ul class="dropdown-menu dropdown-menu-large row">';
 						}else{
 							 echo  '<a href="'.url($url_nn).'" >'.$ten.'</a>';
 						}
                      
                       
                       
                        foreach ($data as $val1) {
                        	
                        	if($val['id'] == $val1['parent_id']){
						
                                       echo '<li class="col-sm-3">';              
                                             echo '<ul>';            
                                                       echo ' <li class="dropdown-header">'.$val1['name'].'<?php echo $i?></li>';  
                                                      //echo      '<li><a href="#">'.$val1["name"].'</a></li>';
                                                            
                                  foreach ($data as $val2) {                        
                                             if($val1['id'] == $val2['parent_id']){
                                             	 echo '<li><a  href="'.url('danh-muc/'.$val2['id']).'">'.$val2['name'].'</a></li>';
							 
                                             }           

                                                	}    
                                              echo '</ul>';
                    echo '</li>';
                        	}
                        }
                    
					
if($check == '1'){
 							echo '</ul>';
 						}else{
 							// echo  '<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$ten.'</a>';
 						}
                      
					}

				echo ' </li>';	


			   // listcate_home ($data,$id,$str." ---| ");
			}
		}		
	}
?>