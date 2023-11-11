<ul class="tag-in">
						<?php
                        	foreach($arr_tagsearch as $tagsearch)
							{
								
						?>
							<li><a href="index.php?controller=product&id=<?php echo $tagsearch["pk_category_product_id"] ?>"><?php echo $tagsearch["c_name"]?></a></li>
							
                            <?php
							}
							?>
						</ul>