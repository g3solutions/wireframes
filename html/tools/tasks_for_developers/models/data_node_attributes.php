<?php
$data_nodes_attributes = [
	0 => [
		'name' => '2 Level ACDF with Decompression',
		'attributes' => [
			'body_part' => 'spine',
			'sacral_lumbar_thoracic_or_cervical' => 'cervical',
			'fusion_number_of_levels' => 2,
			'is_repeatable' => 'no',
			'soft_tissue_joints_or_bone' => 'joints',
		],
	],
	1 => [
		'name' => '3 Level TLIF',
		'attributes' => [
			'body_part' => 'spine',
			'sacral_lumbar_thoracic_or_cervical' => 'lumbar',
			'fusion_number_of_levels' => '3',
			'is_repeatable' => 'no',
			'soft_tissue_joints_or_bone' => 'joints',
		],
	],
	2 => [
		'name' => '2 Level Cervical Ablation',
		'attributes' => [
			'body_part' => 'spine',
			'injection_number_of_levels' => '2',
			'left_right_or_bilateral' => 'left',
			'sacral_lumbar_thoracic_or_cervical' => 'cervical',
			'is_repeatable' => 'yes',
			'soft_tissue_joints_or_bone' => 'nerves',
		],
	],
	3 => [
		'name' => 'Epidural Steroid Injection - Bi-lateral 2 Level',
		'attributes' => [
			'body_part' => 'spine',
			'injection_number_of_levels' => '2',
			'left_right_or_bilateral' => 'bilateral',
			'is_repeatable' => 'yes',
			'soft_tissue_joints_or_bone' => 'nerves',
		],
	],
	4 => [
		'name' => 'Physical Therapy - 1 Hour Session',
		'attributes' => [
			'is_repeatable' => 'yes',
			'soft_tissue_joints_or_bone' => 'soft_tissue',
		],
	],
	5 => [
		'name' => 'Chiropractic Adjustment',
		'attributes' => [
			'is_repeatable' => 'yes',
			'soft_tissue_joints_or_bone' => 'bone',
		],
	],
	6 => [
		'name' => 'Total Knee Arthroplasty',
		'attributes' => [
			'body_part' => 'knee',
			'left_right_or_bilateral' => 'right',
			'is_repeatable' => 'no',
			'soft_tissue_joints_or_bone' => 'joints',
		],
	]
];