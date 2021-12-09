@extends('layout.main')

@section('title')
	Booking
@endsection

@section('content')
      <!------------------------------------------------------- 4th Section ------------------------------------------------------->
		<div class="hero">
			<div class="hero-body">
				<div class="container">
					<h1 class="title has-text-black is-2">ACCOUNT INFORMATION</h1>
					<h2 class="subtitle has-text-black has-text-weight-semibold">Fill up the need infomation to continue</h2>

					<!------------------------------------------------------- Form ------------------------------------------------------->
					<form method="" action="">
						<div class="container">
							<div class="columns">
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">Username:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																	<i class="fas fa-user"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="text" placeholder="Username" required="true" title="Username">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">First Name:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																	<i class="fas fa-user"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="text" placeholder="First Name" required="true" title="First Name">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">Middle Name:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																	<i class="fas fa-user"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="text" placeholder="Middle Name" required="true" title="Middle Name">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="columns">
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">Birthday:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																<i class="fas fa-calendar"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="date" placeholder="Birthday" required="true" title="Your Birthday">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">Age:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																	<i class="fas fa-user"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="number" placeholder="Age" required="true" title="Your Age">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="column"></div>
							</div>
							<h2 class="subtitle has-text-black has-text-weight-semibold">Address</h2>
							<div class="columns">
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">Street Name:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																	<i class="fas fa-map"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="text" placeholder="Street Name" required="true" title="Street Name">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">City:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																	<i class="fas fa-map"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="text" placeholder="City" required="true" title="City">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">Postal Code:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																	<i class="fas fa-hashtag"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="number" placeholder="Postal Code" required="true" title="Postal Code">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<h2 class="subtitle has-text-black has-text-weight-semibold">Contacts</h2>
							<div class="columns">
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">Phone Number:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																	<i class="fas fa-phone-alt"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="number" placeholder="Phone Number" required="true" title="Phone Number">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">Mobile Number:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																	<i class="fas fa-mobile"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="number" placeholder="Mobile Number" required="true" title="Mobile Number">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">Email Address:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																	<i class="fas fa-envelope"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="text" placeholder="Email Address" required="true" title="Email Address">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<h2 class="subtitle has-text-black has-text-weight-semibold">Incase of Emergency Please Contact the following:</h2>
							<div class="columns">
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">Full Name:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																	<i class="fas fa-user"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="text" placeholder="Full Name" required="true" title="Full Name">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">Mobile Number:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																	<i class="fas fa-mobile"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="number" placeholder="Mobile Number" required="true" title="Mobile Number">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="column">
									<div class="field">
										<div class="field-body">
											<div class="field is-expanded">
												<label class="label has-text-weight-semibold has-text-grey">Relationship:
													<div class="field has-addons">
														<p class="control">
															<a class="button is-static has-background-white">
																<span class="icon is-small is-left">
																	<i class="fas fa-user-friends"></i>
																</span>
															</a>
														</p>
														<p class="control is-expanded">
															<input class="input" type="text" placeholder="Relationship" required="true" title="Relationship">
														</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="columns is-mobile is-centered">
								<div class="column is-half">
									<input class="button has-background-grey has-text-light is-fullwidth" type="submit" value="NEXT">
								</div>
							</div>
						</div>
					</form>
					<!------------------------------------------------------- Form ------------------------------------------------------->
				</div>
			</div>
		</div>
		<!------------------------------------------------------- 4th Section ------------------------------------------------------->
@endsection