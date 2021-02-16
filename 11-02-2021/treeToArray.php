<?php
/*
		farmer ==>	name,age,child
					Lawyer ==>	name,age,children
								Lawyer1,Lawyer2
					Doctor ==>	name,age,children
								Doctor1, Doctor2
					Politician ==>	name,age,children
								Politician1, Politician2
*/

// Tree to array conversion

$family = array(
				'farmer' => 
					array(
						'id' => 1,
						'parent_id' => 0,
						'name' => 'farmer',
						'age' => 56,
						'child'=>
							array(
								array(
									'lawyer'=>
										array(
											'id' => 2,
											'parent_id' => 1,
											'name' => 'Lawyer',
											'age' => 30,
											'child'=>
												array(
													array(
														'id' => 5,
														'parent_id' => 2,
														'name' => 'child1',
														'age' => 12
														),
													array(
														'id' => 6,
														'parent_id' => 2,
														'name' => 'child2',
														'age' => 7
														)
													)
											)
									),
									
									array(
										'Doctor' => 
											array(
												'id' => 3,
												'parent_id' => 1,
												'name' => 'Doctor',
												'age' => 34,
												'child'=> 
												array(
													array(
														'id' => 7,
														'parent_id' => 3,
														'name' => 'child1',
														'age' => 14
														),
													array(
														'id' => 8,
														'parent_id' => 3,
														'name' => 'child2',
														'age' => 10
														)
													)
												)
										),

									array(
										'Politician' => 
											array(
												'id' => 4,
												'parent_id' => 1,
												'name' => 'Politician',
												'age' => 30,
												'child' => 
													array(
														array(
															'id' => 9,
															'parent_id' => 4,
															'name' => 'child1',
															'age' => 5
															),
														array(
															'id' => 10,
															'parent_id' => 4,
															'name' => 'child2',
															'age'=>3
															)
														)
												)
										)
								)
							
								
						)
				);

// echo "<pre>";
// print_r($family);