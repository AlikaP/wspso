<h2>Korisnici</h2>
	<table class="table table-striped"> <?php $attributes = array('class' => 'form-horizontal'); ?>
	<tbody>
		<tr>
			<td>
			<div class="row">
				<div class="span6">
					<?php echo anchor('admin/user/edit', '<i class="icon-plus"></i> Add a user'); ?>
				</div>
			
			    <div class="span6">
			        <?php echo form_open();
									echo form_input('vrijednost_filtra'); 
								  	echo form_submit('submit', 'Filtriraj', 'class="btn btn-primary"'); 
								  echo form_close(); ?>
			    </div>

			    <div class="span6">
			       <?php echo form_open();
									echo form_input('vrijednost_search'); 
								  	echo form_submit('submit', 'Pretrazi', 'class="btn btn-primary"'); 
								  echo form_close(); ?>
			    </div>
  			</div>

			</td>
		</tr>
	</tbody>
	</table>





	<table class="table table-striped">
		<thead>
			<tr>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>

		<tbody>

<!--Popis korisnika (tj. njihovi mailovi)  -->
														<!--ako postoji korisnik... za svakog korisnika iz tablice 'users' ($this->data['users'] = $this->user_m->get();)-->	
<?php if(count($users_search)): foreach($users_search as $user): ?>	<!--iz tablice 'users' dohvatiti redove tj. pojedinačne korisnike ($user) -->
		<tr>											<!-- $users je NIZ OBJEKATA, a $user su ti objekti, članovi $users niza-->

<!--email-->		  <td><?php echo anchor('admin/user/show/' . $user->id, $user->name); ?></td>
											<!-- 'admin/user/edit/id'  >>>>>  edit($id) -->		
											<!-- $user->id je ono što se ispiše -->	

<!--gumb za edit-->	  <td><?php echo btn_edit('admin/user/edit/' . $user->id); ?></td>    <!--funkcije iz cms_helper-a -->


<!--gumb za delete--> <td><?php echo btn_delete('admin/user/delete/' . $user->id); ?></td> 
												<!-- $user->id == FETCH USER'S ID -->
												<!-- definirano u user_m.php  -->
		</tr>
<?php endforeach; ?>

<?php else: ?>
		<tr>
			<td colspan="3">We could not find any users.</td>
		</tr>
<?php endif; ?>	
		</tbody>

	</table>