<!-- Mengambil input user dari form booking untuk transfer ke database -->
<div class="container-fluid">	
	<form action="" id="manage-check">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control"required>
		</div>
		<div class="form-group">
			<label for="contact">Contact #</label>
			<input type="text" name="contact" id="contact" class="form-control"required>
		</div>
		<div class="form-group">
			<label for="date_in">Check-in Date</label>
			<input type="date" name="date_in" id="date_in" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="date_in_time">Check-in Date</label>
			<input type="time" name="date_in_time" id="date_in_time" class="form-control"required>
		</div>
		<div class="form-group">
			<label for="days">Days of Stay</label>
			<input type="number" min ="1" name="days" id="days" class="form-control" required>
		</div>
	</form>
</div>