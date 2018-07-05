<?php 
	function MenuMulti($data,$parent_id ,$str='---| ',$select)
	{
		foreach ($data as $val) {
			$id = $val["id"];
			$ten= $val["name_vi"];
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
			$ten= $val["name_vi"];
			$ten1= $val["name_en"];
			if ($val['parent_id'] == $parent_id) {
				echo '<tr>';
				if ($str =="") {
						echo '<td ><strong>'.$id.'</strong></td>';
						echo '<td ><strong style="color:blue;">'.$str.'- '.$ten.'</strong></td>';
						echo '<td ><strong style="color:blue;">'.$str.'- '.$ten1.'</strong></td>';
					} else {
						echo '<td ><strong>'.$id.'</strong></td>';
						echo '<td style="color:green;">'.$str.'--|'.$ten.'</td>';
						echo '<td style="color:green;">'.$str.'--|'.$ten1.'</td>';
					}	
			echo '<td class="list_td aligncenter">
		            <a href="../admin/danhmuc/edit/'.$id.'" title="Sửa"><span class="fas fa-edit"></span></a>&nbsp;&nbsp;&nbsp;
		            <a href="../admin/danhmuc/del/'.$id.'" title="Xóa" onclick="return xacnhan(\'Xóa danh mục này ?\') "> <span class="fas fa-trash-alt"></span> </a>
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
			$ten= $val["name_".Config::get('app.locale')];
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
 		$url_nn ='tin-tuc';
 		break;
 	case '1':
 		$url_nn ='/';
 		break;	
 	case '2':
 		$url_nn ='gioi-thieu';
 		break;
 	case '37':
 		$url_nn ='lien-he';
 		break;
 	case '38':
 		$url_nn ='muahangnhanh';
 		break;							
 	default:
 		# code...
 		break;
 }
					if ($str =="") {
							//print_r($ten);
 						if($check == '1'){
 							  echo  '<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$ten.' <b class="caret"></b></a>';
                       			 echo '<ul class="dropdown-menu  dropdown-menu-large row">';
 						}else{
 							 echo  '<a href="'.url($url_nn).'" >'.$ten.'</a>';
 						}
                      
                       
                       
                        foreach ($data as $val1) {
                        	
                        	if($val['id'] == $val1['parent_id']){
						
                                       echo '<li class="col-sm-3">';              
                                             echo '<ul>';            
                                                       echo ' <li class="dropdown-header">'.$val1['name_'.Config::get('app.locale')].'<?php echo $i?></li><hr>';  
                                                      //echo      '<li><a href="#">'.$val1["name"].'</a></li>';
                                                            
                                  foreach ($data as $val2) {                        
                                             if($val1['id'] == $val2['parent_id']){
                                             	 echo '<li><a  href="'.url('danh-muc/'.$val2['id']).'">'.$val2['name_'.Config::get('app.locale')].'</a></li>';
							 
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