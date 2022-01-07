

<?php   ?>
    <?php /* trouver le premier jour de la semaine */
			$todayis = date("j", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
		  	$day = date("w", mktime(0, 0, 0, date("m"), 1, date("Y"))); $col=0;
		        $daynum = 1;
			$daypermonth = date("j", mktime(0, 0, 0, date("m")+1, 0, date("Y")));
			$nextdate = 0;
			while($col<$day) {
			    printf("<td><div align=\"center\" class=\"calendrier_jour\"></div></td>\n");
			    $col++;
			  }
			while($daynum<=$daypermonth) {
			  if ($col>6) {
			      $col = 0;
				  echo "</tr>";	/* fin de la ligne précédente */
				  echo "<tr height='18'>"; /* nouvelle ligne */
				}
                          /* affichage du jour */	
			  printf("<td><div align=\"center\" class=\"calendrier_jour\">");
		          if($daynum == $todayis) printf("<b>%d</b>", $daynum); else printf("%d", $daynum);
		          
                          printf("</div></td>\n");
			  
			  $daynum++;
			  $col++;
			}
	       echo "<td colspan=".(7-$col)."></td></tr>";
		  ?>	
  </table>
</div>