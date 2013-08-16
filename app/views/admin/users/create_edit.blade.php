@extends('site.layouts.default')

{{-- Content --}}
@section('content')
	<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
		</ul>
	<!-- ./ tabs -->

	{{-- Create User Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($user)){{ URL::to('admin/users/' . $user->id . '/edit') }}@endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- username -->
				<div class="control-group {{{ $errors->has('username') ? 'error' : '' }}}">
					<label class="control-label" for="username">Username</label>
					<div class="controls">
						<input type="text" name="username" id="username" value="{{{ Input::old('username', isset($user) ? $user->username : null) }}}" />
						{{{ $errors->first('username', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ username -->

				<!-- Email -->
				<div class="control-group {{{ $errors->has('email') ? 'error' : '' }}}">
					<label class="control-label" for="email">Email</label>
					<div class="controls">
						<input type="text" name="email" id="email" value="{{{ Input::old('email', isset($user) ? $user->email : null) }}}" />
						{{{ $errors->first('email', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ email -->

				<!-- Password -->
				<div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
					<label class="control-label" for="password">Password</label>
					<div class="controls">
						<input type="password" name="password" id="password" value="" />
						{{{ $errors->first('password', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ password -->

				<!-- Password Confirm -->
				<div class="control-group {{{ $errors->has('password_confirmation') ? 'error' : '' }}}">
					<label class="control-label" for="password_confirmation">Password Confirm</label>
					<div class="controls">
						<input type="password" name="password_confirmation" id="password_confirmation" value="" />
						{{{ $errors->first('password_confirmation', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ password confirm -->

				<!-- Activation Status -->
				<div class="control-group {{{ $errors->has('activated') || $errors->has('confirm') ? 'error' : '' }}}">
					<label class="control-label" for="confirm">Activate User?</label>
					<div class="controls">
						@if ($mode == 'create')
							<select name="confirm" id="confirm">
								<option value="1"{{{ (Input::old('confirm', 0) === 1 ? ' selected="selected"' : '') }}}>{{{ Lang::get('general.yes') }}}</option>
								<option value="0"{{{ (Input::old('confirm', 0) === 0 ? ' selected="selected"' : '') }}}>{{{ Lang::get('general.no') }}}</option>
							</select>
						@else
							<select{{{ ($user->id === Confide::user()->id ? ' disabled="disabled"' : '') }}} name="confirm" id="confirm">
								<option value="1"{{{ ($user->confirmed ? ' selected="selected"' : '') }}}>{{{ Lang::get('general.yes') }}}</option>
								<option value="0"{{{ ( ! $user->confirmed ? ' selected="selected"' : '') }}}>{{{ Lang::get('general.no') }}}</option>
							</select>
						@endif
						{{{ $errors->first('confirm', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ activation status -->

				<!-- Groups -->
				<div class="control-group {{{ $errors->has('roles') ? 'error' : '' }}}">
	                <label class="control-label" for="roles">Roles</label>
	                <div class="controls">
		                <select name="roles[]" id="roles[]" >
		                        @foreach ($roles as $role)
									@if ($mode == 'create')
		                        		<option value="{{{ $role->id }}}"{{{ ( in_array($role->id, $selectedRoles) ? ' selected="selected"' : '') }}}>{{{ $role->name }}}</option>
		                        	@else
										<option value="{{{ $role->id }}}"{{{ ( array_search($role->id, $user->currentRoleIds()) !== false && array_search($role->id, $user->currentRoleIds()) >= 0 ? ' selected="selected"' : '') }}}>{{{ $role->name }}}</option>
									@endif
		                        @endforeach
						</select>

						<!-- span class="help-block">
							Select a group to assign to the user, remember that a user takes on the permissions of the group they are assigned.
						</span-->
	            	</div>
				</div>
				<!-- ./ groups -->
				<!-- date_of_joining -->
				<div class="control-group {{{ $errors->has('date_of_joining') ? 'error' : '' }}}">
					<label class="control-label" for="date_of_joining">Date of Joining</label>
					<div class="controls">
						<input type="text" name="date_of_joining" id="date_of_joining" value="{{{ Input::old('date_of_joining', isset($user) ? $user->date_of_joining : null) }}}" />
						{{{ $errors->first('date_of_joining', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ date_of_joining -->
				<!-- qualification -->
				<div class="control-group {{{ $errors->has('qualification') ? 'error' : '' }}}">
					<label class="control-label" for="qualification">Qualification</label>
					<div class="controls">
						<input type="text" name="qualification" id="qualification" value="{{{ Input::old('qualification', isset($user) ? $user->qualification : null) }}}" />
						{{{ $errors->first('qualification', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ qualification -->
				<!-- registration_number -->
				<div class="control-group {{{ $errors->has('registration_number') ? 'error' : '' }}}">
					<label class="control-label" for="registration_number">Registration #</label>
					<div class="controls">
						<input type="text" name="registration_number" id="registration_number" value="{{{ Input::old('registration_number', isset($user) ? $user->registration_number : null) }}}" />
						{{{ $errors->first('registration_number', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ registration_number -->
				<!-- telephone_number -->
				<div class="control-group {{{ $errors->has('telephone_number') ? 'error' : '' }}}">
					<label class="control-label" for="telephone_number">Telephone #</label>
					<div class="controls">
						<input type="text" name="telephone_number" id="telephone_number" value="{{{ Input::old('telephone_number', isset($user) ? $user->telephone_number : null) }}}" />
						{{{ $errors->first('telephone_number', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ telephone_number -->
			</div>
			<!-- ./ general tab -->

		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->
		<div class="control-group">
			<div class="controls">

				<div class="btn-group">
      				<a href="{{{ URL::to('admin/users') }}}" class="btn-cancel">
         			Cancel
      				</a>
    			</div>
				<button type="reset" class="btn">Reset</button>
				<button type="submit" class="btn btn-success">OK</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop