<?php







class modBoatEvents



{





	public static function getData2($params){



		$BoatEventsParams = array();



				$BoatEventsParams['article_id_1'] = $params->get( 'article_id_1' );

				$BoatEventsParams['article_id_2'] = $params->get( 'article_id_2' );

				

				$BoatEventsParams['title_1'] = $params->get( 'title_1' );

				$BoatEventsParams['title_2'] = $params->get( 'title_2' );

				

				$BoatEventsParams['month_1'] = $params->get( 'month_1' );

				$BoatEventsParams['month_2'] = $params->get( 'month_2' );

				

				$BoatEventsParams['date_1'] = $params->get( 'date_1' );

				$BoatEventsParams['date_2'] = $params->get( 'date_2' );

				

				$BoatEventsParams['year_1'] = $params->get( 'year_1' );

				$BoatEventsParams['year_2'] = $params->get( 'year_2' );

				

				$BoatEventsParams['article_excerpt_1'] = $params->get( 'article_excerpt_1' );

				$BoatEventsParams['article_excerpt_2'] = $params->get( 'article_excerpt_2' );

				

				$BoatEventsParams['show_category'] = $params->get( 'show_category' );

				

				$BoatEventsParams['category_title'] = $params->get( 'category_title' );

				

				

				

		return $BoatEventsParams;



	}





}





?>