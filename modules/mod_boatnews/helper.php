<?php



class modNewsArticles

{


	public static function getData2($params){

		$BoatNewsParams = array();

				$BoatNewsParams['article_id_1'] = $params->get( 'article_id_1' );
				$BoatNewsParams['article_id_2'] = $params->get( 'article_id_2' );
				
				$BoatNewsParams['title_1'] = $params->get( 'title_1' );
				$BoatNewsParams['title_2'] = $params->get( 'title_2' );
				
				$BoatNewsParams['month_1'] = $params->get( 'month_1' );
				$BoatNewsParams['month_2'] = $params->get( 'month_2' );
				
				$BoatNewsParams['date_1'] = $params->get( 'date_1' );
				$BoatNewsParams['date_2'] = $params->get( 'date_2' );
				
				$BoatNewsParams['year_1'] = $params->get( 'year_1' );
				$BoatNewsParams['year_2'] = $params->get( 'year_2' );
				
				$BoatNewsParams['article_excerpt_1'] = $params->get( 'article_excerpt_1' );
				$BoatNewsParams['article_excerpt_2'] = $params->get( 'article_excerpt_2' );
				
				$BoatNewsParams['show_category'] = $params->get( 'show_category' );
				
				$BoatNewsParams['category_title'] = $params->get( 'category_title' );
				
				
				
		return $BoatNewsParams;

	}


}


?>