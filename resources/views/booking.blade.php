@extends('layout.main')

@section('title')
	Booking
@endsection

@section('content')
		<!------------------------------------------------------- 4th Section ------------------------------------------------------->
		<section class="hero is-light">
			<div class="hero-body">
				<div class="container">
					<div class="columns">
						<div class="column is-half is-offset-one-quarter">
							<!------------------------------------------------------- Form ------------------------------------------------------->
							<form class="box" action="" method="">
								<h1 class="title is-3 has-text-grey">BOOKING DETAILS</h1>
								<h2 class="subtitle is-6 has-text-weight-semibold has-text-black">Fill up the need infomation to continue</h2>
								<label class="label has-text-weight-bold has-text-grey">Appointment Date</label>
								<div class="field has-addons">
									<p class="control">
										<a class="button is-static">
										    <span class="icon is-small is-left">
										      	<i class="fas fa-calendar"></i>
										    </span>
										</a>
									</p>
									<p class="control ">
										<input class="input" type="date" placeholder="Select Date" required="true" title="Username">
									</p>
								</div>
								<br>
								<div class="card">
									<header class="card-header is-shadowless has-background-light">
										<p class="card-header-title">Morning</p>
									</header>
									<div class="card-content">
									    <div class="content has-text-black">
									    	<div class="columns">
									    		<div class="column has-text-centered">
									    			<label class="radio is-size-7">
												    	<input type="radio" name="question" required="true">
												    	<span class="icon is-small">
													    	<i class="fas fa-clock"></i>
													  	</span>
												    	<span>08:30 AM</span>
												    </label>
									    		</div>
									    		<div class="column has-text-centered">
									    			<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
													    	<i class="fas fa-clock"></i>
														</span>
														<span>09:00 AM</span>
												    </label>
									    		</div>
									    		<div class="column has-text-centered">
									   				<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>09:30 AM</span>
													</label>
									    		</div>
									    		<div class="column has-text-centered">
													<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>10:00 AM</span>
													</label>
									    		</div>
									    	</div>
									    	<div class="columns">
									    		<div class="column has-text-centered">
									    			<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>10:30 AM</span>
												    </label>
									    		</div>
									    		<div class="column has-text-centered">
									    			<label class="radio is-size-7">
												    	<input type="radio" name="question" required="true">
												    	<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
												    	<span>11:00 AM</span>
												    </label>
									    		</div>
									    		<div class="column has-text-centered">
													<label class="radio is-size-7">
												    	<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>11:30 AM</span>
													</label>
									    		</div>
												<div class="column has-text-centered">
													<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>12:00 AM</span>
													</label>
												</div>
									    	</div>
									    </div>
									</div>
								</div>
								<br>
								<div class="card">
									<header class="card-header is-shadowless has-background-light">
										<p class="card-header-title">Evening</p>
									</header>
									<div class="card-content">
										<div class="content has-text-black">
											<div class="columns">
									    		<div class="column has-text-centered">
									    			<label class="radio is-size-7">
												    	<input type="radio" name="question" required="true">
												    	<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
												 		<span>12:30 NN</span>
													</label>
									    		</div>
									    		<div class="column has-text-centered">
									    			<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>01:00 PM</span>
													</label>
									    		</div>
									    		<div class="column has-text-centered">
									    			<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>01:30 PM</span>
													</label>
									    		</div>
									    		<div class="column has-text-centered">
									    			<label class="radio is-size-7">
												    	<input type="radio" name="question" required="true">
												    	<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
												    	<span>02:00 PM</span>
												    </label>
									    		</div>
											</div>
											<div class="columns">
												<div class="column has-text-centered">
													<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>02:30 PM</span>
													</label>
												</div>
												<div class="column has-text-centered">
													<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>03:00 PM</span>
													</label>
												</div>
												<div class="column has-text-centered">
													<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>03:30 PM</span>
													</label>
												</div>
												<div class="column has-text-centered">
													<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>04:00 PM</span>
													</label>
												</div>
											</div>
											<div class="columns">
												<div class="column has-text-centered">
													<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>04:30 PM</span>
													</label>
												</div>
												<div class="column has-text-centered">
													<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>05:00 PM</span>
													</label>
												</div>
												<div class="column has-text-centered">
													<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>05:30 PM</span>
													</label>
												</div>
												<div class="column has-text-centered">
													<label class="radio is-size-7">
														<input type="radio" name="question" required="true">
														<span class="icon is-small">
															<i class="fas fa-clock"></i>
														</span>
														<span>06:00 PM</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="card">
									<header class="card-header is-shadowless has-background-light">
										<p class="card-header-title">Service Type</p>
									</header>
									<div class="card-content">
										<div class="content has-text-black">
											<div class="field">
												<label class="label has-text-grey">Service Type</label>
													<div class="control">
												    <div class="select is-fullwidth">
														<select>
															<option>Choose Here</option>
															<option>In-lounge</option>
															<option>Home Service</option>
														</select>
													</div>
												</div>
											</div>
											<div class="field">
												<label class="label has-text-grey">Service Category</label>
												<div class="control">
													<div class="select is-fullwidth">
														<select>
															<option>Choose Here</option>
															<option>LASH</option>
															<option>WAX</option>
															<option>NAILS</option>
															<option>FOOT SPA</option>
															<option>PARAFFIN</option>
															<option>KIDDIE</option>
														</select>
													</div>
												</div>
											</div>
											<div class="field">
												<label class="label has-text-grey">Specific Service</label>
													<div class="control">
														<div class="select is-fullwidth">
															<select>
																<option>Choose Here</option>
															</select>
														</div>
													</div>
												</div>
												<div class="control">
													<input class="button has-background-grey has-text-white is-fullwidth" type="submit" value="Next">
												</div>
									    	</div>
									    </div>
									</div>
								</div>
							</form>
							<!------------------------------------------------------- Form ------------------------------------------------------->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!------------------------------------------------------- 4th Section ------------------------------------------------------->
@endsection