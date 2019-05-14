@extends('layouts.app')

@section('content')


<form method="POST" action="{{action('genreformuserController@store')}}">
	@csrf


	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Choose Your Genres of Music</div>
					<div class="card-body">
						<div class='row'>
							<div class="col-md-3">
								<input type="checkbox" id="hiphop" name="hiphop" value="{{ old('0') }}">
								<label for="hiphop">{{ __('Hip Hop') }} </label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="reggae" name="reggae" value="{{ old('0') }}">
								<label for="reggae">{{ __('Reggae') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="live" name="live" value="{{ old('0') }}">
								<label for="live">{{ __('Live Music') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="country" name="country" value="{{ old('0') }}">
								<label for="country"> {{ __('Country') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="poetry" name="poetry" value="{{ old('0') }}">
								<label for="poetry">{{ __('Poetry') }} </label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="rock" name="rock" value="{{ old('0') }}">
								<label for="rock">{{ __('Rock') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="techno" name="techno" value="{{ old('0') }}">
								<label for="techno">{{ __('Techno') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="dubstep" name="dubstep" value="{{ old('0') }}">
								<label for="dubstep">{{ __('Dubstep') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="cover" name="cover" value="{{ old('0') }}">
								<label for="cover">{{ __('Cover Bands') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="burlesque" name="burlesque" value="{{ old('0') }}">
								<label for="burlesque">{{ __('Burlesque') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="karaoke" name="karaoke" value="{{ old('0') }}">
								<label for="karaoke">{{ __('Karaoke') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="revues" name="revues" value="{{ old('0') }}">
								<label for="revues">{{ __('Revues') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="local" name="local" value="{{ old('0') }}">
								<label for="local">{{ __('Local Artists') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="rb" name="rb" value="{{ old('0') }}">
								<label for="rb">{{ __('R&B') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="pop" name="pop" value="{{ old('0') }}">
								<label for="pop">{{ __('Pop') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="jazz" name="jazz" value="{{ old('0') }}">
								<label for="jazz">{{ __('Jazz') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="blues" name="blues" value="{{ old('0') }}">
								<label for="blues">{{ __('Blues') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="funk" name="funk" value="{{ old('0') }}">
								<label for="funk">{{ __('Funk') }}</label>
							</div>

							<div class="col-md-3">
								<input type="checkbox" id="latin" name="latin" value="{{ old('0') }}">
								<label for="latin">{{ __('Latin') }}</label>
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