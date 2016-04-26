<?php

namespace App\Controllers;

use App\Libs\View;
use App\Models\Colectivo;

class ColectivoController{

	public function index(){
		$colectivo = new Colectivo();
		$tableCol = $colectivo->find();

		View::render('page/colectivo',compact('tableCol'));
	}

	public function getRuta(){
		$oficina = $_POST['oficina'] ?? null;

		if($oficina != null){
			$colectivo = new Colectivo();
			$tableCol = $colectivo->find($_POST['oficina']);

			foreach ($tableCol as $key => $value) {
				echo "<tr>
					<td>".$value['origen']."</td>
					<td>".$value['destino']."</td>
					<td>$".$value['tarifa'].".00</td>
				</tr>";
			}
		}
	}

}