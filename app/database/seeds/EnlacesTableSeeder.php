<?php
class EnlacesTableSeeder extends Seeder {
	public function run() {
		DB::table ( 'enlaces' )->delete ();
		$carpetas_base = ( int ) DB::table ( 'carpetas' )->first ()->id;
		$urls = array (
				array ( // 1
						'nombre'=> 'Imagen de prueba 1',
						'carpeta_id' => $carpetas_base,
						'url' => 'imagen1.jpg',
						'tipo' => 'image' 
				),
				array ( // 2
						'nombre'=> 'Imagen de prueba 2',
						'carpeta_id' => $carpetas_base,
						'url' => 'imagen2.jpg',
						'tipo' => 'image'
				),
				array ( // 3
						'nombre'=> 'Imagen de prueba 3',
						'carpeta_id' => $carpetas_base,
						'url' => 'imagen3.jpg',
						'tipo' => 'image'
				) 
		)
		;
		
		DB::table ( 'enlaces' )->insert ( $urls );
		
		DB::table ( 'enlaces_entradas' )->delete ();
		
		$entradas_base = ( int ) DB::table ( 'entradas' )->first ()->id;
		$urls_base = ( int ) DB::table ( 'enlaces' )->first ()->id;
		
		$urls_entradas = array (
				array (
						'enlace_id' => $urls_base,
						'entrada_id' => $entradas_base 
				),
				array (
						'enlace_id' => $urls_base+1,
						'entrada_id' => $entradas_base+1
				),
				array (
						'enlace_id' => $urls_base+2,
						'entrada_id' => $entradas_base+2
				)
		);
		
		DB::table ( 'enlaces_entradas' )->insert ( $urls_entradas );
	}
}
