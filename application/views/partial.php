

<div class="row">
			<div class="col-xs-4">
				<form role="form" action="notes/create" method="post">
					
					
					<label><input type="text" name="title"  class="form-control" value="" placeholder="write note title here"></label>
					<button type="submit" class="btn btn-default" value="Add Note">Create Note</button>
					
				</form>
			</div>
		</div>


<?php

			



				foreach( $notes as $note) {
					?>
					<div class="note">

						<a id="to-delete" href="/notes/delete/<?=$note['id']?>"><span class="glyphicon glyphicon-remove"></span></a>
						
						<h4><?= $note['title'] ?> </h4>
						<form action="notes/update" method="post">
							<textarea placeholder="Enter description here" name="description"><?=$note['description']?></textarea>
							<input type="hidden" name="id" value="<?= $note['id'] ?>">
							<!-- <input type="hidden" name="udpate" value="update">
							<input type="submit" value="update"> -->
						</form>
					</div>
					<?php
				}



			?>

