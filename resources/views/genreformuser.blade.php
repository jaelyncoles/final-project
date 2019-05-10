@extends('layouts.app')

@section('content')


<form method="POST" action="{{ route('home') }}">
	@csrf


	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Choose Your Genres of Music</div>
					<div class="card-body">
						<div class='row'>
							<div class="col-md-3">
								<input type="checkbox" id="1" name="hiphop" value="1">
								<label for="hiphop">Hip-Hop </label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="2" name="reggae" value="1">
								<label for="reggae">Reggae</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="3" name="live" value="1">
								<label for="live">Live Music</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="4" name="country" value="1">
								<label for="country"> Country</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="5" name="poetry" value="1">
								<label for="poetry">Poetry </label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="6" name="rock" value="1">
								<label for="rock">Rock</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="7" name="techno" value="1">
								<label for="techno">Techno</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="8" name="dubstep" value="1">
								<label for="dubstep">Dubstep</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="9" name="coverband" value="1">
								<label for="coverband">Cover Bands</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="10" name="burlesque" value="1">
								<label for="burlesque">Burlesque</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="11" name="karaoke" value="1">
								<label for="karaoke">Karaoke</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="12" name="revues" value="1">
								<label for="revues">Revues</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="13" name="local" value="1">
								<label for="local">Local Artists</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="14" :name="rb" value="1">
								<label for="rb">R&B</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="15" name="pop" value="1">
								<label for="pop">Pop</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="16" name="jazz" value="1">
								<label for="jazz">Jazz</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="17" name="blues" value="1">
								<label for="blues">Blues</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="funk" name="funk" value="1">
								<label for="funk">Funk</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="genre.id" name="latin" value="1">
								<label for="latin">Latin</label>
							</div>
						</div>
						<div class="form-group mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">Next</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</form>

@endsection