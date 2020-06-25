@extends('adm_theme::layouts.app')
@section('content')
	
  
  {{--  
	preso da github da completare e valutare

  	--}}

<form class="js-add-repo-access-form" action="/laraxot/base_foodm/settings/add_team" accept-charset="UTF-8" method="post">
	<input name="utf8" type="hidden" value="&#x2713;" />
	<input type="hidden" name="authenticity_token" value="NMs4I2O7I69rtqfGGBSrxvvGIk1BUpJakTR3vpY7krWYZXA5ZteI6RVa/XZ9rvlvbADHfG7l2LKF0A2UKXrCgA==" />
	<div class="access-form-wrapper add-team-form">
		<details class="select-menu details-reset details-overlay">
			<summary class="btn btn-sm select-menu-button">
				Add a team
			</summary>
			<details-menu class="select-menu-modal position-absolute" style="z-index: 99">
				<div class="select-menu-header">
					<span class="select-menu-title">Choose a team</span>
				</div>
				<div class="select-menu-filters">
					<div class="select-menu-text-filter">

						<remote-input {{-- src="/orgs/laraxot/teams/autocomplete" --}}  src="/test.php" aria-owns="repo-team-filter-results">
							<input type="text" id="search-teams" class="form-control" aria-label="Search for a team" autofocus>
						</remote-input>
					</div>
				</div>
				<div class="select-menu-list" id="repo-team-filter-results">
				</div>
			</details-menu>
		</details>
	</div>
	<div class="access-flash flash flash-error error js-repo-access-error d-none"></div>
</form>  
<hr/><hr/><hr/><hr/><hr/><hr/><hr/>

	example-component[<example-component></example-component>]
  	date-component[<date-component></date-component>]
  	rating comp[<rating-component></rating-component>]
    <v-row justify="center">
      <v-date-picker ></v-date-picker>
    </v-row>



@endsection