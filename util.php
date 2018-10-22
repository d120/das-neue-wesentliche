
<?php

 # --------------------------------------------------------------------
 # Ist 1, wenn der Beitrag vom angegebenen Typ ist; sonst 0.
 #
 # ACHTUNG: Die post_id wird implizit übergeben! get_post_custom_values
 # sucht sich das aus der Stelle, an der diese Subroutine aufgerufen
 # wird, selbst raus... :-/
 # --------------------------------------------------------------------
 function istSpezialbeitrag($typ) {
  $key_values = get_post_custom_values('Typ');
  if ($key_values) {
    $i = 0;

    while ($key_values[$i])
    {
      if ($key_values[$i] == $typ) {
       return 1;
      }
      $i++;
    }
  }

    return 0;
}
 # --------------------------------------------------------------------


 # --------------------------------------------------------------------
 # Ist 1, wenn der Beitrag vom Typ her ein Forumsverweis ist;
 # sonst 0.
 # --------------------------------------------------------------------
 function istVerweis() {
   return istSpezialbeitrag("Link");
}
 # --------------------------------------------------------------------


 # --------------------------------------------------------------------
 # Ist 1, wenn der Beitrag vom Typ her ein Videobeitrag ist;
 # sonst 0.
 # --------------------------------------------------------------------
 function istVideo() {
   return istSpezialbeitrag("Video");
}
 # --------------------------------------------------------------------


 # --------------------------------------------------------------------
 # Ist 1, wenn der Beitrag vom Typ her eine Kurzumfrage ist;
 # sonst 0.
 # --------------------------------------------------------------------
 function istUmfrage() {
   return istSpezialbeitrag("Umfrage");
}
 # --------------------------------------------------------------------


 # --------------------------------------------------------------------
 # Ist 1, wenn der Beitrag vom Typ her ein Photobeitrag ist;
 # sonst 0.
 # --------------------------------------------------------------------
 function istPhotobeitrag() {
   return istSpezialbeitrag("Photo");
}
 # --------------------------------------------------------------------

 # --------------------------------------------------------------------
 # Ist 1, wenn der Beitrag vom Typ her ein Kommentar ist;
 # sonst 0.
 # --------------------------------------------------------------------
 function istKommentar() {
	$is_comment = 0;
	$cat = wp_get_post_categories(get_the_ID());
	foreach($cat as $c) {
		if ($c == 30) {
			 return 1;
		}
	}
	return 0;
}
 # --------------------------------------------------------------------

# --------------------------------------------------------------------
# Gibt den vollen Namen des aktuellen Autoren aus.
# --------------------------------------------------------------------
function GebeDenVollenAutorennamenAus() {
	if (get_the_author_meta('user_firstname') == '') {
		the_author();
	} else {
  		if (get_the_author_meta('user_url') != '') {
 			echo '<a href="' . get_the_author_meta('user_url') . '">';
			}

		echo the_author_meta('user_firstname') . ' ';
		echo the_author_meta('user_lastname');
		if (get_the_author_meta('user_url') != '') {
			echo "</a>";
		}
	}
}
# --------------------------------------------------------------------





?>


