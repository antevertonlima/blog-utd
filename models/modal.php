<?php
	function geraModal($header, $body, $id_div){
		global $index;
		echo '
			<!-- Modal -->
		    <div id="'.$id_div.'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="myModalLabel">'.$header.'</h3>
		    </div>
		    <div class="modal-body">';
		include_once ($body);
		echo '
		    </div>
		    <div class="modal-footer">
		    <br />
		    </div>
		    </div>
		';
	}