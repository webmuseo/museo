<?php
class UrlsTableSeeder extends Seeder {
	public function run() {
		DB::table ( 'urls' )->delete ();
		
		$urls = array (
				array ( // 1
						'url' => 'imagen1.jpg',
						'tipo' => 'image' 
				),
				array ( // 2
						'url' => 'imagen2.jpg',
						'tipo' => 'image'
				),
				array ( // 3
						'url' => 'imagen3.jpg',
						'tipo' => 'image'
				) 
		)
		;
		
		DB::table ( 'urls' )->insert ( $urls );
		
		DB::table ( 'urls_entradas' )->delete ();
		
		$entradas_base = ( int ) DB::table ( 'entradas' )->first ()->id;
		$urls_base = ( int ) DB::table ( 'urls' )->first ()->id;
		
		$urls_entradas = array (
				array (
						'url_id' => $urls_base,
						'entrada_id' => $entradas_base 
				),
				array (
						'url_id' => $urls_base+1,
						'entrada_id' => $entradas_base+1
				),
				array (
						'url_id' => $urls_base+2,
						'entrada_id' => $entradas_base+2
				)
		);
		
		DB::table ( 'urls_entradas' )->insert ( $urls_entradas );
	}
}
