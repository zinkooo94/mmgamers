<?php header ('Content-type: text/html; charset=utf-8'); ?>
<meta charset="UTF-8">
<?php
	 foreach($matches as $match)
	 {
		$data[]=array
		(
			'match_id'=>$match['Match']['id'],
			
			'match_play_time'=>$match['Match']['play_time'],
			'match_play_date'=>$match['Match']['play_date'],
			'match_place'=>$match['Match']['play_field'],
			'match_body'=>'<pre>'.$match['Match']['body'].'</pre>'.'<br>',


			'team_a_logo'=>$match['TeamA']['logo'],
			'team_a_title'=>$match['TeamA']['title'],
			'team_b_logo'=>$match['TeamB']['logo'],
			'team_b_title'=>$match['TeamB']['title'],

			'league_logo'=>$match['League']['logo'],
			'league_title'=>$match['League']['title'],

			'content_type_id'=>$match['ContentType']['id'],
			'content_type_title'=>$match['ContentType']['title'],

		);
		
	}
	//'match_play_position_image'=>$match['Match']['match_play_position_image'],
	echo json_encode($data,JSON_UNESCAPED_UNICODE);
	//'match_title'=>$match['Match']['title'],
?>